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
                            <blockquote class="mb-50">The first forty years of life give us the text; the next thirty supply the commentary on it.</blockquote>
                            <div class="blog-bottom-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Lawyer boluptatum deleniti atque corrupti sdolores et quas molestias cepturi sint  eca itate non similique sunt in culpa modi tempora incidunt  obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure  obtain</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lawyer boluptatum deleniti atque corrupti sdolores et quas molestias cepturi sint  eca itate non similique sunt in culpa modi tempora incidunt  obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure  obtain</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-author mt-60">
                        <h4 class="small-title">Author</h4>
                        <div class="blog-author-box">
                            <div class="blog-author-img">
                                <img src="img/teacher/l-1.jpg" alt="">
                            </div>
                            <div class="blog-author-content">
                                <h6>Stuart Smith</h6>
                                <p>But I must explain to you how all this mistaken idea of denouncing sure and ising pain  borand I will give you a complete account</p>
                            </div>
                        </div>
                    </div>
                    <div class="common-tag-and-next-prev mt-60">
                        <div class="common-tag">
                            <h6>Tags: </h6>
                            <ul>
                                <li><a href="#">Photoshop,</a></li>
                                <li><a href="#">Design,</a></li>
                                <li><a href="#">Tutorial</a></li>
                            </ul>
                        </div>
                        <div class="blog-share">
                            <h6>Share:</h6>
                            <ul>
                                <li><a href="#">Facebook,</a></li>
                                <li><a href="#">Tweeter,</a></li>
                                <li><a href="#">Google+</a></li>
                            </ul>
                        </div>
                        <div class="next-prev-post">
                            <ul>
                                <li><a href="#"><i class="zmdi zmdi-long-arrow-left"></i> Previous</a></li>
                                <li><a href="#">Next<i class="zmdi zmdi-long-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="comment-list mt-60">
                        <h4 class="small-title">Comments</h4>
                        <div class="comment">
                            <div class="blog-author-img">
                                <img src="img/teacher/l-2.jpg" alt="">
                            </div>
                            <div class="comment-content">
                                <div class="comment-content-top">
                                    <h6>Alvaro Santos</h6>
                                    <span>08 Jun 2017</span>
                                </div>
                                <a href="#" class="reply">Reply</a>
                                <div class="comment-content-bottom">
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and ising pain  borand I will give you a complete account of the system</p>
                                </div>
                            </div>
                        </div>
                        <div class="comment reply">
                            <div class="blog-author-img">
                                <img src="img/teacher/l-3.jpg" alt="">
                            </div>
                            <div class="comment-content">
                                <div class="comment-content-top">
                                    <h6>Julia thomas</h6>
                                    <span>06 Jun 2017</span>
                                </div>
                                <a href="#" class="reply">Reply</a>
                                <div class="comment-content-bottom">
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and ising pain  borand I will give you a complete account of the system</p>
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <div class="blog-author-img">
                                <img src="img/teacher/l-4.jpg" alt="">
                            </div>
                            <div class="comment-content">
                                <div class="comment-content-top">
                                    <h6>Nicolus Christopher</h6>
                                    <span>08 Jun 2017</span>
                                </div>
                                <a href="#" class="reply">Reply</a>
                                <div class="comment-content-bottom">
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and ising pain  borand I will give you a complete account of the system</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-box mt-60">
                        <h4 class="small-title">Leave a Comment</h4>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-input">
                                        <input name="commenter-name" placeholder="Name" id="commenter-name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input">
                                        <input name="commenter-email" placeholder="Email" id="commenter-email" type="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-input">
                                        <textarea name="commenter-message" placeholder="Message" id="commenter-message" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-input">
                                        <button class="sent-btn" type="submit">SEND Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="sidebar-widget">
                        <div class="single-sidebar-widget">
                            <h4 class="title">Categories</h4>
                            <ul class="course-categoris">
                                <li><a href="#">Political Science<span>10</span></a></li>
                                <li><a href="#">Micro Biology<span>15</span></a></li>
                                <li><a href="#">Computer Science<span>05</span></a></li>
                                <li><a href="#">Business Leaders Guide<span>19</span></a></li>
                                <li><a href="#">Become a Product Manage<span>21</span></a></li>
                                <li><a href="#">Business Economics<span>14</span></a></li>
                                <li><a href="#">Language Education<span>13</span></a></li>
                                <li><a href="#">Social Media Management<span>18</span></a></li>
                            </ul>
                        </div>
                        <div class="single-sidebar-widget">
                            <h4 class="title">Recent Blog Post</h4>
                            <div class="recent-content">
                                <div class="recent-content-item">
                                    <a href="#"><img src="img/event/7.jpg" alt=""></a>
                                    <div class="recent-text">
                                        <h4><a href="#">Learn English in</a></h4>
                                        <div class="single-item-comment-view">
                                            <span><i class="zmdi zmdi-eye"></i>59</span>
                                            <span><i class="zmdi zmdi-comments"></i>19</span>
                                        </div>
                                        <p>There are many varf passages of Lorem Ipsuable,amar</p>
                                    </div>
                                </div>
                                <div class="recent-content-item">
                                    <a href="#"><img src="img/event/8.jpg" alt=""></a>
                                    <div class="recent-text">
                                        <h4><a href="#">Team Works</a></h4>
                                        <div class="single-item-comment-view">
                                            <span><i class="zmdi zmdi-eye"></i>59</span>
                                            <span><i class="zmdi zmdi-comments"></i>19</span>
                                        </div>
                                        <p>There are many varf passages of Lorem Ipsuable,amar</p>
                                    </div>
                                </div>
                                <div class="recent-content-item">
                                    <a href="#"><img src="img/event/9.jpg" alt=""></a>
                                    <div class="recent-text">
                                        <h4><a href="#">Learn With Fun</a></h4>
                                        <div class="single-item-comment-view">
                                            <span><i class="zmdi zmdi-eye"></i>59</span>
                                            <span><i class="zmdi zmdi-comments"></i>19</span>
                                        </div>
                                        <p>There are many varf passages of Lorem Ipsuable,amar</p>
                                    </div>
                                </div>
                                <div class="recent-content-item">
                                    <a href="#"><img src="img/event/10.jpg" alt=""></a>
                                    <div class="recent-text">
                                        <h4><a href="#">Writing Skill</a></h4>
                                        <div class="single-item-comment-view">
                                            <span><i class="zmdi zmdi-eye"></i>59</span>
                                            <span><i class="zmdi zmdi-comments"></i>19</span>
                                        </div>
                                        <p>There are many varf passages of Lorem Ipsuable,amar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="widget-banner img-full">
                                <a href="#"><img src="img/banner/blog-banner1.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <h4 class="title">Search by Tags</h4>
                            <ul class="tags">
                                <li><a href="#">Photoshop</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Tutorial</a></li>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Premium</a></li>
                                <li><a href="#">Designtuto</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection