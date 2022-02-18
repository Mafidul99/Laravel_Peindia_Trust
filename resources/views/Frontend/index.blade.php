@extends('Frontend.layouts.master')
@section('title') {{'Home'}} @endsection
@section('main-container')
    <!--Slider area start-->
    <section class="eco-slider-area-start owl-carousel owl-theme">
        <!--Single slider start-->
        <div class="eco-single-slider-area" style="background:url('{{asset('Frontend')}}/assets/image/main-slider/slider-1.jpg') no-repeat scroll center center / cover">
            <div class="eco-slingle-slider-content">
                <h1>Style up your <span class="custom-color">business</span> strategy</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda possimus cupiditate odit eos sequi soluta.</p>
                <a href="{{url('/donate')}}" class="df-btn">Donate New <i class="fas fa-donate"></i></a>
            </div>
        </div>
        <!--Singel slider end-->
        <!--Single slider start-->
        <div class="eco-single-slider-area" style="background:url('{{asset('Frontend')}}/assets/image/main-slider/slider-2.jpg') no-repeat scroll center center / cover">
            <div class="eco-slingle-slider-content">
                <h1>The best construction <span class="custom-color">management</span> team</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque odio similique, eligendi modi, eum cum!</p>
                <a href="{{url('/donate')}}" class="df-btn">Donate New <i class="fas fa-donate "></i></a>
            </div>
        </div>
        <!--Singel slider end-->
        <!--Single slider start-->
        <div class="eco-single-slider-area" style="background:url('{{asset('Frontend')}}/assets/image/main-slider/slider-3.jpg') no-repeat scroll center center / cover">
            <div class="eco-slingle-slider-content">
                <h1>We are professional <span class="custom-color">constructor</span></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam sit nemo illo nihil facere ratione..</p>
                <a href="{{url('/donate')}}" class="df-btn">Donate New <i class="fas fa-donate"></i></a>
            </div>
        </div>
        <!--Single slider end-->
    </section>
    <!--Slider area end-->
    <!--Project CTA area start-->
    <section class="eco-project-cta-area-start df-pad custom-bg">
        <div class="container">
            <div class="row">
                <!-------Project cta content start--------->
                <div class="col-md-9">
                    <div class="eco-project-cta-content-body d-md-flex justify-content-between align-items-center">
                        <div class="eco-project-cta-content">
                            <h3>Contribute generously and give wings to our mission of feeding, educating, and empowering the underprivileged children</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="eco-peject-cta-btn">
                        <a href="{{url('/donate')}}" class="btn btn-success df-btn3">
                            <i class="fas fa-donate"></i> Donate now</a>
                    </div>
                </div>
            </div>
            <!----------Project cta content start---------->
        </div>
        </div>
    </section>
    <!--Project CTA area end-->
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
                            <h3>Welcome to our Peindia Turst</h3>
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
                                <p>Laudantium repellendus numquam debitis facilis aliquid aut molestiae provident commodi voluptatum ducimus accusantium fugiat nobis est possimus quicol-lg-3 s itaqu4.</p>
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

    <!--Why choose area start-->
    <section class="eco-why-choose-area-start">
        <!--Project title area start-->
        <div class="eco-project-title-area-start">
            <div class="container">
                <div class="row">
                    <div class="eco-project-title-area">
                        <img src="{{asset('Frontend')}}/assets/image/title.png" alt="title-image">
                        <h4>Why <span class="custom-color">choose us</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <!--Project title area end-->
        <!--Why choose body start-->
        <div class="eco-why-choose-body">
            <div class="container">
                <div class="row">
                    <!--Single Choose area start-->
                    <div class="col-lg-3 col-md-4">
                        <div class="eco-single-choose-area  wow slideInUp shadow-lg">
                            <img class="img" src="{{asset('Frontend')}}/assets/image/helth.png" alt="helth logo">

                            <h5>Health & Nutrition</h5>
                            <p>Awareness about some of the deadliest diseases like AIDs, cancer and HIV is created amongst the people by running and setting up camps all through the country..</p>
                        </div>
                    </div>
                    <!--Single Choose area end-->
                    <!--Single Choose area start-->
                    <div class="col-lg-3 col-md-4">
                        <div class="eco-single-choose-area  wow slideInRight shadow-lg">
                            <img class="img" src="{{asset('Frontend')}}/assets/image/eduction.png" alt="edu logo">
                            <h5>Education</h5>
                            <p>Save the Children helps children with the donation money and provides them access to quality education. Visit the website to read about what we do for children’s education.</p>
                        </div>
                    </div>
                    <!--Single Choose area end-->
                    <!--Single Choose area start-->
                    <div class="col-lg-3 col-md-4">
                        <div class="eco-single-choose-area  wow slideInLeft shadow-lg">
                            <img class="img" src="{{asset('Frontend')}}/assets/image/hydrean-280x280.png" alt="hygoin logo">
                            <h5>Hygiene Program </h5>
                            <p>Children have the right to a healthy, happy and fulfilling life. Donate Money & Support Charity to Keep children safe & free from harm. You can also donate online to support a Child Protection Programme.</p>
                        </div>
                    </div>
                    <!--Single Choose area end-->
                    <!--Single Choose area start-->
                    <div class="col-lg-3 col-md-4">
                        <div class="eco-single-choose-area  wow slideInDown shadow-lg">
                            <img class="img" src="{{asset('Frontend')}}/assets/image/24_70.png" alt="hygoin logo">
                            <h5>24/7 days emergency Supports</h5>
                            <p>Eveniet quibusdam consequatur accusamus voluptatem non sed voluptates modi, magnam ducimus quasi praesentium ullam maiores. Porro accusantium tempore autem.</p>
                        </div>
                    </div>
                    <!--Single Choose area end-->
                    <!--Single Choose area start-->
                    <div class="col-lg-3 col-md-4">
                        <div class="eco-single-choose-area  wow slideInLeft shadow-lg">
                            <span class="far fa-smile"></span>
                            <h5>Satisfaction Guarantee</h5>
                            <p>Aspernatur temporibus natus consectetur est, delectus fugit facere doloremque assumenda repellendus. Distinctio laborum ipsam, ratione tempore placeat. Eveniet perferendis nobis.</p>
                        </div>
                    </div>
                    <!--Single Choose area end-->
                    <!--Single Choose area start-->
                    <div class="col-lg-3 col-md-4">
                        <div class="eco-single-choose-area  wow slideInUp shadow-lg">
                            <span class="far fa-clock"></span>
                            <h5>Quick and highly response</h5>
                            <p>Praesentium incidunt reprehenderit id, doloribus repellendus dolorum hic ea molestiae impedit quo? Neque, id. Eveniet fugit dignissimos at fugiat doloribus quidem eaque nemo totam.</p>
                        </div>
                    </div>
                    <!--Single Choose area end-->
                    <!--Single Choose area start-->
                    <div class="col-lg-3 col-md-4">
                        <div class="eco-single-choose-area  wow slideInDown shadow-lg">
                            <span class="far fa-smile"></span>
                            <h5>Satisfaction Guarantee</h5>
                            <p>Quo harum ipsum hic nemo quibusdam omnis quam. Fugit amet non sunt iure possimus labore dolore adipisci, modi suscipit ipsum explicabo quos provident maiores exercitationem et ipsa harum!</p>
                        </div>
                    </div>
                    <!--Single Choose area end-->
                    <!--Single Choose area start-->
                    <div class="col-lg-3 col-md-4">
                        <div class="eco-single-choose-area  wow slideInRight shadow-lg">
                            <span class="fas fa-landmark"></span>
                            <h5>Professional Approch</h5>
                            <p>Expedita quis placeat fugiat officia assumenda porro maiores facere vero autem amet exercitationem nostrum ullam corrupti nesciunt aspernatur, soluta doloremque veritatis ea ratione quo harum.</p>
                        </div>
                    </div>
                    <!--Single Choose area end-->
                </div>
            </div>
        </div>
        <!--Why choose body end-->
    </section>
    <!--Why choose area end-->

    <!--Project counter area start-->
    <section class="eco-project-counter-area-start df-pad">
        <div class="container">
            <div class="row">
                <!--Single project counter start-->
                <div class="col-lg-3 col-md-6">
                    <div class="eco-single-project-counter media  wow slideInUp shadow">
                        <div class="post-thumb media-left align-self-center">
                            <span class="fas fa-tasks mr-3"></span>
                        </div>
                        <div class="media-body">
                            <span class="counter">500</span>
                            <h5>project completed</h5>
                        </div>
                    </div>
                </div>
                <!--Single project counter end-->
                <!--Single project counter start-->
                <div class="col-lg-3 col-md-6">
                    <div class="eco-single-project-counter media  wow slideInRight shadow">
                        <div class="post-thumb media-left align-self-center">
                            <span class="far fa-user mr-3"></span>
                        </div>
                        <div class="media-body">
                            <span class="counter">850</span>
                            <h5>Expart Worker</h5>
                        </div>
                    </div>
                </div>
                <!--Single project counter end-->
                <!--Single project counter start-->
                <div class="col-lg-3 col-md-6">
                    <div class="eco-single-project-counter media  wow slideInLeft shadow">
                        <div class="post-thumb media-left align-self-center">
                            <span class="fas fa-award mr-3"></span>
                        </div>
                        <div class="media-body">
                            <span class="counter">120</span>
                            <h5>Award Wining</h5>
                        </div>
                    </div>
                </div>
                <!--Single project counter end-->
                <!--Single project counter start-->
                <div class="col-lg-3 col-md-6">
                    <div class="eco-single-project-counter media  wow slideInUp shadow">
                        <div class="post-thumb media-left align-self-center">
                            <span class="fas fa-layer-group mr-3"></span>
                        </div>
                        <div class="media-body">
                            <span class="counter">25</span>
                            <h5>Working Experiences</h5>
                        </div>
                    </div>
                </div>
                <!--Single project counter end-->
            </div>
        </div>
    </section>
    <!--Project counter area end-->

    <!--Services area start-->
    <section class="eco-services-area-start  df-pad">
        <!--Project title area start-->
        <div class="eco-project-title-area-start">
            <div class="container">
                <div class="row">
                    <div class="eco-project-title-area">
                        <img src="{{asset('Frontend')}}/assets/image/title.png" alt="title-image">
                        <h4>Our <span class="custom-color">Services</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <!--Project title area end-->
        <!--Services content body start-->
        <div class="eco-services-content-body-start">
            <div class="container">
                <div class="row">
                    <!--Single Service area start-->
                    <div class="col-lg-4 col-md-6">
                        <div class="eco-single-services-content  wow slideInRight shadow-lg">
                            <div class="eco-services-single-image">
                                <a href="#"><img src="{{asset('Frontend')}}/assets/image/services/services-2.jpg" alt="Service-image"></a>
                            </div>
                            <div class="eco-services-single-body">
                                <a href="#">
                                    <h5>Design and Build up</h5>
                                </a>
                                <p>Consectetur adipisicing elit. Suscipit ducimus sequi tempore, officiis nesciunt aliquam architecto vero iure alias cum dolores porro sint eaque, sapiente delectus. Repellendus nostrum rerum odio earum qui magni nesciunt
                                    quibusdam rem iusto. Debitis reiciendis, nulla eius architecto amet illo, doloremque voluptas vel est eaque nostrum deleniti id sint quasi. Animi sint delectus.</p>
                                <a href="#" class="df-link">read more</a>
                            </div>
                        </div>
                    </div>
                    <!--Single Service area end-->
                    <!--Single Service area start-->
                    <div class="col-lg-4 col-md-6">
                        <div class="eco-single-services-content  wow slideInLeft shadow-lg">
                            <div class="eco-services-single-image">
                                <a href="#"><img src="{{asset('Frontend')}}/assets/image/services/services-1.jpg" alt="service-image"></a>
                            </div>
                            <div class="eco-services-single-body">
                                <a href="#">
                                    <h5>Design and Build up</h5>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis ad aliquid modi delectus quas, minus, consequatur id corrupti tempora cumque. Consectetur quasi, labore necessitatibus pariatur obcaecati quaerat, porro delectus
                                    eos inventore ipsam similique voluptate tempore maiores incidunt vitae impedit, nisi sint! Quod delectus dolor quam sequi in! Alias odio.</p>
                                <a href="#" class="df-link">read more</a>
                            </div>
                        </div>
                    </div>
                    <!--Single Service area end-->
                    <!--Single Service area start-->
                    <div class="col-lg-4 col-md-12">
                        <div class="eco-single-services-content">
                            <ul class="service-lists">
                                <!--Single service list strat-->
                                <li class="wow slideInUp shadow">
                                    <div class="service-image">
                                        <a href="#"><img src="{{asset('Frontend')}}/assets/image/services/recent-posts/recent-post-1.png" alt="service-image"></a>
                                    </div>
                                    <div class="service-content">
                                        <a href="#">
                                            <h6>Design and build</h6>
                                        </a>
                                        <p>Aliquam, exercitationem reiciendis suscipit nostrum velit quia enim porro dolor. Cum dolores eos ab non.</p>
                                    </div>
                                </li>
                                <!--Single service list end-->
                                <!--Single service list strat-->
                                <li class="wow slideInDown shadow">
                                    <div class="service-image">
                                        <a href="#"><img src="{{asset('Frontend')}}/assets/image/services/recent-posts/recent-post-2.png" alt="service-image"></a>
                                    </div>
                                    <div class="service-content">
                                        <a href="#">
                                            <h6>Design and build</h6>
                                        </a>
                                        <p>Dolor ab, molestias harum cumque sint temporibus quod modi, accusantium, totam facere maiores.</p>
                                    </div>
                                </li>
                                <!--Single service list end-->
                                <!--Single service list strat-->
                                <li class="wow slideInUp shadow">
                                    <div class="service-image">
                                        <a href="#"><img src="{{asset('Frontend')}}/assets/image/services/recent-posts/recent-post-1.png" alt="service-image"></a>
                                    </div>
                                    <div class="service-content">
                                        <a href="#">
                                            <h6>Design and build</h6>
                                        </a>
                                        <p>Consectetur aut asperiores cum illo minus dicta facilis, laudantium doloremque hic. Ex alias illo.</p>
                                    </div>
                                </li>
                                <!--Single service list end-->
                                <!--Single service list strat-->
                                <li class="wow slideInDown shadow">
                                    <div class="service-image">
                                        <a href="#"><img src="{{asset('Frontend')}}/assets/image/services/recent-posts/recent-post-2.png" alt="service-image"></a>
                                    </div>
                                    <div class="service-content">
                                        <a href="#">
                                            <h6>Design and build</h6>
                                        </a>
                                        <p>Corrupti, eum voluptatem dolor quasi repellendus delectus cupiditate repellat incidunt.</p>
                                    </div>
                                </li>
                                <!--Single service list end-->
                            </ul>
                        </div>
                    </div>
                    <!--Single Service area end-->
                </div>
            </div>
        </div>
        <!--Services content body end-->
    </section>
    <!--Services area end-->
    <!--FAQ area start-->
    <section class="eco-faq-area-start df-pad">
        <div class="eco-project-title-area-start">
            <div class="container">
                <div class="row">
                    <div class="eco-project-title-area">
                        <img src="{{asset('Frontend')}}/assets/image/title.png" alt="title-image">
                        <h4>Frequently asked <span class="custom-color">questions</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <!--Project title area end-->
        <!--FAQ content body area start-->
        <div class="eco-faq-content-body-area">
            <div class="container">
                <div class="row">
                    <!--Single FAQ area start-->
                    <div class="col-md-6">
                        <div class="eco-single-faq-area-content">
                            <!--According area start-->
                            <div class="according" id="accordionExample">
                                <!--single faq start-->
                                <div class="card wow slideInLeft" data-wow-duration="0.8s">
                                    <div class="card-header">
                                        <a href="#" data-toggle="collapse" data-target="#first">1. How to contact with providers on ECO?</a>
                                    </div>
                                    <div id="first" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Consectetur adipisicing elit. Corporis, nostrum accusantium debitis. Nihil fugit quis ullam autem nam tempora perspiciatis assumenda repellat omnis perferendis soluta, quae pariatur reprehenderit id iusto saepe
                                                nobis corrupti dolor quisquam recusandae voluptates. Alias labore dignissimos, deleniti temporibus odio, saepe tempore consectetur repellat dolorem nisi eius!</p>
                                        </div>
                                    </div>
                                </div>
                                <!--single faq end-->
                                <!--single faq start-->
                                <div class="card wow slideInLeft" data-wow-duration="1.4s">
                                    <div class="card-header">
                                        <a href="#" data-toggle="collapse" data-target="#second">2. How to write review on ECO?</a>
                                    </div>
                                    <div id="second" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Saepe totam provident explicabo, omnis veritatis quisquam, necessitatibus sint nemo porro magnam, ipsa incidunt vel labore. Illo commodi distinctio iusto officiis qui, ipsum eveniet delectus debitis eligendi
                                                ratione quos quibusdam deleniti amet illum, consequatur iure assumenda voluptate ex quasi cum. Esse eaque blanditiis doloribus, totam, architecto reiciendis eum expedita rem tenetur earum!</p>
                                        </div>
                                    </div>
                                </div>
                                <!--single faq end-->
                                <!--single faq start-->
                                <div class="card wow slideInLeft" data-wow-duration="2s">
                                    <div class="card-header">
                                        <a href="#" data-toggle="collapse" data-target="#third">3. How I can find a support from your team?</a>
                                    </div>
                                    <div id="third" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Molestias, dignissimos, ipsa! Omnis repellendus ratione similique at, cumque fugit expedita illo nihil cupiditate sunt quisquam quibusdam accusamus, corrupti animi? Repudiandae assumenda neque itaque, ipsa,
                                                quia, aperiam ea odit sint amet aliquid cum necessitatibus officiis magni illo?</p>
                                        </div>
                                    </div>
                                </div>
                                <!--single faq end-->
                                <!--single faq start-->
                                <div class="card wow slideInLeft" data-wow-duration="2.6s">
                                    <div class="card-header">
                                        <a href="#" data-toggle="collapse" data-target="#forth">4. What benefits that I will get when become provider?</a>
                                    </div>
                                    <div id="forth" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Aspernatur veniam enim ea ab quod optio, neque error asperiores numquam omnis voluptatibus dolorem eum, quis animi voluptatem, odio, iure similique soluta eveniet quos fuga autem vero! Nesciunt dicta at blanditiis
                                                iste repellat esse ex eligendi cupiditate molestias ullam! Quam dolor vitae necessitatibus repellat facilis in culpa eius repudiandae! Natus, voluptatibus, recusandae! Deserunt ea, velit voluptatibus nihil,
                                                recusandae illo pariatur inventore nisi quisquam reprehenderit modi veniam, doloribus error architecto dolorum quos molestiae?</p>
                                        </div>
                                    </div>
                                </div>
                                <!--single faq end-->
                            </div>
                            <!--According area end-->
                        </div>
                    </div>
                    <!--Single FAQ area end-->
                    <!--Single FAQ area start-->
                    <div class="col-md-6">
                        <div class="eco-single-faq-area-content">
                            <!--According area start-->
                            <div class="according" id="accordionExample1">
                                <!--single faq start-->
                                <div class="card wow slideInRight" data-wow-duration="0.8s">
                                    <div class="card-header">
                                        <a href="#" data-toggle="collapse" data-target="#five">5. How about secure and payment on ECO?</a>
                                    </div>
                                    <div id="five" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Veniam tenetur, at perspiciatis excepturi consectetur adipisci mollitia nesciunt aliquam nihil facere maiores suscipit neque quia, eaque! Vero dolorum debitis iure, itaque animi voluptas enim a nemo, inventore,
                                                dicta adipisci! Dolore in fuga temporibus sapiente rem, magnam expedita, saepe distinctio harum odit nobis facilis sequi nulla nemo quis assumenda officiis.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--single faq end-->
                                <!--single faq start-->
                                <div class="card wow slideInRight" data-wow-duration="1.4s">
                                    <div class="card-header">
                                        <a href="#" data-toggle="collapse" data-target="#six">6. How to become a provider on ECO?</a>
                                    </div>
                                    <div id="six" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Assumenda provident dicta nam facilis magnam ipsam, et obcaecati sapiente. Tempora voluptatum vel illo qui? Eos consequuntur rerum et. Suscipit porro sint, expedita nam laborum inventore at placeat delectus
                                                quidem minima officiis. Dolorum, explicabo qui modi odio, nostrum laboriosam minus. Rerum repellat voluptas necessitatibus amet maiores officia quidem debitis pariatur, corporis ratione iusto. Obcaecati,
                                                omnis incidunt. Laudantium natus voluptate iusto rem debitis.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--single faq end-->
                                <!--single faq start-->
                                <div class="card wow slideInRight" data-wow-duration="2s">
                                    <div class="card-header">
                                        <a href="#" data-toggle="collapse" data-target="#seven">7. How much comission that I have earn on ECO?</a>
                                    </div>
                                    <div id="seven" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Ullam quo officia odit, commodi beatae eveniet illo quasi. Commodi sequi accusamus laudantium ad eius est, reprehenderit maiores officiis nobis tempora iure officia enim saepe dignissimos culpa vel quam provident
                                                quidem, harum blanditiis autem. Impedit explicabo consequatur eligendi nihil earum sunt doloribus, neque sit illo, itaque laborum laudantium, ipsam nemo. Dolorum, repellendus.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--single faq end-->
                                <!--single faq start-->
                                <div class="card wow slideInRight" data-wow-duration="2.6s">
                                    <div class="card-header">
                                        <a href="#" data-toggle="collapse" data-target="#eight">8. When my listing has been reported by someone?</a>
                                    </div>
                                    <div id="eight" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Numquam sint consequuntur, reiciendis molestiae quam perspiciatis adipisci officiis, veritatis provident neque cupiditate laborum veniam mollitia omnis quos et, vero rerum accusantium dolores earum saepe laudantium
                                                quaerat. Minus illo eos recusandae sapiente.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--single faq end-->
                            </div>
                            <!--According area end-->
                        </div>
                    </div>
                    <!--Single FAQ area end-->
                </div>
            </div>
        </div>
        <!--FAQ content body area end-->
    </section>
    <!--FAQ area end-->
    <!--Featured project area start-->
    <section class="eco-featured-project-area-start df-pad">
        <!--Project title area start-->
        <div class="eco-project-title-area-start">
            <div class="container">
                <div class="row">
                    <div class="eco-project-title-area">
                        <img src="{{asset('Frontend')}}/assets/image/title.png" alt="title-image">
                        <h4>Our<span class="custom-color"> Program</span></h4>
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
    <!--Motivation area start-->
    <section class="eco-motivate-area-start df-pad custom-bg text-light">
        <div class="container">
            <div class="row">
                <!--Single motivate area end-->
                <div class="col-md-4">
                    <div class="eco-single-motivate-area-start wow slideInRight">
                        <h4 class="text-uppercase">How to starup?</h4>
                        <p>Officiis recusandae vero cum ipsam officia exercitationem! Tempore consectetur blanditiis, facilis sequi delectus veritatis nulla.</p>
                    </div>
                </div>
                <!--Single motivate area end-->
                <!--Single motivate area end-->
                <div class="col-md-4">
                    <div class="eco-single-motivate-area-start wow slideInUp">
                        <h4 class="text-uppercase">How to work?</h4>
                        <p>Iusto nihil itaque eligendi quas necessitatibus ea aperiam, corporis odit ut repudiandae dolorum, asperiores doloremque.</p>
                    </div>
                </div>
                <!--Single motivate area end-->
                <!--Single motivate area end-->
                <div class="col-md-4">
                    <div class="eco-single-motivate-area-start wow slideInLeft">
                        <h4 class="text-uppercase">How to professional?</h4>
                        <p>Consequuntur distinctio iusto illum reiciendis tenetur est laboriosam mollitia tempore! Corporis suscipit eveniet dolorum veritatis, ad minus.</p>
                    </div>
                </div>
                <!--Single motivate area end-->
            </div>
        </div>
    </section>
    <!--Motivation area end-->

    <!--Clients area start-->
    <section class="eco-testimonial-area-start df-pad">
        <!--Project title area start-->
        <div class="eco-project-title-area-start">
            <div class="container">
                <div class="row">
                    <div class="eco-project-title-area">
                        <img src="{{asset('Frontend')}}/assets/image/title.png" alt="title-image">
                        <h4>Our Awesome <span class="custom-color">Clients</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <!--Project title area end-->
        <!--Cleint content body area start-->
        <div class="eco-client-content-body-area">
            <div class="container">
                <div class="row">
                    <!--Clients Brand area start-->
                    <div class="col-md-6">
                        <div class="eco-client-brands">
                            <div class="row">
                                <!--Single client brand start-->
                                <div class="col-md-4">
                                    <div class="eco-single-client-brand wow slideInRight">
                                        <img src="{{asset('Frontend')}}/assets/image/brands/brand-1.png" alt="Brand-image">
                                    </div>
                                </div>
                                <!--Single client brand end-->
                                <!--Single client brand start-->
                                <div class="col-md-4">
                                    <div class="eco-single-client-brand wow slideInUp">
                                        <img src="{{asset('Frontend')}}/assets/image/brands/brand-2.png" alt="Brand-image">
                                    </div>
                                </div>
                                <!--Single client brand end-->
                                <!--Single client brand start-->
                                <div class="col-md-4">
                                    <div class="eco-single-client-brand wow slideInLeft">
                                        <img src="{{asset('Frontend')}}/assets/image/brands/brand-3.png" alt="Brand-image">
                                    </div>
                                </div>
                                <!--Single client brand end-->
                                <!--Single client brand start-->
                                <div class="col-md-4">
                                    <div class="eco-single-client-brand wow slideInRight">
                                        <img class="mb-0" src="{{asset('Frontend')}}/assets/image/brands/brand-4.png" alt="Brand-image">
                                    </div>
                                </div>
                                <!--Single client brand end-->
                                <!--Single client brand start-->
                                <div class="col-md-4">
                                    <div class="eco-single-client-brand wow slideInDown">
                                        <img class="mb-0" src="{{asset('Frontend')}}/assets/image/brands/brand-5.png" alt="Brand-image">
                                    </div>
                                </div>
                                <!--Single client brand end-->
                                <!--Single client brand start-->
                                <div class="col-md-4">
                                    <div class="eco-single-client-brand wow slideInLeft">
                                        <img class="mb-0" src="{{asset('Frontend')}}/assets/image/brands/brand-1.png" alt="Brand-image">
                                    </div>
                                </div>
                                <!--Single client brand end-->
                            </div>
                        </div>
                    </div>
                    <!--Clients Brand area end-->
                    <!--Client slider area start-->
                    <div class="col-md-6">
                        <div class="eco-client-slider-active owl-carousel owl-theme wow slideInRight">
                            <!--Single clients slider start-->
                            <div class="eco-single-client-slider media">
                                <div class="media-left">
                                    <span class="fas fa-quote-left"></span>
                                </div>
                                <div class="media-body">
                                    <p>Vel maiores quae nobis tenetur eveniet, nihil eum sit sint labore enim accusantium adipisci blanditiis est dicta voluptates expedita numquam? Tempore velit, suscipit a blanditiis atque, totam debitis mollitia explicabo
                                        quia sed, nam esse earum numquam?</p>
                                    <div class="media">
                                        <div class="post-thumb media-left">
                                            <img src="{{asset('Frontend')}}/assets/image/Clients/men.png" alt="Client-image">
                                        </div>
                                        <div class="media-body align-self-center">
                                            <h4>Alex Doe</h4>
                                            <span>CEO & Founder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Single clients slider end-->
                            <!--Single clients slider start-->
                            <div class="eco-single-client-slider media">
                                <div class="media-left">
                                    <span class="fas fa-quote-left"></span>
                                </div>
                                <div class="media-body">
                                    <p>Perferendis reiciendis suscipit dolores inventore, sint natus! Accusamus quaerat numquam culpa quam reiciendis pariatur fugiat ea, rem distinctio earum. Magni quisquam consequuntur, illum quo suscipit, inventore, sit
                                        consectetur cupiditate velit impedit dolores obcaecati ipsam. Blanditiis, quasi, numquam</p>
                                    <div class="media">
                                        <div class="post-thumb media-left">
                                            <img src="{{asset('Frontend')}}/assets/image/Clients/men.png" alt="Client-image">
                                        </div>
                                        <div class="media-body align-self-center">
                                            <h4>Jhonson</h4>
                                            <span>Advisor</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Single clients slider end-->
                            <!--Single clients slider start-->
                            <div class="eco-single-client-slider media">
                                <div class="media-left">
                                    <span class="fas fa-quote-left"></span>
                                </div>
                                <div class="media-body">
                                    <p>Hic nam accusamus, quod amet, corporis aspernatur ut dicta nihil repellat necessitatibus odit ea. Nam eligendi error fugit, sed incidunt dolorem perspiciatis tempora nemo repellendus ipsum assumenda dicta mollitia impedit
                                        unde reiciendis, numquam nostrum nobis!</p>
                                    <div class="media">
                                        <div class="post-thumb media-left">
                                            <img src="{{asset('Frontend')}}/assets/image/Clients/men.png" alt="Client-image">
                                        </div>
                                        <div class="media-body align-self-center">
                                            <h4>Merry</h4>
                                            <span>G. Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Single clients slider end-->
                            <!--Single clients slider start-->
                            <div class="eco-single-client-slider media">
                                <div class="media-left">
                                    <span class="fas fa-quote-left"></span>
                                </div>
                                <div class="media-body">
                                    <p>Illo minima ipsum porro fugit dolorum distinctio veniam vel qui facilis? Culpa veritatis fuga repudiandae voluptate natus ab, amet provident magni illo at, quas eveniet, totam facere minima quia error ad. Quisquam,
                                        ab vel suscipit iusto minus accusamus libero repellat earum.</p>
                                    <div class="media">
                                        <div class="post-thumb media-left">
                                            <img src="{{asset('Frontend')}}/assets/image/Clients/men.png" alt="Client-image">
                                        </div>
                                        <div class="media-body align-self-center">
                                            <h4>Lisp</h4>
                                            <span>CEO & Founder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Single clients slider end-->
                        </div>
                    </div>
                    <!--Client slider area end-->
                </div>
            </div>
        </div>
        <!--Cleint content body area end-->
    </section>
    <!--Clients area end-->

@endsection

