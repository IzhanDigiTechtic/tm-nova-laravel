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
            <section class="home-banner" style="background: url(assets/images/competency-ban.webp) center/cover no-repeat;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <h3 class="banner-subtitle">Our Core Competency & Values</h3>
                                <h2 class="banner-title">Expertise in Strategic Brand Protection From <span>Legal & Digital</span> Side</h2>
                                <div class="banner-text">
                                    <p>Cutting edge technology and an industry leading team of experts with over 10 years of industry experience that are dedicated to helping you remove any obstacles you will encounter to owning your IP.</p>
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
                                <div class="section-head">
                                    <h2 class="section-title">Overview</h2>
                                </div>
                                <p>Trademark Nova was established because we know firsthand the challenges that young companies face when they lack the means and resources to safeguard and control their identity from the outset. We believe that your creations are significant, and you should have the same options to preserve and possess your intellectual property as the top global brands with whom we have collaborated. We are both creators and entrepreneurs, just like you.</p>
                                <p>At Trademark Nova, we are committed to making the process of protecting your intellectual property as straightforward and stress-free as possible. We understand that navigating the world of trademarks and copyrights can be overwhelming, especially for those who are just starting out. That's why we offer a comprehensive range of services that cater to the specific needs of each client, from conducting thorough trademark searches and filing applications, to monitoring and enforcing your rights in the long term. </p>
                            </div>
                            <div class="col-md-6">
                                <figure class="aboutImg">
                                    <img src="{{asset('assets/images/competency-img1.webp')}}" alt="">
                                    <span><img src="{{asset('assets/images/logo-io.webp')}}" alt=""></span>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-light-grey apartSec">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h2>Our Core <span class="primary-color">Values</span></h2>
                            <p>Our goal is to provide you with the peace of mind and confidence that comes from knowing that your intellectual property is in good hands. So whether you are an individual creator or a fast-growing startup, we are here to help you safeguard and maximize the value of your intellectual property assets.</p>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io4.webp')}}" alt=""></div>
                                <h4>Providing Opportunities</h4>
                                <p>It's fundamentally unjust that hardworking entrepreneurs, who put everything on the line, don't have the same opportunities to own their intellectual property. Without ownership, you risk losing control of what you've created, which could bring your creative endeavors to a halt. You'd have to start from scratch, and that's far from ideal. Wouldn't you prefer to take the first step and begin your intellectual property journey with us? By doing so, you'll be the first to forever own your company's most valuable asset.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io5.webp')}}" alt=""></div>
                                <h4>Revolutionizing Trademark</h4>
                                <p>At Trademark Nova, we're disrupting the trademark ownership and protection industry by digitizing it. Currently, your startup may be struggling to navigate the complexities of trademark registration and relying on Google searches to find relevant information. However, with our trademark engine, you can access the necessary tools and resources at any time, from any location, and always for free. Our cutting-edge technology streamlines the trademark registration process, saving you time and money with Trademark Nova.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io6.webp')}}" alt=""></div>
                                <h4>Strategic Brand Protection Experts</h4>
                                <p>In a world where branding is everything, protecting your intellectual property is crucial. That's where Trademark Nova's strategic brand protection experts come in. With years of experience and industry knowledge, they know how to safeguard your brand from counterfeiters, copycats, and all other threats. From trademark registration to monitoring and enforcement, these experts have your back. So don't let your hard-earned reputation be tarnished – trust Trademark Nova experts to keep your brand safe and secure.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="whatDifferent">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-md-6">
                            <h2 class="section-title">What Makes Us Different? </h2>
                            <p>At Trademark Nova, we take pride in being a unique trademark registration service provider. What sets us apart is our commitment to delivering personalized solutions tailored to your specific needs. Unlike other services that use a one-size-fits-all approach, we take the time to understand your business and create a strategy that aligns with your goals. </p>
                            <p> Our team of experienced attorneys and trademark specialists ensure that your trademark is not only registered but also protected, with a comprehensive monitoring and enforcement program. So why settle for ordinary when you can have extraordinary? Choose Trademark Nova for all your trademark registration needs.</p>
                        </div>
                        <div class="col-md-5">
                            <img src="{{asset('assets/images/competency-img2.webp')}}" alt="" class="rounded box-shadow">
                        </div>
                    </div>
                </div>
            </section>

            <section class="apartSec">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h2>Guiding <span class="primary-color">Principles</span></h2>
                            <p>At Trademark Nova, our guiding principles revolve around integrity, transparency, and client satisfaction. We believe in conducting our business with the utmost honesty and ethics, ensuring that our clients receive the best possible service. Our team of experts is committed to providing transparent and easy-to-understand guidance throughout the trademark registration process, keeping you informed every step of the way. Above all, our ultimate goal is to ensure complete client satisfaction by delivering high-quality services that meet and exceed your expectations. At Trademark Nova, we don't just register trademarks – we build long-lasting relationships with our clients based on trust and reliability.</p>
                        </div>
                    </div>
                    <div class="row justify-content-center row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-1">
                        <div class="col">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io11.webp')}}" alt=""></div>
                                <h4>Experienced</h4>
                                <p>With over 05 years experience combined, we are the leaders in trademark protection and experts in our field.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io12.webp')}}" alt=""></div>
                                <h4>Credible</h4>
                                <p>Led by an industry leading certified trademark attorneys who are uniquely positioned to ensure the best outcome for your trademark.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io13.webp')}}" alt=""></div>
                                <h4>Hard working</h4>
                                <p>Founded by creators and entrepreneurs with proven track records who believe what you create really matters.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io14.webp')}}" alt=""></div>
                                <h4>Digital</h4>
                                <p>Backed by a revolutionary digital platform and global tech savvy team. We are powered by a digital community of IP owners.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io15.webp')}}" alt=""></div>
                                <h4>Democratized</h4>
                                <p>At Trademark Nova, we take pride in providing everyone the platform, where everyone can afford to own a trademark. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-light-grey apartSec">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center mb-5">
                            <h2>You Can <span class="primary-color">Find Us</span> In</h2>
                            <p>Looking for a reliable trademark registration service provider in the UK or US? Look no further than Trademark Nova. With our offices located in both countries, we are well-positioned to assist clients from around the world. Whether you're a startup or a multinational corporation, our team of experienced attorneys and trademark specialists are equipped to handle all your trademark registration needs. We understand the intricacies of the trademark registration process in both the UK and US and can guide you through the process with ease. So why wait? Contact us today and let us help you protect your brand.</p>
                        </div>
                        <div class="col-md-12">
                            <img src="{{asset('assets/images/competency-map.webp')}}" alt="" class="d-block mx-auto w-100">
                        </div>
                    </div>
                </div>
            </section>

        </main>
@endsection