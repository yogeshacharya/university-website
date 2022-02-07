<?php

namespace App\Http\Controllers\Admin;

use App\Models\HumanResource;
use App\Base\Traits\ParentData;
use App\Http\Requests\HumanResourceRequest;
use App\Http\Controllers\Admin\BaseCrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class HumanResourceCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class HumanResourceCrudController extends BaseCrudController
{
    use ParentData;
    public function setup()
    {
        CRUD::setModel(\App\Models\HumanResource::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/human-resource');
        CRUD::setEntityNameStrings('human resource', 'human resources');
        $this->setUpLinks(['edit']);
        $this->data['script_js']= $this->getScriptJs();
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    public function getScriptJs(){
        return "
        $(document).ready(function(){
            if(parseInt($('#type').val()) == '2'){
                $('#designation').val(null);
                $('.designation').hide();
            }
            $('.type_id').change(function() {
                if(parseInt($('#type').val()) == '2'){
                    $('#designation').val(null);
                    $('.designation').hide();
                }else{
                    $('.designation').show();
                }
            });
        });
        ";
    }
    public function tabLinks()
    {
        return $this->setHumanResourceTabs();
    }

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
                'label' => 'Email',
                'type' => 'text',
                'name' => 'email',
            ],
            [
                'label' => 'Department',
                'type' => 'select',
                'name' => 'department_type_id',
                'entity' => 'departmentType',
                'attribute' => 'title',
                'model' => "App\Models\MstDepartmentType",
                
            ],
            [
                'label' => 'Phone',
                'type' => 'text',
                'name' => 'phone',
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
        $this->crud->setValidation(HumanResourceRequest::class);
        $arr = [
            [
                'name' => 'code',
                'type' => 'text',
                'label' => 'Code',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4',
                ],
            ],
            [
                'label' => trans('common.type'),
                'type' => 'select_from_array',
                'name' => 'type',
                'options' => HumanResource::$HrType,
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4 type_id',
                ],
                'attributes'=>[
                    'id'=>'type'
                ]

            ],
            [
                'label' => 'Department',
                'type' => 'select2',
                'name' => 'department_type_id',
                'entity' => 'departmentType',
                'attribute' => 'title',
                'model' => 'App\Models\MstDepartmentType',
                'default' => 0,
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4',
                ]
            ],
            [
                'label' => 'Name',
                'type' => 'text',
                'name' => 'name',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4',
                ]
            ],
            [
                'label' => 'Designation',
                'type' => 'text',
                'name' => 'designation',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4 designation',
                ],
                'attributes'=>[
                    'id'=>'designation'
                ],
            ],
            [
                'label' => 'Email',
                'type' => 'email',
                'name' => 'email',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4',
                ]
            ],
            [
                'name' => 'phone',
                'type' => 'text',
                'label' => 'Phone',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4',
                ],
            ],
            [
                'name' => 'address',
                'type' => 'text',
                'label' => 'Address',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4',
                ],
            ],
            [
                'name' => 'degree',
                'type' => 'text',
                'label' => 'Degree',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4',
                ],
            ],
            [
                'name' => 'institute',
                'type' => 'text',
                'label' => 'Institute',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4',
                ],
            ],
            [
                'name' => 'description',
                'type' => 'ckeditor',
                'label' => 'Description',
            ],
            [
                'name' => 'file_upload',
                'type' => 'image',
                'label' => 'Image',
                'disk' => 'uploads', 
                'crop' => true, 
                'aspect_ratio' => 1,
                'upload' => true,
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
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
