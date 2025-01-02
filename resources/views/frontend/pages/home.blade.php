@extends('frontend.layouts.web.master')
@section('main-content')

   <style>
      .iti--separate-dial-code .iti__selected-flag {
         background-color: white;
      }

      .bannerHome {
         background: url(./assets/images/banner-home.webp) right/cover no-repeat;
      }

      .bannerHome .banner-content .banner-title {
         font-size: 44px;
         line-height: 1.4;
         font-weight: 700;
         margin: 0 0 2rem;
      }

      .bannerHome .banner-content .banner-title span {
         font-weight: 800;
      }

      .bannerHome .banner-content .banner-subtitle {
         margin: 0;
         color: #ffcd15;
      }


      @media only screen and (max-width: 1445px) {}

      @media only screen and (max-width: 1366px) {}

      @media only screen and (max-width: 1199px) {
         .bannerHome .banner-content .banner-title {
            font-size: 34px;
            margin: 0 0 1rem;
         }
      }

      @media only screen and (max-width: 767px) {
         .bannerHome .banner-content .banner-title {
            font-size: 28px;
         }

         .banner-content .banner-subtitle {
            font-size: 18px;
         }

         .bannerHome {
            /* background-image: linear-gradient(to right bottom, #968ff8, #847bf8, #7268f7, #5e53f5, #483df2);
               padding: 5rem 0 1rem; */
         }

         .bannerHome .banner-content .banner-subtitle {
            font-size: 16px !important;
         }

         .home-banner-us .banner-content {
            padding: 1.5rem 0 2rem;
            margin-top: 4rem;
         }

         .home-banner-us {
            background-image: linear-gradient(to right bottom, #968ff8, #847bf8, #7268f7, #5e53f5, #483df2);
         }

         .btnSec a {
            background: #213643;
            padding: 10px;
            font-size: 1rem;
         }
      }

      @media only screen and (max-width: 575px) {}
   </style>
</head>

<body class="home">
   <!-- <div id="page" class="full-page"> -->
   <!-- site header html end  -->
   <!-- <main id="content" class="site-main homePage"> -->
   <!-- home banner section html start -->
   <section class="home-banner bannerHome">
      <div class="container">
         <div class="row align-items-center justify-content-between">
            <div class="col-lg-8 col-md-12">
               <div class="banner-content">
                  <h3 class="banner-subtitle" style="font-size: 22px;">Let’s Protect What You Have Built</h3>
                  <h2 class="banner-title">Trademark Your Brand Name, Slogan, and Logo in<span> $49!</span></h2>
                  <div class="banner-text">
                     <p><i class="fa fa-check-square"></i>Expert trademark attorneys navigate the trademark process for you</p>
                     <p><i class="fa fa-check-square"></i>Official USPTO filing firm with 100% success rate</p>
                     <p><i class="fa fa-check-square"></i>Same day trademark application filing available</p>
                  </div>
                  <div class="btnSec">
                     <a href="/sequence-form-step1/" class="button-round">Get Started Now</a>
                     <a href="javascript:void(0);" class="alphaChat button-round">Chat now for instant support </a>
                  </div>
                  <p class="lastPara mb-0 mt-3">Start as low as <span>$49</span>, view <a href="#pakgeSec" class="goDown">Trademark Registration packages</a></p>
               </div>
            </div>

         </div>
      </div>
   </section>
   <!-- home banner section html end -->

   <!-- Begin: Regions Section -->
   <section class="regionsSec d-md-block d-none">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center mb-5">
               <h2 class="section-title">At Trademark Nova, Our Attorneys Have Protected <span class="primary-color"> Thousands of Trademarks</span> Worldwide</h2>
               <p class="readMoreText">Trademark Nova is a leading provider of trademark protection services, with a team of experienced attorneys who have successfully protected thousands of trademarks in various jurisdictions including the US, UK, EU, and internationally. We understand the importance of protecting our clients' intellectual property rights, and we are committed to providing personalized and effective legal solutions to ensure that their trademarks are safeguarded against infringement and misuse. <br> <br> At Trademark Nova, our highly qualified attorneys have a deep understanding of trademark law and keep up-to-date with the latest developments in this area to provide our clients with the best possible advice and representation. If you are looking to protect your trademark, you can trust the expertise of our attorneys at Trademark Nova.</p>
               <span class="readMore">Read More <i class="fas fa-angle-double-down ms-2"></i></span>
            </div>
         </div>
         <div class="row regionCarousel">
            <div class="col-md-6">
               <div class="regionCell">
                  <div class="content">
                     <h4>US Registration</h4>
                     <span>From $49</span>
                     <small>Get exclusive rights to file a trademark of names, slogans, or register a logo of your brand.</small>
                     <a href="/sequence-form-step1/" class="button-round">Register Now</a>
                  </div>
                  <img src="{{asset('assets/images/flag3.webp')}}" alt="" class="rounded-circle">
               </div>
            </div>
            <!--<div class="col-md-6">-->
            <!--   <div class="regionCell">-->
            <!--      <div class="content">-->
            <!--         <h4>UK Registration</h4>-->
            <!--         <span>From $99</span>-->
            <!--         <small>Get exclusive rights to file a trademark of names, slogans, or register a logo of your brand.</small>-->
            <!--         <a href="/sequence-form-step1/" class="button-round">Register Now</a>-->
            <!--      </div>-->
            <!--      <img src="{{asset('assets/images/flag1.webp')}}" alt="" class="rounded-circle">-->
            <!--   </div>-->
            <!--</div>-->
            <!--<div class="col-md-6">-->
            <!--   <div class="regionCell">-->
            <!--      <div class="content">-->
            <!--         <h4>EU Registration</h4>-->
            <!--         <span>From $149</span>-->
            <!--         <small>Get exclusive rights to file a trademark of names, slogans, or register a logo of your brand.</small>-->
            <!--         <a href="/sequence-form-step1/" class="button-round">Register Now</a>-->
            <!--      </div>-->
            <!--      <img src="{{asset('assets/images/flag2.webp')}}" alt="" class="rounded-circle">-->
            <!--   </div>-->
            <!--</div>-->
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
         </div>
      </div>
   </section>

   <section class="apartSec pb-0">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
               <h2>Why Choose <span class="primary-color">Trademark Nova</span></h2>
               <p>Trademark Nova provides a safe haven for the development of your business and access to a wide range of services to meet your needs. We protect your valuable assets and establish your right to use them by registering your trademark. Our firm has a long track record of success in trademark registration with UKIPO, USPTO & EUIPO allowing us to aid a wide range of businesses in strengthening their brands and shielding them from unauthorised changes or infringements.</p>
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
         <div class="row justify-content-center mt-5">
            <div class="col-md-12">
               <div class="iconbox-container d-flex flex-wrap iconboxCarousel">
                  <div class="iconbox-item-1 iconbox-item-3 d-flex flex-wrap">
                     <div class="iconbox-border d-flex align-items-center">
                        <div class="iconbox-icon primary-bg">
                           <!-- <i aria-hidden="true" class="icon icon-business"></i> -->
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
                           <!-- <i aria-hidden="true" class="icon icon-globe"></i> -->
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
                           <!-- <i aria-hidden="true" class="icon icon-search"></i> -->
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
                  <p class="readMoreText">As per the regulations governing trademarks, Trademark Nova has developed a comprehensive and legally sound registration process for our trademarks. Our trademark registration process is designed to provide our clients with an efficient and effective means of protecting their intellectual property rights. Our process includes a thorough analysis of the trademark to ensure its distinctiveness and eligibility for registration, as well as a comprehensive search of existing trademarks to avoid potential conflicts. Additionally, At Trademark Nova, we provide assistance with the preparation and filing of the trademark application, and we offer ongoing monitoring services to ensure continued protection of the registered trademark. Our commitment to adherence to legal regulations and industry best practices ensures that our clients receive the highest level of service and protection for their trademarks.</p>
                  <span class="readMore">Read More <i class="fas fa-angle-double-down ms-2"></i></span>
               </div>

               <div class="col-lg-6 col-md-12">
                  <div class="about-video-banner" style="background-image: url(assets/images/img14.webp);"></div>
               </div>

               <div class="col-lg-6 col-md-12 mb-5">
                  <div class="progress-content">
                     <div class="progress-wrapper">
                        <h4><span>01.</span> Submit Your Trademark Information</h4>
                        <p>Complete a quick questionnaire to start your IPO trademark registration process with Trademark Nova. Organize all the necessary information and choose your preferred service. Make the payment to proceed.</p>
                        <h4><span>02.</span> Thorough Database Search</h4>
                        <p>To ensure that your trademark is entirely unique, our team conducts a thorough trademark search across numerous databases.</p>
                        <h4><span>03.</span> Trademark Filing </h4>
                        <p>After successful evaluation, we will file your trademark at the Intellectual Property Office.</p>
                     </div>
                     <a href="/sequence-form-step1/" class="button-round">START TRADEMARK REGISTRATION</a>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </section>

   <section class="home-pricing-table pt-0" id="pakgeSec">
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
                           <h4>Basic</h4>
                           <p><span>*</span>Get Your Trademark Registration Serial Number in <span> Just 10 Days! </span></p>
                        </div>
                        <div class="botom">
                           <h2><i class="fas $49"></i>$49</h2>
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
                        <a href="/sequence-form-step1/" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
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
                           <h2><i class="fas $149"></i>$149</h2>
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
                        <a href="/sequence-form-step1/" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
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
                           <h2><i class="fas $249"></i>$249</h2>
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
                        <a href="/sequence-form-step1/" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <!--<div class="row justify-content-center">-->
            <!--        <div class="col-lg-4 col-md-6">-->
            <!--           <div class="pricing-item silver">-->
            <!--              <div class="pricing-head">-->
            <!--                 <div class="top">-->
            <!--                    <h4>BASIC</h4>-->
            <!--                    <p><span>*</span>Get Your Trademark Registration Serial Number in <span> Just 10 Days! </span></p>-->
            <!--                 </div>-->
            <!--                 <div class="botom">-->
            <!--                    <h2><i class="fas "></i></h2>-->
            <!--                    <span>+GOV FEES</span>-->
            <!--                 </div>-->
            <!--              </div>-->
            <!--              <div class="pricing-body">-->
            <!--                 <ul class="listStyle">-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p>Case Review</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p>Case Preparation</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p>Case Filing</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p>Trademark Alert</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p>Trademark Secured</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p>100% Satisfaction Guarantee</p>-->
            <!--                    </li>-->
            <!--                 </ul>-->
            <!--              </div>-->
            <!--              <div class="pricing-footer">-->
            <!--                 <a href="/sequence-form-step1/" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>-->
            <!--              </div>-->
            <!--           </div>-->
            <!--        </div>-->
            <!--        <div class="col-lg-4 col-md-6">-->
            <!--           <div class="pricing-item bestSeller">-->
            <!--              <div class="pricing-head">-->
            <!--                 <div class="top">-->
            <!--                    <span class="tagged">Best Seller</span>-->
            <!--                    <h4>DELUXE</h4>-->
            <!--                    <p><span>*</span>Get Your Trademark Registration Serial Number in <span> Just 3-5 Days! </span></p>-->
            <!--                 </div>-->
            <!--                 <div class="botom">-->
            <!--                    <h2><i class="fas "></i></h2>-->
            <!--                    <span>+GOV FEES</span>-->
            <!--                 </div>-->
            <!--              </div>-->
            <!--              <div class="pricing-body">-->
            <!--                 <ul class="listStyle">-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p>Case Review</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p>Case Preparation</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p>Case Filing</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p>Trademark Alert</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p>Trademark Secured</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p>100% Satisfaction Guarantee</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p style="font-weight: 700;">Trademark Monitoring</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p style="font-weight: 700;">Complete Documentation</p>-->
            <!--                    </li>-->
            <!--                 </ul>-->
            <!--              </div>-->
            <!--              <div class="pricing-footer">-->
            <!--                 <a href="/sequence-form-step1/" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>-->
            <!--              </div>-->
            <!--           </div>-->
            <!--        </div>-->
            <!--        <div class="col-lg-4 col-md-6">-->
            <!--           <div class="pricing-item recommended">-->
            <!--              <div class="pricing-head">-->
            <!--                 <div class="top">-->
            <!--                    <span class="tagged">Recommended</span>-->
            <!--                    <h4>PREMIUM</h4>-->
            <!--                    <p><span>*</span>Get Your Trademark Registration Serial Number on the <span> Same Day! </span></p>-->
            <!--                 </div>-->
            <!--                 <div class="botom">-->
            <!--                    <h2><i class="fas "></i></h2>-->
            <!--                    <span>+GOV FEES</span>-->
            <!--                 </div>-->
            <!--              </div>-->
            <!--              <div class="pricing-body">-->
            <!--                 <ul class="listStyle">-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p>Case Review</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p>Case Preparation</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p>Case Filing</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p>Trademark Alert</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p>Trademark Secured</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p>100% Satisfaction Guarantee</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p>Trademark Monitoring</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p>Complete Documentation</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p style="font-weight: 700;">Dedicated Case Manager</p>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                       <i class="fas fa-check"></i>-->
            <!--                       <p style="font-weight: 700;">100% Approval Guarantee</p>-->
            <!--                    </li>-->
            <!--                 </ul>-->
            <!--              </div>-->
            <!--              <div class="pricing-footer">-->
            <!--                 <a href="/sequence-form-step1/" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>-->
            <!--              </div>-->
            <!--           </div>-->
            <!--        </div>-->
            <!--     </div>-->
            <!--<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">-->
            <!--   <li class="nav-item" role="presentation">-->
            <!--      <button class="nav-link active" id="us-tab" data-bs-toggle="tab" data-bs-target="#us-tab-pane" type="button" role="tab" aria-controls="us-tab-pane" aria-selected="false">Trademark Registration US</button>-->
            <!--   </li>-->
            <!--   <li class="nav-item" role="presentation">-->
            <!--      <button class="nav-link" id="uk-tab" data-bs-toggle="tab" data-bs-target="#uk-tab-pane" type="button" role="tab" aria-controls="uk-tab-pane" aria-selected="true">Trademark Registration UK</button>-->
            <!--   </li>-->

            <!--<li class="nav-item" role="presentation">-->
            <!--      <button class="nav-link" id="eu-tab" data-bs-toggle="tab" data-bs-target="#eu-tab-pane" type="button" role="tab" aria-controls="eu-tab-pane" aria-selected="false">Trademark Registration EU</button>-->
            <!--   </li>-->
            <!--</ul>-->


            <!--<div class="tab-content" id="myTabContent">-->
            <!--   <div class="tab-pane fade" id="uk-tab-pane" role="tabpanel" aria-labelledby="uk-tab" tabindex="0">-->
            <!--      <div class="row justify-content-center">-->
            <!--         <div class="col-lg-4 col-md-6">-->
            <!--            <div class="pricing-item silver">-->
            <!--               <div class="pricing-head">-->
            <!--                  <div class="top">-->
            <!--                     <h4>BASIC</h4>-->
            <!--                     <p><span>*</span>Get Your Trademark Registration Serial Number in <span> Just 10 Days! </span></p>-->
            <!--                  </div>-->
            <!--                  <div class="botom">-->
            <!--                     <h2><i class="fas >"></i></h2>-->
            <!--                     <span>+GOV FEES</span>-->
            <!--                  </div>-->
            <!--               </div>-->
            <!--               <div class="pricing-body">-->
            <!--                  <ul class="listStyle">-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Review</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Preparation</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Filing</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Alert</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Secured</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>100% Satisfaction Guarantee</p>-->
            <!--                     </li>-->
            <!--                  </ul>-->
            <!--               </div>-->
            <!--               <div class="pricing-footer">-->
            <!--                  <a href="/sequence-form-step1/" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>-->
            <!--               </div>-->
            <!--            </div>-->
            <!--         </div>-->
            <!--         <div class="col-lg-4 col-md-6">-->
            <!--            <div class="pricing-item bestSeller">-->
            <!--               <div class="pricing-head">-->
            <!--                  <div class="top">-->
            <!--                     <span class="tagged">Best Seller</span>-->
            <!--                     <h4>DELUXE</h4>-->
            <!--                     <p><span>*</span>Get Your Trademark Registration Serial Number in <span> Just 3-5 Days! </span></p>-->
            <!--                  </div>-->
            <!--                  <div class="botom">-->
            <!--                     <h2><i class="fas "></i>></h2>-->
            <!--                     <span>+GOV FEES</span>-->
            <!--                  </div>-->
            <!--               </div>-->
            <!--               <div class="pricing-body">-->
            <!--                  <ul class="listStyle">-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Review</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Preparation</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Filing</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Alert</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Secured</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>100% Satisfaction Guarantee</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p style="font-weight: 700;">Trademark Monitoring</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p style="font-weight: 700;">Complete Documentation</p>-->
            <!--                     </li>-->
            <!--                  </ul>-->
            <!--               </div>-->
            <!--               <div class="pricing-footer">-->
            <!--                  <a href="/sequence-form-step1/" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>-->
            <!--               </div>-->
            <!--            </div>-->
            <!--         </div>-->
            <!--         <div class="col-lg-4 col-md-6">-->
            <!--            <div class="pricing-item recommended">-->
            <!--               <div class="pricing-head">-->
            <!--                  <div class="top">-->
            <!--                     <span class="tagged">Recommended</span>-->
            <!--                     <h4>PREMIUM</h4>-->
            <!--                     <p><span>*</span>Get Your Trademark Registration Serial Number on the <span> Same Day! </span></p>-->
            <!--                  </div>-->
            <!--                  <div class="botom">-->
            <!--                     <h2><i class="fas "></i></h2>-->
            <!--                     <span>+GOV FEES</span>-->
            <!--                  </div>-->
            <!--               </div>-->
            <!--               <div class="pricing-body">-->
            <!--                  <ul class="listStyle">-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Review</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Preparation</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Filing</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Alert</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Secured</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>100% Satisfaction Guarantee</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Monitoring</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Complete Documentation</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p style="font-weight: 700;">Dedicated Case Manager</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p style="font-weight: 700;">100% Approval Guarantee</p>-->
            <!--                     </li>-->
            <!--                  </ul>-->
            <!--               </div>-->
            <!--               <div class="pricing-footer">-->
            <!--                  <a href="/sequence-form-step1/" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>-->
            <!--               </div>-->
            <!--            </div>-->
            <!--         </div>-->
            <!--      </div>-->
            <!--   </div>-->
            <!--   <div class="tab-pane fade  show active" id="us-tab-pane" role="tabpanel" aria-labelledby="us-tab" tabindex="0">-->
            <!--      <div class="row justify-content-center">-->
            <!--         <div class="col-lg-4 col-md-6">-->
            <!--            <div class="pricing-item silver">-->
            <!--               <div class="pricing-head">-->
            <!--                  <div class="top">-->
            <!--                     <h4>BASIC</h4>-->
            <!--                     <p><span>*</span>Get Your Trademark Registration Serial Number in <span> Just 10 Days! </span></p>-->
            <!--                  </div>-->
            <!--                  <div class="botom">-->
            <!--                     <h2><i class="fas "></i></h2>-->
            <!--                     <span>+USPTO FEES</span>-->
            <!--                  </div>-->
            <!--               </div>-->
            <!--               <div class="pricing-body">-->
            <!--                  <ul class="listStyle">-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Review</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Preparation</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Filing</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Alert</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Secured</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>100% Satisfaction Guarantee</p>-->
            <!--                     </li>-->
            <!--                  </ul>-->
            <!--               </div>-->
            <!--               <div class="pricing-footer">-->
            <!--                  <a href="/sequence-form-step1/" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>-->
            <!--               </div>-->
            <!--            </div>-->
            <!--         </div>-->
            <!--         <div class="col-lg-4 col-md-6">-->
            <!--            <div class="pricing-item bestSeller">-->
            <!--               <div class="pricing-head">-->
            <!--                  <div class="top">-->
            <!--                     <span class="tagged">Best Seller</span>-->
            <!--                     <h4>DELUXE</h4>-->
            <!--                     <p><span>*</span>Get Your Trademark Registration Serial Number in <span> Just 3-5 Days! </span></p>-->
            <!--                  </div>-->
            <!--                  <div class="botom">-->
            <!--                     <h2><i class="fas "></i></h2>-->
            <!--                     <span>+USPTO FEES</span>-->
            <!--                  </div>-->
            <!--               </div>-->
            <!--               <div class="pricing-body">-->
            <!--                  <ul class="listStyle">-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Review</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Preparation</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Filing</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Alert</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Secured</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>100% Satisfaction Guarantee</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p style="font-weight: 700;">Trademark Monitoring</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p style="font-weight: 700;">Complete Documentation</p>-->
            <!--                     </li>-->
            <!--                  </ul>-->
            <!--               </div>-->
            <!--               <div class="pricing-footer">-->
            <!--                  <a href="/sequence-form-step1/" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>-->
            <!--               </div>-->
            <!--            </div>-->
            <!--         </div>-->
            <!--         <div class="col-lg-4 col-md-6">-->
            <!--            <div class="pricing-item recommended">-->
            <!--               <div class="pricing-head">-->
            <!--                  <div class="top">-->
            <!--                     <span class="tagged">Recommended</span>-->
            <!--                     <h4>PREMIUM</h4>-->
            <!--                     <p><span>*</span>Get Your Trademark Registration Serial Number on the <span> Same Day! </span></p>-->
            <!--                  </div>-->
            <!--                  <div class="botom">-->
            <!--                     <h2><i class="fas "></i></h2>-->
            <!--                     <span>+USPTO FEES</span>-->
            <!--                  </div>-->
            <!--               </div>-->
            <!--               <div class="pricing-body">-->
            <!--                  <ul class="listStyle">-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Review</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Preparation</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Filing</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Alert</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Secured</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>100% Satisfaction Guarantee</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Monitoring</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Complete Documentation</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p style="font-weight: 700;">Dedicated Case Manager</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p style="font-weight: 700;">100% Approval Guarantee</p>-->
            <!--                     </li>-->
            <!--                  </ul>-->
            <!--               </div>-->
            <!--               <div class="pricing-footer">-->
            <!--                  <a href="/sequence-form-step1/" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>-->
            <!--               </div>-->
            <!--            </div>-->
            <!--         </div>-->
            <!--      </div>-->
            <!--   </div>-->
            <!--   <div class="tab-pane fade" id="eu-tab-pane" role="tabpanel" aria-labelledby="eu-tab" tabindex="0">-->
            <!--      <div class="row justify-content-center">-->
            <!--         <div class="col-lg-4 col-md-6">-->
            <!--            <div class="pricing-item silver">-->
            <!--               <div class="pricing-head">-->
            <!--                  <div class="top">-->
            <!--                     <h4>BASIC</h4>-->
            <!--                     <p><span>*</span>Get Your Trademark Registration Serial Number in <span> Just 10 Days! </span></p>-->
            <!--                  </div>-->
            <!--                  <div class="botom">-->
            <!--                     <h2><i class="fas "></i></h2>-->
            <!--                     <span>+EUIPO FEES</span>-->
            <!--                  </div>-->
            <!--               </div>-->
            <!--               <div class="pricing-body">-->
            <!--                  <ul class="listStyle">-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Review</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Preparation</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Filing</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Alert</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Secured</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>100% Satisfaction Guarantee</p>-->
            <!--                     </li>-->
            <!--                  </ul>-->
            <!--               </div>-->
            <!--               <div class="pricing-footer">-->
            <!--                  <a href="/sequence-form-step1/" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>-->
            <!--               </div>-->
            <!--            </div>-->
            <!--         </div>-->
            <!--         <div class="col-lg-4 col-md-6">-->
            <!--            <div class="pricing-item bestSeller">-->
            <!--               <div class="pricing-head">-->
            <!--                  <div class="top">-->
            <!--                     <span class="tagged">Best Seller</span>-->
            <!--                     <h4>DELUXE</h4>-->
            <!--                     <p><span>*</span>Get Your Trademark Registration Serial Number in <span> Just 3-5 Days! </span></p>-->
            <!--                  </div>-->
            <!--                  <div class="botom">-->
            <!--                     <h2><i class="fas "></i></h2>-->
            <!--                     <span>+EUIPO FEES</span>-->
            <!--                  </div>-->
            <!--               </div>-->
            <!--               <div class="pricing-body">-->
            <!--                  <ul class="listStyle">-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Review</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Preparation</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Filing</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Alert</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Secured</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>100% Satisfaction Guarantee</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p style="font-weight: 700;">Trademark Monitoring</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p style="font-weight: 700;">Complete Documentation</p>-->
            <!--                     </li>-->
            <!--                  </ul>-->
            <!--               </div>-->
            <!--               <div class="pricing-footer">-->
            <!--                  <a href="/sequence-form-step1/" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>-->
            <!--               </div>-->
            <!--            </div>-->
            <!--         </div>-->
            <!--         <div class="col-lg-4 col-md-6">-->
            <!--            <div class="pricing-item recommended">-->
            <!--               <div class="pricing-head">-->
            <!--                  <div class="top">-->
            <!--                     <span class="tagged">Recommended</span>-->
            <!--                     <h4>PREMIUM</h4>-->
            <!--                     <p><span>*</span>Get Your Trademark Registration Serial Number on the <span> Same Day! </span></p>-->
            <!--                  </div>-->
            <!--                  <div class="botom">-->
            <!--                     <h2><i class="fas "></i></h2>-->
            <!--                     <span>+EUIPO FEES</span>-->
            <!--                  </div>-->
            <!--               </div>-->
            <!--               <div class="pricing-body">-->
            <!--                  <ul class="listStyle">-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Review</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Preparation</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Case Filing</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Alert</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Secured</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>100% Satisfaction Guarantee</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Trademark Monitoring</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p>Complete Documentation</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p style="font-weight: 700;">Dedicated Case Manager</p>-->
            <!--                     </li>-->
            <!--                     <li>-->
            <!--                        <i class="fas fa-check"></i>-->
            <!--                        <p style="font-weight: 700;">100% Approval Guarantee</p>-->
            <!--                     </li>-->
            <!--                  </ul>-->
            <!--               </div>-->
            <!--               <div class="pricing-footer">-->
            <!--                  <a href="/sequence-form-step1/" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>-->
            <!--               </div>-->
            <!--            </div>-->
            <!--         </div>-->
            <!--      </div>-->
            <!--   </div>-->
            <!--</div>-->
         </div>
      </div>
   </section>

   <section class="pb-5 d-md-block d-none">
      <div class="container">
         <div class="amazonWrap">
            <div class="title">
               <h2>Trademark Nova's Amazon Brand Registry Service <span>$99</span></h2>
            </div>
            <div class="body">
               <div class="left">
                  <p>To showcase your ecommerce business and sell your brand on Amazon, it’s a MANDATORY requirement to get your brand registered. Amazon Brand Registry is a protection offered by Trademark Nova to assist Amazon sellers register their brand and to remove listings that infringe on their trademark rights. If any other seller is using your trademark logo or name to sell goods or is copying your listings, Trademark Nova will have them banned.</p>
                  <a href="/sequence-form-step1/" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
               </div>
               <div class="right"><img src="{{asset('assets/images/amazon.webp')}}" alt=""></div>
            </div>
         </div>
      </div>
   </section>

   <section class="activementSec">
      <div class="container">
         <div class="row">

            <div class="col-lg-9">
               <div class="section-head-outer registery">
                  <div class="section-head">
                     <h2 class="section-title">Get Your Trademark Registered In <span class="primary-color">Just $49</span></h2>
                  </div>
                  <p>You will have exclusive rights to file a trademark of names, slogans, or register a logo of your brand. Protect priceless products and services from your competitors with trademark registration.</p>
               </div>
            </div>

            <div class="col-lg-3">
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
            <div class="row portfolioCarousel">
               <div class="col-sm-6 col-lg-4 col-md-6">
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
                        <img src="{{asset('assets/images/fam-law.webp')}}" alt="">
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
                        <img src="{{asset('assets/images/legal-writing.webp')}}" alt="">
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

   <!-- </main> -->
@include ('includes/ind-leader')

@endsection