@extends('layout.base')
@section('content')
    
<!-- Mirrored from template.hasthemes.com/edubuzz/edubuzz/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 18:25:33 GMT -->
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
                <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">Gallery</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="{{url('/home')}}">Home</a></li>
                                            <li>Gallery</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--Gallery Area Start-->
                <div class="gallery-area pt-100 pb-70">
                    <div class="container">
                        <div class="row">
                            <!--Single Gallery Image Start-->
                            @foreach($galleries as $gallery)
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-gallery-img mb-30">
                                        <a href="{{url('/') . '/storage/uploads/' . $gallery->file_upload}}" data-fancybox="images"><img src="{{url('/') . '/storage/uploads/' . $gallery->file_upload}}" alt=""></a>
                                    </div>
                                </div>
                            @endforeach
                            <!--Single Gallery Image End-->
                        </div>
                    </div>
                </div>
                <!--Gallery Area End-->
            </div>   
            <!--End of Bg White--> 
        </div>    
        <!--End of Main Wrapper Area--> 
    </body>

<!-- Mirrored from template.hasthemes.com/edubuzz/edubuzz/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 18:25:38 GMT -->
@endsection
