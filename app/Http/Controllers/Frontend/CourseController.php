<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use App\Models\Course;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Base\Traits\HeaderFooterData;

class CourseController extends Controller
{
    use HeaderFooterData;
    public function index()
    {
        $header_footer_data = $this->getHeaderFooterData();
        $menus = Menu::where('type_id','main')->where('deleted_uq_code',1)->orderBy('display_order','asc')->get();
        $courses = Course::where('deleted_uq_code',1)->where('is_active',true)->paginate(3);
        $this->data = [
            'menus' => $menus,
            'courses' => $courses,
            'header_footer_data' => $header_footer_data,
        ];
        return view('frontend.course', $this->data);
    }

    public function getCourseDetail($id)
    {
        $header_footer_data = $this->getHeaderFooterData();
        $menus = Menu::where('type_id','main')->orderBy('display_order','asc')->get();
        $course_detail = Course::find($id);
        $new_course = Course::latest()->take(3)->get();
        $this->data = [
            'menus' => $menus,
            'course_detail' => $course_detail,
            'header_footer_data' => $header_footer_data,
            'new_course' => $new_course,
        ];
        return view('frontend.courses_details', $this->data);
    }
}
