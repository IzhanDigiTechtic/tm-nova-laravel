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
            <section class="home-banner" style="background: url(assets/images/dissolution-ban.webp) center/cover no-repeat;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <h3 class="banner-subtitle">Our Clients' Testimonials</h3>
                                <h2 class="banner-title">Join The Satisfied Clients' Tribe at <span>Trademark Nova!</span></h2>
                                <div class="banner-text">
                                    <p>Don't hesitate to check out what our customers have to say about the services of Trademark Nova and become a part of our community of happy customers today!</p>
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
                            <h3 class="section-title">Customer <span class="primary-color">Reviews</span></h3>
                            <p>At Trademark Nova, we take pride in the positive feedback we receive from our customers and we want to share their experiences with you. By discovering what our customers are saying, you can get an idea of the level of satisfaction that others have found in our offerings. We're confident that once you join our satisfied testimonial tribe, you'll be just as happy with our services as they are. </p>
                        </div>

                        <div class="col-md-6">
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <p>"I had a complex trademark issue that required extensive research and legal expertise. Their service exceeded my expectations.."</p>
                                        <h5>- Jack Robinson   <span>( Business Development Manager at Beacon Partners)</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <p>"Absolutely amazing, it was a pleasure working with Trademark Nova. They did an amazing job guiding me through my questions.."</p>
                                        <h5>- Henry Baker   <span>( CFO at Delta Enterprises)</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <p>"We had a clear communication, and Trademark Nova helped me understand the importance of trademark protection for my business. I'm so glad I decided to work with them."</p>
                                        <h5>- Daniel Wright   <span>( Co-Founder at Zenith Sales)</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <p>"As a small business owner, I was hesitant to invest in trademark registration, but Trademark Nova made the process so easy and straightforward. They provided excellent customer service."</p>
                                        <h5>- Alexander Green   <span>( CEO at Phi Innovations)</span></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <p>"A massive Thank You to the team for a very fast and efficient filing.I look forward to working with Trademark Nova on future projects. Brilliant effort!"</p>
                                        <h5>- Mark Webster    <span> ( Co-Founder, Majesta Insurance)</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <p>"The promptness and accurate advice of Trademark Nova gave me every confidence in the service they provide and I will definitely be using them for legal matters again in the future."</p>
                                        <h5>- Jonathan Reed<span> ( Founder, Alpine Associates)</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <p>"The team at Trademark Nova was always very thorough and clear in their explanations, and timely with sending reminders about renewals and next steps. 5/5"</p>
                                        <h5>- Carl Mathews <span> ( Owner, Colour Crib)</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <p>"I had an amazing experience working with Trademark Nova. They were highly knowledgeable and helped me protect my brand that was both efficient and cost-effective."</p>
                                        <h5>- Noah Thompson <span> ( IT Director at Titan Technologies)</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <p>"Great service. Waiting for approval for the trademark. I'll share my overall experience in detail then. Nice job till now."</p>
                                        <h5>- Lucas White <span>  ( Owner at Visionary Corporation)</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <p>"At first I talked to Ryan, we had some miscommunication for which I thought to choose someone else. But they assigned Mark for my service and I am satisfied with the way he is working. Good"</p>
                                        <h5>- Ethan Taylor <span>  ( Financial Analyst at Nexus Investments)</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <p>"Great experience with good customer service very professional. I appreciate your help and would definitely recommend to others."</p>
                                        <h5>- William Hughes <span>  ( Marketing Director at Phoenix Enterprises)</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <p>"Made a great effort to help me to get my first brand registration. Thank you for honesty. It was great to work with the Trademark Nova"</p>
                                        <h5>- Oliver Brown<span>  ( Executive at Horizon Enterprises)</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <p>"They kept me updated with all the necessary details, i would say it was an exceptional experienceâ€¦. Would come back for sure.!"</p>
                                        <h5>- Benjamin Patel<span>  ( Operations Manager at Summit Solutions)</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <p>"Although I was a bit hesitant, Trademark Nova made sure that I was comfortable with each step. Any questions that I may have, they answer in a timely matter."</p>
                                        <h5>- James Wilson<span>  ( CEO of Apex Industries)
                                        </span></h5>
                                    </div>
                                </div>
                            </div>



                    </div>
                </div>
            </section>

            <section class="bg-light-grey writeReviewSec">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h3 class="section-title">Write a <span class="primary-color">Review</span></h3>
                            <p>We request you to leave an honest reviews, so that other potential customers make informed decisions and you can also provide valuable feedback to Trademark Nova on areas we need to improve. Looking forward to your feedback!</p>
                        </div>
                        <div class="col-md-8">
                            <form action="backend/reviewadd.php" method="POST" class="reviewForm row">
                                <div class="col-md-6"><input type="text" name="reviewName" class="form-control" placeholder="Enter Your Name" required></div>
                                <div class="col-md-6"><input type="text" name="reviewEmail" class="form-control" placeholder="Enter Your Email" required></div>

                                <div class="col-md-12"><input type="text" name="reviewCompany" class="form-control" placeholder="Enter Your Company" required></div>
                                <div class="col-md-12">
                                    <textarea name="reviewMsg" id="" rows="8" class="form-control" placeholder="Write Review" required></textarea>
                                    <!--<div class="uploadVideo">-->
                                    <!--    <input type="file">-->
                                    <!--    <i class="fa fa-video"></i> Upload Video-->
                                    <!--</div>-->
                                    <div class="rating">
                                        <label for="">Rating</label>
                                        <select name="reviewRating" required>
                                            <option value="5">5.0</option>
                                            <option value="4">4.0</option>
                                            <option value="3">3.0</option>
                                            <option value="2">2.0</option>
                                            <option value="1">1.0</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="button-round w-100">Submit Your Review <i class="fa fa-right-arrow"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </main>

      @endsection