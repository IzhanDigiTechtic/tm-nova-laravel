@extends('frontend.layouts.web.master')
@section('main-content')



   <div id="page" class="full-page">
      <main id="content" class="site-main">
         <!-- home banner section html start -->
         <section class="home-banner" style="background: url(assets/images/about-ban.webp) center/cover no-repeat;">
            <div class="container">
               <div class="row justify-content-between">
                  <div class="col-md-6 d-flex flex-wrap align-items-center">
                     <div class="banner-content">
                        <h2 class="banner-title">About Trademark Nova</h2>
                        <div class="banner-text">
                           <p>We work hard to protect your brand at affordable rates. Our proven standardized process minimizes the chances of application rejection, and optimizes your application for success.</p>
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
             @include ('includes/ind-leader')
          
         <!-- home banner section html end -->

         <!-- About html start -->
         <section class="about-page-section">
            <div class="about-inner-page">
               <div class="container-fluid">
                  <div class="row justify-content-end align-items-xl-center">
                     <div class="col-xl-6 col-lg-6">
                        <div class="section-head">
                           <h2 class="section-title">Who We <span class="primary-color">Are?</span></h2>
                        </div>
                        <p>Trademark Nova was established with the aim of providing affordable trademark registration services for all kinds of businesses – from startups to large corporations. We believe that everyone should have access to the tools needed to protect their brand. While large corporations can easily pay a hefty fee to law firms for brand protection, small business owners may find themselves at a disadvantage in this situation due to their budget constraints.
                           As a small business owner, you run the risk of having your original mark infringed upon by another company. There is no way to argue that the mark is yours if it hasn’t been registered.
                        </p>
                        <p>Trademark Nova was created to ensure that nobody profits off someone else’s creativity, just because they can afford to.
                           Although we are not a law firm, we have a team of professional trademark experts who undergo an extensive training program to make them the best at what they do. Only after they have completed their training and passed a rigorous series of examinations can an employee be placed into service. This rigorous training leads to the expert level of services we provide.
                           Thousands have trusted us with their brand protection through copyright and trademark filings because of our unparalleled value, quality, and personal service. But don’t take our word for it. Sign up for our services and experience it yourself.
                        </p>
                        <p>Our team is able to conduct a comprehensive search for trademarks by checking both domestic and international trademark databases, allowing businesses to verify the uniqueness of their brand identities and avoid potential legal repercussions. Trademark Nova additionally offers copyright registration. This service safeguards the intellectual property of individuals and businesses against unauthorised use, including copying and distribution. In addition to the monopoly on use that copyright registration provides, authors and other artists can acquire outright ownership of their works.</p>
                     </div>
                     <div class="col-xl-4 col-lg-6">
                        <figure class="aboutImg">
                           <img src="{{asset('assets/images/about-page-img.webp')}}" alt="">
                           <span><img src="{{asset('assets/images/logo-io.webp')}}" alt=""></span>
                        </figure>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <section class="home-service bg-light-grey">
            <div class="container">
               <div class="section-head text-center">
                  <div class="row">
                     <div class="col-lg-8 offset-lg-2">
                        <h2 class="section-title">Why Choose <span class="primary-color">Trademark Nova</span></h2>
                        <p>Trademark Nova provides a safe haven for the development of your business and access to a wide range of services to meet your needs. We protect your valuable assets and establish your right to use them by registering your trademark. Our firm has a long track record of success in trademark registration with UKIPO, USPTO & EUIPO allowing us to aid a wide range of businesses in strengthening their brands and shielding them from unauthorised changes or infringements.</p>
                     </div>
                  </div>
               </div>
               <div class="service-inner">
                  <div class="row g-0 align-items-center">
                     <div class="col-sm-12 col-md-5 col-lg-4 text-right">
                        <div class="service-icon-box">
                           <div class="service-icon-content">
                              <h4>
                                 <a href="service-detail.html">Legal Connoisseur</a>
                              </h4>
                              <p>Work with Trademark Nova, and you’ll work with trademark legal pros.</p>
                           </div>
                           <div class="service-icon">
                              <i aria-hidden="true" class="icon icon-Consultancy"></i>
                           </div>
                        </div>
                        <div class="service-icon-box">
                           <div class="service-icon-content">
                              <h4>
                                 <a href="service-detail.html">Enriched Data</a>
                              </h4>
                              <p>Our rich data assist you finding out if you’re violating existing TM.</p>
                           </div>
                           <div class="service-icon">
                              <i aria-hidden="true" class="icon icon-Mechanic"></i>
                           </div>
                        </div>
                        <div class="service-icon-box">
                           <div class="service-icon-content">
                              <h4>
                                 <a href="service-detail.html">Cost-Effective</a>
                              </h4>
                              <p>We know you want to keep a lid on costs, hence, we don’t cost the earth.</p>
                           </div>
                           <div class="service-icon">
                              <i aria-hidden="true" class="icon icon-speed"></i>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 offset-sm-3 offset-md-0 col-md-2 col-lg-4 text-center">
                        <figure class="service-image">
                           <img src="{{asset('assets/images/about-img.jpg')}}" alt="">
                        </figure>
                     </div>
                     <div class="col-sm-12 col-md-5 col-lg-4 text-left">
                        <div class="service-icon-box">
                           <div class="service-icon-content">
                              <h4>
                                 <a href="service-detail.html">Result Oriented</a>
                              </h4>
                              <p>For Trademark Nova, it’s all about what adds value for you and your business.</p>
                           </div>
                           <div class="service-icon">
                              <i aria-hidden="true" class="icon icon-graph-2"></i>
                           </div>
                        </div>
                        <div class="service-icon-box">
                           <div class="service-icon-content">
                              <h4>
                                 <a href="service-detail.html">Strategy Managing</a>
                              </h4>
                              <p>We strategize to protect your products & services from your competitors.</p>
                           </div>
                           <div class="service-icon">
                              <i aria-hidden="true" class="icon icon-idea"></i>
                           </div>
                        </div>
                        <div class="service-icon-box">
                           <div class="service-icon-content">
                              <h4>
                                 <a href="service-detail.html">Easy To Work With</a>
                              </h4>
                              <p>We take your work seriously. We’re not prickly, precious or pretentious.</p>
                           </div>
                           <div class="service-icon">
                              <i aria-hidden="true" class="icon icon-Target"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <!-- About html end -->
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

@include ('includes/testimonial')
@include ('includes/faq')

   </main>
@include ('includes/ind-leader')

@endsection
   