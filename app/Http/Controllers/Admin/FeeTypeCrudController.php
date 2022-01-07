<?php

namespace App\Http\Controllers\Admin;

use App\Models\FeeType;
use Prologue\Alerts\Facades\Alert;
use App\Http\Requests\FeeTypeRequest;
use App\Http\Controllers\Admin\BaseCrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class FeeTypeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class FeeTypeCrudController extends BaseCrudController
{
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\FeeType::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/fee-type');
        CRUD::setEntityNameStrings('Fee Type', 'Fee Type');
        $this->user = backpack_user();
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
                'label' => trans('fee.display_order'),
            ],
            [
                'label' => trans('fee.title'),
                'type' => 'text',
                'name' => 'title',
            ],
        ];
        $this->crud->addColumns($cols);   

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        $this->crud->setValidation(FeeTypeRequest::class);
        $arr = [
            [
                'label' => trans('fee.display_order').' (optional)',
                'type' => 'number',
                'name' => 'display_order',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3',
                ]

            ],
            [
                'label' => trans('fee.title'),
                'type' => 'text',
                'name' => 'title',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-8',
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
