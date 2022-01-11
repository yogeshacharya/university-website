<?php

namespace App\Http\Controllers\Admin;

use App\Models\MstSocialMedia;
use App\Base\Traits\ParentData;
use App\Http\Requests\HrSocialMediaRequest;
use App\Http\Controllers\Admin\BaseCrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class HrSocialMediaCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class HrSocialMediaCrudController extends BaseCrudController
{
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    use ParentData;
    public function setup()
    {
        CRUD::setModel(\App\Models\HrSocialMedia::class);
        \CRUD::setRoute('admin/human-resource/' . $this->parent('human_resource_id') . '/hr-social-media');
        CRUD::setEntityNameStrings('HR Social Media', 'HR Social Media');
        $this->setUpLinks();
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */

    public function tabLinks()
    {
        return $this->setHumanResourceTabs();
    }

    protected function setupListOperation()
    {
        
        $cols = [
            $this->addRowNumber(),
            [
                'label' => 'Social Media',
                'type' => 'select',
                'name' => 'social_media_id',
                'entity' => 'socialMedia',
                'attribute' => 'name',
                'model' => "App\Models\MstSocialMedia",
                
            ],
            [
                'label' => 'Url',
                'type' => 'text',
                'name' => 'url',
            ],
        ];
        $this->crud->addColumns($cols);
        if ($this->parent('human_resource_id') === null) {
            abort(404);
        } else {
            $this->crud->addClause('where', 'human_resource_id', $this->parent('human_resource_id'));
        }
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(HrSocialMediaRequest::class);

        $arr = [

            [
                'name' => 'human_resource_id',
                'type' => 'hidden',
                'value' => $this->parent('human_resource_id')
            ],
            [
                'name' => 'social_media_id',
                'type' => 'select2',
                'entity' => 'socialMedia',
                'attribute' => 'name',
                'model' => MstSocialMedia::class,
                'label' => 'Social Media',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4'
                ],
                'attributes' => [
                    'required' => 'Required',
                ],
            ],
           
            [
                'name' => 'url',
                'type' => 'text',
                'label' => 'URL',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4',
                ],
            ],
            [
                'name' => 'display_order',
                'type' => 'number',
                'label' => 'Display Order',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4',
                ],
            ],
            $this->addIsActiveField(),
        ];

        $arr = array_filter($arr);
        $this->crud->addFields($arr);
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
