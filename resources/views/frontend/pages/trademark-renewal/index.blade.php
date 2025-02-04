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
            <section class="home-banner" style="background: url(assets/images/trademark-renewal-ban.webp) center/cover no-repeat;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <h3 class="banner-subtitle">File your Trademark Renewal</h3>
                                <h2 class="banner-title">Protect What's Yours - Renew Your <span>Trademark Today!</span></h2>
                                <div class="banner-text">
                                    <p>Renewing your trademark ensures that your brand remains protected, giving you the peace of mind to focus on growing your business. With our expert trademark renewal services, you can trust that your brand is in good hands and your intellectual property rights are safeguarded for years to come.</p>
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
                <!--<div class="banner-pattern" style="background-image: url(assets/images/banner-pattern1.png);"></div>-->
            </section>
            <!-- home banner section html end -->

            <section class="about-page-section">
                <div class="about-inner-page">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="section-head">
                                    <h2 class="section-title">When to File For a <span class="primary-color">Trademark Renewal</span></h2>
                                </div>
                                <p>Trademarks must be renewed every 10 years. It is important to keep track of the renewal deadline, as failure to renew can result in the loss of trademark protection. In some cases, a trademark may be eligible for renewal before the 10-year mark, such as if the trademark was initially registered based on an "intent to use" and has now been in use for more than five years.</p>
                                <p>It's also worth noting that trademark renewal is not an automatic process. The owner of the trademark must file a renewal application with the appropriate firm, along with the required fee. The renewal application typically includes information about how the trademark is being used, such as a specimen of the mark in use on products or packaging.</p>
                                <p>If you're unsure about when to file for a trademark renewal or have any other questions about trademark maintenance, Consult Trademark Nova's qualified trademark attorneys.</p>
                            </div>
                            <div class="col-md-6">
                                <figure class="aboutImg">
                                    <img src="{{asset('assets/images/trademark1.webp')}}" alt="">
                                    <span><img src="{{asset('assets/images/logo-io.webp')}}" alt=""></span>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ourProcess bg-light-grey">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8 text-center mb-md-5">
                            <h2 class="section-title">File a Renewal in <span class="primary-color">3 Easy Steps</span></h2>
                            <p>At Trademark Nova, we understand the importance of protecting your valuable brand identity. That's why our trademark renewal process is designed to be hassle-free and streamlined, so you can rest assured that your trademark protection is in good hands.</p>
                        </div>
                        <div class="col-md-12 mt-5">
                            <div class="processRow">
                                <img src="{{asset('assets/images/arrow.webp')}}" alt="" class="arrow">
                                <div class="cell left">
                                    <div class="circleBig">
                                        <span class="dot topLeft"></span>
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">01</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-4.webp')}}" alt=""></div>
                                    </div>
                                    <h4>Thorough Review</h4>
                                    <p>Our process begins with a thorough review of your existing trademark registration to ensure that it meets all renewal eligibility requirements. </p>
                                </div>
                                <div class="cell center">
                                    <div class="circleBig">
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">02</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-5.webp')}}" alt=""></div>
                                    </div>
                                    <h4>File for Renewal </h4>
                                    <p>After the review, we'll prepare and file your renewal application with the appropriate government agency, along with any required fees and service fee.</p>
                                </div>
                                <div class="cell right">
                                    <div class="circleBig">
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">03</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-6.webp')}}" alt=""></div>
                                    </div>
                                    <h4>And You're Done!</h4>
                                    <p>Your assigned attorney will keep you informed of our progress and provide regular updates on the status of your case time to time.</p>
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

                            <div class="col-md-9 text-center mb-md-5">
                                <h2 class="section-title">File Your <span class="primary-color">5-Year Renewal or 10-Year Renewal</span> for the Same Price.</h2>
                            </div>

                            <div class="col-md-12">
                                <div class="renewalWrap">
                                    <div class="title">
                                        <h2>File a Trademark Renewal</h2>
                                    </div>
                                    <div class="subtitle">
                                        <h3>An attorney will review your current use of your trademark and file the appropriate documents.</h3>
                                    </div>
                                    <div class="body">
                                        <div class="left">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Review of Use in Commerce</li>
                                                <li><i class="fa fa-check"></i> Docketing of Future Due Dates</li>
                                                <li><i class="fa fa-check"></i> Attorney Advice on Next Steps</li>
                                                <li><i class="fa fa-check"></i> Prepare and file with IPO</li>
                                            </ul>
                                            <a href="javascript:void(0);" class="alphaChat button-round">TALK TO OUR CONSULTANT <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="right">
                                            <h2>$199<sup>.00</sup><small>+ GOVT FEE</small></h2>
                                            <p>5-Year Renewal or 10-Year Renewal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mb-md-5">
                                <div class="iconbox-container d-flex flex-wrap">
                                    <div class="iconbox-item-3 d-flex flex-wrap">
                                        <div class="iconbox-border d-flex align-items-center">
                                            <div class="iconbox-icon primary-bg">
                                                <i aria-hidden="true" class="icon icon-business"></i>
                                            </div>
                                            <div class="iconbox-content">
                                                <h4 style="font-size: 18px;font-weight: 700;color: #223645;">9,000+ Businesses Consulted</h4>
                                                <p>We have provided consultancy to numerous businesses to resolve their all queries & provided trust in their brand protection.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="iconbox-item-3 d-flex flex-wrap">
                                        <div class="iconbox-border d-flex align-items-center">
                                            <div class="iconbox-icon primary-bg">
                                                <i aria-hidden="true" class="icon icon-globe"></i>
                                            </div>
                                            <div class="iconbox-content" style="background-color: #535ee0;border-color: #4853d6;color: #fff;">
                                                <h4 style="font-size: 18px;font-weight: 700;color: #fff;">18,000+ Trademarks Registered</h4>
                                                <p>Our registered trademark stats speak for themselves. At Trademark Nova, we have registered highest number of trademarks globally.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="iconbox-item-3 d-flex flex-wrap">
                                        <div class="iconbox-border d-flex align-items-center">
                                            <div class="iconbox-icon primary-bg">
                                                <i aria-hidden="true" class="icon icon-search"></i>
                                            </div>
                                            <div class="iconbox-content">
                                                <h4 style="font-size: 18px;font-weight: 700;color: #223645;">4,000+ Cases In Progress</h4>
                                                <p>We are working vigorously for a vast number of businesses to minimize application rejection, & optimize application for success.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="bg-light-grey scheduleSec">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3>What Sets Us Apart?</h3>
                            <p>We know that every business is unique, so we take the time to understand your specific needs and goals when it comes to trademark renewal.
                            <p></p> Whether you need help tracking renewal deadlines, preparing renewal documentation, or navigating complex trademark issues, we're here to support you every step of the way.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="schedule">
                                <h2>Request a Schedule For Free Consultation</h2>
                                <a href="book-free-consultation" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
                            </div>
                            <p>With our expert guidance and support, you can renew your trademark with confidence, knowing that your brand is protected and your intellectual property rights are safeguarded for years to come. Contact us today to learn more about our trademark renewal services and how we can help you protect your valuable brand identity.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- faq html start -->
            <div class="faq-page-section">
                <div class="container">
                    <div class="faq-page-container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="faq-content-wrap">
                                    <div class="section-head text-center">
                                        <h2 class="section-title">Frequently Asked <span class="primary-color">Questions!</span></h2>
                                    </div>
                                    <div id="accordion-tab-two" class="accordion-content" role="tablist">
                                        <div id="accordion-E" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="accordion-E">
                                            <div class="card-header" role="tab" id="qus-E">
                                                <h5 class="mb-0">
                                                    <a data-bs-toggle="collapse" href="#collapse-five" aria-expanded="true" aria-controls="collapse-five">
                                                        When should we consider trademark protection for your brand?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-five" class="collapse show" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-E">
                                                <div class="card-body">
                                                    Anybody introducing a new brand identity or planning on offering newly branded
                                                    services or products should take the necessary steps to protect their trademark.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-F" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-F">
                                            <div class="card-header" role="tab" id="qus-F">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-six" aria-expanded="false" aria-controls="collapse-six">
                                                        How long will the registration process take?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-six" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-F">
                                                <div class="card-body">
                                                    The answer to this question will differ from agency to agency and based on staffing
                                                    changes and enhanced technologies at the United Kingdom Intellectual Property Office. If you’re
                                                    asking us specifically, you can count on the entire application process to take from
                                                    5 to 6 months.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-G" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-G">
                                            <div class="card-header" role="tab" id="qus-G">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-seven" aria-expanded="true" aria-controls="collapse-seven">
                                                        How long will the federal trademark registration last?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-seven" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-G">
                                                <div class="card-body">
                                                    It can take up to 10 years. Also, the registration can easily be renewed so long as
                                                    you have made sure to maintain an uninterrupted use of your trademark in interstate
                                                    commerce.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-H" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-H">
                                            <div class="card-header" role="tab" id="qus-H">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-eight" aria-expanded="true" aria-controls="collapse-eight">
                                                        When can I use the ® symbol?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-eight" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-H">
                                                <div class="card-body">
                                                    If you have a federally registered trademark, you will be able to use the ® symbol.
                                                    For every other mark, whether unregistered or registered, you will not be required
                                                    to add a designation. However, we always advise mark owners to attach the ‘SM’ or
                                                    ‘TM’ symbol to tell the industry that your company name, logo, or symbol is
                                                    proprietary to your services or goods.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-I" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-I">
                                            <div class="card-header" role="tab" id="qus-I">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-nine" aria-expanded="true" aria-controls="collapse-eight">
                                                        What are my chances of achieving a trademark registration?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-nine" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-I">
                                                <div class="card-body">
                                                    We always tell our clients that we aren’t ‘oddsmakers’. In other words, you get
                                                    exactly what you pay for. Our teams are skilled in improving the likelihood of your
                                                    success. They perform clearance to search for similar trademarks before sending out
                                                    an application and picking a highly distinctive mark.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-J" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-J">
                                            <div class="card-header" role="tab" id="qus-J">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-ten" aria-expanded="true" aria-controls="collapse-eight">
                                                        What is your your trademark registration process?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-ten" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-J">
                                                <div class="card-body">
                                                    We Help Drive Your Innovations in The Fast Lane. Complete Your Trademark Registration in Just 3 Simple Steps.
                                                    <p></p>
                                                    <h5>Submit Your Trademark Information</h5>
                                                    <p>Spend a couple of minutes filling out a simple questionnaire. This will initiate your registration process for your trademark.</p>
                                                    <h5>Select Your Service &amp; Make the Payment</h5>
                                                    <p>Get all the details in order! Select your coveted service with Trademark Nova &amp; make the payment for your desired services.</p>
                                                    <h5>Thorough Evaluation &amp; Trademark Filing</h5>
                                                    <p>To ensure that your trademark is completely unique, our team conducts a thorough trademark search across numerous databases and then file your trademark with UKIPO.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="schedule">
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