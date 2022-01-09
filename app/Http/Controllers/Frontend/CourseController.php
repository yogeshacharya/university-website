<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CourseController extends Controller
{
    public function index()
    {
        return view('frontend.course');
    }
}
