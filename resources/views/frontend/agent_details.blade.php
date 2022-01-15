@extends('layout.base')
@section('content')
    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">Agent Detail</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center">
                                <li><a href="{{url('/home')}}">Home</a></li>
                                <li>Agent Detail</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--Team Details Area Start-->
    <div class="team-details-area section-padding">
        <div class="container">
            <div class="row row-25">
                <!--Team Image-->
                <div class="col-lg-5 col-12">
                    <div class="team-image">
                        <img src="{{url('/') . '/storage/uploads/' . $agent->file_upload}}" alt="">
                    </div>
                </div>
                <!--Team Content-->
                <div class="col-lg-7 col-12">
                    <div class="team-content">
                        <h3 class="title">{{$agent->agent_name}}</h3>
                        <p>{!! $agent->description !!}</p>
                        <div class="row">
                            <div class="col-md-6 col-12 mb-30">
                                <h4>Agent Info</h4>
                                <ul>
                                    <li><i class="zmdi zmdi-home"></i>{{$agent->address}}, {{$agent->city}}, {{$agent->country}}</li>
                                    <li><i class="zmdi zmdi-phone-in-talk"></i><a href="#">{{$agent->phone}}</a></li>
                                    <li><i class="zmdi zmdi-email"></i><a href="#">{{$agent->email}}</a></li>
                                    <li><i class="zmdi zmdi-view-web"></i><a href="#">{{$agent->website}}</a></li>
                                    {{-- <li><i class="zmdi zmdi-book-image"></i>5 Research Published</li> --}}
                                </ul>
                                {{-- <div class="social">
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                </div> --}}
                            </div>
                            {{-- <div class="col-md-6 col-12 mb-30">
                                <h4>Teacher Info</h4>
                                <ul>
                                    <li><span>Degrees:</span> <span><a href="#">BSC IN CSE</a> <a href="#">MSC IN EEE</a></span></li>
                                    <li><span>Institute:</span> <span>BPI</span></li>
                                    <li><span>Teachers Id:</span> <span>AB7876A6</span></li>
                                    <li><span>Number:</span> <span><a href="#">(756) 447 5744</a></span></li>
                                    <li><span>Address:</span> <span>246, 2st AVE, Manchester 126 , Noth England</span></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection