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
                                <h3 class="banner-subtitle">Comprehensive Trademark Search</h3>
                                <h2 class="banner-title">Know Your Mark With a Detailed Trademark <span>Search Report </span> Today</h2>
                                <div class="banner-text">

                                    <p><i class="fas fa-check-circle"></i>Easy to read comprehensive report sent to you electronically</p>
                                    <p><i class="fas fa-check-circle"></i>IPO fees are non-refundable if your name is rejected, so have some comfort before you file.</p>
                                    <p><i class="fas fa-check-circle"></i>We search international, domestic, state and domain name databases for similar names</p>
                                </div>
                                <div class="banner-button btnSec">
                                    <a href="/sequence-form-step1/" class="button-round d-md-none d-block">Get Started Now</a>
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
                                    <h2 class="section-title">Why Run a Comprehensive Search For <span class="primary-color">Your Trademark </span> Before Registration?</h2>
                                </div>
                                <p>Running a comprehensive search for your trademark before registration is a crucial step in protecting your brand and ensuring its success. A trademark search helps to identify potential conflicts with existing marks and allows you to make informed decisions about your brand's name, logo, and other identifying features. By conducting a comprehensive search, you can avoid costly legal battles, protect your brand's reputation, and ensure your legal compliance. It also helps you to save time and money in the long run by avoiding the need to rebrand or change your mark after registration. Additionally, a comprehensive search can reveal potential opportunities for branding and marketing, helping you to stand out from the competition and create a strong brand identity. In short, running a comprehensive search for your trademark before registration is an essential step in protecting your brand and ensuring its long-term success.</p>
                                <p>At Trademark Nova, Our goal is to provide you with the information and support you need to protect your brand and ensure its long-term success. With our comprehensive trademark search service, you can have peace of mind knowing that your brand is unique and legally compliant. Contact us today to learn more about how we can assist you with your trademark search needs.</p>
                            </div>
                            <div class="col-md-6">
                                <figure class="aboutImg">
                                    <img src="{{asset('assets/images/comprehensive-trademark-img.webp')}}" alt="">
                                    <span><img src="{{asset('assets/images/logo-io.webp')}}" alt=""></span>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ourProcess bg-light-grey">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-8 text-center mb-md-5">
                            <h2 class="section-title">How it <span class="primary-color">Works</span></h2>
                            <p>Trademark Nova offers comprehensive trademark search services to help businesses protect their brand and ensure their legal compliance. Our team of experts uses advanced technology and industry knowledge to conduct a thorough search of existing marks, identifying potential conflicts and providing you with a detailed report of the results. Our comprehensive search service includes searching both the registered and unregistered marks, including those in use in the marketplace. We also provide expert guidance on the registrability of your mark, helping you to make informed decisions about your branding strategy.</p>
                        </div>
                        <div class="col-md-12 mt-md-5">
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
                                    <h4>Answer a few questions</h4>
                                    <p>Give us some basic information about trademark and describe your goods and services you provide.</p>
                                </div>
                                <div class="cell center">
                                    <div class="circleBig">
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">02</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-8.webp')}}" alt=""></div>
                                    </div>
                                    <h4>We run a comprehensive search</h4>
                                    <p>We search international, federal, state, common law, social media and domain name databases to identify possible conflicts.</p>
                                </div>
                                <div class="cell right">
                                    <div class="circleBig">
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">03</span>
                                        <div class="circle"><img src="{{asset('assets/images/process-io-9.webp')}}" alt=""></div>
                                    </div>
                                    <h4>We send you a detailed report</h4>
                                    <p>The detailed report identifies all matches, including full trademark registrations for international, federal, and state trademarks.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- home pricing table section html start -->
            <section class="home-pricing-table">
                <div class="container">
                    <div class="section-head text-center">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <h2 class="section-title"><span class="primary-color">Budget-Friendly </span> Trademark Registration Packages</h2>
                                <p>We Offer Affordability & Efficiency In Trademark Registration & Search Services. We use a proven standardized process to minimize the chances of rejection, saving you time & money.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-table-inner">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item silver">
                                    <div class="pricing-head">
                                        <div class="top">
                                            <h4>Federal & State Search</h4>
                                            <p><span>*</span>Get Your Trademark Search Report in <span> Just 5 Days! </span></p>
                                        </div>
                                        <div class="botom">
                                            <h2><i class="fas fa-dollar-sign"></i>99</h2>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="listStyle">
                                            <li>
                                                <i class="fas fa-check"></i>
                                                <p>Trademark search to find similar names, logos, or slogans</p>
                                            </li>
                                            <li>
                                                <i class="fas fa-check"></i>
                                                <p>Trademark search for your <span style="font-weight: 700;">business region</span></p>
                                            </li>
                                            <li>
                                                <i class="fas fa-check"></i>
                                                <p>Detailed online report sent to you via email</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-footer">
                                        <a href="/sequence-form-step1/" class="button-round">Get Started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item bestSeller">
                                    <div class="pricing-head">
                                        <div class="top">
                                            <span class="tagged">Best Seller</span>
                                            <h4>Federal, State & Common Law Search</h4>
                                            <p><span>*</span>Get Your Trademark Search Report in <span> Just 3 Days! </span></p>
                                        </div>
                                        <div class="botom">
                                            <h2><i class="fas fa-dollar-sign"></i>199</h2>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="listStyle">
                                            <li>
                                                <i class="fas fa-check"></i>
                                                <p>Includes features of Federal & State Search package</p>
                                            </li>
                                            <li>
                                                <i class="fas fa-check"></i>
                                                <p>Corporate name search in <span style="font-weight: 700;">all US</span></p>
                                            </li>
                                            <li>
                                                <i class="fas fa-check"></i>
                                                <p>Corporate directories search to find similar names</p>
                                            </li>
                                            <li>
                                                <i class="fas fa-check"></i>
                                                <p>Common law trademark search</p>
                                            </li>
                                            <li>
                                                <i class="fas fa-check"></i>
                                                <p>Domain name search to see if anyone’s using your name online</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-footer">
                                        <a href="/sequence-form-step1/" class="button-round">Get Started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item recommended">
                                    <div class="pricing-head">
                                        <div class="top">
                                            <span class="tagged">Recommended</span>
                                            <h4>Global Comprehensive <br> Search</h4>
                                            <p><span>*</span>Get Your Trademark Search Report on the <span> Same Day! </span></p>
                                        </div>
                                        <div class="botom">
                                            <h2><i class="fas fa-dollar-sign"></i>349</h2>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="listStyle">
                                            <li>
                                                <i class="fas fa-check"></i>
                                                <p> Includes all the features of Federal & State Search & Federal, State & Common Law Search Search package</p>
                                            </li>
                                            <li>
                                                <i class="fas fa-check"></i>
                                                <p>Our trademark attorneys will perform a quick search using our AI-Based system on Global trademark database in multi-national jurisdictions </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-footer">
                                        <a href="/sequence-form-step1/" class="button-round">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">-->
                        <!--   <li class="nav-item" role="presentation">-->
                        <!--      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Trademark Search US</button>-->
                        <!--   </li>-->
                        <!--   <li class="nav-item" role="presentation">-->
                        <!--      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Trademark Search UK & EU</button>-->
                        <!--   </li>-->
                        <!--</ul>-->
                        <!--         <div class="tab-content" id="myTabContent">-->
                        <!--            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">-->
                        <!--               <div class="row justify-content-center">-->
                        <!--<div class="col-lg-4 col-md-6">-->
                        <!--                     <div class="pricing-item silver">-->
                        <!--                        <div class="pricing-head">-->
                        <!--                           <div class="top">-->
                        <!--                              <h4>UK Trademark <br> Search</h4>-->
                        <!--                              <p style="font-size: 13px;line-height: 20px;">IPO database to identify existing registered and pending UK trademarks that may conflict with the proposed trademark</p>-->
                        <!--                           </div>-->
                        <!--                           <div class="botom">-->
                        <!--                              <h2><i class="fas fa-pound-sign"></i>99</h2>-->
                        <!--                           </div>-->
                        <!--                        </div>-->
                        <!--                        <div class="pricing-body">-->
                        <!--                           <ul class="listStyle">-->
                        <!--                              <li>-->
                        <!--                                 <i class="fas fa-check"></i>-->
                        <!--                                 <p>Trademark search to find similar names, logos, or slogans</p>-->
                        <!--                              </li>-->
                        <!--                              <li>-->
                        <!--                                 <i class="fas fa-check"></i>-->
                        <!--                                 <p>Trademark search for your <span style="font-weight: 700;">business region</span></p>-->
                        <!--                              </li>-->
                        <!--                              <li>-->
                        <!--                                 <i class="fas fa-check"></i>-->
                        <!--                                 <p>Detailed online report sent to you via email</p>-->
                        <!--                              </li>-->
                        <!--                           </ul>-->
                        <!--                        </div>-->
                        <!--                        <div class="pricing-footer">-->
                        <!--                           <a href="/sequence-form-step1/" class="button-round">Get Started</a>-->
                        <!--                        </div>-->
                        <!--                     </div>-->
                        <!--                  </div>-->
                        <!--                  <div class="col-lg-4 col-md-6">-->
                        <!--                     <div class="pricing-item bestSeller">-->
                        <!--                        <div class="pricing-head">-->
                        <!--                           <div class="top">-->
                        <!--                              <span class="tagged">Best Seller</span>-->
                        <!--                              <h4>Common Law <br> Trademark Search</h4>-->
                        <!--                              <p style="font-size: 13px;line-height: 20px;">Researching unregistered trademarks that may exist in the marketplace and could conflict with the proposed trademark.</p>-->
                        <!--                           </div>-->
                        <!--                           <div class="botom">-->
                        <!--                              <h2><i class="fas fa-pound-sign"></i>149</h2>-->
                        <!--                           </div>-->
                        <!--                        </div>-->
                        <!--                        <div class="pricing-body">-->
                        <!--                           <ul class="listStyle">-->
                        <!--                              <li>-->
                        <!--                                 <i class="fas fa-check"></i>-->
                        <!--                                 <p>Includes all the features of UKIPO Search package</p>-->
                        <!--                              </li>-->
                        <!--                              <li>-->
                        <!--                                 <i class="fas fa-check"></i>-->
                        <!--                                 <p>Corporate name search in <span style="font-weight: 700;">all UK</span></p>-->
                        <!--                              </li>-->
                        <!--                              <li>-->
                        <!--                                 <i class="fas fa-check"></i>-->
                        <!--                                 <p>Corporate directories search to find similar names</p>-->
                        <!--                              </li>-->
                        <!--                              <li>-->
                        <!--                                 <i class="fas fa-check"></i>-->
                        <!--                                 <p>Common law trademark search</p>-->
                        <!--                              </li>-->
                        <!--                              <li>-->
                        <!--                                 <i class="fas fa-check"></i>-->
                        <!--                                 <p>Domain name search to see if anyone’s using your name online</p>-->
                        <!--                              </li>-->
                        <!--                           </ul>-->
                        <!--                        </div>-->
                        <!--                        <div class="pricing-footer">-->
                        <!--                           <a href="/sequence-form-step1/" class="button-round">Get Started</a>-->
                        <!--                        </div>-->
                        <!--                     </div>-->
                        <!--                  </div>-->
                        <!--                  <div class="col-lg-4 col-md-6">-->
                        <!--                     <div class="pricing-item recommended">-->
                        <!--                        <div class="pricing-head">-->
                        <!--                           <div class="top">-->
                        <!--                              <span class="tagged">Recommended</span>-->
                        <!--                              <h4>International <br> Trademark Search</h4>-->
                        <!--                             <p style="font-size: 13px;line-height: 20px;">WIPO database search to identify existing international trademarks that may conflict with the proposed trademark.</p>-->
                        <!--                           </div>-->
                        <!--                           <div class="botom">-->
                        <!--                              <h2><i class="fas fa-pound-sign"></i>199</h2>-->
                        <!--                           </div>-->
                        <!--                        </div>-->
                        <!--                        <div class="pricing-body">-->
                        <!--                           <ul class="listStyle">-->
                        <!--                              <li>-->
                        <!--                                 <i class="fas fa-check"></i>-->
                        <!--                                 <p>Includes all the features of UKIPO & Common Law Search package</p>-->
                        <!--                              </li>-->
                        <!--                              <li>-->
                        <!--                                 <i class="fas fa-check"></i>-->
                        <!--                                 <p>Our trademark attorneys will perform a quick search using our AI-Based system on Global trademark database in multi-national jurisdictions </p>-->
                        <!--                              </li>-->
                        <!--                           </ul>-->
                        <!--                        </div>-->
                        <!--                        <div class="pricing-footer">-->
                        <!--                           <a href="/sequence-form-step1/" class="button-round">Get Started</a>-->
                        <!--                        </div>-->
                        <!--                     </div>-->
                        <!--                  </div>-->
                        <!--               </div>-->
                        <!--            </div>-->
                        <!--            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">-->
                        <!--               <div class="row justify-content-center">-->
                        <!--                  <div class="col-lg-4 col-md-6">-->
                        <!--                     <div class="pricing-item silver">-->
                        <!--                        <div class="pricing-head">-->
                        <!--                           <div class="top">-->
                        <!--                              <h4>Basic <br> Search</h4>-->
                        <!--                              <p><span>*</span>Get Your Trademark Search Report in <span> Just 5 Days! </span></p>-->
                        <!--                           </div>-->
                        <!--                           <div class="botom">-->
                        <!--                              <h2><i class="fas fa-dollar-sign"></i>99</h2>-->
                        <!--                           </div>-->
                        <!--                        </div>-->
                        <!--                        <div class="pricing-body">-->
                        <!--                           <ul class="listStyle">-->
                        <!--                              <li>-->
                        <!--                                 <i class="fas fa-check"></i>-->
                        <!--                                 <p>Trademark search to find similar names, logos, or slogans</p>-->
                        <!--                              </li>-->
                        <!--                              <li>-->
                        <!--                                 <i class="fas fa-check"></i>-->
                        <!--                                 <p>Trademark search for your <span style="font-weight: 700;">business region</span></p>-->
                        <!--                              </li>-->
                        <!--                              <li>-->
                        <!--                                 <i class="fas fa-check"></i>-->
                        <!--                                 <p>Detailed online report sent to you via email</p>-->
                        <!--                              </li>-->
                        <!--                           </ul>-->
                        <!--                        </div>-->
                        <!--                        <div class="pricing-footer">-->
                        <!--                           <a href="/sequence-form-step1/" class="button-round">Get Started</a>-->
                        <!--                        </div>-->
                        <!--                     </div>-->
                        <!--                  </div>-->
                        <!--                  <div class="col-lg-4 col-md-6">-->
                        <!--                     <div class="pricing-item bestSeller">-->
                        <!--                        <div class="pricing-head">-->
                        <!--                           <div class="top">-->
                        <!--                              <span class="tagged">Best Seller</span>-->
                        <!--                              <h4>Comprehensive Search</h4>-->
                        <!--                              <p><span>*</span>Get Your Trademark Search Report in <span> Just 3 Days! </span></p>-->
                        <!--                           </div>-->
                        <!--                           <div class="botom">-->
                        <!--                              <h2><i class="fas fa-dollar-sign"></i>149</h2>-->
                        <!--                           </div>-->
                        <!--                        </div>-->
                        <!--                        <div class="pricing-body">-->
                        <!--                           <ul class="listStyle">-->
                        <!--                              <li>-->
                        <!--                                 <i class="fas fa-check"></i>-->
                        <!--                                 <p>Includes all the features of Basic Search package</p>-->
                        <!--                              </li>-->
                        <!--                              <li>-->
                        <!--                                 <i class="fas fa-check"></i>-->
                        <!--                                 <p>Corporate name search in <span style="font-weight: 700;">all US</span></p>-->
                        <!--                              </li>-->
                        <!--                              <li>-->
                        <!--                                 <i class="fas fa-check"></i>-->
                        <!--                                 <p>Corporate directories search to find similar names</p>-->
                        <!--                              </li>-->
                        <!--                              <li>-->
                        <!--                                 <i class="fas fa-check"></i>-->
                        <!--                                 <p>Common law trademark search</p>-->
                        <!--                              </li>-->
                        <!--                              <li>-->
                        <!--                                 <i class="fas fa-check"></i>-->
                        <!--                                 <p>Domain name search to see if anyone’s using your name online</p>-->
                        <!--                              </li>-->
                        <!--                           </ul>-->
                        <!--                        </div>-->
                        <!--                        <div class="pricing-footer">-->
                        <!--                           <a href="/sequence-form-step1/" class="button-round">Get Started</a>-->
                        <!--                        </div>-->
                        <!--                     </div>-->
                        <!--                  </div>-->
                        <!--                  <div class="col-lg-4 col-md-6">-->
                        <!--                     <div class="pricing-item recommended">-->
                        <!--                        <div class="pricing-head">-->
                        <!--                           <div class="top">-->
                        <!--                              <span class="tagged">Recommended</span>-->
                        <!--                              <h4>Global <br> Search</h4>-->
                        <!--                              <p><span>*</span>Get Your Trademark Search Report on the <span> Same Day! </span></p>-->
                        <!--                           </div>-->
                        <!--                           <div class="botom">-->
                        <!--                              <h2><i class="fas fa-dollar-sign"></i>199</h2>-->
                        <!--                           </div>-->
                        <!--                        </div>-->
                        <!--                        <div class="pricing-body">-->
                        <!--                           <ul class="listStyle">-->
                        <!--                              <li>-->
                        <!--                                 <i class="fas fa-check"></i>-->
                        <!--                                 <p>Includes all the features of Basic & Comprehensive Search package</p>-->
                        <!--                              </li>-->
                        <!--                              <li>-->
                        <!--                                 <i class="fas fa-check"></i>-->
                        <!--                                 <p>Our trademark attorneys will perform a quick search using our AI-Based system on Global trademark database in multi-national jurisdictions </p>-->
                        <!--                              </li>-->
                        <!--                           </ul>-->
                        <!--                        </div>-->
                        <!--                        <div class="pricing-footer">-->
                        <!--                           <a href="/sequence-form-step1/" class="button-round">Get Started</a>-->
                        <!--                        </div>-->
                        <!--                     </div>-->
                        <!--                  </div>-->
                        <!--               </div>-->
                        <!--            </div>-->
                        <!--         </div>-->
                    </div>
                </div>
            </section>
            <!-- home pricing table section html end -->

            <section class="bg-light-grey scheduleSec">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3>Take Action to Protect Your Name Today With Trademark Nova.</h3>
                            <p>Our comprehensive search service includes searching both the registered and unregistered marks, including those in use in the marketplace. We also provide expert guidance on the registrability of your mark, helping you to make informed decisions about your branding strategy. </p>
                        </div>
                        <div class="col-md-6">
                            <div class="schedule">
                                <h2>Request a Schedule For Free Consultation</h2>
                                <a href="book-free-consultation" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
                            </div>
                            <ul class="listStyle">
                                <li><i class="fas fa-arrow-circle-right"></i> Ensure your brand's uniqueness and legal compliance</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Avoid costly legal battles and brand reputation damage.</li>
                            </ul>
                            <p>Contact us today to learn more about how our Comprehensive Search Service can help you protect your brand and ensure its success.</p>
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
            @include ('includes/testimonial')


        </main>
        @endsection