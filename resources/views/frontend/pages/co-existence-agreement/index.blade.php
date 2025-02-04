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
                                <h3 class="banner-subtitle">Co-Existence Agreement</h3>
                                <h2 class="banner-title">Smoothly Navigate Shared Interests With <span>Co-Existence Agreement </span></h2>
                                <div class="banner-text">
                                    <p>Expertly crafted agreements that meet your unique needs and protect your intellectual property. With our service, businesses can establish a secure and cooperative partnership, minimizing the risk of conflict and maximizing collaboration.</p>
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
                                    <h2 class="section-title">Co-Existence <span class="primary-color">Agreement</span></h2>
                                </div>
                                <p>When a business faces the possibility of conflict and confusion due to similar names, logos or trademarks, it has a few options. One option is to do nothing and hope for the best. While this may not cause problems for some businesses, it's not recommended for growing businesses or those that want to avoid commercial risks.</p>
                                <p>Another option is to take legal action, where the owner of an earlier mark can oppose a later mark's registration or seek legal relief if the later mark is used. Even if the earlier mark owner chooses not to take legal action, the later business may still seek a declaration from a court that its name or logo does not infringe on earlier rights. The third option is for the businesses to discuss the potential problems and see if they can come to an agreement on how to prevent them from happening. This approach is known as coexistence.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset('assets/images/co-existence-img.webp')}}" alt="" class="shadow rounded w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="py-5 bg-light-grey">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="section-title">When to <span class="primary-color">Enter</span> into an Agreement</h3>
                            <strong>A coexistence agreement can iron out a lot of uncertainties and difficulties before they occur. This may arise:</strong>
                            <ul class="listStyle mt-4">
                                <li><i class="fas fa-arrow-circle-right"></i> if you are aware that another business is trading, or about to do so, in a way that might confuse your customers or damage your business</li>
                                <li><i class="fas fa-arrow-circle-right"></i> if you are worried that someone else is seeking to register a trade mark that might make it difficult for you to continue or expand your business</li>
                            </ul>
                            <p></p>
                            <p>The same considerations may apply if a bigger business is selling off a subsidiary or broken up into smaller units, each of which wants to be able to make some use of the original business name.</p>
                            <strong>As a rule of thumb, whenever you think that you might at some stage want to sue someone for using your:</strong>
                            <ul class="listStyle mt-4">
                                <li><i class="fas fa-arrow-circle-right"></i> Name</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Trademark,</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Goodwill</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Business get-up</li>
                            </ul>
                            <p></p>
                            <p>Or whenever you think that they might want to sue you for the same reason, a coexistence agreement may be a good idea.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="section-title">When <span class="primary-color">Not to Enter</span> into an Agreement</h3>
                            <strong>In principal, coexistence agreements enable businesses to protect their own legal interests and shape their own commercial destiny, rather than leaving disputed matters to a court ruling that may be expensive, unfavourable and slow in coming. But you should not enter into a coexistence agreement in the following situations:</strong>
                            <ul class="listStyle mt-4">
                                <li><i class="fas fa-arrow-circle-right"></i> if you have not yet sorted out your own business plan (since you may find that you have unduly limited the natural scope for expanding your business)</li>
                                <li><i class="fas fa-arrow-circle-right"></i> if you cannot understand its terms and they have not been clearly explained to you</li>
                                <li><i class="fas fa-arrow-circle-right"></i> if you do not own, or have no absolute right to control, the rights that you are agreeing not to enforce</li>
                            </ul>
                            <p></p>
                            <div class="schedule">
                                <h2>Request a Schedule For Free Consultation</h2>
                                <a href="book-free-consultation" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
                                <a href="tel:{{ config('var.number') }}" class="telNum"><span>Call Us Now:</span>{{ config('var.numberdisplay') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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