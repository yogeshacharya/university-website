<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use App\Models\Page;
use App\Models\Course;
use App\Models\Header;
use App\Models\Slider;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Models\FooterAddress;
use App\Models\HumanResource;
use Illuminate\Routing\Controller;
use App\Base\Traits\HeaderFooterData;

class HomeController extends Controller
{
    use HeaderFooterData;

    public function index()
    {
        $header_footer_data = $this->getHeaderFooterData();
        $menus = Menu::where('type_id','main')->orderBy('display_order','asc')->get();
        $sliders = Slider::all();
        $about_us = AboutUs::first();
        $popular_courses = Course::orderBy('visit_counts', 'DESC')->limit(3)->get();
        $teacher_count=HumanResource::where('type',1)->count();
        $student_count=HumanResource::where('type',2)->count();
        $member_count=HumanResource::where('type',3)->count();
        $course_count=Course::count();
        $this->data = [
            'menus' => $menus,
            'sliders' => $sliders,
            'header_footer_data' => $header_footer_data,
            'about_us' => $about_us,
            'popular_courses' => $popular_courses,
            'teacher_count' => $teacher_count,
            'student_count' => $student_count,
            'course_count' => $course_count,
            'member_count' => $member_count,
        ];
        return view('frontend.index', $this->data);
    }

    public function getData($slug)
    {
        $header_footer_data = $this->getHeaderFooterData();
        $menus = Menu::where('type_id','main')->orderBy('display_order','asc')->get();
        $pages = Page::where('slug',$slug)->first();
        $this->data = [
            'menus' => $menus,
            'pages' => $pages,
            'header_footer_data' => $header_footer_data,
        ];
        return view('frontend.general_page', $this->data);
    }
}
