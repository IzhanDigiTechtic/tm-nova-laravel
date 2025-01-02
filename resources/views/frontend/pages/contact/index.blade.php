@extends('frontend.layouts.web.master')
@section('main-content')

   <div id="page" class="full-page">

      <main id="content" class="site-main">

         <!-- home banner section html start -->

         <section class="home-banner" style="background: url(assets/images/contact-ban.webp) center/cover no-repeat;">

            <div class="container">

               <div class="row justify-content-between">

                  <div class="col-md-6 d-flex flex-wrap align-items-center">

                     <div class="banner-content">

                        <em class="primary-color" style="font-size: 21px;font-style: normal;font-weight: 500;">Get In Touch With Us!</em>

                        <h2 class="banner-title">Discuss Your Business! Our Experts Would Love To Hear From You</h2>

                        <div class="banner-text">

                           <p>Contact Trademark Nova to discuss your business details so we can get back to you with the best possible solution to start with your specific business requirements.</p>



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
                      @include ('includes/ind-leader')

         <!-- home banner section html end -->

         <!-- contact form html start -->

         <div class="contact-page-section">

            <div class="contact-form-inner">

               <div class="container">

                  <div class="row">
                     <div class="col-md-6">
                        <div class="contact-detail-container">
                           <div class="section-heading">
                              <h2 class="section-title">Contact Us & <span class="primary-color">Reach !!</span></h2>
                              <p>Our professional team of trademark registration experts have helped over 18,000+ business owners register their trademark. They know the ins and outs of trademark registration, and know exactly how to maximize your chances of getting the trademark registered.</p>
                           </div>
                           <div class="contact-details-list">
                              <a href="#" class="button-round mb-4" data-bs-toggle="modal" data-bs-target="#targetedArrowModal">Join 18K+ Business Owners</a>
                              <p>who have trusted us to protect their worthy assets such as brand, business name, logos, slogan and more.</p>
                              <div class="contact-details">
                                 <h4>CONTACT DETAILS:</h4>
                                 <ul>

                                    <li>

                                       <i aria-hidden="true" class="fas fa-map-marker-alt"></i>

                                       5900 Balcone Drive STE 100, Austin Texas 78731

                                    </li>

                                    <li>

                                       <a href="sales@trademarknova.com">

                                          <i aria-hidden="true" class="fas fa-envelope-open-text"></i>

                                          <span>sales@trademarknova.com</span>
                                          <!--class="__cf_email__" data-cfemail="0d6e62607d6c63744d6962606c6463236e6260"-->
                                       </a>

                                    </li>

                                    <li>

                                       <a href="tel:{{ config('var.number') }}">

                                          <i aria-hidden="true" class="fas fa-phone-volume"></i>

                                          {{ config('var.numberdisplay') }}

                                       </a>

                                    </li>

                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-md-6">

                        <div class="contact-from-wrap">

                             @include ('includes/contact_form')
                             
                        </div>

                     </div>

                  </div>

               </div>

            </div>

            <div class="map-section">

               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22557018.127109427!2d-5.346112183882514!3d46.35862858390207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487605d47e276e45%3A0x21ddc2ac21ed6239!2sTrademark%20Nova!5e0!3m2!1sen!2s!4v1677613226105!5m2!1sen!2s" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>

         </div>

         <!-- contact form html end -->

      </main>

@endsection