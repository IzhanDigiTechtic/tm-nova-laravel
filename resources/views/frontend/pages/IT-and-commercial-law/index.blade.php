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
            <section class="home-banner" style="background: url(assets/images/it-ban.webp) center/cover no-repeat;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <h3 class="banner-subtitle">IT & Commercial Law</h3>
                                <h2 class="banner-title">Safeguarding Your Business in a Fast-Paced <span>Digital World</span></h2>
                                <div class="banner-text">
                                    <p>Hire legal advisors for the IT & Commercial Law, who are up-to-date with the latest developments and able to provide customized solutions to meet your unique needs.</p>
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
                                <h2 class="section-title">IT & <span class="primary-color">Commercial Law</span></h2>
                                <strong>Maximise the effectiveness of technology across your business, as a provider or end user, with commercially astute legal advice from our specialist commercial technology and IT solicitors.</strong>
                                <p></p>
                                <p>Are you looking for legal guidance to protect your technology investments and minimize risk in the fast-paced world of IT and commercial technology? Look no further than our expert IT and commercial technology law services at Trademark Nova! Our team specializes in navigating the complex legal landscape of the tech industry, providing innovative solutions to meet your unique needs. From intellectual property and data protection to contract negotiations and dispute resolution, we've got you covered. We stay up-to-date with the latest developments in technology and the law to ensure that your operations are in compliance with relevant regulations and your interests are protected in any legal disputes. Don't let legal challenges hold you back from reaching your full potential in the tech industry. Contact us today to see how our customized legal solutions can help transform challenges into opportunities!</p>
                            </div>
                            <div class="col-md-6">
                                <figure class="aboutImg">
                                    <img src="{{asset('assets/images/it-img1.webp')}}" alt="">
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
                            <h2 class="section-title">Legal Support For Technology and IT Businesses</h2>
                            <p>Our solicitors can support your business in all legal matters relating to technology and IT, including:</p>
                            <ul class="listStyle mt-4">
                                <li><i class="fas fa-arrow-circle-right"></i> Cloud Service Agreements</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Cybersecurity</li>
                                <li><i class="fas fa-arrow-circle-right"></i> SaaS Agreements</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Service Agreements</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Software Licence Agreements</li>
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <img src="{{asset('assets/images/it-img2.webp')}}" alt="" class="rounded box-shadow">
                        </div>
                    </div>
                </div>
            </section>

            <section class="apartSec">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 text-center">
                            <h2>Protect Your Interests With Sound Advice From Commercial Technology Solicitors</h2>
                            <p>Protecting your interests is crucial when operating in the constantly evolving world of technology, and expert legal advice from commercial technology solicitors can make all the difference. Our team of experienced solicitors specializes in providing tailored legal solutions to technology companies across a range of industries, including IT, telecommunications, energy and utilities, and e-commerce. We understand the unique challenges faced by businesses in the tech industry, from intellectual property and data protection to contract negotiations and dispute resolution. With our knowledge and experience, we can help you navigate these challenges and minimize risk to your investments. Trust us to provide sound advice and effective legal representation to help you achieve your business goals. Whether you are a startup or a well-established tech company, our solicitors can provide you with the guidance and support you need to succeed in a competitive digital landscape. Contact us today to see how we can protect your interests with our expert legal services.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/it-io1.png')}}" alt=""></div>
                                <h4>SaaS agreements</h4>
                                <p>We can provide you with a comprehensive legal review of the terms of the agreement, conducting thorough due diligence of the provider to ensure you’re protected and getting the very best out of the relationship.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/it-io2.png')}}" alt=""></div>
                                <h4>Technological research and development and collaboration agreem</h4>
                                <p>We can produce an agreement that clearly defines each party’s obligations, limitations, and ownership so that roles are clearly defined, helping you avoid costly disputes later on.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/it-io3.png')}}" alt=""></div>
                                <h4>Data protection</h4>
                                <p>Our specialists will ensure your processes align with current data protection law and GDPR, with comprehensive audits, staff training, and data breach prevention and management.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/it-io4.png')}}" alt=""></div>
                                <h4>Cloud services agreements</h4>
                                <p>We’ll carefully negotiate and draft your agreement, detailing service levels, obligations, and your right to terminate, also making sure you comply with the platform providers’ requirements while minimising risk to your business.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/it-io5.png')}}" alt=""></div>
                                <h4>Protecting and commercialising your intellectual property</h4>
                                <p>Our intellectual property specialists will provide a clear route to protect your IP, and where appropriate, uncover the right opportunities to commercialise assets to benefit your business.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/it-io6.png')}}" alt=""></div>
                                <h4>Outsourcing</h4>
                                <p>We’ll ensure that any established outsourcing agreements are carefully reviewed and adapted and that any early stage negotiations with a new provider are fit for purpose, while also considering exit provisions, such as the right to step in, should the supplier be unable to perform.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/it-io7.png')}}" alt=""></div>
                                <h4>Software licensing and end user licensing</h4>
                                <p>We’ll carefully draft your license agreements so that you successfully prevent abuses of your software, keep control over its use, limit your liabilities and, put terms in place that will protect your business and suit your future plans.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/it-io8.png')}}" alt=""></div>
                                <h4>Ecommerce and Distance selling regulations</h4>
                                <p>Whether it’s via phone, mail or online transactions, we’ll ensure you comply with The Consumer Rights Act and have the right terms and conditions in place to protect you.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/it-io9.png')}}" alt=""></div>
                                <h4>Video game and app development</h4>
                                <p>From development agreements, to intellectual property considerations, distribution agreements, and regulatory compliance, we can support you at every stage in video game or app development, so that you protect your assets, safely distribute your product, and abide by current regulations.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/it-io10.png')}}" alt=""></div>
                                <h4>Procurement</h4>
                                <p>Whatever software, hardware or systems you need to introduce to your business, we can review any boilerplate agreements you’ve been presented with by your supplier and make sure that the necessary adaptations are made to terms so that you get exactly what you require.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/it-io11.png')}}" alt=""></div>
                                <h4>Cybersecurity</h4>
                                <p>By assessing potential risk to your business, we’ll help you put the right cyber resilience protocols in place, build incident response plans, and make sure you comply with the relevant legislation.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/it-io12.png')}}" alt=""></div>
                                <h4>Fintech</h4>
                                <p>We’ll guide you through the regulatory minefield that you’ll have to navigate as part of the Fintech sector, helping you manage risk effectively, taking a wider view of your business so that we can also support you with the accompanying data protection, intellectual property, and contractual considerations as you scale.</p>
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
                            <img src="{{asset('assets/images/it-img3.webp')}}" alt="" class="w-100">
                        </div>
                        <div class="col-xl-4 ps-xl-5 pt-4">
                            <h3><span class="primary-color">Who We Help:</span> Fast-growing Technology Companies</h3>
                            <p>Our team of commercial technology lawyers specializes in providing expert legal advice to a diverse range of businesses, including software companies, video game developers, ISPs, fintech and biotech companies, and leading international tech businesses. With particular expertise in IT, telecommunications, energy and utilities, and e-commerce, we are uniquely positioned to offer customized legal solutions to growing technology companies operating in these sectors. Whether you're looking for assistance with intellectual property and data protection, contract negotiations, or dispute resolution, our team has the knowledge and experience to help you navigate the complex legal landscape of the tech industry. Trust us to provide the legal guidance you need to protect your investments and stay ahead of the competition in a fast-paced digital world.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-light-grey domainservice">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="section-title">Legal Support <span class="primary-color">Designed to Fit</span> Your Business Needs</h2>
                            <strong>We can also help with the drafting and reviewing of all commercial contracts required for your tech business to progress:</strong>
                            <ul class="listStyle mt-4">
                                <li><i class="fas fa-arrow-circle-right"></i> IT contracts and agreements</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Distribution agreements and reseller agreements</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Enterprise agreements</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Sub-contracting agreements</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Affiliate agreements</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Professional service agreements including transformations, installations, and migrations</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Managed service agreements including break/fix and service desk agreements</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Confidentiality and non-disclosure agreements</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Escrow agreements</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Heads of terms/memoranda of understanding</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Privacy policies</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Software and hardware development agreements</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Terms of business</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Website audits, hosting, development, and terms agreements</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <div class="schedule mt-4">
                                <img src="{{asset('assets/images/schedule-img1.webp')}}" alt="">
                                <h2>Request a Schedule For Free Consultation</h2>
                                <a href="book-free-consultation" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
                                <a href="tel:{{ config('var.number') }}" class="telNum"><span>Call Us Now:</span>{{ config('var.numberdisplay') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @include ('includes/testimonial')

        </main>
@endsection