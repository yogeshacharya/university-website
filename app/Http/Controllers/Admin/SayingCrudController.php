<?php

namespace App\Http\Controllers\Admin;

use App\Models\Saying;
use App\Http\Requests\SayingRequest;
use App\Http\Controllers\Admin\BaseCrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SayingCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SayingCrudController extends BaseCrudController
{
    public function setup()
    {
        CRUD::setModel(\App\Models\Saying::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/saying');
        CRUD::setEntityNameStrings('saying', 'sayings');
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
                'label' => 'Said By',
                'type' => 'text',
                'name' => 'said_by',
            ],
            [
                'label' => "Saying",
                'type' => 'text',
                'name' => 'saying',
            ],
            [
                'name' => 'image',
                'type' => 'image',
                'label' => "Image",
                'disk'=>'uploads',
            ]
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
        $this->crud->setValidation(SayingRequest::class);
        $arr = [
            [
                'label' => 'Said By',
                'type' => 'text',
                'name' => 'said_by',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ]

            ],
            [
                'name' => 'saying',
                'type' => 'ckeditor',
                'label' => 'Saying',
            ],
            [
                'name' => 'image',
                'type' => 'image',
                'label' => 'Image',
                'disk' => 'uploads', 
                'upload' => true,
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4',
                ],
            ],
            [
                'label' => 'Said By (If he/she is registered in this software)',
                'type' => 'select2',
                'name' => 'human_resource_id',
                'entity' => 'humanResource',
                'attribute' => 'name',
                'model' => 'App\Models\HumanResource',
                'default' => 0,
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3',
                ]
            ],
            [
                'label' => trans('common.display_order').' (optional)',
                'type' => 'number',
                'name' => 'display_order',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3',
                ]
            ],
        ];
        $this->crud->addFields(array_filter($arr));
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
