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
            <section class="home-banner" style="background: url(assets/images/company-renewal-ban.webp) center/cover no-repeat;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <h3 class="banner-subtitle">Company Renewal Service By Trademark Nova</h3>
                                <h2 class="banner-title">Keep Your Business Alive & Renew Your Company <span>With Ease</span></h2>
                                <div class="banner-text">
                                    <p>We understand that every business is unique, which is why we offer personalized solutions tailored to your specific needs and requirements. Whether you're a small startup or a large corporation, our Company Renewal Service is designed to help your business thrive.</p>
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

            <section class="about-page-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h2 class="section-title">Renew your services <span class="primary-color">quickly</span> and <span class="primary-color">easily</span></h2>
                            <p>Trademark Nova is proud to offer a comprehensive and reliable Company Renewal Service to help ensure the continued success and compliance of your business. Our team of experts understands the importance of renewing your company's registration and other legal requirements on time, and we are committed to providing you with the support and guidance you need to make the process simple and hassle-free. We'll take care of all the necessary paperwork and deadlines, ensuring that your business stays legal and compliant, and avoiding any potential penalties or legal issues. </p>
                            <p>Whether you need to renew your company registration, business licenses, or any other legal requirements, our team will work with you to ensure that the process is smooth and efficient. With our Company Renewal Service, you can have peace of mind knowing that your business is secure and ready for the future. Contact us today to learn more about how we can help you renew your company with confidence.</p>

                        </div>
                        <div class="col-md-6">
                            <figure class="aboutImg">
                                <img src="{{asset('assets/images/company-renewal-img1.webp')}}" alt="">
                                <span><img src="{{asset('assets/images/logo-io.webp')}}" alt=""></span>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-light-grey ourProcess">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-8 text-center mb-md-5">
                            <h2 class="section-title">Our <span class="primary-color">Process</span></h2>
                            <p>Trademark Nova's Company Renewal Process is designed to make renewing your business registration and legal requirements simple and hassle-free. Our team of experts will handle all the necessary paperwork, deadlines, and legal requirements, ensuring that your business stays compliant and ready for the future.</p>
                        </div>
                        <div class="col-md-12">
                            <div class="processRow">
                                <img src="{{asset('assets/images/arrow.webp')}}" alt="" class="arrow">
                                <div class="cell left">
                                    <div class="circleBig">
                                        <span class="dot topLeft"></span>
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">01</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-1.webp')}}" alt=""></div>
                                    </div>
                                    <h4>Thorough Evaluation</h4>
                                    <p>Our process starts with a thorough evaluation of your company's renewal needs and requirements, allowing us to provide you with personalized solutions that meet your specific needs. </p>
                                </div>
                                <div class="cell center">
                                    <div class="circleBig">
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">02</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-2.webp')}}" alt=""></div>
                                    </div>
                                    <h4>Preparation & Submission of Paperwork</h4>
                                    <p>We'll then prepare and submit all the necessary paperwork, and keep you informed throughout the entire renewal process. Our team of experts is available to answer any questions you may have and to provide guidance and support every step of the way. </p>
                                </div>
                                <div class="cell right">
                                    <div class="circleBig">
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">03</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-3.webp')}}" alt=""></div>
                                    </div>
                                    <h4> And, You Are Done!</h4>
                                    <p>With Trademark Nova Renewal Process, you can have peace of mind knowing that your business is secure and ready to take on whatever the future holds. Contact us today to learn more about how we can help you renew your company with confidence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="apartSec intTrademark">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 text-center">
                            <h2>Why Choose Trademark Nova For Company Renewal Services </h2>
                            <p>Choosing Trademark Nova for your Company Renewal Services means choosing a reliable, efficient, and customer-focused partner to help keep your business compliant and successful. Our team of experts has years of experience in the industry and is committed to providing personalized solutions that meet your specific needs and requirements. We understand that every business is unique, which is why we take the time to get to know your business and provide tailored solutions that ensure you stay compliant and on top of your legal obligations. With our Company Renewal Services, you can have peace of mind knowing that your business is in good hands. We offer a streamlined and hassle-free renewal process, ensuring that your business stays legal and compliant without any unnecessary stress or headaches.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io1.png')}}" alt=""></div>
                                <h4>Registered Office Address </h4>
                                <p>Renew your Registered Office Address and continue to protect the privacy of your home address for another 12 months.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io2.png')}}" alt=""></div>
                                <h4>Service Address</h4>
                                <p>Our in-country teams maintain a detailed understanding of local regulations. Maintain the privacy provided with our Service Address for another year.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io3.png')}}" alt=""></div>
                                <h4>Business Address Service</h4>
                                <p>Renew your Business Address Service and maintain your excellent corporate image with our Covent Garden address.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io1.png')}}" alt=""></div>
                                <h4>Confirmation Statement Service</h4>
                                <p>Extend your Confirmation Statement Service and make sure you stay compliant with Companies House.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io2.png')}}" alt=""></div>
                                <h4>Dormant Company Accounts </h4>
                                <p>You can renew our Dormant Company Accounts Service here, and we will prepare and file your accounts for another year.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io3.png')}}" alt=""></div>
                                <h4>Full Company Secretary Service</h4>
                                <p>Renew your service and have the peace of mind that your company secretarial work is being taken care of for another year</p>
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
                                    <a href="{{route('step1')}}" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
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