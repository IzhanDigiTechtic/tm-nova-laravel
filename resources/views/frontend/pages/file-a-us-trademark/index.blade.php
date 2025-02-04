@extends('frontend.layouts.web.master')
@section('main-content')

   <style>
      .iti--separate-dial-code .iti__selected-flag {
         background-color: white;
      }

      @media only screen and (max-width: 575px) {
         /*.home-banner-us .banner-content {*/
         /*    padding: 1.5rem 0 2rem;*/
         /*    margin-top: 4rem;*/
         /*}*/
         /*.home-banner-us {*/
         /*    background: url(./assets/images/file-a-us-trademark.jpg) center/cover no-repeat;*/
         /*    height:670px;*/
         /*}*/
      }
   </style>
</head>

<body class="home">
   <div id="page" class="full-page">
      <!-- site header html end  -->
      <main id="content" class="site-main">
         <!-- home banner section html start -->
         <section class="home-banner-us home-banner">
            <div class="container">
               <div class="row align-items-center justify-content-between">
                  <div class="col-md-6">
                     <div class="banner-content">
                        <h3 class="banner-subtitle">File A US Trademark</h3>
                        <h2 class="banner-title">Get Your Trademark Registration With USPTO in Just <span>$49</span></h2>
                        <div class="banner-text">
                           <p><i class="fas fa-check-circle"></i>Expert trademark attorneys navigate the trademark process for you</p>
                           <p><i class="fas fa-check-circle"></i>Official USPTO filing firm with 100% success rate</p>
                           <p><i class="fas fa-check-circle"></i>Same Day Trademark Application Filing Available</p>
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

         <!-- Begin: Regions Section -->
         <section class="regionsSec">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 text-center mb-5">
                     <h2 class="section-title">At Trademark Nova, Our Attorneys Have Protected <span class="primary-color">Thousands of Trademarks</span> in The US</h2>
                     <p>Trademark Nova is one of a well-known names in trademark registration and protection firm in the United Kingdom. The firm's team of experienced and skilled attorneys have helped thousands of businesses and individuals secure their trademarks and protect their intellectual property. With a strong focus on delivering exceptional service and support, the attorneys at Trademark Nova have successfully handled trademark registration and protection cases for a wide range of clients, from small startups to multinational corporations. Their expertise extends to various industries, including technology, healthcare, retail, and finance. Whether a client needs help registering a new trademark or defending an existing one, the attorneys at Trademark Nova provide personalized and strategic legal solutions to help clients achieve their goals. With their proven track record of success, businesses and individuals alike can trust Trademark Nova to protect their valuable trademarks in the US.</p>
                  </div>
                  <!--<div class="col-md-6">-->
                  <!--   <div class="regionCell">-->
                  <!--      <div class="content">-->
                  <!--         <h4>UK Registration</h4>-->
                  <!--         <span>From $99</span>-->
                  <!--         <small>excl. government fees</small>-->
                  <!--        <a href="{{route('step1')}}" class="button-round">Register Now</a>-->
                  <!--      </div>-->
                  <!--      <img src="{{asset('assets/images/flag1.webp')}}" alt="" class="rounded-circle">-->
                  <!--   </div>-->
                  <!--</div>-->
                  <!--<div class="col-md-6">-->
                  <!--   <div class="regionCell">-->
                  <!--      <div class="content">-->
                  <!--         <h4>EU Registration</h4>-->
                  <!--         <span>From $149</span>-->
                  <!--         <small>excl. government fees</small>-->
                  <!--                                   <a href="{{route('step1')}}" class="button-round">Register Now</a>-->
                  <!--      </div>-->
                  <!--      <img src="{{asset('assets/images/flag2.webp')}}" alt="" class="rounded-circle">-->
                  <!--   </div>-->
                  <!--</div>-->
                  <div class="col-md-6">
                     <div class="regionCell">
                        <div class="content">
                           <h4>US Registration</h4>
                           <span>From $49</span>
                           <small>excl. government fees</small>
                           <a href="{{route('step1')}}" class="button-round">Register Now</a>
                        </div>
                        <img src="{{asset('assets/images/flag3.webp')}}" alt="" class="rounded-circle">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="regionCell">
                        <div class="content">
                           <h4>International Registration</h4>
                           <small>Discuss your requirements with our international <br> trademark consultant</small>
                           <a href="javascript:void(0);" class="alphaChat button-round">Talk To A Consultant</a>
                        </div>
                        <img src="{{asset('assets/images/flag4.webp')}}" alt="" class="rounded-circle">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <ul class="trademarkList">
                        <li>
                           <h4>Trademark Consultation</h4>
                           <a href="book-free-consultation">Learn More <i class="fa fa-arrow-right"></i></a>
                        </li>
                        <li>
                           <h4>Trademark Watch Service</h4>
                           <a href="trademark-monitoring">Learn More <i class="fa fa-arrow-right"></i></a>
                        </li>
                        <li>
                           <h4>Trademark Renewal</h4>
                           <a href="trademark-renewal">Learn More <i class="fa fa-arrow-right"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </section>
         <!-- END: Regions Section -->

         <!-- home about section html start -->
         <section class="home-about">
            <div class="container">
               <div class="about-inner">
                  <div class="row">
                     <div class="col-md-12 text-center">
                        <h2>Our Trademark Registration Process</h2>
                        <p>As per the regulations governing trademarks, Trademark Nova has developed a comprehensive and legally sound registration process for our trademarks. Our trademark registration process is designed to provide our clients with an efficient and effective means of protecting their intellectual property rights. Our process includes a thorough analysis of the trademark to ensure its distinctiveness and eligibility for registration, as well as a comprehensive search of existing trademarks to avoid potential conflicts. Additionally, At Trademark Nova, we provide assistance with the preparation and filing of the trademark application, and we offer ongoing monitoring services to ensure continued protection of the registered trademark. Our commitment to adherence to legal regulations and industry best practices ensures that our clients receive the highest level of service and protection for their trademarks.</span></p>
                     </div>

                     <div class="col-md-6">
                        <div class="about-video-banner" style="background-image: url(assets/images/img14.webp);"></div>
                     </div>

                     <div class="col-md-6 mb-5">
                        <div class="progress-content">
                           <div class="progress-wrapper">
                              <h4><span>01.</span> Submit Your Trademark Information</h4>
                              <p>Spend a couple of minutes filling out a simple questionnaire. This will initiate your USPTO trademark registration process.</p>
                              <h4><span>02.</span> Select Service & Make the Payment</h4>
                              <p>Get all the details in order! Select your coveted service with Trademark Nova & make the payment for your desired services.</p>
                              <h4><span>03.</span> Thorough Evaluation & Filing</h4>
                              <p>To ensure that trademark is completely unique, our team conducts a thorough trademark search across numerous databases & then file your trademark with US.</p>
                           </div>
                           <a href="{{route('step1')}}" class="button-round">START TRADEMARK REGISTRATION</a>
                        </div>
                     </div>

                     <div class="col-md-12 mb-5">
                        <div class="iconbox-container d-flex flex-wrap">
                           <div class="iconbox-item-3 d-flex flex-wrap">
                              <div class="iconbox-border d-flex align-items-center">
                                 <div class="iconbox-icon primary-bg">
                                    <!--<i aria-hidden="true" class="icon icon-business"></i>-->
                                    <img src="{{asset('assets/images/icon-01.webp')}}" alt="">
                                 </div>
                                 <div class="iconbox-content">
                                    <h4 style="font-size: 18px;font-weight: 700;color: #223645;">9,300+ Businesses Consulted</h4>
                                    <p>We have provided consultancy to numerous businesses to resolve their all queries & provided trust in their brand protection.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="iconbox-item-1 iconbox-item-3 d-flex flex-wrap">
                              <div class="iconbox-border d-flex align-items-center">
                                 <div class="iconbox-icon primary-bg">
                                    <img src="{{asset('assets/images/icon-02.webp')}}" alt="">
                                 </div>
                                 <div class="iconbox-content" style="background-color: #535ee0;border-color: #4853d6;color: #fff;">
                                    <h4 style="font-size: 18px;font-weight: 700;color: #fff;">7,500+ Trademarks Registered</h4>
                                    <p>Our registered trademark stats speak for themselves. At Trademark Nova, we have registered highest number of trademarks globally.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="iconbox-item-1 iconbox-item-3 d-flex flex-wrap">
                              <div class="iconbox-border d-flex align-items-center">
                                 <div class="iconbox-icon primary-bg">
                                    <img src="{{asset('assets/images/icon-03.webp')}}" alt="">
                                 </div>
                                 <div class="iconbox-content">
                                    <h4 style="font-size: 18px;font-weight: 700;color: #223645;">4,000+ Cases In Progress</h4>
                                    <p>We are working vigorously for a vast number of businesses to minimize application rejection, & optimize application for success.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-md-9">
                        <div class="section-head-outer registery">
                           <div class="section-head">
                              <h2 class="section-title">Start Your Filing Process With Just <span class="primary-color">$49</span></h2>
                           </div>
                           <p>You will have exclusive rights to file a trademark of names, slogans, or register a logo of your brand. Protect priceless products and services from your competitors with trademark registration.</p>
                        </div>
                     </div>

                     <div class="col-md-3">
                        <div class="exp-date-wrap">
                           <div class="exp-date">
                              <i class="fa fa-comment-dots"></i>
                              <h2><a href="javascript:void(0);" class="alphaChat">LIVE CHAT</a></h2>
                              <h4 style="font-size: 18px;"><a href="javascript:void(0);" class="alphaChat">AVAILABLE 24/7</a></h4>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- home about section html end -->

         <!-- home portfolio section html start -->
         <section class="home-portfolio">
            <div class="image-overlay" style="background-image: url(assets/images/img8.webp);"></div>
            <div class="container">
               <div class="section-head text-center">
                  <div class="row">
                     <div class="col-lg-8 offset-lg-2">
                        <h2 class="section-title">Our Vast Services Aim At Easing The Registration Of Trademarks</h2>
                        <p>At Trademark Nova, our team of highly skilled professionals is equipped with the necessary knowledge and expertise to assist clients in navigating the complex legal requirements involved in trademark registration. Our services cover a wide range of aspects, including conducting trademark searches, filing trademark applications, responding to office actions, and managing trademark portfolios.</p>
                     </div>
                  </div>
               </div>
               <div class="portfolio-inner">
                  <div class="row">
                     <div class="col-sm-6 col-lg-4">
                        <article class="portfolio-item">
                           <figure class="portfolio-img">
                              <img src="{{asset('assets/images/img3.webp')}}" alt="">
                              <span class="cat-link">
                              </span>
                           </figure>
                           <div class="portfolio-content">
                              <h4><a href="trademark-renewal">Trademark Renewal</a></h4>
                              <p>Securing a registered trademark protects your brand, & provides with the tools to prevent someone using similar signs and riding off the back of your business.</p>
                              <a href="trademark-renewal" class="button-round">VIEW DETAILS</a>
                           </div>
                        </article>
                     </div>
                     <div class="col-sm-6 col-lg-4 col-md-6">
                        <article class="portfolio-item">
                           <figure class="portfolio-img">
                              <img src="{{asset('assets/images/tm-search.webp')}}" alt="">
                              <span class="cat-link">
                              </span>
                           </figure>
                           <div class="portfolio-content">
                              <h4><a href="comprehensive-trademark-search">Trademark Search</a></h4>
                              <p>Using AI tools to search for alternative spellings, and more. We ensure you don’t waste your time & money on a name that isn’t unique enough to be trademarked.</p>
                              <a href="comprehensive-trademark-search" class="button-round">VIEW DETAILS</a>
                           </div>
                        </article>
                     </div>
                     <div class="col-sm-6 col-lg-4 col-md-6">
                        <article class="portfolio-item">
                           <figure class="portfolio-img">
                              <img src="{{asset('assets/images/amaz.webp')}}" alt="">
                              <span class="cat-link">
                              </span>
                           </figure>

                           <div class="portfolio-content">
                              <h4><a href="trademark-monitoring">Trademark Monitoring</a></h4>
                              <p>To enforce your rights, know when others are using your trademark. Trademark Monitoring gives the information you need to enforce your trademark rights!</p>
                              <a href="trademark-monitoring" class="button-round">VIEW DETAILS</a>
                           </div>
                        </article>
                     </div>
                     <div class="col-sm-6 col-lg-4 col-md-6">
                        <article class="portfolio-item">
                           <figure class="portfolio-img">
                              <img src="{{asset('assets/images/fam-law.png')}}" alt="">
                              <span class="cat-link">
                              </span>
                           </figure>

                           <div class="portfolio-content">
                              <h4><a href="response-to-opposition">Response to Opposition</a></h4>
                              <p>Assisting applicants in responding to office actions issued by the trademark office for a seamless trademark registration process.</p>
                              <a href="response-to-opposition" class="button-round">VIEW DETAILS</a>
                           </div>
                        </article>
                     </div>
                     <div class="col-sm-6 col-lg-4 col-md-6">
                        <article class="portfolio-item">
                           <figure class="portfolio-img">
                              <img src="{{asset('assets/images/legal-writing.png')}}" alt="">
                              <span class="cat-link">
                              </span>
                           </figure>

                           <div class="portfolio-content">
                              <h4><a href="cease-desist-letter">Cease & Desist Letter</a></h4>
                              <p>Are you facing infringement, or breach of contract? Our Cease & desist letter can provide an affordable solution to protect your rights & prevent further harm.</p>
                              <a href="cease-desist-letter" class="button-round">VIEW DETAILS</a>
                           </div>
                        </article>
                     </div>
                     <div class="col-sm-6 col-lg-4 col-md-6">
                        <article class="portfolio-item">
                           <figure class="portfolio-img">
                              <img src="{{asset('assets/images/amazon.webp')}}" alt="">
                              <span class="cat-link">
                              </span>
                           </figure>

                           <div class="portfolio-content">
                              <h4><a href="amazon-brand-registry-us">Amazon Brand Registry</a></h4>
                              <p>Amazon Brand Registry enables brand owners to register their trademarks and safeguard their intellectual property while building their brand. </p>
                              <a href="amazon-brand-registry-us" class="button-round">VIEW DETAILS</a>
                           </div>
                        </article>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- home portfolio section html end -->

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
                  <!--<div class="row justify-content-center">-->
                  <!--       <div class="col-lg-4 col-md-6">-->
                  <!--          <div class="pricing-item silver">-->
                  <!--             <div class="pricing-head">-->
                  <!--                <div class="top">-->
                  <!--                   <h4>Federal & State Search</h4>-->
                  <!--                   <p><span>*</span>Get Your Trademark Search Report in <span> Just 5 Days! </span></p>-->
                  <!--                </div>-->
                  <!--                <div class="botom">-->
                  <!--                   <h2><i class="fas fa-dollar-sign"></i>99</h2>-->
                  <!--                </div>-->
                  <!--             </div>-->
                  <!--             <div class="pricing-body">-->
                  <!--                <ul class="listStyle">-->
                  <!--                   <li>-->
                  <!--                      <i class="fas fa-check"></i>-->
                  <!--                      <p>Trademark search to find similar names, logos, or slogans</p>-->
                  <!--                   </li>-->
                  <!--                   <li>-->
                  <!--                      <i class="fas fa-check"></i>-->
                  <!--                      <p>Trademark search for your <span style="font-weight: 700;">business region</span></p>-->
                  <!--                   </li>-->
                  <!--                   <li>-->
                  <!--                      <i class="fas fa-check"></i>-->
                  <!--                      <p>Detailed online report sent to you via email</p>-->
                  <!--                   </li>-->
                  <!--                </ul>-->
                  <!--             </div>-->
                  <!--             <div class="pricing-footer">-->
                  <!--                <a href="{{route('step1')}}" class="button-round">Get Started</a>-->
                  <!--             </div>-->
                  <!--          </div>-->
                  <!--       </div>-->
                  <!--       <div class="col-lg-4 col-md-6">-->
                  <!--          <div class="pricing-item bestSeller">-->
                  <!--             <div class="pricing-head">-->
                  <!--                <div class="top">-->
                  <!--                   <span class="tagged">Best Seller</span>-->
                  <!--                   <h4>State & Common Law Search</h4>-->
                  <!--                   <p><span>*</span>Get Your Trademark Search Report in <span> Just 3 Days! </span></p>-->
                  <!--                </div>-->
                  <!--                <div class="botom">-->
                  <!--                   <h2><i class="fas fa-dollar-sign"></i>149</h2>-->
                  <!--                </div>-->
                  <!--             </div>-->
                  <!--             <div class="pricing-body">-->
                  <!--                <ul class="listStyle">-->
                  <!--                   <li>-->
                  <!--                      <i class="fas fa-check"></i>-->
                  <!--                      <p>Includes all the features of Basic Search package</p>-->
                  <!--                   </li>-->
                  <!--                   <li>-->
                  <!--                      <i class="fas fa-check"></i>-->
                  <!--                      <p>Corporate name search in <span style="font-weight: 700;">all US</span></p>-->
                  <!--                   </li>-->
                  <!--                   <li>-->
                  <!--                      <i class="fas fa-check"></i>-->
                  <!--                      <p>Corporate directories search to find similar names</p>-->
                  <!--                   </li>-->
                  <!--                   <li>-->
                  <!--                      <i class="fas fa-check"></i>-->
                  <!--                      <p>Common law trademark search</p>-->
                  <!--                   </li>-->
                  <!--                   <li>-->
                  <!--                      <i class="fas fa-check"></i>-->
                  <!--                      <p>Domain name search to see if anyone’s using your name online</p>-->
                  <!--                   </li>-->
                  <!--                </ul>-->
                  <!--             </div>-->
                  <!--             <div class="pricing-footer">-->
                  <!--                <a href="{{route('step1')}}" class="button-round">Get Started</a>-->
                  <!--             </div>-->
                  <!--          </div>-->
                  <!--       </div>-->
                  <!--       <div class="col-lg-4 col-md-6">-->
                  <!--          <div class="pricing-item recommended">-->
                  <!--             <div class="pricing-head">-->
                  <!--                <div class="top">-->
                  <!--                   <span class="tagged">Recommended</span>-->
                  <!--                   <h4>Global <br> Search</h4>-->
                  <!--                   <p><span>*</span>Get Your Trademark Search Report on the <span> Same Day! </span></p>-->
                  <!--                </div>-->
                  <!--                <div class="botom">-->
                  <!--                   <h2><i class="fas fa-dollar-sign"></i>199</h2>-->
                  <!--                </div>-->
                  <!--             </div>-->
                  <!--             <div class="pricing-body">-->
                  <!--                <ul class="listStyle">-->
                  <!--                   <li>-->
                  <!--                      <i class="fas fa-check"></i>-->
                  <!--                      <p>Includes all the features of Basic & Comprehensive Search package</p>-->
                  <!--                   </li>-->
                  <!--                   <li>-->
                  <!--                      <i class="fas fa-check"></i>-->
                  <!--                      <p>Our trademark attorneys will perform a quick search using our AI-Based system on Global trademark database in multi-national jurisdictions </p>-->
                  <!--                   </li>-->
                  <!--                </ul>-->
                  <!--             </div>-->
                  <!--             <div class="pricing-footer">-->
                  <!--                <a href="{{route('step1')}}" class="button-round">Get Started</a>-->
                  <!--             </div>-->
                  <!--          </div>-->
                  <!--       </div>-->
                  <!--    </div>-->
                  <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Trademark Registration</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Trademark Search</button>
                     </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="row justify-content-center">
                           <div class="col-lg-4 col-md-6">
                              <div class="pricing-item silver">
                                 <div class="pricing-head">
                                    <div class="top">
                                       <h4>Basic</h4>
                                       <p><span>*</span>Get Your Trademark Registration Serial Number in <span> Just 10 Days! </span></p>
                                    </div>
                                    <div class="botom">
                                       <h2><i class="fas fa-dollar-sign"></i>49</h2>
                                       <span class="text-start">+ Govt. Fee </span>
                                    </div>
                                 </div>
                                 <div class="pricing-body">
                                    <ul class="listStyle">
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p>Case Review</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p>Case Preparation</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p>Case Filing</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p>Trademark Alert</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p>Trademark Secured</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p>100% Satisfaction Guarantee</p>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="pricing-footer">
                                    <a href="{{route('step1')}}" class="button-round">Get Started</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6">
                              <div class="pricing-item bestSeller">
                                 <div class="pricing-head">
                                    <div class="top">
                                       <span class="tagged">Best Seller</span>
                                       <h4>Deluxe</h4>
                                       <p><span>*</span>Get Your Trademark Registration Serial Number in <span> Just 3-5 Days! </span></p>
                                    </div>
                                    <div class="botom">
                                       <h2><i class="fas fa-dollar-sign"></i>149</h2>
                                       <span class="text-start">+ Govt. Fee </span>
                                    </div>
                                 </div>
                                 <div class="pricing-body">
                                    <ul class="listStyle">
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p>Case Review</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p>Case Preparation</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p>Case Filing</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p>Trademark Alert</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p>Trademark Secured</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p>100% Satisfaction Guarantee</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p style="font-weight: 700;">Trademark Monitoring</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p style="font-weight: 700;">Complete Documentation</p>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="pricing-footer">
                                    <a href="{{route('step1')}}" class="button-round">Get Started</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6">
                              <div class="pricing-item recommended">
                                 <div class="pricing-head">
                                    <div class="top">
                                       <span class="tagged">Recommended</span>
                                       <h4>Premium</h4>
                                       <p><span>*</span>Get Your Trademark Registration Serial Number on the <span> Same Day! </span></p>
                                    </div>
                                    <div class="botom">
                                       <h2><i class="fas fa-dollar-sign"></i>249</h2>
                                       <span class="text-start">+ Govt. Fee </span>
                                    </div>
                                 </div>
                                 <div class="pricing-body">
                                    <ul class="listStyle">
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p>Case Review</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p>Case Preparation</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p>Case Filing</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p>Trademark Alert</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p>Trademark Secured</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p>100% Satisfaction Guarantee</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p>Trademark Monitoring</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p>Complete Documentation</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p style="font-weight: 700;">Dedicated Case Manager</p>
                                       </li>
                                       <li>
                                          <i class="fas fa-check"></i>
                                          <p style="font-weight: 700;">100% Approval Guarantee</p>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="pricing-footer">
                                    <a href="{{route('step1')}}" class="button-round">Get Started</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
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
                                    <a href="{{route('step1')}}" class="button-round">Get Started</a>
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
                                    <a href="{{route('step1')}}" class="button-round">Get Started</a>
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
                                    <a href="{{route('step1')}}" class="button-round">Get Started</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <section class="pb-5">
            <div class="container">
               <div class="amazonWrap">
                  <div class="title">
                     <h2>Trademark Nova's Amazon Brand Registry Service <span>$99</span></h2>
                  </div>
                  <div class="body">
                     <div class="left">
                        <p>To showcase your ecommerce business and sell your brand on Amazon, it’s a MANDATORY requirement to get your brand registered. Amazon Brand Registry is a protection offered by Trademark Nova to assist Amazon sellers register their brand and to remove listings that infringe on their trademark rights. If any other seller is using your trademark logo or name to sell goods or is copying your listings, Trademark Nova will have them banned.</p>
                        <a href="{{route('step1')}}" class="button-round">Get Started</a>
                     </div>
                     <div class="right"><img src="{{asset('assets/images/amazon.webp')}}" alt=""></div>
                  </div>
               </div>
            </div>
         </section>

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
         <!-- About html start -->
           
@include ('includes/testimonial')
@include ('includes/faq')

   </main>
@include ('includes/ind-leader')

@endsection