<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use App\Models\Course;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CourseController extends Controller
{
    public function index()
    {
        $menus = Menu::where('type_id','main')->orderBy('display_order','asc')->get();
        $courses = Course::where('is_active',true)->get();
        $this->data = [
            'menus' => $menus,
            'courses' => $courses
        ];
        return view('frontend.course', $this->data);
    }
}
