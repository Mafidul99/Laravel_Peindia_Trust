@extends('Frontend.layouts.master')
@section('title') {{'Donate'}} @endsection
@section('main-container')
    <!--Breadcum area start-->
    <section class="eco-breadcum-area-start df-pad" style="background:url('{{asset('Frontend')}}/assets/image/breadcum/breadcum.jpg') no-repeat scroll center center / cover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="eco-breadcum-content-area text-center text-light">
                        <h2>Donate <span class="custom-color">Debit/Credit</span></h2>
                        <ul class="eco-breadcum">
                            <li><a href="{{url('/')}}"><span class="fas fa-home"></span> Home</a></li>
                            <li>/ Donate</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Breadcum area end-->
    <!--Project title area start-->
    <section class="eco-history-area-strt df-pad">
            <div class="eco-project-title-area-start">
                <div class="container">
                    <div class="row">
                        <div class="eco-project-title-area">
                            <h4>Please fill the form to make<span class="custom-color"> donation online. </span></h4>
                        </div>
                    </div>
                </div>
            </div>
    <!--Project title area end-->
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Father's Name</label>
                                <input type="text" class="form-control" name="fname" placeholder="Enter Father's Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" name="phone"
                                       placeholder="Enter phone (do not prefix with +91 or 0)" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label>City</label>
                                <input type="text" class="form-control" name="city" placeholder="Enter City" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Doante Details</label>
                                <input type="text" class="form-control" name="ddetails" placeholder="Donate Details" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Amount</label>
                                <input type="text" class="form-control" name="ddetails" placeholder="Enter Amount" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Message</label>
                                <textarea type="text" class="form-control" name="ddetails" placeholder="Enter Amount" required></textarea>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        I have read and agree to the <a target="_blank" class="refund" href="#">Cancellation Refund Policy</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg float-right btnsubmit">Continue</button>
                    </form>
                </div>
                <div class="col-4">
                    <div class="col-inner text-center">
                        <a href="#" class="btnsite btn btn-success"> Click Below to Donate </a>
                        <br>
                        <h4 class="hear1"> All Donations are exempted
                            Under Section 80 G(5)(vi) of Income Tax Act 1961.</h4>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                          <div class="col">
                            <div class="text-center">
                                <a class="btn btn-primary netbtn" href="#"> N.Banking</a>
                            </div>
                          </div>
                          <div class="col">
                            <div class="col-inner text-center">
                                <a class="btn btn-secondary netbtn" href="#"> Credit/Card</a>
                            </div>
                          </div>
                          <div class="col">
                            <div class="text-center">
                                <a class="btn btn-warning netbtn" href="#"> PayTM/UPI</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <br>
                    <aside id="custom_html-10">
                            <span class="widget-title ">
                            <span>SUPPORT A LIFE</span>
                        </span>
                        <div class="is-divider small"></div>
                        <div class="textwidget custom-html-widget">
                            <marquee direction="up" behavior="scroll" scrollamount="4" style="height:300px;"
                                     onmouseover="this. stop();" onmouseout="this. start();">
                                <div style="border:1px solid; padding:10px;">
                                    <h3>Baby Aarohi</h3>
                                    <img src="{{asset('Frontend/assets/image/donate/men.png')}}" data-src="{{asset('Frontend/assets/image/donate/men.png')}}" class="imagess"
                                         alt="Baby Aarohi" title="Baby Aarohi">
                                    <div class="ccpages_excerpt">Gender:Female<br> Age:4Months </div>
                                    <p class="ccpages_more">
                                        <a href="#" title="Read more ...">Read more ...</a></p>
                                </div><br>
                                <div style="border:1px solid; padding:10px;">
                                    <h3>Master Lucky</h3>
                                    <img  src="{{asset('Frontend/assets/image/donate/men.png')}}"
                                    data-src="{{asset('Frontend/assets/image/donate/men.png')}}"
                                         class="imagess" alt="Master Lucky" title="Master Lucky">
                                    <div class="ccpages_excerpt">Gender: Male<br> Age:9 Months</div>
                                    <p class="ccpages_more">
                                        <a href="#" title="Read more ...">Read more ...</a></p>
                                </div><br>
                                <div style="border:1px solid; padding:10px;">
                                    <h3>Baby Gunjan</h3>
                                    <img src="{{asset('Frontend/assets/image/donate/men.png')}}"
                                         data-src="{{asset('Frontend/assets/image/donate/men.png')}}"
                                         class="imagess" alt="Baby Gunjan" title="Baby Gunjan">
                                    <div class="ccpages_excerpt">Gender: Female<br> Age:8 year</div>
                                    <p class="ccpages_more">
                                        <a href="#" title="Read more ...">Read more ...</a>
                                    </p>
                                </div>
                                <div style="border:1px solid; padding:10px;">
                                    <h3>Baby Guwahati</h3>
                                    <img src="{{asset('Frontend/assets/image/donate/men.png')}}"
                                         data-src="{{asset('Frontend/assets/image/donate/men.png')}}"
                                         class="imagess" alt="Baby Gunjan" title="Baby Gunjan">
                                    <div class="ccpages_excerpt">Gender: Female<br> Age:8 year</div>
                                    <p class="ccpages_more">
                                        <a href="#" title="Read more ...">Read more ...</a>
                                    </p>
                                </div>
                            </marquee>
                        </div>
                    </aside>

                    <aside id="custom_html-4">
                        <span class="widget-title">
                            <span>Success Stories</span>
                        </span>
                        <div class="is-divider small"></div>
                        <div class="textwidget custom-html-widget">
                            <marquee direction="up" behavior="scroll" scrollamount="4" style="height:300px;">
                                <div class="child_pages child_pages-thumbnail">
                                    <div id="child_page-1949" class="child_page" style="width:50%; max-width:100%;">
                                        <div class="child_page-container" style="height: 245px;">
                                            <div class="post_thumb" style="height: 156px;">
                                                <a href="#">
                                                    <img src="{{asset('Frontend/assets/image/donate/men.png')}}"
                                                         class="post-image" alt="Post-image"></a>
                                                    </div>
                                                    <div class="post_content">
                                                        <h4><a href="#">Fazan</a></h4>
                                                        <div class="post_excerpt">Age : 6 Months<br> Sex : Male</div>
                                                    </div>
                                                    <!-- .post_content  -->
                                                </div>
                                                <!-- .child_page-container -->
                                            </div>
                                            <!-- #child_page-1949" -->

                                            <div id="child_page-1911" class="child_page"
                                                 style="width:50%;max-width:100%;">
                                                <div class="child_page-container" style="height: 245px;">
                                                    <div class="post_thumb" style="height: 156px;">
                                                        <a href="#">
                                                            <img src="{{asset('Frontend/assets/image/donate/men.png')}}"
                                                         class="post-image" alt="Post-image"></a>
                                                    </div>
                                                    <div class="post_content">
                                                        <h4><a href="#">Hani Singh</a>
                                                        </h4>
                                                        <div class="post_excerpt">Age : 3 Months<br> Sex : Male</div>
                                                    </div>
                                                    <!-- .post_content  -->
                                                </div>
                                                <!-- .child_page-container -->
                                            </div>
                                            <!-- #child_page-1911" -->

                                            <div id="child_page-1917" class="child_page"
                                                 style="width:50%;max-width:100%;">
                                                <div class="child_page-container" style="height: 245px;">
                                                    <div class="post_thumb" style="height: 156px;">
                                                        <a href="#">
                                                            <img src="{{asset('Frontend/assets/image/donate/men.png')}}"
                                                         class="post-image" alt="Post-image"></a>
                                                    </div>
                                                    <div class="post_content">
                                                        <h4><a href="#">Sachin</a></h4>
                                                        <div class="post_excerpt">Age : 8 Years<br> Sex : Male</div>
                                                    </div>
                                                    <!-- .post_content  -->
                                                </div>
                                                <!-- .child_page-container -->
                                            </div>
                                            <!-- #child_page-1917" -->

                                            <div id="child_page-1919" class="child_page"
                                                 style="width:50%;max-width:100%;">
                                                <div class="child_page-container" style="height: 245px;">
                                                    <div class="post_thumb" style="height: 156px;">
                                                        <a href="#">
                                                            <img src="{{asset('Frontend/assets/image/donate/men.png')}}"
                                                         class="post-image" alt="Post-image"></a>
                                                    </div>
                                                    <div class="post_content">
                                                        <h4><a href="#">Pranav</a></h4>
                                                        <div class="post_excerpt">Age : 15 Years<br> Sex : Male</div>
                                                    </div>
                                                    <!-- .post_content  -->
                                                </div>
                                                <!-- .child_page-container -->
                                            </div>
                                            <!-- #child_page-1919" -->

                                            <div id="child_page-1922" class="child_page"
                                                 style="width:50%;max-width:100%;">
                                                <div class="child_page-container" style="height: 245px;">
                                                    <div class="post_thumb" style="height: 156px;">
                                                        <a href="#">
                                                            <img src="{{asset('Frontend/assets/image/donate/men.png')}}"
                                                         class="post-image" alt="Post-image"></a>
                                                    </div>
                                                    <div class="post_content">
                                                        <h4><a href="E">Monu</a></h4>
                                                        <div class="post_excerpt">Age : 8 Years<br> Sex : Male</div>
                                                    </div>
                                                    <!-- .post_content  -->
                                                </div>
                                                <!-- .child_page-container -->
                                            </div>
                                            <!-- #child_page-1922" -->

                                            <div id="child_page-1954" class="child_page"
                                                 style="width:50%;max-width:100%;">
                                                <div class="child_page-container" style="height: 245px;">
                                                    <div class="post_thumb" style="height: 156px;">
                                                        <a href="#">
                                                            <img src="{{asset('Frontend/assets/image/donate/men.png')}}"
                                                         class="post-image" alt="Post-image"></a>
                                                    </div>
                                                    <div class="post_content">
                                                        <h4><a href="#">Ankit</a></h4>
                                                        <div class="post_excerpt">Age : 5 Years<br> Sex : Male</div>
                                                    </div>
                                                    <!-- .post_content  -->
                                                </div>
                                                <!-- .child_page-container -->
                                            </div>
                                            <!-- #child_page-1954" -->

                                            <div id="child_page-1956" class="child_page"
                                                 style="width:50%;max-width:100%;">
                                                <div class="child_page-container" style="height: 245px;">
                                                    <div class="post_thumb" style="height: 156px;">
                                                        <a href="#">
                                                            <img src="{{asset('Frontend/assets/image/donate/men.png')}}"
                                                         class="post-image" alt="Post-image"></a>
                                                    </div>
                                                    <div class="post_content">
                                                        <h4><a href="#">Vinay</a></h4>
                                                        <div class="post_excerpt">Age : 12 Years<br> Sex : Male</div>
                                                    </div>
                                                    <!-- .post_content  -->
                                                </div>
                                                <!-- .child_page-container -->
                                            </div>
                                            <!-- #child_page-1956" -->

                                            <div id="child_page-1958" class="child_page"
                                                 style="width:50%;max-width:100%;">
                                                <div class="child_page-container" style="height: 245px;">
                                                    <div class="post_thumb" style="height: 156px;">
                                                        <a href="#">
                                                            <img src="{{asset('Frontend/assets/image/donate/men.png')}}"
                                                         class="post-image" alt="Post-image"></a>
                                                    </div>
                                                    <div class="post_content">
                                                        <h4><a href="#">Vikas</a></h4>
                                                        <div class="post_excerpt">Age : 11 Years<br> Sex : Male</div>
                                                    </div>
                                                    <!-- .post_content  -->
                                                </div>
                                                <!-- .child_page-container -->
                                            </div>
                                            <!-- #child_page-1958" -->

                                            <div id="child_page-1960" class="child_page"
                                                 style="width:50%;max-width:100%;">
                                                <div class="child_page-container" style="height: 245px;">
                                                    <div class="post_thumb" style="height: 156px;">
                                                        <a href="#">
                                                            <img src="{{asset('Frontend/assets/image/donate/men.png')}}"
                                                         class="post-image" alt="Post-image"></a>
                                                    </div>
                                                    <div class="post_content">
                                                        <h4><a href="#">Tanisha</a></h4>
                                                        <div class="post_excerpt">Age : 1.5 Years<br> Sex : Female</div>
                                                    </div>
                                                    <!-- .post_content  -->
                                                </div>
                                                <!-- .child_page-container -->
                                            </div>
                                            <!-- #child_page-1960" -->

                                            <div id="child_page-1963" class="child_page"
                                                 style="width:50%;max-width:100%;">
                                                <div class="child_page-container" style="height: 245px;">
                                                    <div class="post_thumb" style="height: 156px;">
                                                        <a href="#">
                                                            <img src="{{asset('Frontend/assets/image/donate/men.png')}}"
                                                         class="post-image" alt="Post-image"></a>
                                                    </div>
                                                    <div class="post_content">
                                                        <h4><a href="#">Sonu</a></h4>
                                                        <div class="post_excerpt">Age : 14 Months<br> Sex : Male</div>
                                                    </div>
                                                    <!-- .post_content  -->
                                                </div>
                                                <!-- .child_page-container -->
                                            </div>
                                            <!-- #child_page-1963" -->

                                            <div id="child_page-1966" class="child_page"
                                                 style="width:50%;max-width:100%;">
                                                <div class="child_page-container" style="height: 245px;">
                                                    <div class="post_thumb" style="height: 156px;">
                                                        <a href="#">
                                                            <img src="{{asset('Frontend/assets/image/donate/men.png')}}"
                                                         class="post-image" alt="Post-image"></a>
                                                    </div>
                                                    <div class="post_content">
                                                        <h4><a href="#">Sharda</a></h4>
                                                        <div class="post_excerpt">Age : 7 Months<br> Sex : Female</div>
                                                    </div>
                                                    <!-- .post_content  -->
                                                </div>
                                                <!-- .child_page-container -->
                                            </div>
                                            <!-- #child_page-1966" -->
                                        </div>
                                    </marquee>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
            <div class="row">
                <div class="col-md-12 pt-4">
                <h3>Offline Donation Methods</h3>
                <p class="text-justify"> You can send in an email, call up or write to Relief India
                    Trust if you are interested in donating to us. The help you give will help
                    in bringing about a permanent, effective and a positive change in the lives
                    of the needy and the poor children in India. With your help we will be able to
                    address the root cause behind violation of child’s rights. Besides this, you
                    can help us in making the state accountable to the needs of the poor children
                    and their right to education, medication, relief, food etc.</p> <br>

                <p class="text-justify"> All that you will need to share is your contact details
                    and your interest in being a volunteer with Relief India Trust. If need be
                    you can even attend the regular meetings held by Relief India Trust. Here
                    you can get an idea on the activities carried out and the kind of effective
                    participation you can provide. You can even educate or teach the needy
                    children in your spare time.</p><br>

                <p class="text-justify"> Starting with the financially backward children in your
                    own area will also do. By donating to Relief India Trust you can reach out
                    to the poor Indian children and influence their lives positively. The money
                    you donate will be used in providing them food, clothing, education, medication
                    and relief in different areas. With your help, a lot of difference will be
                    made to get the entire system, working. If you are looking
                    towards touching the lives of so many needy children in India then donate to
                    us and help us accomplish this endeavour as successfully as possible.</p>
                </div>
                <div class="row">
                    <div class="col-md-12 pt-2">
                        <h4>Offline Donation by Cheque/DD/Pay Order in Favor of “Peindia Trust “. </h4>
                        <p class="ptext">Peindia Trust Sixmile Panjabari Road,Guwahati-781022</p>
                        <p class="text-center font-weight-bold p-3">
                            All The Donations are exempted Under Section 80G (5)(vi) of the Income Tax Act 1961.
                        </p>
                    </div>
                </div>
                <!-- .#content large-9 left -->
            </div>
    </section>
    <!-- #main -->

@endsection
