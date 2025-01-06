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
            <section class="home-banner" style="background: url(assets/images/vat-ban.webp) center/cover no-repeat;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <h3 class="banner-subtitle">VAT Registration Service</h3>
                                <h2 class="banner-title">Streamline Your Business with Hassle-Free <span>VAT Registration</span> Service</h2>
                                <div class="banner-text">
                                    <p>Trademark Nova takes the burden of the complex VAT registration process off your shoulders. By using our reliable VAT registration service, you can streamline your business operations and focus on what you do best – growing your business.</p>
                                </div>
                                <div class="banner-button">
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
                            <div class="section-head">
                                <h2 class="section-title">VAT <span class="primary-color">Registration</span> in UK</h2>
                            </div>
                            <p>Trademark Nova is a trusted and reliable company that offers VAT registration services in the UK to businesses of all sizes and types. VAT registration is a complex and time-consuming process that can be overwhelming for many business owners, but with Trademark Nova, you can streamline the process and ensure that you are fully compliant with all relevant laws and regulations.</p>
                            <p>Our team of experts has a deep understanding of the VAT registration process and the UK's tax laws, enabling us to provide valuable guidance and support to your business. We offer a range of VAT registration services that are tailored to meet the specific needs and goals of your business. Whether you are a small startup or a large corporation, we have the expertise and experience to help you navigate the VAT registration process with ease.</p>
                        </div>
                        <div class="col-md-6">
                            <figure class="aboutImg">
                                <img src="{{asset('assets/images/vat-img1.webp')}}" alt="">
                                <span><img src="{{asset('assets/images/logo-io.webp')}}" alt=""></span>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

            <section class="apartSec intTrademark">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="apartCell">
                                <h4>VAT Registration for Small Businesses</h4>
                                <p>Trademark Nova assist with the registration process, ensuring that all necessary documents are submitted to HMRC on time. This service also includes guidance on VAT compliance, invoicing, and record-keeping. Small businesses can focus on their core operations while ensuring we meet their VAT obligations.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <h4>Completion of VAT(VAT01) Form for registration</h4>
                                <p>Our experts will, in consultation with you, complete the VAT01 form so that your business can successfully apply for its VAT registration number. Once completed, we will email you the completed form to sign. After you have put your signature on the document, you can either post it back or scan and email.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <h4>Submission of the VAT01 form to the correct department</h4>
                                <p>There are two different HMRC offices handling different types of VAT registration based upon your company’s history and your personal history. To make sure you receive your VAT number as quickly as possible, we will submit the form to the relevant VAT registration office address.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <h4>Receipt of VAT number</h4>
                                <p>You will receive your VAT number direct from HMRC. Around three quarters of all VAT numbers are received within 10 working days. At busier times, HMRC may take up to a month to provide you with your VAT number.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <h4>Application to join a specialist scheme</h4>
                                <p>If you decide that your business would benefit from joining either the Flat Rate Scheme, the Annual Accounting Scheme, or both to the correct office, we will make the necessary application on your behalf.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <h4>Acknowledgement that you have joined an alternative scheme</h4>
                                <p>You will receive notification direct from HMRC, normally within 10 working days, that your application to join either the Flat Rate Scheme, the Annual Accounting Scheme, or both to the correct office has been successful.</p>
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

                        </div>
                    </div>
                </div>
            </div>
            <!-- faq html end -->

            <section class="apartSec intTrademark">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h2>Why Choose Trademark Nova For VAT Registration </h2>
                            <p>Our VAT registration services include a comprehensive analysis of your business activities and operations to determine your VAT liability and the best VAT scheme for your business. We also handle all the paperwork and filing requirements, ensuring that your registration is completed accurately and efficiently. Additionally, we provide ongoing support and advice to help you manage your VAT compliance obligations and avoid any penalties or fines.</p>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io1.png')}}" alt=""></div>
                                <h4>Expertise & Experience</h4>
                                <p>Trademark Nova offers a comprehensive service that covers all aspects of VAT registration, including compliance, record-keeping, and filing of VAT returns. Our team of experts ensures that all clients receive accurate and timely advice, enabling them to comply with HMRC's requirements and avoid costly penalties.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io2.png')}}" alt=""></div>
                                <h4>Competitive Pricing</h4>
                                <p>Our services are at competitive prices, making it an affordable option for small businesses. We provide transparent pricing structures with no hidden costs, ensuring that clients are fully aware of what they are paying for. This allows small businesses to access professional VAT registration services without breaking their budget.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io3.png')}}" alt=""></div>
                                <h4>Personalised Service </h4>
                                <p>We understand that every business is unique and has different VAT requirements, so Trademark Nova offers a bespoke service that addresses the specific needs of each business. Our experts work closely with clients to understand their business and provide tailored solutions that meet their VAT obligations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="apartSec">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="schedule mt-0 mb-5">
                                <h2>Request a Schedule For Free Consultation</h2>
                                <a href="/sequence-form-step1/" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
                                <a href="tel:+442080891039" class="telNum"><span>Call Us Now:</span>+44 20 8089 1039</a>
                            </div>
                        </div>

                        <div class="col-lg-10 text-center">
                            <h2>Other Related <span class="primary-color">Services</span></h2>
                            <p>We can provide free qualified guidance to help get you started with your business needs. Trademark Nova offers various other VAT registration services, including VAT de-registration, VAT return filing, Nominee director appointment etc </p>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <img src="{{asset('assets/images/io16.png')}}" alt="">
                                <h4>Registered Office Address</h4>
                                <p>We offer a service that allows business owners the use of our prestigious address as if it were their own, and get official mail passed on to them hassle-free and confidentially without compromising their private residential address.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <img src="{{asset('assets/images/io17.png')}}" alt="">
                                <h4>Business Trading Address</h4>
                                <p>Our service allows you to receive your company’s correspondence at our central London location as if it were your own, giving the appearance of your business being based in the heart of the capital.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <img src="{{asset('assets/images/io18.png')}}" alt="">
                                <h4>Nominee Director </h4>
                                <p>Companies House legally require all directors of UK companies and partners of LLPs to register a directors business address for the public. Our nominee director services are legal & discreet ensuring easy company formations. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @include ('includes/testimonial')
    
        </main>

@endsection