@extends('frontend.layouts.web.master')
@section('main-content')
    <style>
        .iti--separate-dial-code .iti__selected-flag {
            background-color: white;
        }
    </style>
</head>

<body class="home">
    <div id="page" class="full-page">
        <!-- site header html end  -->
        <main id="content" class="site-main">
            <!-- home banner section html start -->
            <section class="home-banner" style="background: url(assets/images/ipo-ban.webp) center/cover no-repeat;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <h3 class="banner-subtitle">Trademark Representation Service</h3>
                                <h2 class="banner-title">Taking An IPO Action Outside Of Your <span>Home Country?</span></h2>
                                <div class="banner-text">
                                    <p>Are you looking for a reliable and trustworthy partner to handle your company's trademark representation? Look no further than Trademark Nova! We offer top-notch trademark representation services that will help protect your company's valuable intellectual property. </p>
                                </div>
                                <div class="banner-button btnSec">
                                    <a href="{{route('step1')}}" class="button-round d-md-none d-block">Get Started Now</a>
                                    <a href="javascript:void(0);" class="alphaChat button-round">TALK TO OUR CONSULTANT</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 d-flex flex-wrap align-items-end">
                            <div class="formStyle">
                                <img src="{{asset('assets/images/arrow.png')}}" alt="" class="targetedDown" />
                                <h4 class="blinkAnim">Start Your <span>Trademark</span> Registration Process</h4>
                                <div class="ribbon">
                                    <p>Same Day Application Filing Available</p>
                                </div>
                                <p>Fill out this brief form given below. It will take less than 60 seconds to complete it!</p>
                                @include ('includes/lead-form')

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home banner section html end -->

            <section class="about-page-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="section-head">
                                <h2 class="section-title">IPO <span class="primary-color">Representation</span></h2>
                            </div>
                            <p>At Trademark Nova, we understand that protecting your intellectual property is crucial, even if you're not based in the USA. That's why we offer trademark representation services on behalf of companies located anywhere in the world. Our experienced attorneys and trademark specialists will act as your representatives in the USA and handle all aspects of your trademark registration process.</p>
                            <p>Our process begins with a thorough consultation to understand your business's unique needs and goals. Once we have a clear understanding of your requirements, we will conduct a comprehensive trademark search to ensure that your trademark is available for registration in the USA. We will then prepare and file your trademark application with the US Intellectual Property Office (USPTO) and handle any correspondence with the IPO on your behalf.</p>
                        </div>
                        <div class="col-md-6">
                            <figure class="aboutImg">
                                <img src="{{asset('assets/images/ipo-img1.webp')}}" alt="">
                                <span><img src="{{asset('assets/images/logo-io.webp')}}" alt=""></span>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

            <section class="apartSec intTrademark">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h2>What Does The Service Include? </h2>
                            <p>At Trademark Nova, we take pride in providing reliable and efficient trademark representation services to our clients located anywhere in the world. With our expertise and experience, you can have peace of mind knowing that your trademarks are in safe hands. Contact us today to learn more about our trademark representation services and how we can help protect your IP.</p>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-lg-3 col-md-6">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io10.png')}}" alt=""></div>
                                <h4>Global Trademark Representation</h4>
                                <p>Our trademark representation services are not limited to the USA - we act on behalf of clients located anywhere in the world to protect their valuable intellectual property. With our expertise and experience, you can have peace of mind.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io10.png')}}" alt=""></div>
                                <h4>Fixed & Transparent Pricing</h4>
                                <p>At Trademark Nova, we believe in transparency and fairness when it comes to pricing. That's why we offer fixed and transparent pricing for our trademark representation services, so you know exactly what you're paying for and can budget accordingly.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io10.png')}}" alt=""></div>
                                <h4>Streamlined Process</h4>
                                <p>At Trademark Nova, our professional experts understand that time is of the essence when it comes to trademark registration and protection. That's why we have streamlined our process to ensure that it's as efficient and effective as possible. </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io10.png')}}" alt=""></div>
                                <h4>End-to-end Brand Protection</h4>
                                <p>No matter where you belong, Trademark Nova will not only help you handle trademark registration but also provide ongoing monitoring and enforcement services to ensure that your trademarks are not being used without your permission. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-light-grey ourProcess">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-8 text-center mb-md-5">
                            <h2 class="section-title">How it <span class="primary-color">Works</span></h2>
                            <p>Throughout the entire registration process, we will keep you informed of the progress and answer any questions you may have. Our team will also provide ongoing monitoring services to ensure that your trademark remains protected and take appropriate legal action against any infringers.</p>
                        </div>
                        <div class="col-md-12 mt-md-5">
                            <div class="processRow">
                                <img src="{{asset('assets/images/arrow.webp')}}" alt="" class="arrow">
                                <div class="cell left">
                                    <div class="circleBig">
                                        <span class="dot topLeft"></span>
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">01</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-7.webp')}}" alt=""></div>
                                    </div>
                                    <h4>Submit Your Trademark Information</h4>
                                    <p>Spend a couple of minutes filling out a simple questionnaire. This will initiate your respective IPO trademark registration process.</p>
                                </div>
                                <div class="cell center">
                                    <div class="circleBig">
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">02</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-8.webp')}}" alt=""></div>
                                    </div>
                                    <h4>Select Service & Make the Payment</h4>
                                    <p>Get all the details in order! Select your coveted service with Trademark Nova & make the payment for your desired services.</p>
                                </div>
                                <div class="cell right">
                                    <div class="circleBig">
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">03</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-9.webp')}}" alt=""></div>
                                    </div>
                                    <h4>Thorough Evaluation & Filing</h4>
                                    <p>To ensure that your trademark is completely unique, our team conducts a thorough trademark search across numerous databases and then file your trademark.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- faq html start -->
            <div class="faq-page-section">
                <div class="container">
                    <div class="faq-page-container">
                        <div class="row justify-content-center">

                            <div class="col-lg-8 text-center mb-md-5">
                                <h2 class="section-title">Our <span class="primary-color">Pricing</span></h2>
                                <p>We Offer Affordability & Efficiency In Trademark Registration & Search Services. We use a proven standardized process to minimize the chances of rejection, saving you time & money.</p>
                            </div>

                            <div class="col-md-12">
                                <div class="renewalWrap">
                                    <div class="title">
                                        <h2>File a Trademark Registration</h2>
                                    </div>
                                    <div class="subtitle">
                                        <h3>An attorney will review your current use of your trademark and file the appropriate documents.</h3>
                                    </div>
                                    <div class="body">
                                        <div class="left">
                                            <ul>

                                                <li><i class="fa fa-check"></i> Review of Your Case</li>
                                                <li><i class="fa fa-check"></i> Case Preparation & Filing</li>
                                                <li><i class="fa fa-check"></i> Attorney Advice on Next Steps</li>
                                                <li><i class="fa fa-check"></i> Trademark Monitoring & Alerts</li>
                                                <li><i class="fa fa-check"></i> Complete Documentation</li>
                                                <li><i class="fa fa-check"></i> Dedicated Case Manager</li>
                                            </ul>
                                            <a href="javascript:void(0);" class="alphaChat button-round">Get started <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="right">
                                            <h2>$249<sup>.00</sup><small>+ GOVT FEE</small></h2>
                                            <p>We Will Act As Your Representatives</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="schedule mt-0 mb-5">
                                    <h2>Request a Schedule For Free Consultation</h2>
                                    <a href="book-free-consultation" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
                                    <a href="tel:{{ config('var.number') }}" class="telNum"><span>Call Us Now:</span>{{ config('var.numberdisplay') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- faq html end -->

        </main>

@endsection