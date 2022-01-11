<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use App\Models\Course;
use App\Models\Saying;
use App\Models\Slider;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Models\HumanResource;
use Illuminate\Routing\Controller;
use App\Base\Traits\HeaderFooterData;

class AboutUsController extends Controller
{
    use HeaderFooterData;
    public function index()
    {
        $header_footer_data = $this->getHeaderFooterData();
        $menus = Menu::where('type_id','main')->where('deleted_uq_code',1)->orderBy('display_order','asc')->get();
        $about_us = AboutUs::where('deleted_uq_code',1)->get();
        $teachers = HumanResource::where('type',1)->where('deleted_uq_code',1)->limit(4)->orderBy('display_order','asc')->get();
        $sayings = Saying::where('deleted_uq_code',1)->orderBy('display_order','asc')->get();
        $this->data = [
            'menus' => $menus,
            'about_us' => $about_us,
            'header_footer_data' => $header_footer_data,
            'teachers' => $teachers,
            'sayings' => $sayings,
        ];
        return view('frontend.about', $this->data);
    }

    public function introduction()
    {
        $header_footer_data = $this->getHeaderFooterData();
        $menus = Menu::where('type_id','main')->where('deleted_uq_code',1)->orderBy('display_order','asc')->get();
        $this->data = [
            'menus' => $menus,
            'header_footer_data' => $header_footer_data,
        ];
        return view('frontend.introduction', $this->data);
    }

    public function ourTeam()
    {
        $header_footer_data = $this->getHeaderFooterData();
        $menus = Menu::where('type_id','main')->where('deleted_uq_code',1)->orderBy('display_order','asc')->get();
        $this->data = [
            'menus' => $menus,
            'header_footer_data' => $header_footer_data,
        ];
        return view('frontend.our_team', $this->data);
    }

    public function departmentType()
    {
        $header_footer_data = $this->getHeaderFooterData();
        $menus = Menu::where('type_id','main')->where('deleted_uq_code',1)->orderBy('display_order','asc')->get();
        $this->data = [
            'menus' => $menus,
            'header_footer_data' => $header_footer_data,
        ];
        return view('frontend.department_type', $this->data);
    }

    public function class()
    {
        $header_footer_data = $this->getHeaderFooterData();
        $menus = Menu::where('type_id','main')->where('deleted_uq_code',1)->orderBy('display_order','asc')->get();
        $this->data = [
            'menus' => $menus,
            'header_footer_data' => $header_footer_data,
        ];
        return view('frontend.class', $this->data);
    }

    public function feeType()
    {
        $header_footer_data = $this->getHeaderFooterData();
        $menus = Menu::where('type_id','main')->where('deleted_uq_code',1)->orderBy('display_order','asc')->get();
        $this->data = [
            'menus' => $menus,
            'header_footer_data' => $header_footer_data,
        ];
        return view('frontend.fee_type', $this->data);
    }

    public function scholarship()
    {
        $header_footer_data = $this->getHeaderFooterData();
        $menus = Menu::where('type_id','main')->where('deleted_uq_code',1)->orderBy('display_order','asc')->get();
        $this->data = [
            'menus' => $menus,
            'header_footer_data' => $header_footer_data,
        ];
        return view('frontend.scholarship', $this->data);
    }

    public function agentDetail()
    {
        $header_footer_data = $this->getHeaderFooterData();
        $menus = Menu::where('type_id','main')->where('deleted_uq_code',1)->orderBy('display_order','asc')->get();
        $this->data = [
            'menus' => $menus,
            'header_footer_data' => $header_footer_data,
        ];
        return view('frontend.agent_details', $this->data);
    }
}

