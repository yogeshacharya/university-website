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
        $menus = Menu::where('type_id','main')->orderBy('display_order','asc')->get();
        $courses = Course::where('is_active',true)->get();
        $this->data = [
            'menus' => $menus,
            'courses' => $courses,
            'header_footer_data' => $header_footer_data,
        ];
        return view('frontend.course', $this->data);
    }
}
