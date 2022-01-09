<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use App\Models\Course;
use App\Models\Slider;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Base\Traits\HeaderFooterData;

class ContactUsController extends Controller
{
    use HeaderFooterData;
    public function index()
    {
        $header_footer_data = $this->getHeaderFooterData();
        $menus = Menu::where('type_id','main')->orderBy('display_order','asc')->get();
        $this->data = [
            'menus' => $menus,
            'header_footer_data' => $header_footer_data,
        ];
        return view('frontend.contact', $this->data);
    }
}
