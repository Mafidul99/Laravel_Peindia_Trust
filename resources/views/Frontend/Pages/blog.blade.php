@extends('Frontend.layouts.master')
@section('title') {{'My Blog Page'}} @endsection
@section('main-container')
    <!--Breadcum area start-->
    <section class="eco-breadcum-area-start df-pad" style="background:url('{{asset('Frontend')}}/assets/image/breadcum/breadcum.jpg') no-repeat scroll center center / cover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="eco-breadcum-content-area text-center text-light">
                        <h2>Our <span class="custom-color">Blog</span></h2>
                        <ul class="eco-breadcum">
                            <li><a href="{{url('/')}}"><span class="fas fa-home"></span> Home</a></li>
                            <li>/ My Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Breadcum area end-->
    <!--Blog area start-->
    <section class="eco-blog-area-start df-pad">
        <!--Project title area start-->
        <div class="eco-project-title-area-start">
            <div class="container">
                <div class="row">
                    <div class="eco-project-title-area">
                        <img src="{{asset('Frontend')}}/assets/image/title.png" alt="title-image">
                        <h4>Our <span class="custom-color">Blog</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <!--Project title area end-->
        <div class="eco-blog-content-body eco-sidebar">
            <div class="container">
                <div class="row">
                    <!--Blog No sidebar blog start-->
                    <div class="col-lg-4 col-md-6">
                        <div class="eco-single-blog-left wow slideInUp" data-wow-duration="1.2s">
                            <div class="eco-single-blog-content" style="background:url('{{asset('Frontend')}}/assets/image/blog/blog-1.jpg') no-repeat scroll center center / cover">
                                <div class="media">
                                    <div class="post-thumb media-left align-self-center mr-2">
                                        <img src="{{asset('Frontend')}}/assets/image/blog-author/author-1.png" alt="blog-author-Image">
                                    </div>
                                    <div class="media-body">
                                        <span class="eco-blog-category">plumber</span>
                                        <h4><a href="single-page.html">Powered online business</a></h4>
                                        <ul class="eco-blog-info">
                                            <li><span class="far fa-calendar-alt"></span> 20 July, 2020</li>
                                            <li><a href="#"><span class="far fa-comment"></span> 2 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog No sidebar blog end-->
                    <!--Blog No sidebar blog start-->
                    <div class="col-lg-4 col-md-6">
                        <div class="eco-single-blog-left wow slideInUp" data-wow-duration="1.8s">
                            <div class="eco-single-blog-content" style="background:url('{{asset('Frontend')}}/assets/image/blog/blog-1.jpg') no-repeat scroll center center / cover">
                                <div class="media">
                                    <div class="post-thumb media-left align-self-center mr-2">
                                        <img src="{{asset('Frontend')}}/assets/image/blog-author/author-1.png" alt="blog-author-Image">
                                    </div>
                                    <div class="media-body">
                                        <span class="eco-blog-category">plumber</span>
                                        <h4><a href="single-page.html">Powered online business</a></h4>
                                        <ul class="eco-blog-info">
                                            <li><span class="far fa-calendar-alt"></span> 20 July, 2020</li>
                                            <li><a href="#"><span class="far fa-comment"></span> 2 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog No sidebar blog end-->
                    <!--Blog No sidebar blog start-->
                    <div class="col-lg-4 col-md-6 mt-md-4 mt-lg-0">
                        <div class="eco-single-blog-left wow slideInUp" data-wow-duration="2.4s">
                            <div class="eco-single-blog-content" style="background:url('{{asset('Frontend')}}/assets/image/blog/blog-1.jpg') no-repeat scroll center center / cover">
                                <div class="media">
                                    <div class="post-thumb media-left align-self-center mr-2">
                                        <img src="{{asset('Frontend')}}/assets/image/blog-author/author-1.png" alt="blog-author-Image">
                                    </div>
                                    <div class="media-body">
                                        <span class="eco-blog-category">plumber</span>
                                        <h4><a href="single-page.html">Powered online business</a></h4>
                                        <ul class="eco-blog-info">
                                            <li><span class="far fa-calendar-alt"></span> 20 July, 2020</li>
                                            <li><a href="#"><span class="far fa-comment"></span> 2 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog No sidebar blog end-->
                    <!--Blog No sidebar blog start-->
                    <div class="col-lg-4 col-md-6 mt-md-4">
                        <div class="eco-single-blog-left wow slideInUp" data-wow-duration="2s">
                            <div class="eco-single-blog-content" style="background:url('{{asset('Frontend')}}/assets/image/blog/blog-1.jpg') no-repeat scroll center center / cover">
                                <div class="media">
                                    <div class="post-thumb media-left align-self-center mr-2">
                                        <img src="{{asset('Frontend')}}/assets/image/blog-author/author-1.png" alt="blog-author-Image">
                                    </div>
                                    <div class="media-body">
                                        <span class="eco-blog-category">plumber</span>
                                        <h4><a href="single-page.html">Powered online business</a></h4>
                                        <ul class="eco-blog-info">
                                            <li><span class="far fa-calendar-alt"></span> 20 July, 2020</li>
                                            <li><a href="#"><span class="far fa-comment"></span> 2 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog No sidebar blog end-->
                    <!--Blog No sidebar blog start-->
                    <div class="col-lg-4 col-md-6 mt-md-4">
                        <div class="eco-single-blog-left wow slideInUp" data-wow-duration="2.6s">
                            <div class="eco-single-blog-content" style="background:url('{{asset('Frontend')}}/assets/image/blog/blog-1.jpg') no-repeat scroll center center / cover">
                                <div class="media">
                                    <div class="post-thumb media-left align-self-center mr-2">
                                        <img src="{{asset('Frontend')}}/assets/image/blog-author/author-1.png" alt="blog-author-Image">
                                    </div>
                                    <div class="media-body">
                                        <span class="eco-blog-category">plumber</span>
                                        <h4><a href="single-page.html">Powered online business</a></h4>
                                        <ul class="eco-blog-info">
                                            <li><span class="far fa-calendar-alt"></span> 20 July, 2020</li>
                                            <li><a href="#"><span class="far fa-comment"></span> 2 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog No sidebar blog end-->
                    <!--Blog No sidebar blog start-->
                    <div class="col-lg-4 col-md-6 mt-md-4">
                        <div class="eco-single-blog-left wow slideInUp" data-wow-duration="3s">
                            <div class="eco-single-blog-content" style="background:url('{{asset('Frontend')}}/assets/image/blog/blog-1.jpg') no-repeat scroll center center / cover">
                                <div class="media">
                                    <div class="post-thumb media-left align-self-center mr-2">
                                        <img src="{{asset('Frontend')}}/assets/image/blog-author/author-1.png" alt="blog-author-Image">
                                    </div>
                                    <div class="media-body">
                                        <span class="eco-blog-category">plumber</span>
                                        <h4><a href="single-page.html">Powered online business</a></h4>
                                        <ul class="eco-blog-info">
                                            <li><span class="far fa-calendar-alt"></span> 20 July, 2020</li>
                                            <li><a href="#"><span class="far fa-comment"></span> 2 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog No sidebar blog end-->
                    <!--Paginate area start-->
                    <div class="eco-paginate-area-satrt">
                        <ul class="eco-paginate">
                            <li><a href="#"><span class="fas fa-angle-left"></span></a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><span class="fas fa-angle-right"></span></a></li>
                        </ul>
                    </div>
                    <!--Paginate area end-->
                </div>
            </div>
        </div>
    </section>
    <!--Blog area end-->
@endsection
