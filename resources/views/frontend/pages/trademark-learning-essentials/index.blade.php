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
                                <h3 class="banner-subtitle">Trademark Learning Essentials</h3>
                                <h2 class="banner-title">Access A Variety of Educational Resources at <span>Trademark Nova</span></h2>
                                <div class="banner-text">
                                    <p>By providing trademark learning essentials, Trademark Nova is furnishing the online learning platform that provides users with access to a variety of educational resources, so that they can make informed decisions.</p>
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

            <section class="bg-light-grey apartSec">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h2>Trademark Learning <span class="primary-color">Essentials</span></h2>
                            <p>Trademark Learning Essentials is an innovative approach by Trademark Nova for the users to learn the significance, process and other essential knowledge needed to get their trademark registered.</p>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <div class="apartCell" style="min-height: 14rem;">
                                <div class="circle"><img src="{{asset('assets/images/io4.png')}}" alt=""></div>
                                <h4>What is a Trademark?</h4>
                                <p>A trademark can be any word, phrase, symbol, design, or a combination of these that identifies your goods or services.</p>
                                <a href="what-is-a-trademark">Learn more</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell" style="min-height: 14rem;">
                                <div class="circle"><img src="{{asset('assets/images/io5.png')}}" alt=""></div>
                                <h4>Trademark, Patent, or Copyright</h4>
                                <p>Trademarks, patents, and copyrights are different types of intellectual property. IPO grants patents & registers trademarks.</p>
                                <a href="trademark-patent-copyright">Learn more</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell" style="min-height: 14rem;">
                                <div class="circle"><img src="{{asset('assets/images/io6.png')}}" alt=""></div>
                                <h4>Trademark Examples</h4>
                                <p>Almost anything can be a trademark if it indicates the source of your goods and services. It could be a word, slogan...</p>
                                <a href="trademark-examples">Learn more</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell" style="min-height: 14rem;">
                                <div class="circle"><img src="{{asset('assets/images/io7.png')}}" alt=""></div>
                                <h4>Scope of Protection</h4>
                                <p>A trademark is always connected to the specific goods or services sold to customers with that trademark.</p>
                                <a href="scope-of-protection">Learn more</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell" style="min-height: 14rem;">
                                <div class="circle"><img src="{{asset('assets/images/io8.png')}}" alt=""></div>
                                <h4>What are Strong Trademarks?</h4>
                                <p>It’s important to have a strong trademark that is inherently distinctive. This means your trademark quickly...</p>
                                <a href="strong-trademarks">Learn more</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell" style="min-height: 14rem;">
                                <div class="circle"><img src="{{asset('assets/images/io9.png')}}" alt=""></div>
                                <h4>Why Register Your Trademark?</h4>
                                <p>Trademark is listed in our database of registered and pending trademarks. This provides public notice...</p>
                                <a href="why-register-your-trademark">Learn more</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell" style="min-height: 14rem;">
                                <div class="circle"><img src="{{asset('assets/images/io4.png')}}" alt=""></div>
                                <h4>Do I Need an Attorney?</h4>
                                <p>Hiring an attorney may save you money because an attorney will know how to best advise you on your trademark...</p>
                                <a href="do-i-need-an-attorney">Learn more</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell" style="min-height: 14rem;">
                                <div class="circle"><img src="{{asset('assets/images/io5.png')}}" alt=""></div>
                                <h4>How Long Does It Take?</h4>
                                <p>Usually, the process takes 12 to 18 months. Registering your trademark is a complex procedure that involves...</p>
                                <a href="how-long-does-it-take">Learn more</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell" style="min-height: 14rem;">
                                <div class="circle"><img src="{{asset('assets/images/io6.png')}}" alt=""></div>
                                <h4>Common Issues in Applications</h4>
                                <p>As you file, be careful not to make these common errors. Some are easily fixable, but unfortunately some...</p>
                                <a href="common-problems-in-applications">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-light-grey scheduleSec">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3>Learn To Identify And Protect Your Intellectual Property</h3>
                            <p>Are you thinking about starting a business? Do you own one already? Or maybe you’re an inventor, artist, or designer. Maybe you sell goods online or in a store or provide a service to others. If so, you may have intellectual property. Do you know what types of IP you might have? Do you know how to protect them? Contact Trademark Nova Right Away!</p>
                        </div>
                        <div class="col-md-6">
                            <div class="schedule">
                                <h2>Request a Schedule For Free Consultation</h2>
                                <a href="book-free-consultation" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
                            </div>
                            <p>Unlock the power of your ideas! Learn how to identify and protect your intellectual property today. From trademarks to patents, copyrights to trade secrets, our comprehensive guide has got you covered. Don't let others profit from your hard work – take action now and safeguard your creative genius! Click here to get started.</p>
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