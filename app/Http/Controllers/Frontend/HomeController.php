<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $menus = Menu::where('type_id','main')->orderBy('display_order','asc')->get();
        $sliders = Slider::all();
        $this->data = [
            'menus' => $menus,
            'sliders' => $sliders
        ];
        return view('frontend.index', $this->data);
    }
}
