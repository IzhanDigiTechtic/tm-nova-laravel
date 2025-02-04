@extends('frontend.layouts.web.master')
@section('main-content')

    <div id="page" class="full-page">
        <main id="content" class="site-main">

            <section class="home-banner" style="background: url(assets/images/about-ban.webp) center/cover no-repeat;">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-7 col-md-12">
                            <div class="banner-content">
                                <h3 class="banner-subtitle" style="font-size: 18px;">Let’s Protect What You Have Built</h3>
                                <h2 class="banner-title">Get Copyright Registered in <span>$149</span></h2>
                                <p>Let Trademark Nova take upkeep of the tiresome process of organizing <br>and filing your
                                    copyright application</p>
                                <div class="banner-text">
                                    <p><i class="fa fa-check-square"></i>Highly Qualified Team of Copyright Registration
                                        Experts</p>
                                    <p><i class="fa fa-check-square"></i>Application prepared by a U.S. licensed attorney
                                    </p>
                                    <p><i class="fa fa-check-square"></i>Same Day Application Filing Available</p>
                                </div>
                                <div class="banner-button btnSec"><a href="{{route('step1')}}" class="button-round d-md-none d-block">Get Started Now</a>
                                <a href="javascript:void(0);" class="alphaChat button-round">TALK TO OUR
                                        CONSULTANT</a></div>
                                <p class="lastPara mb-0 mt-3">Start as low as <span>$149</span>, view <a href="#pakgeSec" class="goDown">Copyright Registration packages</a></p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 d-flex flex-wrap align-items-end">
                            <div class="formStyle"><img src="{{asset('assets/images/arrow.png')}}" alt="" class="targetedDown" />
                                <h4 class="blinkAnim">Start Your <span>Trademark</span>Registration Process</h4>
                                <div class="ribbon">
                                    <p>Same Day Application Filing Available</p>
                                </div>
                                <p>Fill out this brief form given below. It will take less than 60 seconds to complete it!
                                </p>
                                @include ('includes/lead-form')

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="checkboxmain">
                                <div class="checkboxinner wow fadeInUp" data-wow-delay="0.2s">
                                    <p><i class="fas fa-check-circle"></i>Secure your art, literature or music with USCO</p>
                                </div>
                                <div class="checkboxinner wow fadeInUp" data-wow-delay="0.4s">
                                    <p><i class="fas fa-check-circle"></i>Protect your copyright in the entire United States
                                    </p>
                                </div>
                                <div class="checkboxinner wow fadeInUp" data-wow-delay="0.6s">
                                    <p><i class="fas fa-check-circle"></i>Your information is Secure and protected.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about-page-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <div class="section-head">
                                <h2 class="section-title">Getting a <span class="primary-color d-block">Copyright is
                                        Essential </span></h2>
                            </div>
                            <p>The Registration of copyrights shall provide exclusive rights and ownership of original works
                                creators, authors, and producers. It prevents unauthorized use by other parties of their
                                work and intellectual property and prevents copy, piracy, and distribution of these works.
                                If you have applied your conceptions, you would not want others to use your intellectual
                                property without your authorization.</p>
                            <p>Therefore the right of copyright, whether literary or illustrative, visual arts, composition,
                                software, or documentary, is essential for protecting your intellectual property. When you
                                submit your copyright registration, you officially establish ownership of such work and
                                reinforce your future rights, such as violation and unauthorized use of copyright by persons
                                or entities.</p>
                           <div class="btnSec"><a href="{{route('step1')}}" class="button-round">Get Started Now</a><a href="javascript:void(0);" class="alphaChat button-round">Chat now for instant support </a></div>
                        </div>
                        <div class="col-md-5">
                            <figure class="aboutImg"><img src="{{asset('assets/images/diligence-img-1.webp')}}" alt=""><span><img src="{{asset('assets/images/logo-io.webp')}}" alt=""></span></figure>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ourProcess">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-10 text-center mb-md-5">
                            <h6>PROCESS</h6>
                            <h2 class="section-title">Hassle-Free <span class="primary-color">Copyright in 3 Simple
                                    Steps</span></h2>
                            <p>As per the regulations governing trademarks, Trademark Nova has developed a comprehensive and
                                legally sound registration process for our trademarks. Our trademark registration process is
                                designed to provide our clients with an efficient and effective means of protecting their
                                intellectual property rights.</p>
                        </div>
                        <div class="col-md-12 ">
                            <div class="processRow"><img src="{{asset('assets/images/arrow.webp')}}" alt="" class="arrow">
                                <div class="cell left">
                                    <div class="circleBig"><span class="dot topLeft"></span><span class="dot left"></span><span class="dot right"></span><span class="num">01</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-7.webp')}}" alt=""></div>
                                    </div>
                                    <h4>Submit Your Trademark Information</h4>
                                    <p>Spend a couple of minutes filling out a simple questionnaire. This will initiate your
                                        respective IPO trademark registration process.</p>
                                </div>
                                <div class="cell center">
                                    <div class="circleBig"><span class="dot left"></span><span class="dot right"></span><span class="num">02</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-8.webp')}}" alt=""></div>
                                    </div>
                                    <h4>Select Service & Make the Payment</h4>
                                    <p>Get all the details in order! Select your coveted service with Trademark Nova & make
                                        the payment for your desired services</p>
                                </div>
                                <div class="cell right">
                                    <div class="circleBig"><span class="dot left"></span><span class="dot right"></span><span class="num">03</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-9.webp')}}" alt=""></div>
                                    </div>
                                    <h4>Thorough Evaluation & Filing</h4>
                                    <p>To ensure that your trademark is completely unique, our team conducts a thorough
                                        trademark search across numerous databases and then file your trademark.</p>
                                </div>
                            </div>
                           <div class="btnSec mt-4"><a href="{{route('step1')}}" class="button-round">Get Started
                                 Now</a><a href="javascript:void(0);" class="alphaChat button-round">Chat now for instant support </a></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about-page-section gray-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <div class="section-head">
                                <h2 class="section-title">Secure your brand <span class="primary-color d-block">& ensure
                                        that no scammer duplicates your stuff</span></h2>
                                <p>At Trademark Nova, we assist you in filing copyright registration through an easy
                                    process.</p>
                            </div>
                            <div class="banner-text">
                                <p><i class="fa fa-check-square"></i>Let us take upkeep of the tiresome process of
                                    organizing and filing your copyright application</p>
                                <p><i class="fa fa-check-square"></i>Registration with US Copyright Office secures your work
                                    in most countries</p>
                                <p><i class="fa fa-check-square"></i>By registering your copyright, reinforce your rights to
                                    sue organizations for violation</p>
                            </div>
                            <div class="btnSec"><a href="{{route('step1')}}" class="button-round">Get Started Now</a><a href="javascript:void(0);" class="alphaChat button-round">Chat now for instant support </a></div>
                        </div>
                        <div class="col-md-5">
                            <figure class="aboutImg"><img src="{{asset('assets/images/img10.webp')}}" alt=""><span>
                                <img src="{{asset('assets/images/logo-io.webp')}}" alt=""></span></figure>
                        </div>
                    </div>
                </div>
            </section>
            <section class="home-pricing-table" id="pakgeSec">
                <div class="container">
                    <div class="section-head text-center">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <h2 class="section-title">Choose Your<span class="primary-color d-block">Copyright Registration Package</span>
                                </h2>
                                <p>We Offer Affordability & Efficiency In Copyright Registration & Search Services. We use a
                                    proven standardized process to minimize the chances of rejection, saving you time &
                                    money.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-table-inner">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-md-6">
                                <div class="pricing-item bestSeller">
                                    <div class="pricing-head">
                                        <div class="top"><span class="tagged">Best Seller</span>
                                            <h4>Gold</h4>
                                        </div>
                                        <div class="botom">
                                            <h2><i class="fas fa-dollar-sign"></i>149</h2><span class="text-start">+USPTO
                                                FEES </span>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="listStyle">
                                            <li><i class="fas fa-check"></i>
                                                <p>Professional Preparation of your federal copyright application including
                                                    a review by the copyright team for accuracy, completeness and common
                                                    mistakes</p>
                                            </li>
                                            <li><i class="fas fa-check"></i>
                                                <p>Federal E-Filing Electronic filing of your application with the USPTO
                                                    with no need to wait for mail or dealing with paper files</p>
                                            </li>
                                            <li><i class="fas fa-check"></i>
                                                <p>Certificate of Registration that will be mailed to you directly from the
                                                    U.S. Copyright Office</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-footer"><a href="{{route('step1')}}" class="button-round">Get
                                            Started <i class="fa fa-arrow-right"></i></a></div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6">
                                <div class="pricing-item recommended">
                                    <div class="pricing-head">
                                        <div class="top"><span class="tagged">Recommended</span>
                                            <h4>Diamond</h4>
                                        </div>
                                        <div class="botom">
                                            <h2><i class="fas fa-dollar-sign"></i>199</h2><span class="text-start">+USPTO
                                                FEES </span>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="listStyle">
                                            <li><i class="fas fa-check"></i>
                                                <p>Cease & Desist Letter A customer-specific form you can further customize
                                                    if someone is infringing on your copyright.Avoid wasting time and money
                                                </p>
                                            </li>
                                            <li><i class="fas fa-check"></i>
                                                <p>Transfer/Assignment Custom assignment template. If you need to sell or
                                                    otherwise convey your copyright, you have access to your pre-filled in
                                                    template that you can further customize</p>
                                            </li>
                                            <li><i class="fas fa-check"></i>
                                                <p>24-hour Expedited Processing of the preparation of your copyright
                                                    application. Normal processing time is 5 business days in our Basic
                                                    package</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-footer"><a href="{{route('step1')}}" class="button-round">Get
                                            Started <i class="fa fa-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-md-5 gray-bg">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse p-md-5 py-5">
                        <div class="col-lg-7">
                            <h2>Copyright Clearance Search Prior Filing</h2>
                            <ul class="listStyle flex50">
                                <li>
                                    <p><i class="fas fa-arrow-circle-right mr-3"></i>Literary Works</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-arrow-circle-right mr-3"></i>TV set Shows</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-arrow-circle-right mr-3"></i>Photographs</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-arrow-circle-right mr-3"></i>Scripts/Screenplays/Dialogues</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-arrow-circle-right mr-3"></i>Acoustic or Sound Recordings</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-arrow-circle-right mr-3"></i>Videos</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-arrow-circle-right mr-3"></i>Melodious Work or Lyrics</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-arrow-circle-right mr-3"></i>Animations</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-arrow-circle-right mr-3"></i>Songs Records/Tracks</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-arrow-circle-right mr-3"></i>Technical Drawings</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-arrow-circle-right mr-3"></i>Websites</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-arrow-circle-right mr-3"></i>Visual Arts/Graphic Arts</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-arrow-circle-right mr-3"></i>Maps</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-arrow-circle-right mr-3"></i>Software and Programs</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-arrow-circle-right mr-3"></i>Motion Pictures</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-arrow-circle-right mr-3"></i>Artistic Masterpieces</p>
                                </li>
                            </ul>
                            <div class="btnSec mt-4"><a href="{{route('step1')}}" class="button-round">Get Started
                                    Now</a><a href="javascript:void(0);" class="alphaChat button-round">Chat now for instant support
                                </a></div>
                        </div>
                        <div class="col-lg-5"><img src="{{asset('assets/images/img11.webp')}}" alt="" class="w-100 mt-4"></div>
                    </div>
                </div>
            </section>
            <section class="home-subscribe newBtn" style="background-image: url(assets/images/industry-leading-bg.webp);">
                <div class="container">
                    <div class="subscribe-inner">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="subscribe-content">
                                    <div class="section-head">
                                        <h2 class="section-title">Ready to Register Your Trademark?</h2>
                                    </div>
                                    <p>94% chance of successfully registering a trademark with our Diamond Package.</p>
                                    <div class="btnSec justify-content-center mt-3"><a href="{{route('step1')}}" class="button-round">Get Started Now</a><a href="javascript:void(0);" class="alphaChat button-round">Chat now for instant support </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="apartSec itemsSec">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h2>Why Should <span class="primary-color">You Register Your Trademark?</span></h2>
                            <p>Having a trademark gives you the legal protection to stop competitors from copying your brand
                                and stealing your customers.</p>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-12">
                            <div class="iconbox-container d-flex flex-wrap iconboxCarousel">
                                <div class="iconbox-item-1 iconbox-item-3 d-flex flex-wrap">
                                    <div class="iconbox-border d-flex align-items-center">
                                        <div class="iconbox-icon primary-bg"><img src="{{asset('assets/images/Gicon1.webp')}}" alt="">
                                        </div>
                                        <div class="iconbox-content">
                                            <h4 style="font-size: 18px;font-weight: 700;color: #223645;">Secure Your
                                                Business</h4>
                                            <p>Use the ® symbol and let the world know that you have a registered trademark.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="iconbox-item-1 iconbox-item-3 d-flex flex-wrap">
                                    <div class="iconbox-border d-flex align-items-center">
                                        <div class="iconbox-icon primary-bg"><img src="{{asset('assets/images/Gicon2.webp')}}" alt="">
                                        </div>
                                        <div class="iconbox-content" style="background-color: #535ee0;border-color: #4853d6;color: #fff;">
                                            <h4 style="font-size: 18px;font-weight: 700;color: #fff;">Enforce Your Rights
                                            </h4>
                                            <p>Take legal action against those who conduct unauthorized use of your
                                                trademark.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="iconbox-item-1 iconbox-item-3 d-flex flex-wrap">
                                    <div class="iconbox-border d-flex align-items-center">
                                        <div class="iconbox-icon primary-bg"><img src="{{asset('assets/images/Gicon3.webp')}}" alt="">
                                        </div>
                                        <div class="iconbox-content">
                                            <h4 style="font-size: 18px;font-weight: 700;color: #223645;">Stop Fakes &
                                                Copycats</h4>
                                            <p>Prevent others from imitating your brand. Only you own the rights to your
                                                mark.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="iconbox-item-1 iconbox-item-3 d-flex flex-wrap">
                                    <div class="iconbox-border d-flex align-items-center">
                                        <div class="iconbox-icon primary-bg"><img src="{{asset('assets/images/Gicon4.webp')}}" alt="">
                                        </div>
                                        <div class="iconbox-content">
                                            <h4 style="font-size: 18px;font-weight: 700;color: #223645;">Create Intangible
                                                Asset</h4>
                                            <p>Take advantage from selling, franchising, or commercially contracting your
                                                mark.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @include ('includes/testimonial')
            @include ('includes/faq')
        </main>
    </div>

   </main>

@endsection
   