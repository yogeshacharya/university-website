<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Http\Requests\MenuRequest;
use App\Http\Controllers\Admin\BaseCrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MenuCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MenuCrudController extends BaseCrudController
{
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Menu::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/menu');
        CRUD::setEntityNameStrings('menu', 'menus');
        $this->data['script_js']= $this->getScriptJs();


    }
    public function getScriptJs(){
        return "
        $(document).ready(function(){
            $('.parent_id').hide();
            $('.type_id').change(function() {
                $('.parent_id').hide();
                if($('#type_id').val() == '0'){
                }else{
                    $('.parent_id').show();
                }
            });
        });
        ";
    }
    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $cols = [
            $this->addRowNumber(),
            [
                'name'=>'display_order',
                'type'=>'number',
                'label' => trans('common.display_order'),
            ],
            [
                'label' => trans('common.title'),
                'type' => 'text',
                'name' => 'title',
            ],
            [
                'label' => trans('common.type'),
                'type' => 'boolean',
                'name' => 'type', // the db column for the foreign key
                'options'     => [
                    0 => trans('common.main_menu'),
                    1 => trans('common.sub_menu'),
                    2 => trans('common.second_level_sub_menu'),
                ],
            ],
            [
                'label' => trans('common.link'),
                'type' => 'text',
                'name' => 'link',
            ],
        ];
        $this->crud->addColumns($cols);  
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        $this->crud->setValidation(MenuRequest::class);
        
        $arr = [
            [
                'label' => trans('common.display_order').' (optional)',
                'type' => 'number',
                'name' => 'display_order',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3',
                ]
            ],
            [
                'label' => trans('common.type'),
                'type' => 'select_from_array',
                'name' => 'type_id',
                'options' => Menu::$menu_type,
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3 type_id',
                ],
                'attributes'=>[
                    'id'=>'type_id'
                ]

            ],
            [
                'name' => 'parent_id',
                'type' => "select2_from_ajax",
                'label' =>trans('common.parent_menu'),//just a label
                'model' =>  Menu::class,
                'entity' => 'parentMenu',//relatioship which is inside the model
                'attribute' => "title",//the field which is needed
                'data_source' => url("api/parent_menu/type_id"),//api/modelsmallname/tableid from which state is taken
                'placeholder' => 'First select menu type',
                'minimum_input_length' => 0,
                'dependencies' => ["type_id"],//id from which state is pulled
                'include_all_form_fields' => true,
                'wrapperAttributes' => [
                'class' => 'form-group col-md-3 parent_id',
                ],
                'attributes'=>[
                    'id'=>'parent_id'
                ],
            ],
            [
                'label' => trans('common.title'),
                'type' => 'text',
                'name' => 'title',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ]

            ],
            [
                'label' => trans('common.link'),
                'type' => 'text',
                'name' => 'link',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ]
            ],
        ];
        $this->crud->addFields(array_filter($arr));
        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
