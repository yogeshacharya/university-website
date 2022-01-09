<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Course;
use App\Models\Header;
use App\Models\Slider;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Models\FooterAddress;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $menus = Menu::where('type_id','main')->orderBy('display_order','asc')->get();
        $sliders = Slider::all();
        $header = Header::first();
        $footer = FooterAddress::first();
        $about_us = AboutUs::first();
        // $popular_courses = Course::max('visit_counts')->limit(2);
        // dd($popular_courses);
        $this->data = [
            'menus' => $menus,
            'sliders' => $sliders,
            'header' => $header,
            'footer' => $footer,
            'about_us' => $about_us,
            // 'popular_courses' => $popular_courses,
        ];
        return view('frontend.index', $this->data);
    }
}
