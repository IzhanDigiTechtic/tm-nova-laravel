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
                                <h3 class="banner-subtitle">Abandoned Trademark Refiling</h3>
                                <h2 class="banner-title">Register an Abandoned Trademark in the USA With<span> Trademark Nova</span></h2>
                                <div class="banner-text">
                                    <p><i class="fas fa-check-circle"></i>Expert trademark attorneys navigate the trademark process for you</p>
                                    <p><i class="fas fa-check-circle"></i>Official IPO filling firm with 100% success rate</p>
                                    <p><i class="fas fa-check-circle"></i>Same Day Trademark Application Filling Available</p>
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
                                    <h2 class="section-title">What is an <span class="primary-color">Abandoned</span> Trademark?</h2>
                                </div>
                                <p>If you want to bring back an old business or use its name for your new business, the original owner of the trademark may have stopped using it. To use the trademark exclusively, you must start using it again. This can be great for your business because you may get access to the previous customers of the old business, even if they were in a different area. However, you should do some research to make sure the trademark has really been abandoned before using it.</p>
                                <p>If you are a business in England, you must understand the trademark registration process before seeking to register an abandoned trade mark. If you do not complete the correct procedures, the US Intellectual Property Office (USPTO) may reject your trademark application. Contact our qualified legal consultants at Trademark Nova to get the comprehensive details regarding Trademark Registration!</p>
                            </div>
                            <div class="col-md-6">
                                <figure class="aboutImg">
                                    <img src="{{asset('assets/images/abandoned-img.webp')}}" alt="">
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
                        <div class="col-md-6">
                            <h3>Can a Trademark Be <span class="primary-color">Revoked</span> for Non-Use?</h3>
                            <p>When a business applies for a trademark, it is assumed that they will use it to promote their goods or services and benefit from legal protection for a period of ten years. Nevertheless, if the trademark remains unused for the first five years of registration, the IPO (Intellectual Property Office) has the authority to cancel the trademark registration.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="schedule">
                                <h2>Schedule Consultation With Trademark Nova</h2>
                                <a href="book-free-consultation" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
                            </div>
                            <ul class="listStyle">
                                <li><i class="fas fa-arrow-circle-right"></i> It is possible for anyone to request the cancellation of a trademark. </li>
                                <li><i class="fas fa-arrow-circle-right"></i> Trademark that has not been used for five years, can be filed for use</li>
                                <li><i class="fas fa-arrow-circle-right"></i> You can start from the day after the fifth anniversary of its registration.</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="section-title">How to Claim a <span class="primary-color">Dead Trademark</span></h2>
                            <p>To request the cancellation of a trademark, you need to submit the appropriate forms and pay the fee. Your application must provide details of the periods during which you believe the trademark has not been in use. However, the owner of the trademark has the right to challenge your assertion by demonstrating that they have used the trademark in some capacity within the past five years. If they can provide evidence of such use, they can keep their registration and block any cancellation attempts.</p>

                            <p>Additionally, if the original trademark owner is unable to prove genuine usage of the trademark during the five-year period preceding the revocation application, they may still be able to present valid reasons for the mark's non-use, such as export or legal reasons. It is advisable to contact the registered trademark owner and explore the possibility of transferring or selling the mark before pursuing any legal action. Suppose you decide to go ahead with legal proceedings. In that case, it is also advisable to seek legal assistance from an intellectual property lawyer to ensure you are progressing through the process correctly. Contact Trademark Nova to get the full assistance through a qualified legal attorney to get you through this process seamlessly.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-light-grey ourProcess">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-8 text-center mb-md-5">
                            <h2 class="section-title">How <span class="primary-color">Trademark Nova</span> Can Help</h2>
                            <p>Trademark Nova attorneys have represented a wide variety of businesses - from Amazon sellers, clothing designers, restaurants, professional service providers, and everything in between. If you need help deciding whether to register an abandoned trademark, our experienced intellectual property lawyers can assist. For a low monthly fee, you will have unlimited access to lawyers to answer your questions and draft and review your documents. </p>
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
                                    <h4>Run a comprehensive search</h4>
                                    <p>Give us some basic information about trademark and describe your goods and services you provide.</p>
                                </div>
                                <div class="cell center">
                                    <div class="circleBig">
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">02</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-8.webp')}}" alt=""></div>
                                    </div>
                                    <h4>Negotiate with the owner</h4>
                                    <p> Before any legal proceedings, contact the registered trademark owner and discuss the possibility of transferring or selling the mark.</p>
                                </div>
                                <div class="cell right">
                                    <div class="circleBig">
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">03</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-9.webp')}}" alt=""></div>
                                    </div>
                                    <h4>Trademark will be acquired</h4>
                                    <p>After complete due diligence, you will be eligible for the registration, we will prepare & refile your trademark application.</p>
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
                                    <div class="section-head text-center mb-5">
                                        <h2 class="section-title">Frequently Asked <span class="primary-color">Questions!</span></h2>
                                    </div>
                                    <div id="accordion-tab-two" class="accordion-content" role="tablist">
                                        <div id="accordion-E" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="accordion-E">
                                            <div class="card-header" role="tab" id="qus-E">
                                                <h5 class="mb-0">
                                                    <a data-bs-toggle="collapse" href="#collapse-five" aria-expanded="true" aria-controls="collapse-five">
                                                        1. Why would someone abandon their trademark?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-five" class="collapse show" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-E">
                                                <div class="card-body">
                                                    There are various reasons why a trademark owner may abandon their trademark, such as the business closing down or changing their brand name.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-F" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-F">
                                            <div class="card-header" role="tab" id="qus-F">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-six" aria-expanded="false" aria-controls="collapse-six">
                                                        2. What is an abandoned trademark service?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-six" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-F">
                                                <div class="card-body">
                                                    An abandoned trademark service is a service that helps individuals and businesses identify and acquire abandoned trademarks for their own use.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-G" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-G">
                                            <div class="card-header" role="tab" id="qus-G">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-seven" aria-expanded="true" aria-controls="collapse-seven">
                                                        3. How does an abandoned trademark service work?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-seven" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-G">
                                                <div class="card-body">
                                                    An abandoned trademark service typically searches trademark databases for abandoned trademarks that may be of interest to their clients. They then provide advice on how to acquire the trademark and file the necessary paperwork to do so.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-H" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-H">
                                            <div class="card-header" role="tab" id="qus-H">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-eight" aria-expanded="true" aria-controls="collapse-eight">
                                                        4. What are the benefits of using an abandoned trademark service?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-eight" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-H">
                                                <div class="card-body">
                                                    Using an abandoned trademark service can help businesses acquire trademarks that may not be available through traditional registration methods. This can provide a competitive advantage and help protect their brand.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-I" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-I">
                                            <div class="card-header" role="tab" id="qus-I">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-nine" aria-expanded="true" aria-controls="collapse-eight">
                                                        5. How long does it take to acquire an abandoned trademark?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-nine" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-I">
                                                <div class="card-body">
                                                    The length of time it takes to acquire an abandoned trademark depends on various factors, such as the complexity of the application and the backlog at the trademark office.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-J" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-J">
                                            <div class="card-header" role="tab" id="qus-J">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-ten" aria-expanded="true" aria-controls="collapse-eight">
                                                        6. Are there any risks involved in acquiring an abandoned trademark?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-ten" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-J">
                                                <div class="card-body">
                                                    Acquiring an abandoned trademark can be risky if the trademark was abandoned due to legal issues or other problems. It is important to conduct due diligence and consult with a legal professional before acquiring an abandoned trademark.</div>
                                            </div>
                                        </div>
                                        <div id="accordion-K" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-K">
                                            <div class="card-header" role="tab" id="qus-K">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-eleven" aria-expanded="true" aria-controls="collapse-eleven">
                                                        7. Is an abandoned trademark service the same as a trademark registration service?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-eleven" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-K">
                                                <div class="card-body">
                                                    No, an abandoned trademark service is not the same as a trademark registration service. A trademark registration service helps businesses register their trademark, while an abandoned trademark service helps businesses acquire abandoned trademarks.</div>
                                            </div>
                                        </div>
                                        <div id="accordion-L" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-L">
                                            <div class="card-header" role="tab" id="qus-L">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-twelve" aria-expanded="true" aria-controls="collapse-twelve">
                                                        8. How much does it cost to use an abandoned trademark service?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-twelve" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-L">
                                                <div class="card-body">
                                                    The cost of using an abandoned trademark service varies depending on the complexity of the application. It is important to get a quote from Trademark Nova before proceeding.</div>
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