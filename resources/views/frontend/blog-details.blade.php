@extends('layout.base')
@section('content')
    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">Blog Details</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center">
                                <li><a href="index.html">Home</a></li>
                                <li>Blog Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--Blog Area Start--> 
    <div class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 blog-post-item">
                    <div class="blog-wrapper blog-details">
                        <div class="blog-img img-full">
                            <img src="{{url('/') . '/storage/uploads/' . $blog->image}}" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="single-item-comment-view">
                                <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                                <span><i class="zmdi zmdi-eye"></i>59</span>
                                <span><i class="zmdi zmdi-comments"></i>19</span>
                            </div>
                            <h3>{{$blog->title}}</h3>
                            <p>{{$blog->description}}</p>
                            {{-- <div class="row">
                                <div class="col-md-6">
                                    <ul class="blog-post-list">
                                        <li> Lawyer boluptatum deleniti atque corrupti sdolores et quas molestias cepturi sint  eca itate non similique </li>
                                        <li> Lawyer boluptatum deleniti atque corrupti sdolores et quas molestias cepturi sint  eca itate non similique </li>
                                        <li> Lawyer boluptatum deleniti atque corrupti sdolores et quas molestias cepturi sint  eca itate non similique </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="blog-post-list">
                                        <li> Lawyer boluptatum deleniti atque corrupti sdolores et quas molestias cepturi sint  eca itate non similique </li>
                                        <li> Lawyer boluptatum deleniti atque corrupti sdolores et quas molestias cepturi sint  eca itate non similique </li>
                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                        <div class="single-sidebar-widget">
                            <h4 class="title">Recent Blog Post</h4>
                            <div class="recent-content">
                                @foreach ($latest_blogs as $latest_blog)
                                    <div class="recent-content-item">
                                        <a href="#"><img src="img/event/7.jpg" alt=""></a>
                                        <div class="recent-text">
                                            <h4><a href="#">{{$latest_blog->title}}</a></h4>
                                            <div class="single-item-comment-view">
                                                <span><i class="zmdi zmdi-calendar-check"></i>{{date('d', strtotime($blog->date))}} {{date('M', strtotime($blog->date))}} {{date('Y', strtotime($blog->date))}}</span>
                                                <span><i class="zmdi zmdi-eye"></i>{{$blog->visit_counts}}</span>
                                            </div>
                                            <p>{!! Str::limit($blog->description, 50) !!}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection