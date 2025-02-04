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
            <section class="home-banner" style="background: url(assets/images/domain-registeration-ban.webp) center/cover no-repeat;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <h3 class="banner-subtitle">Don't Let Copycats Steal Your Thunder</h3>
                                <h2 class="banner-title">Use Our Trademark Monitoring Services To <span> Stay Ahead </span> Of The Game</h2>
                                <div class="banner-text">
                                    <p>At Trademark Nova, we keep a watchful eye on your trademarks so that you don't have to. We use state-of-the-art technology and industry expertise to detect any unauthorized use of your brand name, logo, or any other identifying mark. </p>
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

            <div class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h3 class="section-title">Protect And <span class="primary-color">Enforce Your Trademark Rights </span> With Trademark Nova's Trademark Monitoring Service</h3>
                            <p>If you're a business owner, you know how much hard work goes into building a brand. Your brand represents your identity, your reputation, and your values. That's why it's crucial to protect it from any kind of infringement. But monitoring your trademarks can be a tedious task, and it's easy to miss a copycat who may be trying to use your brand name for their gain. That's where our Trademark Monitoring Services come in.</p>
                            <p>Our Trademark Monitoring Services keep a watchful eye on your trademarks so that you don't have to. We use state-of-the-art technology and industry expertise to detect any unauthorized use of your brand name, logo, or any other identifying mark. We also keep you informed of any potential infringements, so you can take action quickly and efficiently. With our Trademark Monitoring Services, you can rest assured that your brand is safe and secure, allowing you to focus on growing your business with peace of mind. So why take the risk? Protect your brand with our reliable and comprehensive Trademark Monitoring Services today.</p>
                            <h5>Protect Your Trademark Rights From as little as $170</h5>
                        </div>
                    </div>
                </div>
            </div>

            <section class="domainservice bg-light-grey">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3 class="section-title">Trademark Monitoring <span class="primary-color">Service</span></h3>
                            <p>Once your trademark is safely registered, we recommend that a watching service is set up to monitor any competitors who may be seeking to register a substantially similar mark in the areas where your business trades. This enables you to react quickly to any potential infringements on your trademarks.</p>
                            <p>When you sign up to our watching service, you can either choose to receive reports on the relevant registries detailing any potential conflicts directly, or our team of expert trademark attorneys can manage the analysis on your behalf for an additional yearly charge.</p>
                            <p>Here are examples of the trademark watching fees for one word or device mark in one Class for one year, excluding trademark Direct analysis. Please note that for each additional class a 50% supplement will be added.</p>
                            <table class="table tableStyle table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="2">1. Worldwide monitoring service (including US) covering one Class:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td>$269.00</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total</strong></td>
                                        <td>$269.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table tableStyle table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="2">2. UK monitoring service covering one Class:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td>$123.00</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total</strong></td>
                                        <td>$123.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table tableStyle table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="2">3. European Union only monitoring service covering one Class:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td>$206.00</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total</strong></td>
                                        <td>$206.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table tableStyle table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="2">4. Europe-wide monitoring service covering one Class:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td>$226.00</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total</strong></td>
                                        <td>$226.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>The above fees include disbursements and our service charges for setting up the monitoring service with the watch notices sent directly to you without trademark Direct analysis.</p>
                            <p><a href="tel:{{ config('var.number') }}">Contact us today</a> for no obligation advice on our trademark monitoring services.</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="schedule">
                                <img src="{{asset('assets/images/schedule-img.webp')}}" alt="">
                                <h2>Request a Schedule For Free Consultation</h2>
                                <a href="book-free-consultation" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
                                <a href="tel:{{ config('var.number') }}" class="telNum"><span>Call Us Now:</span>{{ config('var.numberdisplay') }}</a>
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
                                    <div class="section-head text-center mb-5">
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
        </main>
@endsection