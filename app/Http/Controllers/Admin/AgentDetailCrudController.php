<?php

namespace App\Http\Controllers\Admin;

use App\Models\AgentDetail;
use App\Base\Traits\ParentData;
use App\Http\Requests\AgentDetailRequest;
use App\Http\Controllers\Admin\BaseCrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AgentDetailCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AgentDetailCrudController extends BaseCrudController
{

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    use ParentData;
    public function setup()
    {
        CRUD::setModel(\App\Models\AgentDetail::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/agent-detail');
        CRUD::setEntityNameStrings('Agent Detail', 'Agent Detail');
        $this->setUpLinks(['edit']);
    }

    public function tabLinks()
    {
        return $this->setAgentDetailsTabs();
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
                'label' => 'Agent Name',
                'type' => 'text',
                'name' => 'agent_name',
            ],
            [
                'label' => 'Email',
                'type' => 'text',
                'name' => 'email',
            ],
            [
                'label' => 'Phone',
                'type' => 'text',
                'name' => 'phone',
            ],
            [
                'label' => 'Website',
                'type' => 'text',
                'name' => 'Website',
            ],
            [
                'label' => 'City',
                'type' => 'text',
                'name' => 'city',
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
        $this->crud->setValidation(AgentDetailRequest::class);
        $arr = [
            [
                'label' => 'Agent Name',
                'type' => 'text',
                'name' => 'agent_name',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ]
            ],
            [
                'label' => 'Email',
                'type' => 'email',
                'name' => 'email',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ]
            ],
            [
                'name' => 'phone',
                'type' => 'text',
                'label' => 'Phone',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3',
                ],
            ],
            [
                'name' => 'website',
                'type' => 'text',
                'label' => 'Website',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3',
                ],
            ],
            [
                'name' => 'address',
                'type' => 'text',
                'label' => 'Address',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3',
                ],
            ],
            [
                'name' => 'city',
                'type' => 'text',
                'label' => 'City',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3',
                ],
            ],
            [
                'name' => 'country',
                'type' => 'text',
                'label' => 'Country',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-3',
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
