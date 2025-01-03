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
                                <h3 class="banner-subtitle">Trademark Ownership Transfer</h3>
                                <h2 class="banner-title">Pass The Baton: Let Us Help You Transfer Your <span>Trademark Ownership</span></h2>
                                <div class="banner-text">
                                    <p>Whether you're looking to transfer ownership due to a merger or acquisition, or you simply want to pass on the rights of your trademark to someone else, Trademark Nova is a one stop solution for all your business needs.</p>
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
                                    <h2 class="section-title">Trademark Ownership <span class="primary-color">Transfer Services</span></h2>
                                </div>
                                <p>Transferring ownership of a trademark can be a complex and challenging process, but it's an important step for businesses that want to maintain control over their brand. Whether you're looking to transfer ownership due to a merger or acquisition, or you simply want to pass on the rights to your trademark to someone else, it's crucial to work with a trusted service provider that can guide you through the process. At Trademark Nova, our trademark ownership transfer services are designed to simplify the transfer process and ensure that your rights are protected every step of the way. With our expertise and support, you can feel confident in knowing that your trademark will be transferred seamlessly and efficiently, allowing you to focus on growing your business and protecting your brand.</p>
                            </div>
                            <div class="col-md-6">
                                <figure class="aboutImg">
                                    <img src="{{asset('assets/images/tot-img1.webp')}}" alt="">
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
                            <h2 class="section-title">How it <span class="primary-color">Works</span></h2>
                            <p>A trade mark gives the owner an exclusive right to use the registered brand name and/or logo for a period of 10 years, renewable for subsequent 10-year periods without a limit in time. If you are selling or buying a trade mark then you need to ensure that you get the right service from the right solicitors. At Trademark Nova, the process of transferring ownership of a trademark typically involves several steps, including: </p>
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
                                    <h4>Determine transfer eligibility</h4>
                                    <p>Before you can transfer ownership of a trademark, it's important to make sure you're eligible to do so. You should review the terms of your trademark registration and any agreements or contracts related to the trademark to ensure that the transfer is permissible.</p>
                                </div>
                                <div class="cell center">
                                    <div class="circleBig">
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">02</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-8.webp')}}" alt=""></div>
                                    </div>
                                    <h4>Draft a transfer agreement</h4>
                                    <p>Once you've determined that you're eligible to transfer ownership of the trademark, you'll need to draft a transfer agreement that outlines the terms of the transfer, including the rights and responsibilities of both parties involved.</p>
                                </div>
                                <div class="cell right">
                                    <div class="circleBig">
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">03</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-9.webp')}}" alt=""></div>
                                    </div>
                                    <h4>Record & update the transfer</h4>
                                    <p>After the transfer agreement is signed, the transfer will be recorded with the relevant trademark office. We will then update the trademark records to reflect the change in ownership. This may involve updating the trademark registration and any other relevant documents.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-subscribe py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="subscribe-content p-0 pe-5">
                                <div class="section-head">
                                    <h2 class="section-title">IP <span class="primary-color">Contracts and Legalities</span> of Trademark Transfers</h2>
                                </div>
                                <p>A well-drafted IP contract is vital when transferring ownership. You want to ensure that terms relating to all aspects of the trade mark and its resemblance are covered and that both the benefits and the liabilities that could arise in the future are clearly agreed upon.</p>
                                <p>You’ll also want to confirm the legal formalities surrounding a successful transfer and the trade mark itself:</p>
                                <ul class="listStyle mb-4">
                                    <li><i class="fas fa-arrow-circle-right"></i> Is the trade mark registered in the class you wish to use?</li>
                                    <li><i class="fas fa-arrow-circle-right"></i> Is it registered in the countries you wish to operate in?</li>
                                    <li><i class="fas fa-arrow-circle-right"></i> Is it still valid, or does it risk being struck off?</li>
                                    <li><i class="fas fa-arrow-circle-right"></i> Is that which is being transferred agreed upon (for example, is it a partial assignment or complete assignment of the rights)?</li>
                                </ul>
                                <p>More to consider than you first thought, right? The complexity of issues like legal ownership changes of intellectual property rights usually requires a specialist lawyer to consult throughout the process, plus draft and review documents, contracts and more. After all, you don’t want to get something wrong, or not account for a particular situation, and then run the risk of a costly dispute in the future.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-subscribe pb-5" style="background-image: url(assets/images/industry-leading-bg.webp);">
                <div class="container">
                    <div class="subscribe-inner">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="subscribe-content p-0 pe-5">
                                    <div class="section-head">
                                        <h2 class="section-title">Need expert support with a trademark valuation or transfer?</h2>
                                    </div>
                                    <p>If you’d like help with a trademark assignment, or anything to do with transferring the ownership of intellectual property, including trade marks, design rights and copyright, we’re here to help. This is an area we specialise in. Get in touch with our IP team today to organise a free consultation.</p>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="formStyle">
                                    <h2>Contact Us</h2>

                                    @include ('includes/lead-form')

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

                            <div class="col-lg-12">
                                <div class="schedule mt-0 mb-5">
                                    <h2>Request a Schedule For Free Consultation</h2>
                                    <a href="book-free-consultation" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
                                    <a href="tel:{{ config('var.number') }}" class="telNum"><span>Call Us Now:</span>{{ config('var.numberdisplay') }}</a>
                                </div>
                            </div>

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
                        </div>
                    </div>
                </div>
            </div>
            <!-- faq html end -->

            @include ('includes/testimonial')

        </main>
@endsection