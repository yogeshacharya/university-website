@extends('layout.base')
@section('content')
    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">Contact</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center">
                                <li><a href="{{url('/home')}}">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--Contact Area Start-->
    <div class="contact-area pt-100 pb-100">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-12 col-lg-6 blue-bg">
                    <div class="edubuzz-address">
                        <h2 class="contact-title">You Can Contact With Us</h2>
                        <p>Get in Touch With us in every moment.</p><br /><br /><br />
                        <ul>
                            <li><i class="fa fa-fax"></i> Address : {{$header_footer_data['college_details']->full_address}}</li>
                            <li><i class="fa fa-phone"></i> Phone : {{$header_footer_data['college_details']->phone}}</li>
                            <li><i class="fa fa-envelope-o"></i> Email: {{$header_footer_data['college_details']->email}}</li>
                        </ul>
                        <div class="contact-social">
                            @if(count($header_footer_data['college_details']->socialMedias))
                            <h3><strong>Also Can Find Us</strong></h3>
                            <div class="social">
                                @foreach ($header_footer_data['college_details']->socialMedias as $socailmedia)
                                <li><a target="_blank" href="{{$socailmedia->url}}" class="{{strtolower($socailmedia->socialMedia->name)}}"><i class="fa fa-{{strtolower($socailmedia->socialMedia->name)}}"></i></a></li>
                                @endforeach
                            </div>
                          @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 yellow-bg">
                    <div class="contact-form-wrap">
                        <h2 class="contact-title">SEND YOUR MESSAGE</h2>
                        <form id="contact" action="{{route('contact_us_form')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="contact-form-style mb-20">
                                        <input name="full_name" placeholder="Full Name*" type="text" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact-form-style mb-20">
                                        <input name="phone" placeholder="Phone*" type="text" required>
                                    </div>
                                   
                                </div>
                                <div class="col-12">
                                    <div class="contact-form-style mb-20">
                                        <input name="email" placeholder="Email*" type="email" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-form-style">
                                        <textarea name="message" placeholder="Type your message here.."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <button class="button-default" type="submit"><span>Submit</span></button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact Area End-->
@endsection
