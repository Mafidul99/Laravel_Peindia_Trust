@extends('Frontend.layouts.master')
@section('title') {{'Contact Us'}} @endsection
@section('main-container')
    <!--Breadcum area start-->
    <section class="eco-breadcum-area-start df-pad" style="background:url('{{asset('Frontend')}}/assets/image/breadcum/breadcum.jpg') no-repeat scroll center center / cover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="eco-breadcum-content-area text-center text-light">
                        <h2>Contact <span class="custom-color">Us</span></h2>
                        <ul class="eco-breadcum">
                            <li><a href="{{url('/')}}"><span class="fas fa-home"></span> Home</a></li>
                            <li>/ Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Breadcum area end-->
    <!--Contact area start-->
    <div class="eco-contact-area-start df-pad">
        <div class="container">
            <div class="row">
                <!--Contact address area start-->
                <div class="col-md-4">
                    <div class="eco-contact-address">
                        <h5>Contact Us</h5>
                        <p>Tenetur, vero. Nam dolorem ipsa, quo, asperiores ut, laboriosam nulla sapiente at rerum soluta magnam voluptatibus esse! Eligendi, beatae, voluptates. Praesentium optio id quisquam.</p>
                        <h5>Address</h5>
                        <p>2542, 70/A United Kingdom, WI 1524154</p>
                        <h5>Phone</h5>
                        <p>(201) 142 142 11</p>
                        <h5>Email</h5>
                        <p>info@example.com</p>
                        <h5>Skypee</h5>
                        <p>skyuser</p>
                    </div>
                </div>
                <!--Contact address area start-->
                <!--Contact form area start-->
                <div class="col-md-8">
                    <div class="eco-contact-form-area">
                        <h5>Send Us an Email</h5>
                        <p>Animi tempora quae similique, veniam dolor libero natus sed mollitia sapiente vel aspernatur iste dicta. Optio dignissimos perspiciatis eligendi, accusamus laboriosam consequatur.</p>
                        <form action="#" method="POST" id="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="uname" id="uname" placeholder="Enter your name" autocomplete="off" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="email" id="email" placeholder="Enter your email" autocomplete="off" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="phone" id="phone" placeholder="Enter your phone" autocomplete="off" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="subject" id="subject" placeholder="Enter your subject" autocomplete="off" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                                    <button type="button" onClick="sendContact();" class="df-btn">send message</button>
                                    <div class="mt-4 text-uppercase custom-color text-center" id="mail-status"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--Contact form area end-->
            </div>
        </div>
    </div>
    <!--Contact area end-->
@endsection
