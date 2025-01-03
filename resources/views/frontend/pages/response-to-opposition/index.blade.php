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
            <section class="home-banner" style="background: url(assets/images/comprehensive-trademark-ban.webp) center/cover no-repeat;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <h3 class="banner-subtitle">Response to Opposition Services</h3>
                                <h2 class="banner-title">Handling Opposition With <span>Expertise</span> And Ease</h2>
                                <div class="banner-text">
                                    <p>At Trademark Nova, with our knowledge and experience, we can provide tailored solutions that suit each individual's unique circumstances, ensuring that we are equipped to face any challenge that comes their way.</p>
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

            <section class="about-page-section">
                <div class="about-inner-page">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="section-head">
                                    <h2 class="section-title">Don’t Let Them Tell You No! No Matter What The Issue Is, <span class="primary-color">We Have The Right Response!</span></h2>
                                </div>
                                <p>Your trademark is a valuable asset that represents your brand, and it's important to protect it. However, there may be situations where others try to challenge your rights or question your ownership of the trademark. In such cases, it's important not to let them tell you no. With our action response services, you can be confident that you have the right response no matter what the issue is. Our team of experts is equipped with the knowledge and experience to handle a wide range of trademark issues, including infringement, opposition, and cancellation proceedings. We understand the importance of your trademark and will work tirelessly to protect your rights and ensure that your brand is not compromised. So, if you're facing any challenges related to your trademark, don't hesitate to reach out to us. We're here to help.</p>
                            </div>
                            <div class="col-md-6">
                                <figure class="aboutImg">
                                    <img src="{{asset('assets/images/response-opposition-img.webp')}}" alt="">
                                    <span><img src="{{asset('assets/images/logo-io.webp')}}" alt=""></span>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-light-grey scheduleSec">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 mb-5">
                            <h2>Why Should You <span class="primary-color">Respond?</span></h2>
                        </div>
                        <div class="col-md-4">
                            <img src="{{asset('assets/images/io1.webp')}}" alt="" class="mb-3">
                            <h4>You’re Invested</h4>
                            <p>As a trademark owner, you have invested time, effort, and resources into building your brand. Therefore, it's important to respond to any opposition or challenge to protect your investment and preserve the value of your trademark. By responding, you demonstrate your commitment to your brand and your willingness to defend it against any threats.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{asset('assets/images/io2.webp')}}" alt="" class="mb-3">
                            <h4>Back on Track</h4>
                            <p>Response in a timely manner can help you get back on track with your registration process. By addressing any concerns raised by the opposition, you increase your chances of protecting your brand. Delaying or ignoring opposition, on the other hand, can lead to costly legal disputes and potentially delay or even derail your trademark registration process.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{asset('assets/images/io3.webp')}}" alt="" class="mb-3">
                            <h4>Quality You Can Trust</h4>
                            <p>Choosing us for your action response means you'll receive top-quality service from our experienced team of experts. We understand the importance of your trademark and work diligently to provide the best possible response to any challenges or opposition. With our assistance, you can increase your chances of getting accepted and protecting your brand.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ourProcess">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8 text-center mb-5">
                            <h2 class="section-title">How it <span class="primary-color">Works</span></h2>
                            <p>At Trademark Nova, our process is designed to provide comprehensive and effective solutions to a wide range of trademark challenges. We begin by conducting a thorough analysis of the situation and identifying the best course of action. Our team of experts will review any opposition or challenge to your trademark and provide you with a clear understanding of the issues at hand. We'll then work with you to develop a strategy that's tailored to your specific needs and objectives.</p>
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
                                        <div class="circle"><img src="{{asset('assets/images/process-io-7.webp')}}" alt=""></div>
                                    </div>
                                    <h4>Share Your Case with <br> Trademark Nova</h4>
                                    <p>Give us some basic information about your trademark registration and describe your goods and services you provide. All in all, we’ll just need a few simple questions answered or your attorney will handle the rest</p>
                                </div>
                                <div class="cell center">
                                    <div class="circleBig">
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">02</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-8.webp')}}" alt=""></div>
                                    </div>
                                    <h4>We Will Draft an <br> Action Response</h4>
                                    <p>We'll begin drafting a response that addresses the concerns raised by the opposition. Our attorneys & trademark experts will craft a persuasive and effective response that highlights the strengths of your trademark and effectively addresses any objections or challenges. </p>
                                </div>
                                <div class="cell right">
                                    <div class="circleBig">
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">03</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-9.webp')}}" alt=""></div>
                                    </div>
                                    <h4>Finalise the Draft in <br> Compliance With Law</h4>
                                    <p>We'll then work with you to finalize the response and ensure that it's submitted on time and in compliance with all applicable rules and regulations. Throughout the process, we'll keep you informed of our progress and provide regular updates on the status of your case. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-subscribe" style="background-image: url(assets/images/industry-leading-bg.webp);">
                <div class="container">
                    <div class="subscribe-inner">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="subscribe-content">
                                    <div class="section-head">
                                        <h2 class="section-title">Industry Leading Attorneys With Extensive Experience in Trademark Industry</h2>
                                    </div>
                                    <p>Trademark Nova has a competent team, holding qualifications from leading law schools of United States, with a goal-oriented mindset, ready to deliver results in the lowest possible turnaround time. Wouldn’t you rather take the first step and start your Trademark journey with us today and be the first to own your company’s most valuable asset forever?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-light-grey apartSec">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h2 class="section-title">What sets us <span class="primary-color">apart?</span></h2>
                        </div>
                        <div class="col-md-7">
                            <p>We understand that your trademark is a valuable asset, and we're committed to protecting it to the best of our abilities. Our goal is to provide you with a comprehensive and effective action response that helps you achieve your trademark objectives and safeguards your brand for years to come. So, if you're facing any trademark challenges or opposition, don't hesitate to contact us. We're here to help.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io1.png')}}" alt=""></div>
                                <h4>Dedicated Account Manager</h4>
                                <p>Unlike other companies where you’re just a number, with Trademark Nova you have a dedicated, knowledgeable Account Manager to answer all of your questions and guide your trademark through to registration.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io2.png')}}" alt=""></div>
                                <h4>We Make Legal Easy</h4>
                                <p>At Trademark Nova, our top-notch systems make assembling even the most complex of legal documents quick and easy. Just answer a few simple questions and we’ll take care of the rest!</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io3.png')}}" alt=""></div>
                                <h4>Affordable, Flat-Rate Services</h4>
                                <p>And unlike services that charge by the hour and can cost an arm and a leg our flat-fee services and negotiated rates with our plan attorneys have up front pricing to keep you within your legal budget.</p>
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
            @include ('includes/testimonial')

        </main>
    @endsection