@extends('Frontend.layouts.master')
@section('title') {{'Privacy Policy'}} @endsection
@section('main-container')

    <!--Breadcum area start-->
    <section class="eco-breadcum-area-start df-pad" style="background:url('{{asset('Frontend')}}/assets/image/breadcum/breadcum.jpg') no-repeat scroll center center / cover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="eco-breadcum-content-area text-center text-light">
                        <h2>Our <span class="custom-color">Privacy Policy</span></h2>
                        <ul class="eco-breadcum">
                            <li><a href={{url('/')}}index-2.html"><span class="fas fa-home"></span> Home</a></li>
                            <li>/ Privacy Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Breadcum area end-->

    <!-- Blank page area start -->
    <div class="eco-blank-page-area-start df-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>No Privacy Policy!!!</h2> <br>
                    <a href="{{url('/')}}" class="df-btn">Go to homepage</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Blank page area end -->
@endsection
