@extends('layout.base')
@section('content')
    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">Our Events</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center">
                                <li><a href="{{url('/home')}}">Home</a></li>
                                <li>Events</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--Event Area Start-->
    <div class="event-area section-padding bg-white event-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>OUR EVENTS</h3>
                            <p>There are many variations of passages</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-event-item event-style-2">
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
                            <a class="button-default" href="event-details.html">LEARN Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
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
       
@endsection
