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
            <section class="home-banner" style="background: url(assets/images/tax-advisory-ban.webp) center/cover no-repeat;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <h3 class="banner-subtitle">Trademark Dispute Insurance Service </h3>
                                <h2 class="banner-title">Safeguard Your Business From <span>Legal Battles</span> Over Trademarks</h2>
                                <div class="banner-text">
                                    <p>Trademark Dispute Insurance is a valuable protection for businesses of all sizes! With this insurance by Trademark Nova, you can rest assured that your brand is safeguarded and your business is protected from potentially costly legal battles.</p>
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
                            <div class="section-head">
                                <h2 class="section-title">Trademark Dispute Insurance <span class="primary-color">(Recommended)</span></h2>
                            </div>
                            <p>Trademark Dispute Insurance is an essential protection that no business owner can afford to overlook. In today's competitive market, where brands and logos are crucial to a company's success, trademark disputes can be disastrous. When it comes to protecting your brand, taking preventive measures is always the best approach, and this is where trademark dispute insurance by Trademark Nova comes into play.

                                With Trademark Nova, you can rest assured that your business is safeguarded against the potential legal and financial costs associated with defending your trademarks. Trademark disputes can be lengthy and expensive, and without adequate insurance, the costs can quickly add up and potentially jeopardize your business's financial health. With our trademark dispute insurance service, you can avoid these potential risks and focus on running your business with peace of mind.</p>
                        </div>
                        <div class="col-md-6">
                            <figure class="aboutImg">
                                <img src="{{asset('assets/images/dissolution-img1.webp')}}" alt="">
                                <span><img src="{{asset('assets/images/logo-io.webp')}}" alt=""></span>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

            <div class="py-5" style="background-color: #eee;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-left">
                            <h3 class="section-title" style="text-align: left;">Why Is It So Important During <span class="primary-color"> Trademark Registration </span> Process?</h3>
                            <p style="text-align: left;">Don't take any chances when it comes to safeguarding your business's reputation and financial well-being. Contact us today to learn more about how we can help you secure your trademarks and defend your brand.</p>
                            <ul>
                                <li style="text-align: left;">90% of Trademark bullying or registration issues occur in the first year</li>
                                <li style="text-align: left;">97% OF Trademark bullying and registration issues occur within the first two years</li>
                                <li style="text-align: left;">After the first 3 years, no trademark bullying or registration issues occur </li>
                            </ul>
                            <p style="text-align: left;">By underwriting insurance policy, if your trademark application is rejected due to a similar trademark already registered or applied for registration. Trademark Nova will cover the cost of reapplying, any arbitration or any resulting legal proceedings. In addition, Trademark Nova will pay for any settlement required to acquire your trademark. </p>
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
            <div class="about-page-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center mb-md-5">
                            <h2 class="section-title">Trademark Dispute <span class="primary-color">Insurance</span> Pricing</h2>
                            <p>At Trademark Nova, we believe in transparency and providing our clients with competitive and reasonable pricing for our services. Our trademark dispute insurance service at Trademark Nova can be customized to suit the unique needs of your business. Whether you are a small business owner or a large corporation, this insurance can be tailored to your specific requirements, ensuring that you have the right protection in place.</p>
                        </div>
                        <div class="col-md-12">
                            <div class="renewalWrap priceTable">
                                <div class="title">
                                    <h2>1 Year Trademark Insurance</h2>
                                    <div class="price">
                                        <p>For One Year</p>
                                        <h2>$550<sup>.00</sup><small>/One Time</small></h2>
                                    </div>
                                </div>
                                <div class="body">
                                    <ul>
                                        <li><i class="fa fa-check"></i> 90% of Trademark bullying or registration issues occur in the first year</li>
                                    </ul>
                                    <p>Don't take any chances when it comes to safeguarding your business's reputation and financial well-being. Contact us today to learn more about how we can help you secure your trademarks and defend your brand.</p>
                                </div>
                            </div>

                            <div class="renewalWrap priceTable">
                                <div class="title">
                                    <h2>2 Years Trademark Insurance</h2>
                                    <div class="price">
                                        <p>For Two Years</p>
                                        <h2>$750<sup>.00</sup><small>/One Time</small></h2>
                                    </div>
                                </div>
                                <div class="body">
                                    <ul>
                                        <li><i class="fa fa-check"></i> 97% OF Trademark bullying and registration issues occur within the first two years</li>
                                    </ul>
                                    <p>Don't take any chances when it comes to safeguarding your business's reputation and financial well-being. Contact us today to learn more about how we can help you secure your trademarks and defend your brand.</p>
                                </div>
                            </div>

                            <div class="renewalWrap priceTable">
                                <div class="title">
                                    <h2>3 Years Trademark Insurance</h2>
                                    <div class="price">
                                        <p>For Three Years</p>
                                        <h2>$890<sup>.00</sup><small>/One Time</small></h2>
                                    </div>
                                </div>
                                <div class="body">
                                    <ul>
                                        <li><i class="fa fa-check"></i> After the first 3 years, no trademark bullying or registration issues occur</li>
                                    </ul>
                                    <p>Don't take any chances when it comes to safeguarding your business's reputation and financial well-being. Contact us today to learn more about how we can help you secure your trademarks and defend your brand.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

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