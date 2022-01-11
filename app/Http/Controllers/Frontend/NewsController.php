<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Menu;
use App\Models\Event;
use App\Models\Course;
use App\Models\Slider;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Base\Traits\HeaderFooterData;

class NewsController extends Controller
{
    use HeaderFooterData;
    public function index()
    {
        $header_footer_data = $this->getHeaderFooterData();
        $menus = Menu::where('type_id','main')->where('deleted_uq_code',1)->orderBy('display_order','asc')->get();
        $this->data = [
            'menus' => $menus,
            'header_footer_data' => $header_footer_data,
        ];
        return view('frontend.news_notices', $this->data);
    }

    public function events()
    {
        $header_footer_data = $this->getHeaderFooterData();
        $menus = Menu::where('type_id','main')->where('deleted_uq_code',1)->orderBy('display_order','asc')->get();
        $events = Event::where('deleted_uq_code',1)->paginate(1);
        $this->data = [
            'menus' => $menus,
            'header_footer_data' => $header_footer_data,
            'events'=>$events
        ];
        return view('frontend.event', $this->data);
    }

    public function blog()
    {
        $header_footer_data = $this->getHeaderFooterData();
        $menus = Menu::where('type_id','main')->where('deleted_uq_code',1)->orderBy('display_order','asc')->get();
        $blogs = Blog::where('deleted_uq_code',1)->get();
        $this->data = [
            'menus' => $menus,
            'header_footer_data' => $header_footer_data,
            'blogs' => $blogs,
        ];
        return view('frontend.blog', $this->data);
    }
}
