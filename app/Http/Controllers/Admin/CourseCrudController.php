<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\FeeType;
use App\Http\Requests\CourseRequest;
use App\Http\Controllers\Admin\BaseCrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CourseCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CourseCrudController extends BaseCrudController
{
    public function setup()
    {
        CRUD::setModel(\App\Models\Course::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/course');
        CRUD::setEntityNameStrings('courses', 'courses');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name');
        // CRUD::column('course_structure');
        // CRUD::column('file_upload');
        CRUD::column('payment_plan');
        CRUD::column('display_order');
        CRUD::column('is_active');

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
        CRUD::setValidation(CourseRequest::class);
        $arr = [
            [
                'label' => trans('common.display_order').' (optional)',
                'type' => 'number',
                'name' => 'display_order',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4',
                ]
            ],
            [
                'label' => trans('Name'),
                'type' => 'text',
                'name' => 'name',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4',
                ]
            ],
            [
                'label' => trans('Payment Plan'),
                'type' => 'text',
                'name' => 'payment_plan',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4',
                ]
            ],
            [
                'name' => 'fieldset_open',
                'type' => 'custom_html',
                'value' => '<fieldset>',
            ],
            [
                'name' => 'legend1',
                'type' => 'custom_html',
                'value' => '<legend>Course Structure</legend><hr class="m-0">',
            ],
            [
                'label' => trans('Levels'),
                'type' => 'text',
                'name' => 'levels',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3',
                ]
            ],
            [
                'label' => trans('Start On'),
                'type' => 'date',
                'name' => 'start_on',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3',
                ]
            ],
            [
                'label' => trans('Duration'),
                'type' => 'number',
                'name' => 'duration',
                'suffix'=>'Hours',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3',
                ]
            ],
            [
                'label' => trans('Class Size'),
                'type' => 'number',
                'name' => 'class_size',
                'suffix'=>'Person',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3',
                ]
            ],
            [
                'label' => trans('Lectures'),
                'type' => 'number',
                'name' => 'lectures',
                'suffix'=>'Session',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3',
                ]
            ],
            [
                'label' => trans('Time'),
                'type' => 'text',
                'name' => 'time',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3',
                ]
            ],
            [
                'label' => trans('Description'),
                'type' => 'ckeditor',
                'name' => 'description',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-12',
                ]
            ],
            [
                'label' => trans('Entry Requirement'),
                'type' => 'ckeditor',
                'name' => 'entry_requirement',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-12',
                ]
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
                'name'  => 'course_structure',
                'label'   => trans('Course Structure'),
                'type'  => 'repeatable',
                'fields' => [
                                [
                                    'name'    => 'code',
                                    'type'    => 'text',
                                    'label'   => trans('Code'),
                                    'wrapper' => ['class' => 'form-group col-md-4'],
                                    'attributes' => ['maxlength' =>'50'],
                                    'required' => true
                                ],
                                [
                                    'name'    => 'course_title',
                                    'type'    => 'text',
                                    'label'   => trans('Course Title'),
                                    'wrapper' => ['class' => 'form-group col-md-4'],
                                    'attributes' => ['maxlength' =>'50'],
                                    'required' => true
                                ],
                                [
                                    'name'    => 'credit',
                                    'type'    => 'text',
                                    'label'   => trans('Credit'),
                                    'wrapper' => ['class' => 'form-group col-md-4'],
                                    'attributes' => ['maxlength' =>'50'],
                                    'required' => true
                                ],
                    ],
                    'new_item_label'  => 'New', // customize the text of the button
            ],


            [  
                'name'  => 'courses_fee',
                'label'   => trans('Course Fee'),
                'type'  => 'repeatable',
                'fields' => [
                                [
                                    'name' => 'fee_type_id',
                                    'type' => 'select2',
                                    'entity'=>'feeTypeEntity',
                                    'attribute' => 'title',
                                    'model'=>FeeType::class,
                                    'label' => trans('Fee Type'),
                                    'wrapper' => [
                                        'class' => 'form-group col-md-4',
                                    ],
                                ],
                                [
                                    'name'    => 'total_fee',
                                    'type'    => 'text',
                                    'label'   => 'Total Fee',
                                    'wrapper' => ['class' => 'form-group col-md-4'],
                                    'attributes' => ['maxlength' =>'50'],
                                    'required' => true
                                ],
                                [
                                    'name'    => 'description',
                                    'type'    => 'text',
                                    'label'   => trans('Description'),
                                    'wrapper' => ['class' => 'form-group col-md-4'],
                                    'attributes' => ['maxlength' =>'100'],
                                ],
                    ],
                    'new_item_label'  => 'New', // customize the text of the button
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
