@extends('layout.base')
@section('content')
    <body>
        <!--Loading Area Start-->
        <div class="loading">
    		<div class="text-center middle">
    			<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    		</div>
    	</div>
        <!--Loading Area End-->
        <!--Main Wrapper Start-->
        <div class="as-mainwrapper">
            <!--Bg White Start-->
            <div class="bg-white">
                <div class="breadcrumb-banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">Our Course</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="/home">Home</a></li>
                                            <li>Course</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--Search Category Start-->
                <div class="search-category">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="#" method="post">
                                    <div class="form-container">
                                        <div class="box-select">
                                            <div class="select large">
                                                <select name="category">
                                                    <option>All Categories</option>
                                                    <option>Web Design</option>
                                                    <option>Designing</option>
                                                    <option>Development</option>
                                                    <option>Programming</option>
                                                    <option>Developing</option>
                                                </select>
                                            </div>
                                            <div class="select small">
                                                <select name="date">
                                                    <option>Price</option>
                                                    <option>$10000</option>
                                                    <option>$35000</option>
                                                    <option>$67000</option>
                                                    <option>$82000</option>
                                                    <option>$95000</option>
                                                </select>
                                            </div>
                                            <div class="select medium">
                                                <select name="date">
                                                    <option>Course Type</option>
                                                    <option>Web Design</option>
                                                    <option>Designing</option>
                                                    <option>Development</option>
                                                    <option>Programming</option>
                                                    <option>Developing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="button">Search Course</button>
                                    </div>
                                </form>  
                            </div>
                        </div>
                    </div>
                </div>
                <!--Search Category End-->
                <!--Course Area Start-->
                <div class="course-area bg-white section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h3>POPULAR COURSES</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($courses as $course)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-item mb-50">
                                        <div class="single-item-image overlay-effect">
                                            <a href="courses-details.html"><img src="{{url('/') . '/storage/uploads/' . $course->file_upload}}" alt=""></a>
                                            {{-- <div class="courses-hover-info">
                                                <div class="courses-hover-action">
                                                    <div class="courses-hover-thumb">
                                                        <img src="img/teacher/1.png" alt="small images">
                                                    </div>
                                                    <h4><a href="#">Derek Spafford</a></h4>
                                                    <span class="crs-separator">/</span>
                                                    <p>Professor</p>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="single-item-text">
                                            <h4><a href="courses-details.html">{{$course->name}}</a></h4>
                                            <p>{!! Str::limit($course->description, 150) !!}</p>
                                            <div class="single-item-content">
                                            <div class="single-item-comment-view">
                                                <span><i class="zmdi zmdi-accounts"></i>{{$course->visit_counts}}</span>
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
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pagination-content number">
                                    <ul class="pagination">
                                        <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li class="current"><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Course Area-->
            </div>   
            <!--End of Bg White--> 
        </div>    
        <!--End of Main Wrapper Area--> 
    </body>

<!-- Mirrored from template.hasthemes.com/edubuzz/edubuzz/course.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 18:25:41 GMT -->
@endsection