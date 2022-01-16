<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use App\Models\Course;
use App\Models\Slider;
use App\Models\AboutUs;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Base\Traits\HeaderFooterData;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    use HeaderFooterData;
    public function index()
    {
        $header_footer_data = $this->getCollegeDetailsData();
        $menus = Menu::where('type_id','main')->where('deleted_uq_code',1)->orderBy('display_order','asc')->get();
        $this->data = [
            'menus' => $menus,
            'header_footer_data' => $header_footer_data,
        ];
        return view('frontend.contact', $this->data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ]);

        ContactUs::create($request->all());
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
