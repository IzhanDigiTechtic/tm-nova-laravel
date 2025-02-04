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
            <section class="home-banner" style="background: url(assets/images/data-privacy-ban.webp) center/cover no-repeat;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <h3 class="banner-subtitle">Business Legal Services</h3>
                                <h2 class="banner-title">Get Expert Help in Data Protection & <span>Privacy Law</span></h2>
                                <div class="banner-text">
                                    <p>Our team can assist you across all areas of data protection & privacy law, including: Cybersecurity, Data Breaches & Incident Management, Data Governance, Data Protection Health Check, Data Protection Impact Assessments and much more.</p>
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
                <div class="about-inner-page">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h2 class="section-title">Data Protection <span class="primary-color">Solicitors</span></h2>
                                <p>Personal data refers to information that pertains to living individuals (referred to as data subjects) that can be used to identify them either alone or when combined with other data. Sensitive personal data, which includes details about a person's ethnic or racial background, physical and mental health, and other such information, is afforded additional protection.

                                    Currently, the control and processing of personal data is regulated by the Data Protection Act. However, the General Data Protection Regulation (GDPR), which came into effect on May 25, 2018, now governs the processing and handling of personal data. When the UK leaves the EU, the Data Protection Act will align with the GDPR.

                                    Most data controllers are required to notify the Information Commissioner's Office (ICO) annually before processing any personal data. Breaching the Data Protection Act is considered a criminal offense for which individuals may be held liable. With the introduction of the GDPR, penalties for such offenses will increase.

                                    Our data protection solicitors are available to help you comply with current laws, including the GDPR, and provide advice whenever changes to the law occur.</p>
                            </div>
                            <div class="col-md-6">
                                <figure class="aboutImg">
                                    <img src="{{asset('assets/images/data-privacy-img1.webp')}}" alt="">
                                    <span><img src="{{asset('assets/images/logo-io.webp')}}" alt=""></span>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="whatDifferent">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-md-6">
                            <h2 class="section-title">Experts In Data Protection & Privacy Law</h2>
                            <p>Our team can assist you across all areas of data protection & privacy law, including:</p>
                            <ul class="listStyle mt-4">
                                <li><i class="fas fa-arrow-circle-right"></i> Cybersecurity</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Data Breaches & Incident Management</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Data Governance</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Data Protection Health Check</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Data Protection Impact Assessments</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Data Protection Officer Support Services</li>
                                <li><i class="fas fa-arrow-circle-right"></i> GDPR Compliance</li>
                                <li><i class="fas fa-arrow-circle-right"></i> GDPR Training</li>
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <img src="{{asset('assets/images/data-privacy-img2.webp')}}" alt="" class="rounded box-shadow">
                        </div>
                    </div>
                </div>
            </section>

            <section class="apartSec">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 text-center">
                            <h2><span class="primary-color">What We Do At Trademark Nova:</span> Data Protection & GDPR Legal Advice</h2>
                            <p>As the owner of a growing business, protecting your company data is vital, alongside complying with strict new data protection regulations contained in the General Data Protection Regulation (GDPR) and the Data Protection Act 2018. And with the new ePrivacy Regulation coming into effect, your business will face even more regulatory burden. It’s important to be prepared.</p>
                            <p>Our data protection solicitors can advise you on a range of data protection law, from what is covered by data protection, preventing breaches and violations to who needs to register, and following the principles in the Data Protection Act 2018.</p>
                            <p>With the GDPR in full swing since 25 May 2018, you will need legal advice on your existing data and privacy processes to make sure you remain compliant with this new regulation.</p>
                            <p>We can provide an expert service, covering all data protection issues your business could encounter. Our service includes explaining and dealing with:</p>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell small">
                                <h4>Your obligations under the current Data Protection Act 2018 and the GDPR</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell small">
                                <h4>Your data processing and sharing agreements</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell small">
                                <h4>When you need to appoint a data protection officer and their duties of governance</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell small">
                                <h4>Due diligence when appointing new business partners</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell small">
                                <h4>Data retention and when records should be destroyed</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell small">
                                <h4>Subject access requests and the new subject rights under GDPR</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell small">
                                <h4>Contractual agreements and data protection clauses to protect your business</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell small">
                                <h4>Any registration processes</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell small">
                                <h4>Electronic communications and marketing</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell small">
                                <h4>Buying and selling databases</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell small">
                                <h4>Formal enforcement action by the regulator (ICO)</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell small">
                                <h4>Data protection assessments and audits</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell small">
                                <h4>Conducting a data privacy impact assessment</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell small">
                                <h4>Data breach issues, including reporting</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell small">
                                <h4>Staff training</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell small">
                                <h4>Drafting data protection policies and processes</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell small">
                                <h4>Your obligations over the handling of employee data, recruitment and monitoring practices</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell small">
                                <h4>Data export issues with countries outside of Europe that do not provide ‘an adequate level of protection’ under EU law</h4>
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
            </section>

            <section class="bg-light-grey">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-6 px-0">
                            <img src="{{asset('assets/images/data-privacy-img3.webp')}}" alt="" class="w-100">
                        </div>
                        <div class="col-xl-4 ps-xl-5 pt-4">
                            <h3>Why Choose Our Data Protection <span class="primary-color">Solicitors?</span></h3>
                            <p>At Trademark Nova, our data protection solicitors promise to work with you and provide clear, jargon-free advice that allows you to manage your business while complying with various data protection rules. Additionally, some of our legal staff are member of the International Association of Privacy Individuals (IAPP).</p>
                            <p>With the regulation of personal data coming under increasing scrutiny, organisations can expect tighter rules and higher fines for non-compliance. In this technical area, we provide clear commercial advice that allows you to manage your business effectively, while remaining compliant.</p>
                            <p>The law around data protection is constantly adapting and changing, so we’ll also advise you on an ongoing basis regarding any new legislation or laws being introduced that could have an impact on your business.</p>
                            <p>Over the years we have also developed valuable working relationships with regulators, including the Information Commissioner’s Office.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="domainservice">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center mb-5">
                            <h2 class="section-title">Legal Support Designed to Fit Your Business Needs</h2>
                            <p> Our legal team at Trademark Nova can assist with creating and implementing data protection policies, conducting risk assessments, and handling any data breaches that may occur. They can also help ensure that your business is compliant with regulations. By working with a legal team to develop a customized data protection strategy, businesses can mitigate the risks associated with data breaches and safeguard their customers' sensitive information.</p>
                        </div>
                        <div class="col-lg-12"></div>
                        <div class="col-lg-4">
                            <div class="amazonWrap levelPkg">
                                <div class="title">
                                    <h3>City</h3>
                                    <p>Get a straightforward access to senior solicitors at a competitive rate.</p>
                                </div>
                                <div class="body">
                                    <p>An affordable solution for businesses needing one-off legal support. Receive ‘City’ partner-level expertise at a fraction of ‘City’ prices.</p>
                                    <a href="javascript:void(0);"  
                                    class=" alphaChat button-round w-100">Get Custom Quote <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="amazonWrap levelPkg">
                                <div class="title">
                                    <h3>Enterprise</h3>
                                    <p>Have legal peace of mind with additional support starting from £250 per hour.</p>
                                </div>
                                <div class="body">
                                    <p>A monthly subscription legal support package specifically designed for start-ups and smaller businesses.</p>
                                    <a href="javascript:void(0);" class=" alphaChat button-round w-100">Get Custom Quote <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="amazonWrap levelPkg">
                                <div class="title">
                                    <h3>On-Demand</h3>
                                    <p>Providing you with priority access to a dedicated highly experienced solicitors</p>
                                </div>
                                <div class="body">
                                    <p>Fully account managed quarterly subscription service for businesses with more complex legal needs.</p>
                                    <a href="javascript:void(0);" class="alphaChat button-round w-100">Get Custom Quote <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @include ('includes/testimonial')

        </main>
@endsection