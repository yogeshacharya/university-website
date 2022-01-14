<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use App\Models\Category;
use App\Http\Requests\EventRequest;
use App\Http\Controllers\Admin\BaseCrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class EventCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class EventCrudController extends BaseCrudController
{
    public function setup()
    {
        CRUD::setModel(\App\Models\Event::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/event');
        CRUD::setEntityNameStrings('event', 'events');
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
                'label' => 'Name',
                'type' => 'text',
                'name' => 'name',
            ],
            [
                'label' => 'Date',
                'type' => 'date',
                'name' => 'date',
            ],
            [
                'label' => 'Time',
                'type' => 'text',
                'name' => 'time',
            ],
            [
                'label' => 'Location',
                'type' => 'text',
                'name' => 'location',
            ],
            [
                'name' => 'file_upload',
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
        $this->crud->setValidation(EventRequest::class);
        $arr = [
            [
                'label' => 'Name',
                'type' => 'text',
                'name' => 'name',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ]
            ],
            [
                'label' => "Category",
                'type' => 'select2',
                'name' => 'category_id',
                'entity' => 'category',
                'attribute' => 'name',
                'model' => 'App\Models\Category',
                // 'default' => 5,
                // optional
                'options' => (function ($query) {
                    return Category::query()->where('deleted_uq_code',1)->where('menu_id',11)->get();
                }),
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3',
                ]
            ],
            [
                'label' => 'Date',
                'type' => 'date',
                'name' => 'date',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ]
            ],
            [
                'label' => 'Time',
                'type' => 'text',
                'name' => 'time',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ]
            ],
            [
                'label' => 'Location',
                'type' => 'text',
                'name' => 'location',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ]
            ],
            [
                'name' => 'description',
                'type' => 'ckeditor',
                'label' => 'Description',
            ],
            [
                'name' => 'content',
                'type' => 'ckeditor',
                'label' => 'Content',
            ],
            [
                'name' => 'file_upload',
                'type' => 'image',
                'label' => 'Image',
                'disk' => 'uploads', 
                'upload' => true,
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4',
                ],
                
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
