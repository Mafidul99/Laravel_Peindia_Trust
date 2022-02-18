@extends('Frontend.layouts.master')
@section('title') {{'Program Gouwahati'}} @endsection
@section('main-container')
    <!--Breadcum area start-->
    <section class="eco-breadcum-area-start df-pad" style="background:url('{{asset('Frontend')}}/assets/image/breadcum/breadcum.jpg') no-repeat scroll center center / cover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="eco-breadcum-content-area text-center text-light">
                        <h2>Our <span class="custom-color">Projects</span></h2>
                        <ul class="eco-breadcum">
                            <li><a href="{{url('/')}}"><span class="fas fa-home"></span> Home</a></li>
                            <li>/ Full-width</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Breadcum area end-->

    <!--Featured project area start-->
    <section class="eco-featured-project-area-start df-pad">
        <!--Project title area start-->
        <div class="eco-project-title-area-start">
            <div class="container">
                <div class="row">
                    <div class="eco-project-title-area">
                        <img src="{{asset('Frontend')}}/assets/image/title.png" alt="title-image">
                        <h4>Featured <span class="custom-color">Projects</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <!--Project title area end-->
        <!--Feature content area start-->
        <div class="eco-feature-content-area-start">
            <div class="container">
                <div class="row">
                    <!--Feature button strat-->
                    <div class="eco-feature-btn-area">
                        <ul>
                            <li class="filter active" data-filter="all">All</li>
                            <li class="filter" data-filter=".builder">Builder</li>
                            <li class="filter" data-filter=".carpenter">Carpenter</li>
                            <li class="filter" data-filter=".plumber">Plumber</li>
                            <li class="filter" data-filter=".repairment">Repairment</li>
                            <li class="filter" data-filter=".architechture">Architechture</li>
                            <li class="filter" data-filter=".construction">Construction</li>
                        </ul>
                    </div>
                    <!--Feature button end-->
                    <div class="eco-feature-content">
                        <!--Single feature start-->
                        <div class="mix builder architechture wow slideInRight">
                            <div class="item eco-single-feature" style="background:url('{{asset('Frontend')}}/assets/image/projects/port-1.jpg') no-repeat scroll center center / cover">
                                <div class="eco-single-feature-body">
                                    <a href="#">
                                        <h5>Project title</h5>
                                    </a>
                                    <span>Builder</span>
                                    <div class="eco-project-image-popup">
                                        <a class="project-image-popup" href="{{asset('Frontend')}}/assets/image/projects/port-1.jpg"><span class="fas fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single feature end-->
                        <!--Single feature start-->
                        <div class="mix carpenter plumber wow slideInDown">
                            <div class="item eco-single-feature" style="background:url('{{asset('Frontend')}}/assets/image/projects/port-2.jpg') no-repeat scroll center center / cover">
                                <div class="eco-single-feature-body">
                                    <a href="#">
                                        <h5>Project title</h5>
                                    </a>
                                    <span>Carpenter, Plumber</span>
                                    <div class="eco-project-image-popup">
                                        <a class="project-image-popup" href="{{asset('Frontend')}}/assets/image/projects/port-2.jpg"><span class="fas fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single feature end-->
                        <!--Single feature start-->
                        <div class="mix plumber repairment construction wow slideInLeft">
                            <div class="item eco-single-feature" style="background:url('{{asset('Frontend')}}/assets/image/projects/port-3.jpg') no-repeat scroll center center / cover">
                                <div class="eco-single-feature-body">
                                    <a href="#">
                                        <h5>Project title</h5>
                                    </a>
                                    <span>plumber, repairment, construction</span>
                                    <div class="eco-project-image-popup">
                                        <a class="project-image-popup" href="{{asset('Frontend')}}/assets/image/projects/port-3.jpg"><span class="fas fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single feature end-->
                        <!--Single feature start-->
                        <div class="mix builder carpenter construction architechture wow slideInRight">
                            <div class="item eco-single-feature" style="background:url('{{asset('Frontend')}}/assets/image/projects/port-4.jpg') no-repeat scroll center center / cover">
                                <div class="eco-single-feature-body">
                                    <a href="#">
                                        <h5>Project title</h5>
                                    </a>
                                    <span>builder, construction, architechture</span>
                                    <div class="eco-project-image-popup">
                                        <a class="project-image-popup" href="{{asset('Frontend')}}/assets/image/projects/port-4.jpg"><span class="fas fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single feature end-->
                        <!--Single feature start-->
                        <div class="mix plumber carpenter repairment wow zoomIn">
                            <div class="item eco-single-feature" style="background:url('{{asset('Frontend')}}/assets/image/projects/port-5.jpg') no-repeat scroll center center / cover">
                                <div class="eco-single-feature-body">
                                    <a href="#">
                                        <h5>Project title</h5>
                                    </a>
                                    <span>plumber, carpenter, repairment</span>
                                    <div class="eco-project-image-popup">
                                        <a class="project-image-popup" href="{{asset('Frontend')}}/assets/image/projects/port-5.jpg"><span class="fas fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single feature end-->
                        <!--Single feature start-->
                        <div class="mix builder wow slideInLeft">
                            <div class="item eco-single-feature" style="background:url('{{asset('Frontend')}}/assets/image/projects/port-6.jpg') no-repeat scroll center center / cover">
                                <div class="eco-single-feature-body">
                                    <a href="#">
                                        <h5>Project title</h5>
                                    </a>
                                    <span>builder</span>
                                    <div class="eco-project-image-popup">
                                        <a class="project-image-popup" href="{{asset('Frontend')}}/assets/image/projects/port-6.jpg"><span class="fas fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single feature end-->
                        <!--Single feature start-->
                        <div class="mix architechture carpenter construction wow slideInRight">
                            <div class="item eco-single-feature" style="background:url('{{asset('Frontend')}}/assets/image/projects/port-7.jpg') no-repeat scroll center center / cover">
                                <div class="eco-single-feature-body">
                                    <a href="#">
                                        <h5>Project title</h5>
                                    </a>
                                    <span>architechture, construction</span>
                                    <div class="eco-project-image-popup">
                                        <a class="project-image-popup" href="{{asset('Frontend')}}/assets/image/projects/port-7.jpg"><span class="fas fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single feature end-->
                        <!--Single feature start-->
                        <div class="mix builder repairment plumber architechture wow slideInUp">
                            <div class="item eco-single-feature" style="background:url('{{asset('Frontend')}}/assets/image/projects/port-2.jpg') no-repeat scroll center center / cover">
                                <div class="eco-single-feature-body">
                                    <a href="#">
                                        <h5>Project title</h5>
                                    </a>
                                    <span>builder, repairment, plumber</span>
                                    <div class="eco-project-image-popup">
                                        <a class="project-image-popup" href="{{asset('Frontend')}}/assets/image/projects/port-2.jpg"><span class="fas fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single feature end-->
                        <!--Single feature start-->
                        <div class="mix builder construction plumber wow slideInLeft">
                            <div class="item eco-single-feature mix builder construction plumber" style="background:url('{{asset('Frontend')}}/assets/image/projects/port-5.jpg') no-repeat scroll center center / cover">
                                <div class="eco-single-feature-body">
                                    <a href="#">
                                        <h5>Project title</h5>
                                    </a>
                                    <span>builder, construction, plumber</span>
                                    <div class="eco-project-image-popup">
                                        <a class="project-image-popup" href="{{asset('Frontend')}}/assets/image/projects/port-5.jpg"><span class="fas fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single feature end-->
                    </div>
                </div>
            </div>
        </div>
        <!--Feature content area end-->
    </section>
    <!--Featured project area end-->
@endsection
