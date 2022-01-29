<?php

namespace App\Http\Controllers\Admin;

use App\Models\Scholarship;
use App\Http\Requests\ScholarshipRequest;
use App\Http\Controllers\Admin\BaseCrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ScholarshipCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ScholarshipCrudController extends BaseCrudController
{
    public function setup()
    {
        CRUD::setModel(\App\Models\Scholarship::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/scholarship');
        CRUD::setEntityNameStrings('scholarship', 'scholarships');
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
                'label' => "Description",
                'type' => 'text',
                'name' => 'description',
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
        $this->crud->setValidation(ScholarshipRequest::class);
        $arr = [
            [
                'label' => trans('common.title'),
                'type' => 'text',
                'name' => 'title',
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
                'name' => 'process',
                'type' => 'ckeditor',
                'label' => 'Application Proccess',
            ],
            [
                'name' => 'eligibility',
                'type' => 'ckeditor',
                'label' => 'Eligibility & selection criteria',
            ],
            [
                'name' => 'contact',
                'type' => 'ckeditor',
                'label' => 'Contact For Scholarship',
            ],
            [
                'name' => 'outcome',
                'type' => 'ckeditor',
                'label' => 'When will I know the outcome?',
            ],
            [
                'name'=>'application_open',
                'type'=>'date',
                'lable'=>'Application opan date'
            ],
            [
                'name'=>'application_close',
                'type'=>'date',
                'lable'=>'Application will close'
            ],
            [
                'name' => 'file_upload',
                'type' => 'image',
                'label' => 'Image',
                'disk' => 'uploads', 
                'crop' => true, 
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
