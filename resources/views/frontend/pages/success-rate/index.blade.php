@extends('frontend.layouts.web.master')
@section('main-content')
    <style>
        .iti--separate-dial-code .iti__selected-flag {
            background-color: white;
        }
    </style>


<body class="home">
    <div id="page" class="full-page">
        <!-- site header html end  -->
        <main id="content" class="site-main">
            <!-- home banner section html start -->
            <section class="home-banner succesBaner" style="background: url(assets/images/success-ban.webp) center/cover no-repeat;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <h3 class="banner-subtitle">Success Stories at Trademark Nova</h3>
                                <h2 class="banner-title">Join the League of Successful Businesses <span>with Trademark Nova!</span></h2>
                                <div class="banner-text">
                                    <p>If you're an aspiring entrepreneur looking to achieve success, look no further than Trademark Nova. Join the ranks of successful entrepreneurs who have benefitted from Trademark Nova's innovative strategies, expert guidance, and comprehensive support.</p>
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
            </section>
            <!-- home banner section html end -->

            <section class="about-page-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h3 class="section-title">Trademark Nova <span class="primary-color">Case Studies</span></h3>
                            <p>With a focus on helping entrepreneurs overcome obstacles and achieve their goals, Trademark Nova provides a wide range of services, from trademark registration to marketing and branding strategies. By partnering with Trademark Nova, you'll gain access to a wealth of knowledge and expertise that can help you take your business to the next level. With their proven track record of success stories, Trademark Nova is the ideal partner for any entrepreneur looking to build a thriving business. From Start-Up to Success: Learn from Trademark Nova's Winning Stories!</p>
                        </div>

                        <div class="col-md-12">
                            <div class="caseStudiesCarousel">
                                <div>
                                    <div class="caseStudrReview">
                                        <div class="video">
                                            <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=RUFPeBDFCWY" class="item">
                                                <img src="{{asset('assets/images/brandon-01.jpg')}}" alt="">
                                                <span class="playBtn"></span>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5>Brandon Woolland</h5>
                                            <ul class="star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <p>As a business owner, it's frustrating to have to make important legal decisions in areas that one have no expertise in. Mr. Brandon was facing issues in responding to office actions issued during the examination of his trademark application. He approached us to craft a convincing action response ensuring all legal formalities. Mr. Brandon owns a successfully registered trademark now!</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="caseStudrReview">
                                        <div class="video">
                                            <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=ZEhXbDYTaQk" class="item">
                                                <img src="{{asset('assets/images/marie-03.jpg')}}" alt="">
                                                <span class="playBtn"></span>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5>Marie Whitfield</h5>
                                            <ul class="star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <p>We assisted Ms. Marie in navigating the complexities of the legal requirements for starting a business in the UK, and ensured that all of the necessary documentation was completed accurately and on time. As per Ms. Marie: "This took a huge weight off my shoulders, and allowed me to focus on developing my business plan and securing funding." </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="caseStudrReview">
                                        <div class="video">
                                            <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=TmshRNqyXNc" class="item">
                                                <img src="{{asset('assets/images/gareth-02.jpg')}}" alt="">
                                                <span class="playBtn"></span>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5>Gareth Ewing</h5>
                                            <ul class="star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <p>As part of his brand strategy, Mr. Gareth decided to register his trademark to protect the name and logo from infringement. After a brief consultation, we advised him on the best course of action to take in order to register his trademark. Mr. Gareth's business is now officially registered with the UKIPO and is well established in the marketplace.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="successRate">
                <h2><span>Success Rate</span>96.8%</h2>
                <p>*% success rate of filed registrations August 2020 - January 2023</p>
                <ul class="star">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                </ul>
                <p>4.92 Average 300 Reviews</p>
            </section>

            <!-- home testimonial section html start -->
            <section class="home-testimonial bg-light-grey successRateTestimonial">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-12">
                            <div class="schedule">
                                <h2>Request a Schedule For Free Consultation</h2>
                                <a href="/sequence-form-step1/" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
                                <a href="tel:{{ config('var.number') }}" class="telNum"><span>Call Us Now:</span>{{ config('var.numberdisplay') }}</a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="section-head text-center">
                                <h2 class="section-title">Our Customer's <span class="primary-color">Feedback</span></h2>
                                <p>We use a proven standardized process to minimize the chances of application rejection, saving you time and money. We’ve worked with over 18K+ Satisfied Business Owners.</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="testimonial-slider">
                                <div class="px-3">
                                    <div class="testimonial-item">
                                        <figure class="testimonial-img">
                                            <img src="{{asset('assets/images/img16.jpg')}}" alt="">
                                        </figure>
                                        <div class="testimonial-content">
                                            <p>"The promptness and accurate advice of Trademark Nova gave me every confidence in the service they provide and I will definitely be using them for legal matters again in the future."</p>
                                            <h5>- Jonathan Reed <span>(Founder, Alpine Associates)</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="testimonial-item">
                                        <figure class="testimonial-img">
                                            <img src="{{asset('assets/images/img17.jpg')}}" alt="">
                                        </figure>
                                        <div class="testimonial-content">
                                            <p>"A massive Thank You to the team for a very fast and efficient filing.I look forward to working with Trademark Nova on future projects. Brilliant effort!"</p>
                                            <h5>- Mark Webster <span>(Co-Founder, Majesta Insurance)</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="testimonial-item">
                                        <figure class="testimonial-img">
                                            <img src="{{asset('assets/images/img18.jpg')}}" alt="">
                                        </figure>
                                        <div class="testimonial-content">
                                            <p>"The team at Trademark Nova was always very thorough and clear in their explanations, and timely with sending reminders about renewals and next steps. 5/5"</p>
                                            <h5>- Carl Mathews <span>(Owner, Colour Crib)</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home testimonial section html end -->

        </main>

      @endsection