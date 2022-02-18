<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Favicons-->
    <link rel="shout-icon" href="{{asset('Frontend')}}/assets/image/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('Frontend')}}/assets/image/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('Frontend')}}/assets/image/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('Frontend')}}/assets/image/favicons/favicon-16x16.png">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', ' Peindia Trust') }} | | @yield('title') </title>


    <!--Fontawesome CSS-->
    <link rel="stylesheet" href="{{asset('Frontend')}}/assets/css/plugins/fontawesome/all.min.css">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('Frontend')}}/assets/css/plugins/bootstrap/bootstrap.min.css">
    <!--Owl-Carousel CSS-->
    <link rel="stylesheet" href="{{asset('Frontend')}}/assets/css/plugins/owl-carousel/owl.carousel.min.css">
    <!--Owl-theme CSS-->
    <link rel="stylesheet" href="{{asset('Frontend')}}/assets/css/plugins/owl-carousel/owl.theme.default.min.css">
    <!--Animate CSS-->
    <link rel="stylesheet" href="{{asset('Frontend')}}/assets/css/plugins/animate/animate.min.css">
    <!--Slick-Nav CSS-->
    <link rel="stylesheet" href="{{asset('Frontend')}}/assets/css/plugins/slicknav/slicknav.min.css">
    <!--Magnific CSS-->
    <link rel="stylesheet" href="{{asset('Frontend')}}/assets/css/plugins/magnific/magnific-popup.css">
    <!--Style CSS (Add your custom CSS style to this file)-->
    <link rel="stylesheet" href="{{asset('Frontend')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('Frontend')}}/assets/css/donate.css">

    <!--Responsive CSS (Add your custom responsive CSS style to this file)-->
    <link rel="stylesheet" href="{{asset('Frontend')}}/assets/css/responsive.css">
</head>

<body>
<!--Pre-Loader area start-->
<div class="loader-bg">
    <div class="loader"></div>
</div>
<!--Pre-Loader area end-->

<!--Responsive Mobile-menu prepend start-->
<div class="responsive-mobile-menu-area">
    <div class="eco-logo-area">
        <a href="{{url('/')}}">
            <img src="{{asset('Frontend')}}/assets/image/logo/logo.png" alt="Offical-Logo"></a>
    </div>
    <div class="responsive-mobile-menu"></div>
</div>
<!--Responsive Mobile-menu prepend end-->


<!--Pre-Header area start-->
{{--<div class="eco-pre-header-area-start">
    <div class="container">
        <div class="row">
            <!--Official contact start-->
            <div class="col-md-7">
                <div class="eco-official-contact-area">
                    <ul class="eco-official-contact">
                        <li><span class="fas fa-map-marker-alt"></span>Kamrup Guwahti Assam</li>
                        <li><a href="tel:7030305080"><span class="fas fa-phone-alt"></span> +91-7030305080</a></li>
                    </ul>
                </div>
            </div>
            <!--Official contact end-->
            <!--Social Icon start-->
            <div class="col-md-5">
                <div class="eco-social-icon-area">
                    <ul class="eco-social-icon">
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-whatsapp-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-square"></span></a></li>
                    </ul>
                </div>
            </div>
            <!--Social Icon end-->
        </div>
    </div>
</div>--}}
<!--Pre-Header area end-->
<!--Header area start-->
<header class="eco-header-area-start">
    <!--Header content start-->
    <div class="eco-header-content-area-start">
        <div class="container">
            <div class="row d-flex align-items-center">
                <!--Logo area start-->
                <div class="col-md-3">
                    <div class="eco-logo-area">
                        <a href="{{url('/')}}">
                            <img src="{{asset('Frontend')}}/assets/image/logo/logo.png" alt="Offical-Logo"></a>
                    </div>
                </div>
                <!--Logo area end-->
                <!--Location area start-->
                <div class="col-md-3">
                    <div class="eco-touch-area d-flex align-items-center">
                        <div class="eco-touch-icon"><span class="fas fa-landmark"></span></div>
                        <div class="eco-touch-eontent">
                            <strong>73/A Landmark</strong>
                            <span>H.NO.41, Sixmaile Panjabari Road, Kamrup Guwahti Assam,- 781022 </span>
                        </div>
                    </div>
                </div>
                <!--Location area end-->
                <!--Email area start-->
                <div class="col-md-3">
                    <div class="eco-touch-area d-flex align-items-center">
                        <div class="eco-touch-icon"><span class="far fa-envelope"></span></div>
                        <div class="eco-touch-eontent">
                            <a href="mailto:root@example.com">
                                <strong>Email Address</strong>
                                <span>support@peindiatrust.in</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Email area end-->
                <!--Office Hour area start-->
                <div class="col-md-3">
                    <div class="eco-touch-area d-flex align-items-center">
                        <div class="eco-touch-icon"><span class="far fa-clock"></span></div>
                        <div class="eco-touch-eontent">
                            <strong>Mon - Sun 8.00 - 18.00</strong>
                        </div>
                    </div>
                </div>
                <!--Office Hour area end-->
            </div>
        </div>
    </div>
    <!--Header content end-->
    <!--Header menu area start-->
    <div class="eco-header-menu-area-start">
        <div class="container">
            <div class="row">
                <nav class="eco-main-menu-navigation d-flex justify-content-between sticky shadow-lg">
                    <!--Left menu start-->
                    <div class="eco-menu-left">
                        <ul class="eco-nav-main-menu" id="mobile-menu">
                            <li><a href="{{url('/')}}" class="active">Home</a></li>
                            <li><a href="{{url('/about')}}">About</a></li>
                            <li><a href="{{url('/services')}}">Social services</a></li>
                            <li><a href="#">Donate <span class="fas fa-angle-down"></span></a>
                                <ul class="eco-dropdown-menu">
                                    <li><a href="{{url('/comming')}}">By NetBanking</a></li>
                                    <li><a href="{{url('/comming')}}">By Debit/Credit Card</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Our Program <span class="fas fa-angle-down"></span></a>
                                <ul class="eco-dropdown-menu">
                                    <li><a href="{{url('/prgghy')}}">Guwahati</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/blog')}}">Blog</a></li>
                            <li><a href="{{url('/ourteam')}}">Team</a></li>
                            <li><a href="{{url('/contact')}}">contact us</a></li>
                        </ul>
                    </div>
                    <!--Left menu end-->
                    <!--Right menu start-->
                    <div class="eco-right-menu">
                        <ul class="eco-nav-main-menu">
                            <li><a href="{{url('/donate')}}" class="active">Donate</a></li>
                        </ul>
                    </div>
                    <!--Right menu end-->
                </nav>
            </div>
        </div>
    </div>
    <!--Header menu area end-->
</header>
<!--Header area end-->
