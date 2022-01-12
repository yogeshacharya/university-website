@extends('layout.base')
@section('content')
    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">ABOUT US</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center">
                                <li><a href="/home">Home</a></li>
                                <li>ABOUT US</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--About Area Start--> 
    <div class="about-area mt-95">
        <div class="container">
            @foreach ($about_us as $about)
                <div class="row">
                    <div class="col-lg-7">
                        <div class="about-container">
                            <h3><span class="orange-color">{{$about->title}}</span></h3>
                            <p>{{$about->details}}</p>
                            {{-- <a class="button-default" href="#">Learn Now</a>	       --}}
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!--About Image Area Start-->
                        <div class="about-image-area img-full">
                            <img src="{{url('/') . '/storage/uploads/' . $about->file_upload}}" alt="">
                        </div>
                        <!--About Image Area End-->
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--End of About Area-->
    <!--Fun Factor Area Start-->
    <div class="fun-factor-area fun-bg-img">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-fun-factor mb-30">
                        <h2><span class="counter">79</span>+</h2>
                        <h4>Teachers</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-fun-factor mb-30">
                        <h2><span class="counter">120</span>+</h2>
                        <h4>Members</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-fun-factor mb-30">
                        <h2><span class="counter">36</span>+</h2>
                        <h4>Courses</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-fun-factor mb-30">
                        <h2><span class="counter">20</span>+</h2>
                        <h4>Countries</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Fun Factor Area-->   
    <!--Teachers Area Start--> 
    <div class="teachers-area section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>OUR TEACHERS</h3>
                            <p>There are many variations of passages</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($teachers as $teacher)
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="agent mb-30">
                            <div class="image img-full">
                                <a class="img" href="team-details.html"><img src="{{url('/') . '/storage/uploads/' . $teacher->file_upload}}" alt=""></a>
                                @if(count($teacher->hrSocialMedias))
                                    <div class="social">
                                        @foreach ($teacher->hrSocialMedias as $hrSocialMedia)
                                            <a href="{{url($hrSocialMedia->link)}}" class="{{strtolower($hrSocialMedia->socialMedia->name)}}"><i class="fa fa-{{strtolower($hrSocialMedia->socialMedia->name)}}"></i></a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="team-details.html">{{$teacher->name}}</a></h4>
                                <a href="#" class="phone">{{$teacher->phone}}</a>
                                <a href="#" class="email">{{$teacher->email}}</a>
                                <span class="properties">Teacher</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--Teachers Area End--> 
    <!--Testimonial Area Start-->
    <div class="testimonial-area">
        <div class="container">
            <div class="row">
                <div class="testimonial-slider-2 owl-carousel">
                    @foreach ($sayings as $saying)
                        <div class="col-12">
                            <div class="single-testimonial testimonial-style-2">
                                <div class="des-testimonial">
                                    <p>{!! $saying->saying !!}</p>
                                </div>
                                <div class="testimonial-author">
                                    <div class="author-img">
                                        <img src="{{url('/') . '/storage/uploads/' . $saying->image}}" alt="">
                                    </div>
                                    <div class="author-content">
                                        <h5>{{$saying->said_by}}</h5>
                                        @if($saying->human_resource_id)
                                            <p>{{$saying->humanResource->email}}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
