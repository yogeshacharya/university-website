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
    </div><br>
    <div class="about-area mt-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-container">
                        <h3><span class="orange-color">{{$pages->title}}</span> <span class="orange-color"></span></h3>
                        <p>{!! $pages->description !!}</p>
                        {{-- <a class="button-default" href="{{url('/pages')}}">Learn More</a>	       --}}
                    </div>
                </div>
                <div class="col-lg-5">
                    <!--About Image Area Start-->
                    <div class="about-image-area img-full">
                        <img src="{{url('/') . '/storage/uploads/' . $pages->file_upload}}" alt="">
                    </div>
                    <!--About Image Area End-->
                </div>
            </div>
        </div>
    </div><br>


    <!--End of Breadcrumb Banner Area-->
    <!--About Area Start--> 
    {{-- <div class="about-area mt-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-container">
                        <h3>{{$pages->title}}</h3>
                        <p>{!! $pages->description !!}</p>
                    </div>
                </div>
                @php
                $file_downloads = json_decode($pages->file_upload);
                @endphp
                <div class="col-lg-5">
                    @php
                    $file_downloads = json_decode($pages->file_upload);
                    @endphp
                    @foreach($file_downloads as $downloads)
                    <div>
                        
                        <a  class="download_button" href="{{ asset('storage/uploads/').'/'.$downloads }}"  title="Download">
                            <i class="fa fa-download" aria-hidden="true">File Download</i>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> --}}
@endsection
<style>
    .download_button {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}
</style>
