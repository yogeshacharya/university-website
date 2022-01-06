<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AgentDetailRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AgentDetailCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AgentDetailCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\AgentDetail::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/agent-detail');
        CRUD::setEntityNameStrings('agent detail', 'agent details');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('agent_name');
        CRUD::column('email');
        CRUD::column('phone');
        CRUD::column('website');
        CRUD::column('address');
        CRUD::column('city');
        CRUD::column('country');
        CRUD::column('description');
        CRUD::column('image');
        CRUD::column('display_order');
        CRUD::column('created_at');
        CRUD::column('updated_at');
        CRUD::column('is_active');
        CRUD::column('created_by');
        CRUD::column('updated_by');
        CRUD::column('deleted_uq_code');
        CRUD::column('deleted_by');

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
        CRUD::setValidation(AgentDetailRequest::class);

        CRUD::field('id');
        CRUD::field('agent_name');
        CRUD::field('email');
        CRUD::field('phone');
        CRUD::field('website');
        CRUD::field('address');
        CRUD::field('city');
        CRUD::field('country');
        CRUD::field('description');
        CRUD::field('image');
        CRUD::field('display_order');
        CRUD::field('created_at');
        CRUD::field('updated_at');
        CRUD::field('is_active');
        CRUD::field('created_by');
        CRUD::field('updated_by');
        CRUD::field('deleted_uq_code');
        CRUD::field('deleted_by');

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
