@extends('layout.base')
@section('content')
    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">{{$pages->title}}</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center">
                                <li><a href="index.html">Home</a></li>
                                <li>{{$pages->title}}</li>
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
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-container">
                        <h3>Provide best <span class="orange-color">education</span> <span class="orange-color">services</span> for you</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam eligendi expedita, provident cupiditate in excepturi.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <!--About Image Area Start-->
                    <div class="about-image-area img-full">
                        <img src="img/about/about1.jpg" alt="">
                    </div>
                    <!--About Image Area End-->
                </div>
            </div>
        </div>
    </div>
@endsection
