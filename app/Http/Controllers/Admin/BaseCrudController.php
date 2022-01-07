<?php

namespace App\Http\Controllers\Admin;

use App\Models\FeeType;
use Illuminate\Http\Request;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Base\Operations\ListOperation;
use App\Base\Operations\CreateOperation;
use App\Base\Operations\UpdateOperation;
use App\Base\Operations\DeleteOperation;
use App\Base\Operations\ShowOperation;
class BaseCrudController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;
    
    protected function setDisplayOrder($request){
        if(!isset($request->display_order)){
            $max_order=FeeType::max('display_order');
            $request->request->set('display_order', $max_order+1);
        }
    }
}
