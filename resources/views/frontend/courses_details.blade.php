@extends('layout.base')
@section('content')
    <div class="breadcrumb-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">COURSES DETAILS</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center">
                                <li><a href="/home">Home</a></li>
                                <li>COURSES DETAILS</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--Course Area Start-->
    <div class="course-details-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col--12">
                    <div class="course-details-right-sidebar">
                        <div class="events-details-img1 img-full">
                            <h2>{{$course_detail->name}}</h2>
                            <img src="{{url('/') . '/storage/uploads/' . $course_detail->file_upload}}" alt="">
                        </div>
                        <div class="single-item-content">
                            <div class="single-item-comment-view">
                                <span><i class="zmdi zmdi-accounts"></i>{{$course_detail->visit_counts}}</span>
                            </div>
                            <div class="single-item-rating">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                            </div>
                        </div>
                            @php
                        $courses_structure = json_decode($course_detail->course_structure);
                        $course_fees = json_decode($course_detail->courses_fee);
                        @endphp
                        <div class="course-duration mb-30">
                            <table class="table table-hover">
                                <thead class="duration-title">
                                    <tr>
                                    <th scope="col">SN</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Course Title</th>
                                    <th scope="col">Credit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses_structure as $course)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$course->course_title}}</td>
                                        <td>{{$course->credit}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                </table>
                        </div>
                        <div class="about-lectures">
                            <h3>Course Description</h3>
                            <p>{!!$course_detail->description!!}</p>
                        </div>
                        <div class="event-content">
                            <h3 class="content2">Entry Requirement</h3>
                            <p>{!! $course_detail->entry_requirement !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-widget">
                        <div class="single-sidebar-widget">
                            <h3 class="sidebar-title">Course Structure </h3>
                            <ul class="course-menu">
                                <li>Levels :<span>Beginner</span></li>
                                <li>Start On :<span>14.09.2018</span></li>
                                <li>Duration :<span>30 Hours</span></li>
                                <li>Class Size :<span>25 Persone</span></li>
                                <li>Lectures :<span>15 Session</span></li>
                                <li>Time :<span>07am - 12pm</span></li>
                                <li>Location :<span>07am - 12pm</span></li>
                                <li>Price :<span>$150.00</span></li>
                            </ul>
                        </div>
                        {{-- <div class="single-sidebar-widget">
                            <h4 class="title">Categories</h4>
                            <ul class="course-categoris">
                                <li><a href="#">Political Science<span>10</span></a></li>
                                <li><a href="#">Micro Biology<span>15</span></a></li>
                                <li><a href="#">Computer Science<span>05</span></a></li>
                                <li><a href="#">Business Leaders Guide<span>19</span></a></li>
                                <li><a href="#">Become a Product Manage<span>21</span></a></li>
                                <li><a href="#">Business Economics<span>14</span></a></li>
                                <li><a href="#">Language Education<span>13</span></a></li>
                                <li><a href="#">Social Media Management<span>18</span></a></li>
                            </ul>
                        </div> --}}
                        <div class="single-sidebar-widget">
                            <h4 class="title">Recent Course</h4>
                            <div class="recent-content">
                                <div class="recent-content-item">
                                    @foreach ($new_course as $item)
                                    <a href="#"><img src="img/event/7.jpg" alt=""></a>
                                    <div class="recent-text">
                                        <h4><a class="mt-2" href="{{url('/'). '/courses/' . $item->id}}">{{$item->name}}</a></h4>
                                        <div class="single-item-comment-view">
                                            <span><i class="zmdi zmdi-eye"></i>{{$item->visit_counts}}</span>
                                        </div>
                                        <p>{!! Str::limit($item->description, 80) !!}</p>
                                    </div>
                                    @endforeach
                                </div>
                                {{-- <div class="recent-content-item">
                                    <a href="#"><img src="img/event/8.jpg" alt=""></a>
                                    <div class="recent-text">
                                        <h4><a href="#">Team Works</a></h4>
                                        <div class="single-item-comment-view">
                                            <span><i class="zmdi zmdi-eye"></i>59</span>
                                            <span><i class="zmdi zmdi-comments"></i>19</span>
                                        </div>
                                        <p>There are many varf passages of Lorem Ipsuable,amar</p>
                                    </div>
                                </div> --}}
                                {{-- <div class="recent-content-item">
                                    <a href="#"><img src="img/event/9.jpg" alt=""></a>
                                    <div class="recent-text">
                                        <h4><a href="#">Learn With Fun</a></h4>
                                        <div class="single-item-comment-view">
                                            <span><i class="zmdi zmdi-eye"></i>59</span>
                                            <span><i class="zmdi zmdi-comments"></i>19</span>
                                        </div>
                                        <p>There are many varf passages of Lorem Ipsuable,amar</p>
                                    </div>
                                </div> --}}
                                {{-- <div class="recent-content-item">
                                    <a href="#"><img src="img/event/10.jpg" alt=""></a>
                                    <div class="recent-text">
                                        <h4><a href="#">Writing Skill</a></h4>
                                        <div class="single-item-comment-view">
                                            <span><i class="zmdi zmdi-eye"></i>59</span>
                                            <span><i class="zmdi zmdi-comments"></i>19</span>
                                        </div>
                                        <p>There are many varf passages of Lorem Ipsuable,amar</p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        {{-- <div class="single-sidebar-widget">
                            <h4 class="title">Search by Tags</h4>
                            <ul class="tags">
                                <li><a href="#">Photoshop</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Tutorial</a></li>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Premium</a></li>
                                <li><a href="#">Designtuto</a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
