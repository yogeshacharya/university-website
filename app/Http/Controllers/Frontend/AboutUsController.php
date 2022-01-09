<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use App\Models\Course;
use App\Models\Slider;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AboutUsController extends Controller
{
    public function index()
    {
        $menus = Menu::where('type_id','main')->orderBy('display_order','asc')->get();
        $about_us = AboutUs::all();
        $this->data = [
            'menus' => $menus,
            'about_us' => $about_us
        ];
        return view('frontend.about', $this->data);
    }
}
