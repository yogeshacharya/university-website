<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use App\Models\Course;
use App\Models\Slider;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactUsController extends Controller
{
    public function index()
    {
        $menus = Menu::where('type_id','main')->orderBy('display_order','asc')->get();
        $this->data = [
            'menus' => $menus,
        ];
        return view('frontend.contact', $this->data);
    }
}
