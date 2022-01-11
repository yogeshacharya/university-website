@extends('layout.base')
@section('content')
    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">Blog</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center">
                                <li><a href="{{url('/home')}}">Home</a></li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--Latest News Area Start--> 
    <div class="latest-area section-padding bg-white blog-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Latest News</h3>
                            <p>There are many variations of passages</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-latest-item">
                            <div class="single-latest-image">
                                <a href="blog-details.html"><img src="{{url('/') . '/storage/uploads/' . $blog->image}}" alt=""></a>
                            </div>
                            <div class="single-latest-text">
                                <h3><a href="blog-details.html">{{$blog->title}}</a></h3>
                                <div class="single-item-comment-view">
                                <span><i class="zmdi zmdi-calendar-check"></i>{{date('d', strtotime($blog->date))}} {{date('M', strtotime($blog->date))}} {{date('Y', strtotime($blog->date))}}</span>
                                <span><i class="zmdi zmdi-eye"></i>{{$blog->visit_counts}}</span>
                                {{-- <span><i class="zmdi zmdi-comments"></i>19</span> --}}
                            </div>
                            <p>{{$blog->description}}</p>
                            <a href="blog-details.html" class="button-default">Read More</a>
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
    <!--End of Latest News Area--> 
@endsection
