<footer>
    <!--Newsletter Area Start-->
    {{-- <div class="newsletter-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="newsletter-content">
                        <h3>SUBSCRIBE</h3>
                        <h2>TO OUR NEWSLETTER</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="newsletter-form angle">
                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="mc-form footer-newsletter fix">
                            <div class="subscribe-form">
                                <input id="mc-email" type="email" autocomplete="off" placeholder="Enter your email here">
                                <button id="mc-submit" type="submit">SUBSCRIBE</button>
                            </div>    
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre fix pull-right">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!--End of Newsletter Area-->
    <!--Footer Widget Area Start-->
    <div class="footer-widget-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-footer-widget">
                        <h3>LINCOLN COLLEGE</h3>
                        {{-- <div class="footer-logo">
                            <a href="index.html"><img style="height: 60px;" src="{{url('/') . '/storage/uploads/' . $header_footer_data['college_details']->logo}}" alt=""></a>
                        </div> --}}
                        <p>{{$header_footer_data['college_details']->description}}</p>

                        <div class="social-icons">
                            @if(count($header_footer_data['college_details']->socialMedias))
                                @foreach ($header_footer_data['college_details']->socialMedias as $socailmedia)
                                <a target="_blank" href="{{$socailmedia->url}}" class="{{strtolower($socailmedia->socialMedia->name)}}"><i class="fa fa-{{strtolower($socailmedia->socialMedia->name)}}"></i></a>
                                @endforeach
                             @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>GET IN TOUCH</h3>
                        <a style="color: white;" href="tel:.'{{$header_footer_data['college_details']->phone}}'."><i class="fa fa-phone"></i>{{$header_footer_data['college_details']->phone}}</a>
                        <span><a style="color: white;" href="mailto:'.{{$header_footer_data['college_details']->email}}.'"><i class="fa fa-envelope"></i>{{$header_footer_data['college_details']->email}}</a></span>
                        <span><a style="color: white;" href="http://maps.google.com/?q='.{{$header_footer_data['college_details']->full_address}}.'"><i class="fa fa-map-marker"></i>{{$header_footer_data['college_details']->full_address}}</a></span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Useful Links</h3>
                        <ul class="footer-list">
                            <li><a href="{{url('/about_us/our_team')}}">Our Team</a></li>
                            <li><a href="{{url('/courses')}}">Our Courses</a></li>
                            <li><a href="{{url('/about_us/scholarships')}}">Scholarship</a></li>
                            <li><a href="{{url('/contact_us')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Instagram</h3>
                        <ul id="Instafeed"></ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!--End of Footer Widget Area-->
    <!--Footer Area Start-->
    {{-- <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-12">
                    <span>Copyright &copy; All right reserved.Created by <a href="#">Lincon</a></span>
                </div>
                <div class="col-lg-6 col-md-5 col-12">
                    <div class="column-right">
                        <span>Privacy Policy , Terms &amp; Conditions</span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--End of Footer Area-->
</footer>