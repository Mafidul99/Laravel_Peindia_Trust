@extends('Frontend.layouts.master')
@section('title') {{'About Us'}} @endsection
@section('main-container')
    <!--Breadcum area start-->
    <section class="eco-breadcum-area-start df-pad" style="background:url('{{asset('Frontend')}}/assets/image/breadcum/breadcum.jpg') no-repeat scroll center center / cover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="eco-breadcum-content-area text-center text-light">
                        <h2>About <span class="custom-color">us</span></h2>
                        <ul class="eco-breadcum">
                            <li><a href="{{url('/')}}"><span class="fas fa-home"></span> Home</a></li>
                            <li>/ About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Breadcum area end-->

    <!--History area start-->
    <section class="eco-history-area-strt df-pad">
        <!--Project title area start-->
        <div class="eco-project-title-area-start">
            <div class="container">
                <div class="row">
                    <div class="eco-project-title-area">
                        <img src="{{asset('Frontend')}}/assets/image/title.png" alt="title-image">
                        <h4>Company <span class="custom-color">History</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <!--Project title area end-->
        <!--History content start-->
        <div class="eco-history-content-start">
            <div class="container">
                <div class="row">
                    <!--Single history part start-->
                    <div class="col-lg-3 col-md-4">
                        <div class="eco-single-history-part wow fadeInUp shadow-lg" data-wow-duration="0.6s">
                            <h5>Company Plan</h5>
                            <p>Expedita minus tempora odit mollitia ipsa deserunt voluptate, molestiae amet laboriosam qui natus a repellendus, architecto voluptatum. Alias soluta id nobis perferendis in eos, temporibus, inventore illum accusantium ex, maxime porro hic iusto earum quasi sapiente quisquam? Consectetur iure consequuntur laudantium error ipsam veniam qui ipsa doloribus, sit accusamus, dolorum quas est.</p>
                        </div>
                    </div>
                    <!--Single history part end-->
                    <!--Single history part start-->
                    <div class="col-lg-3 col-md-4">
                        <div class="eco-single-history-part wow fadeInUp shadow-lg" data-wow-duration="1.2s">
                            <h5>Company startup</h5>
                            <p>Commodi, cum reiciendis aliquam sunt temporibus sint debitis architecto culpa molestias dolor id reprehenderit est in deserunt, sapiente quis ipsa nihil impedit numquam. Repudiandae beatae dolor error quasi illum ipsam quibusdam sed? Ratione repellendus nisi molestiae libero minima architecto impedit, voluptate nostrum consectetur. Obcaecati, ab assumenda at veritatis itaque, molestias architecto non!</p>
                        </div>
                    </div>
                    <!--Single history part end-->
                    <!--Single history part start-->
                    <div class="col-lg-3 col-md-4">
                        <div class="eco-single-history-part wow fadeInUp shadow-lg" data-wow-duration="1.8s">
                            <h5>Company Journey</h5>
                            <p>Veniam reprehenderit temporibus iste, culpa recusandae dicta cumque, incidunt facere voluptatum quisquam odit, nobis. Facere exercitationem dolorum ducimus, molestiae modi maiores recusandae. Sint adipisci illo inventore voluptatem consectetur quis hic eius id sunt reiciendis, aperiam deserunt et impedit facilis eum ut beatae optio! Voluptatem possimus, voluptatum ad eos tenetur ipsam! Fugiat, quo!</p>
                        </div>
                    </div>
                    <!--Single history part end-->
                    <!--Single history part start-->
                    <div class="col-lg-3 col-md-4">
                        <div class="eco-single-history-part wow fadeInUp shadow-lg" data-wow-duration="2.4s">
                            <h5>Now present</h5>
                            <p>Officiis numquam quam exercitationem corrupti alias nihil iste dicta. Repudiandae facilis, quod in molestias deleniti, voluptas praesentium necessitatibus labore iste. Magni porro earum, animi excepturi impedit. Recusandae incidunt, error obcaecati! Cum molestias temporibus, inventore rerum commodi deserunt nam illum animi, expedita atque voluptas sit ex nostrum voluptate earum quia labore</p>
                        </div>
                    </div>
                    <!--Single history part end-->
                </div>
            </div>
        </div>
        <!--History content end-->
    </section>
    <!--History area end-->



    <!--About area start-->
    <div class="eco-about-area-start df-pad">
        <!--Pre About content start-->
        <div class="eco-pre-about-area-start">
            <div class="container">
                <div class="row">
                    <!--About content start-->
                    <div class="col-md-6 wow slideInLeft">
                        <div class="eco-about-content-body">
                            <img class="title-image" src="{{asset('Frontend')}}/assets/image/title.png" alt="title-image">
                            <h4>About <span class="custom-color">us</span></h4>
                            <h3>Welcome to our construction services</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate dolor facere fuga ipsa, nesciunt numquam at consequuntur quia nulla dolore similique tenetur laudantium, voluptas! Fugit.</p>
                            <ul>
                                <li>Quisquam vel, eveniet vitae repellat fugiat, minima!</li>
                                <li>Distinctio, labore eveniet quasi odit accusantium.</li>
                                <li>Exercitationem, culpa in tenetur repellat, reprehenderit.</li>
                                <li>Saepe aut sunt sit deserunt quia vitae voluptas.</li>
                                <li>Quasi cumque, quae corrupti nobis.</li>
                                <li>Dignissimos assumenda libero atque eius velit ratione?</li>
                                <li>Officiis ducimus delectus ullam deserunt hic?</li>
                                <li>Odio itaque modi officia fuga alias, saepe quia impedit!</li>
                            </ul>
                        </div>
                    </div>
                    <!--About content end-->
                    <div class="col-md-6  wow slideInRight">
                        <div class="eco-about-slider-active owl-carousel owl-theme">
                            <!--About single slider start-->
                            <div class="eco-about-single-slider" style="background:url('{{asset('Frontend')}}/assets/image/about/about-1.jpg') no-repeat scroll center center / cover"></div>
                            <!--About single slider end-->

                            <!--About single slider start-->
                            <div class="eco-about-single-slider" style="background:url('{{asset('Frontend')}}/assets/image/about/about-2.jpg') no-repeat scroll center center / cover"></div>
                            <!--About single slider end-->

                            <!--About single slider start-->
                            <div class="eco-about-single-slider" style="background:url('{{asset('Frontend')}}/assets/image/about/about-3.jpg') no-repeat scroll center center / cover"></div>
                            <!--About single slider end-->

                            <!--About single slider start-->
                            <div class="eco-about-single-slider" style="background:url('{{asset('Frontend')}}/assets/image/about/about-4.jpg') no-repeat scroll center center / cover"></div>
                            <!--About single slider end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Pre About content end-->
        <!--About main content start-->
        <div class="eco-about-main-content">
            <div class="container">
                <div class="row">
                    <!--Single about main content start-->
                    <div class="col-lg-3 col-md-4">
                        <div class="eco-single-about-main-content  wow slideInUp shadow-lg">
                            <div class="eco-single-about-image" style="background:url('{{asset('Frontend')}}/assets/image/about/about-1.jpg') no-repeat scroll center center / cover">
                                <a href="#" class="hyper-link"><span class="fas fa-link"></span></a>
                            </div>
                            <div class="eco-single-about-content-body">
                                <a href="#">
                                    <h5>Inovation</h5>
                                </a>
                                <p>Provident eligendi reiciendis nobis aspernatur non officia iure alias quod maxime, eum accusantium, similique iusto recusandae aperiam nemo repellat harum tempora, assumenda!</p>
                                <a href="#" class="df-link">read more</a>
                            </div>
                        </div>
                    </div>
                    <!--Single about main content end-->
                    <!--Single about main content start-->
                    <div class="col-lg-3 col-md-4">
                        <div class="eco-single-about-main-content  wow slideInRight shadow-lg">
                            <div class="eco-single-about-image" style="background:url('{{asset('Frontend')}}/assets/image/about/about-2.jpg') no-repeat scroll center center / cover">
                                <a href="#" class="hyper-link"><span class="fas fa-link"></span></a>
                            </div>
                            <div class="eco-single-about-content-body">
                                <a href="#">
                                    <h5>Builders</h5>
                                </a>
                                <p>Consectetur adipisicing elit. Quam voluptatum dicta aliquid nesciunt placeat, blanditiis, sapiente, ipsum repudiandae non neque reiciendis, maxime officiis ratione incidunt.</p>
                                <a href="#" class="df-link">read more</a>
                            </div>
                        </div>
                    </div>
                    <!--Single about main content end-->
                    <!--Single about main content start-->
                    <div class="col-lg-3 col-md-4">
                        <div class="eco-single-about-main-content  wow slideInLeft shadow-lg">
                            <div class="eco-single-about-image" style="background:url('{{asset('Frontend')}}/assets/image/about/about-3.jpg') no-repeat scroll center center / cover">
                                <a href="#" class="hyper-link"><span class="fas fa-link"></span></a>
                            </div>
                            <div class="eco-single-about-content-body">
                                <a href="#">
                                    <h5>Architechture</h5>
                                </a>
                                <p>Esse ut doloribus similique at ullam optio, aliquid enim nihil rerum, laboriosam accusantium eos ab qui voluptatibus. Quia perspiciatis officiis dolor dolore voluptatem nihil</p>
                                <a href="#" class="df-link">read more</a>
                            </div>
                        </div>
                    </div>
                    <!--Single about main content end-->
                    <!--Single about main content start-->
                    <div class="col-lg-3 col-md-4">
                        <div class="eco-single-about-main-content  wow slideInUp shadow-lg">
                            <div class="eco-single-about-image" style="background:url('{{asset('Frontend')}}/assets/image/about/about-4.jpg') no-repeat scroll center center / cover">
                                <a href="#" class="hyper-link"><span class="fas fa-link"></span></a>
                            </div>
                            <div class="eco-single-about-content-body">
                                <a href="#">
                                    <h5>Construction</h5>
                                </a>
                                <p>Laudantium repellendus numquam debitis facilis aliquid aut molestiae provident commodi voluptatum ducimus accusantium fugiat nobis est possimus quis itaque dignissimos.</p>
                                <a href="#" class="df-link">read more</a>
                            </div>
                        </div>
                    </div>
                    <!--Single about main content end-->
                </div>
            </div>
        </div>
        <!--About main content end-->
    </div>
    <!--About area end-->
@endsection
