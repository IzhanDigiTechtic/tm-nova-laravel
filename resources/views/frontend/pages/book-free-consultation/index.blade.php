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
            <section class="home-banner" style="background: url(assets/images/free-consultation-ban.webp) center/cover no-repeat;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <h3 class="banner-subtitle">Book Your Consultation</h3>
                                <h2 class="banner-title">Schedule Your Consultation With <span>Trademark Nova</span></h2>
                                <div class="banner-text">
                                    <p><i class="fas fa-check-circle"></i>Expert trademark attorneys navigate the trademark process for you</p>
                                    <p><i class="fas fa-check-circle"></i>Official filling firm with 100% success rate</p>
                                    <p><i class="fas fa-check-circle"></i>Same Day Trademark Application Filling Available</p>
                                </div>
                                <div class="banner-button btnSec">
                                    <a href="/sequence-form-step1/" class="button-round d-md-none d-block">Get Started Now</a>
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
                <!--<div class="banner-pattern" style="background-image: url(assets/images/banner-pattern1.png);"></div>-->
            </section>
            <!-- home banner section html end -->

            <section class="ourProcess">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8 text-center mb-md-5">
                            <h2 class="section-title">How To Schedule <span class="primary-color">Your Consultation</span></h2>
                            <p>Get valuable advice or information about trademark registration or any other service without committing to a purchase. To schedule a consultation with Trademark Nova consultants, start by identifying the service you're interested in. Next, determine the best time to schedule the consultation! Be sure to provide all necessary information such as your name, contact information, and preferred date and time for the consultation. Finally, be prepared for the consultation by gathering any relevant information or questions you may have beforehand, and make sure to show up on time and ready to engage with the provider.</p>
                        </div>
                        <div class="col-md-12">
                            <div class="processRow">
                                <img src="{{asset('assets/images/arrow.webp')}}" alt="" class="arrow">
                                <div class="cell left">
                                    <div class="circleBig">
                                        <span class="dot topLeft"></span>
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">01</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-1.webp')}}" alt=""></div>
                                    </div>
                                    <h4>Identify the Service You Are Interested In</h4>
                                    <p>Scheduling a consultation can be a great way to get valuable advice about our services. Start by identifying your desired service!</p>
                                </div>
                                <div class="cell center">
                                    <div class="circleBig">
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">02</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-2.webp')}}" alt=""></div>
                                    </div>
                                    <h4>Determine the Best Time To Schedule</h4>
                                    <p>Choose the best time from below given calendar to schedule your consultation with Trademark Nova.</p>
                                </div>
                                <div class="cell right">
                                    <div class="circleBig">
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">03</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-3.webp')}}" alt=""></div>
                                    </div>
                                    <h4> Gather Any Questions You May Have Beforehand</h4>
                                    <p>Be prepared for the consultation by gathering any relevant information you may have beforehand, and make sure to show up on time.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ourProcess bg-light-grey">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8 text-center mb-md-5">
                            <h2 class="section-title">Book A <span class="primary-color">Consultation</span></h2>
                            <p>Choose your preferred date and time and one of our consultants will reach out to you</p>
                        </div>
                        <div class="col-md-12">

                            <!-- INFO Email -->
                            <!-- Calendly inline widget begin -->
                            <!--<div class="calendly-inline-widget" data-url="https://calendly.com/trademarknova/30min" style="min-width:320px;height:630px;"></div>-->
                            <!--<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>-->
                            <!-- Calendly inline widget end -->


                            <!-- SALES Email -->
                            <!-- Calendly inline widget begin -->
                            <div class="calendly-inline-widget" data-url="https://calendly.com/tmnova-support/30min" style="min-width:320px;height:630px;"></div>
                            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                            <!-- Calendly inline widget end -->

                        </div>
                    </div>
                </div>
            </section>
        </main>
       @endsection