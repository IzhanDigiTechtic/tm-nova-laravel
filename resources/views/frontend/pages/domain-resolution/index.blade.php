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
                                <h3 class="banner-subtitle">Trademark Domain Resolution</h3>
                                <h2 class="banner-title">Don't Let Cybersquatters Take Your <span>Trademarked Domain</span> - Let Us Help</h2>
                                <div class="banner-text">
                                    <p>Our expert team can help businesses navigate complex domain name disputes, such as cases involving confusingly similar domain names or domain names registered in bad faith. We work to recover or transfer the disputed domain name to the rightful trademark owner</p>
                                </div>
                                <div class="banner-button btnSec">
                                    <a href="{{route('step1')}}" class="button-round">Get Started Now</a>
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
                                    <h2 class="section-title">Trademark Domain Protection: <span class="primary-color">When to Do It</span></h2>
                                </div>
                                <p>Ideally trademark registration and domain name registration go hand in hand. You may have the perfect trademark for your business, but what happens if the domain name is not available? It may not be worth the hassle of positioning your new brand in the market place if possible clients are unable to find you online easily through your trademark name.</p>
                                <p>Every business should aim to have identical trademarks and domain names for their business. This is not always possible if a correct strategy is not put in place from the start. Trademark Nova's trademark domain resolution service helps businesses protect their online presence and brand reputation by resolving domain name disputes. With the rise of cybersquatting and domain hijacking, it's becoming increasingly important for businesses to secure their online trademarks. Trademark Nova also provide ongoing monitoring to prevent future trademark infringement. With our trademark domain resolution service, businesses can rest assured that their online trademarks are protected and secure.</p>
                            </div>
                            <div class="col-md-6">
                                <figure class="aboutImg">
                                    <img src="{{asset('assets/images/domain-protection.webp')}}" alt="">
                                    <span><img src="{{asset('assets/images/logo-io.webp')}}" alt=""></span>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="py-5 bg-light-grey">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="section-title">Difference Between <span class="primary-color">Trademark & Domain Names</span></h3>
                            <p>Trademarks protect the name or design a business uses to differentiate itself from competitors that offer similar goods or services.</p>
                            <p>Domain names are the words used to connect you with a website. Without domain names you would have to know the IP address of a website to access it.</p>
                            <p>A Trademark application is done before the patent and trademark office of the country in which you want to protect it. Trademark registration usually requires you to be represented by an IP law firm.</p>
                            <p>A domain name is registered through a domain name registry that is not necessarily associated with a specific country. As a general rule anybody can register a domain name directly through the registry and the services of a law firm are not necessary.</p>
                            <p>The trademark owner will only have rights to the trademark in the country or countries they have effectively registered the trademark in.</p>
                            <p>The domain name owner has exclusive rights to use the domain name as registered. Top level domains are accessible over the internet from anywhere in the world.</p>
                            <p>Even in a single country identical trademarks can be registered under different classes if they are for unrelated products or services.</p>
                            <p>In the case of domain names identical domain names cannot exist in a single top level domain. Top level domains is the last portion of a domain name. Examples of top level domains are “com”, “net and “org”.</p>
                            <p>Information about the trademark owner will always be publicly available.</p>
                            <p>Information about the owner of a domain name can be hidden in certain cases by paying extra fees.</p>
                            <p>A registered trademark constitutes intellectual property.</p>
                            <p>A domain name does not grant intellectual property rights.</p>
                        </div>
                    </div>
                </div>
            </div>

            <section class="domainservice">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3 class="section-title">Domain Name <span class="primary-color">Services</span></h3>
                            <p>With issues related to their use becoming ever more closely aligned with those of trade mark registration, domain names are now an integral part of any Intellectual Property portfolio.</p>
                            <p>At Trademark Nova, we offer specialist expertise covering all aspects of domain name management. This includes general advice on the selection of domain names and filing strategies. Our service areas in particular include:</p>
                            <ul class="listStyle mt-4">
                                <li><i class="fas fa-arrow-circle-right"></i> Arbitration & dispute resolution</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Arbitration through WIPO Arbitration & Mediation Center</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Acquisition</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Domain name disputes</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Domain name protection</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Enforcement of Intellectual Property Rights related to Domain Names and websites</li>
                                <li><i class="fas fa-arrow-circle-right"></i> E-Commerce related IP issues</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Infringements, Unfair Competition & Passing-off</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Investigation Services</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Litigation</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Domain Name filings & Registration</li>
                            </ul>
                        </div>
                        <div class="col-lg-4 mt-lg-0 mt-4">
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

            @include ('includes/testimonial')

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