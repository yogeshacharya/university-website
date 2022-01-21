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
    </div>
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
