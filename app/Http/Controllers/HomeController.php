<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $menus = Menu::where('type','main')->orderBy('display_order','asc')->get();
        return view('frontend.index', compact('menus'));
    }
}
