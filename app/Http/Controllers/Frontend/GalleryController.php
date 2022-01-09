<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use App\Models\Course;
use App\Models\Slider;
use App\Models\AboutUs;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GalleryController extends Controller
{
    public function index()
    {
        $menus = Menu::where('type_id','main')->orderBy('display_order','asc')->get();
        $gallery = Gallery::all();
        $this->data = [
            'menus' => $menus,
            'gallery' => $gallery
        ];
        return view('frontend.gallery', $this->data);
    }
}
