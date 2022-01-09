@extends('layout.base')
@section('content')
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
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
            </div>   
            <!--End of Bg White--> 
        </div>    
        <!--End of Main Wrapper Area--> 
        
        
       
    </body>

<!-- Mirrored from template.hasthemes.com/edubuzz/edubuzz/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 18:25:33 GMT -->
@endsection
