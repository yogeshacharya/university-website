<?php

namespace App\Http\Controllers\Api;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class ParentMenuApiController extends Controller
{
    public function index(Request $request,$value)
    {
        $search_term = $request->input('q');
        $options = Menu::query();//model ma query gareko
        // // if no category has been selected, show no options
        // if (! data_get($form, $value)) {
        //     return [];
        // }
        // // if a category has been selected, only show articles in that category
        // if (data_get($form, $value)) {
        // }
        $options = $options->where('type', $value-1);
        // if (data_get($form, $value)) {
        //     $options = $options->where('type', $form[$value]);
        // }
        // if a search term has been given, filter results to match the search term
        if ($search_term) {
            $options = $options->where('type', 'LIKE', '%'.$search_term.'%');//k tannalako state ho tesaile
        }
        
        // dd($options->get());

        return $options->paginate(10); 
    }
}
