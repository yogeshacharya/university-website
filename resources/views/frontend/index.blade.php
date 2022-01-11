@extends('layout.base')
@section('content')
    <!--Slider Area Start-->
    @if(count($sliders))
        <div class="slider-area">
            <div class="hero-slider owl-carousel">
                <!--Single Slider Start-->
                @foreach($sliders as $slider)
                    <div class="single-slider" style="background-image: url('{{url('/') . '/storage/uploads/' . $slider->file_upload}}')"> 
                        <div class="hero-slider-content">
                            <h1>{{$slider->title}}</h1>
                            <p>{{$slider->description}}</p>
                            <div class="slider-btn">
                                <a class="button-default" href="course.html">View Courses</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--Single Slider End-->
            </div>
        </div>
    @endif
    <!--Slider Area End-->
    <!--About Area Start--> 
    <div class="about-area mt-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-container">
                        <h3><span class="orange-color">{{$about_us->title}}</span> <span class="orange-color"></span></h3>
                        <p>{{$about_us->details}}</p>
                        <a class="button-default" href="{{url('/about_us')}}">Learn More</a>	      
                    </div>
                </div>
                <div class="col-lg-5">
                    <!--About Image Area Start-->
                    <div class="about-image-area img-full">
                        <img src="{{url('/') . '/storage/uploads/' . $about_us->file_upload}}" alt="">
                    </div>
                    <!--About Image Area End-->
                </div>
            </div>
        </div>
    </div>
    <!--End of About Area-->
    <!--Course Area Start-->
    @if(count($popular_courses))
        <div class="course-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h3>POPULAR COURSES</h3>
                                <p>There are many variations courses in Lincon International College</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($popular_courses as $popular_course)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-item">
                                <div class="single-item-image overlay-effect">
                                    <a href="courses-details.html"><img src="{{url('/') . '/storage/uploads/' . $popular_course->file_upload}}" alt=""></a>
                                    {{-- <div class="courses-hover-info">
                                        <div class="courses-hover-action">
                                            <div class="courses-hover-thumb">
                                                <img src="{{url('/') . '/storage/uploads/' . $popular_course->file_upload}}" alt="small images">
                                            </div>
                                            <h4><a href="#">Derek Spafford</a></h4>
                                            <span class="crs-separator">/</span>
                                            <p>Professor</p>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="single-item-text">
                                    <h4><a href="courses-details.html">{{$popular_course->name}}</a></h4>
                                    <p>{!! Str::limit($popular_course->description, 150) !!}</p>
                                    <div class="single-item-content">
                                        <div class="single-item-comment-view">
                                            <span><i class="zmdi zmdi-accounts"></i>{{$popular_course->visit_counts}}</span>
                                            {{-- <span><i class="zmdi zmdi-favorite"></i>19</span> --}}
                                        </div>
                                        <div class="single-item-rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-md-12 col-sm-12 text-center">
                        <a href="{{url('/courses')}}" class="button-default button-large">Browse All Courses <i class="zmdi zmdi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!--End of Course Area-->
    <!--Fun Factor Area Start-->
    <div class="fun-factor-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-fun-factor mb-30">
                        <h2><span class="counter">{{$teacher_count}}</span>+</h2>
                        <h4>Teachers</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-fun-factor mb-30">
                        <h2><span class="counter">{{$student_count}}</span>+</h2>
                        <h4>Student</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-fun-factor mb-30">
                        <h2><span class="counter">{{$course_count}}</span>+</h2>
                        <h4>Courses</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-fun-factor mb-30">
                        <h2><span class="counter">{{$member_count}}</span>+</h2>
                        <h4>Members</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Fun Factor Area-->   
    <!--Latest News Area Start--> 
    @if(count($news_notice))
        <div class="latest-area section-padding bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h3>Latest News</h3>
                                <p>Read latest news it may help you</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($news_notice as $news)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-latest-item">
                            <div class="single-latest-image">
                                <a href="blog-details.html"><img src="{{url('/') . '/storage/uploads/' . $news->file_upload}}" alt=""></a>
                            </div>
                            <div class="single-latest-text">
                                <h3><a href="blog-details.html">{{$news->title}}</a></h3>
                                <div class="single-item-comment-view">
                                    <span><i class="zmdi zmdi-calendar-check"></i>{{$news->date_ad}}</span>
                                    <span><i class="zmdi zmdi-eye"></i>{{$news->visit_counts}}</span>
                                    {{-- <span><i class="zmdi zmdi-comments"></i>19</span> --}}
                                </div>
                                <p>{!! Str::limit($news->description, 150) !!}</p>
                                <a href="blog-details.html" class="button-default">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <!--End of Latest News Area--> 
    <!--Online Product Area Start-->
    {{-- <div class="product-area section-bottom-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Online Library</h3>
                            <p>There are many variations of passages</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!--Single Product Start-->
                    <div class="single-product mb-30">
                        <div class="product-img img-full">
                            <a href="single-product.html" tabindex="0">
                                <img src="img/product/16.jpg" alt="">
                            </a>
                            <span class="onsale">Sale!</span>
                        </div>
                        <div class="product-content">
                            <h2><a href="single-product.html" tabindex="0">Clock</a></h2>
                            <div class="product-price">
                                <div class="price-box">
                                    <span class="regular-price">$115.00</span>
                                </div>
                                <div class="add-to-cart">
                                    <a href="#" tabindex="0">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single Product Start-->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!--Single Product Start-->
                    <div class="single-product mb-30">
                        <div class="product-img img-full">
                            <a href="single-product.html" tabindex="0">
                                <img src="img/product/2.jpg" alt="">
                            </a>
                            <span class="onsale">Sale!</span>
                        </div>
                        <div class="product-content">
                            <h2><a href="single-product.html" tabindex="0">Eleifend quam</a></h2>
                            <div class="product-price">
                                <div class="price-box">
                                    <span class="regular-price">$115.00</span>
                                </div>
                                <div class="add-to-cart">
                                    <a href="#" tabindex="0">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single Product Start-->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!--Single Product Start-->
                    <div class="single-product mb-30">
                        <div class="product-img img-full">
                            <a href="single-product.html" tabindex="0">
                                <img src="img/product/4.jpg" alt="">
                            </a>
                            <span class="onsale">Sale!</span>
                        </div>
                        <div class="product-content">
                            <h2><a href="single-product.html" tabindex="0">Pen quam</a></h2>
                            <div class="product-price">
                                <div class="price-box">
                                    <span class="regular-price">$115.00</span>
                                </div>
                                <div class="add-to-cart">
                                    <a href="#" tabindex="0">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single Product Start-->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!--Single Product Start-->
                    <div class="single-product mb-30">
                        <div class="product-img img-full">
                            <a href="single-product.html" tabindex="0">
                                <img src="img/product/3.jpg" alt="">
                            </a>
                            <span class="onsale">Sale!</span>
                        </div>
                        <div class="product-content">
                            <h2><a href="single-product.html" tabindex="0">Note Khata</a></h2>
                            <div class="product-price">
                                <div class="price-box">
                                    <span class="regular-price">$115.00</span>
                                </div>
                                <div class="add-to-cart">
                                    <a href="#" tabindex="0">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single Product Start-->
                </div>
            </div>
        </div>
    </div> --}}
    <!--End of Online Product Area-->
    @if(count($sayings))
        <div class="testimonial-area">
            <div class="container">
                <div class="row">
                    <div class="testimonial-slider owl-carousel">
                        @foreach ($sayings as $saying)
                            <div class="col-12">
                                <!--Single Testimonial Area Start-->
                                <div class="single-testimonial-area">
                                    <div class="testimonial-image">
                                        <img src="{{url('/') . '/storage/uploads/' . $saying->image}}" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <p class="author-desc">{!! $saying->saying !!}</p>
                                        <p class="testimonial-author">{{$saying->said_by}}</p>
                                    </div>
                                </div>
                                <!--Single Testimonial Area End-->
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!--Testimonial Area End-->
    <!--Event Area Start-->
    @if(count($events))
        <div class="event-area section-padding bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h3>OUR EVENTS</h3>
                                <p>There are many on going events</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($events as $event)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-event-item">
                                <div class="single-event-image">
                                    <a href="event-details.html">
                                        <img src="{{url('/') . '/storage/uploads/' . $event->file_upload}}" alt="">
                                        <span>{{date('d', strtotime($event->date))}} {{date('M', strtotime($event->date))}}</span>
                                    </a>
                                </div>
                                <div class="single-event-text">
                                    <h3><a href="event-details.html">{{$event->name}}</a></h3>
                                    <div class="single-item-comment-view">
                                        <span><i class="zmdi zmdi-time"></i>{{$event->time}}</span>
                                        <span><i class="zmdi zmdi-pin"></i>{{$event->location}}</span>
                                    </div>
                                    <p>{!! Str::limit($event->description, 150) !!}</p>
                                    <a class="button-default" href="{{url('/events')}}">LEARN Now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <!--End of Event Area-->
@endsection