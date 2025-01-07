<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<header id="masthead" class="site-header site-header-transparent">
   <!-- header html start -->
   <div class="top-header">
      <div class="container-fluid">
         <div class="row align-items-center">
            <div class="col-lg-3 col-md-6 col-6">
               <div class="header-social social-links">
                  <a href="https://www.facebook.com/trademarknova/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                  <!-- <a href="https://www.instagram.com/trademarknovaofficial/" target="_blank"><i
                        class="fab fa-instagram"></i></a>
                  <a href="https://twitter.com/trademark_nova" target="_blank"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.youtube.com/channel/UCaQjxA1Lg_6Pg-jzbQBRrrA" target="_blank"><i
                        class="fab fa-youtube"></i></a>
                  <a href="https://www.linkedin.com/company/88376931/trademarknova" target="_blank"><i
                        class="fab fa-linkedin"></i></a> -->
               </div>
            </div>
            <div class="col-lg-9 col-md-6 col-6">
               <div class="header-contact-info">
                  <ul>

                     <li>
                        <!--<a href="tel:{{ config('var.number') }}"><i class="fas fa-phone-alt"></i>{{ config('var.numberdisplay') }}</a>-->
                     </li>
                     <li>
                        <a href="mailto:{{ config('var.email') }}"><i class="fas fa-envelope"></i> <span class="__cf_email__">{{ config('var.email') }}</span></a>
                     </li>
                     <li>
                        <a href="javascript:void(0);" class="alphaChat"><i class="fas fa-comment-dots"></i>Talk to a Trademark Consultant</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="bottom-header">
      <nav class="navbar navbar-expand-xl py-0">
         <div class="container-fluid">
            <a href="./">
               <img src="{{asset('assets/images/site-logo.webp')}}" alt="logo" class="desk d-md-block d-none">
               <img src="{{asset('assets/images/logo-mob.webp')}}" alt="logo" class="mob d-md-none">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mx-auto">
                  <li class="nav-item dropdown <?= ($activePage == 'about') ? 'active' : ''; ?>">
                     <a href="{{route('about')}}" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">about us</a>
                     <!--<a href="about" class="nav-link dropdown-toggle">about us</a>-->
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="{{route('about')}}" class="nav-link">about us</a>
                        <a href="{{route('our.core.competency.and.values')}}" class="nav-link">Our Core Competency & Values</a>
                        <a href="{{route('success.rate')}}" class="nav-link">Success Rate</a>
                        <a href="{{route('reviews')}}" class="nav-link">Client Reviews</a>
                        <a href="{{route('contact')}}" class="nav-link">Contact Trademark Nova</a>
                     </div>
                  </li>
                  <li class="nav-item dropdown <?= ($activePage == '') ? 'active' : ''; ?>">
                     <a href="javascript:void(0)" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Trademark registration</a>
                     <div class="dropdown-menu large" aria-labelledby="navbarDropdown">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-3">
                                 <h5>TRADEMARK REGISTRATION</h5>
                                 <hr>
                                 <a href="{{route('file.a.us.trademark')}} " class="nav-link">File a U.S. Trademark</a>
                                 <a href="{{route('copyright.registration')}}" class="nav-link">Copyright Registration</a>
                                 <!--<a href="file-a-uk-trademark" class="nav-link">File a UK Trademark</a>-->
                                 <a href="{{route('file.an.international.trademark')}}" class="nav-link">File an International Trademark</a>
                                 <a href="{{route('comprehensive.trademark.search')}}" class="nav-link">Comprehensive Trademark Search</a>
                                 <a href="{{route('book.free.consultation')}}" class="nav-link">Trademark Consultation</a>
                                 <!-- <a href="trademark-pricing" class="nav-link">Trademark Registration Fees</a> -->
                                 <a href="{{route('IPO.representation.on.behalf.of.your.company')}}" class="nav-link">IPO Representation</a>
                              </div>

                              <div class="col-md-3">
                                 <h5>POST-FILING TRADEMARK NEEDS</h5>
                                 <hr>
                                 <a href="{{route('trademark.renewal')}}" class="nav-link">Trademark Renewal</a>
                                 <a href="{{route('response.to.opposition')}}" class="nav-link">Response to Opposition</a>
                                 <a href="{{route('statement.of.use')}}" class="nav-link">Trademark Statement of Use</a>
                                 <a href="{{route('co.existence.agreement')}}" class="nav-link">Co-Existence Agreement</a>
                                 <a href="{{route('abandoned.trademark.refiling')}}" class="nav-link">Abandoned Trademark ReFiling</a>
                              </div>

                              <div class="col-md-3">
                                 <h5>ONGOING PROTECTION</h5>
                                 <hr>
                                 <a href="{{route('trademark.dispute.insurance')}}" class="nav-link">Trademark Dispute Insurance</a>
                                 <a href="{{route('trademark.monitoring')}}" class="nav-link">Trademark Monitoring</a>
                                 <a href="{{route('trademark.ownership.transfer')}}" class="nav-link">Ownership Transfer</a>
                                 <a href="{{route('cease.desist.letter')}}" class="nav-link">Cease & Desist Letter</a>
                                 <a href="{{route('domain.resolution')}}" class="nav-link">Domain Resolution</a>
                              </div>

                              <div class="col-md-3">
                                 <div class="schedule">
                                    <h2>Request a Schedule For Free Consultation</h2>
                                    <a href="/sequence-form-step1/" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
                                    <!--<a href="tel:{{ config('var.number') }}" class="telNum"><span>Call Us Now:</span>{{ config('var.numberdisplay') }}</a>-->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item dropdown <?= ($activePage == '') ? 'active' : ''; ?>">
                     <a href="javascript:void(0)" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Corporate Services</a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="{{route('amazon.brand.registry.us')}}" class="nav-link">Amazon Brand Registry in US</a>
                        <!--<a href="amazon-brand-registry-uk" class="nav-link">Amazon Brand Registry in UK</a>-->
                        <a href="{{route('business.formation')}}" class="nav-link">Business Formation Services</a>
                        <a href="{{route('company.dissolution')}}" class="nav-link">Company Dissolution</a>
                        <a href="{{route('issues.of.shares')}}" class="nav-link">Issues of Shares</a>
                        <a href="{{route('transfer.of.shares')}}" class="nav-link">Transfer of Shares</a>
                        <a href="{{route('certificate.of.good.standing.service')}}" class="nav-link">Certificate of Good Standing</a>
                        <a href="{{route('company.name.change')}}" class="nav-link">Company Name Change</a>
                        <!--<a href="VAT-registration" class="nav-link">VAT Registration</a>-->
                        <a href="{{route('company.renewal')}}" class="nav-link">Company Renewals</a>
                        <a href="{{route('nominee.director.and.secretarial.services')}}" class="nav-link">Nominee Director & Secretarial Services</a>
                        <a href="{{route('bookkeeping')}}" class="nav-link">Bookkeeping</a>
                        <a href="{{route('tax.advisory.and.filing')}}" class="nav-link">Tax Advisory & Filing</a>
                        <a href="{{route('cfo.services')}}" class="nav-link">CFO Services</a>
                     </div>
                  </li>
                  <li class="nav-item dropdown <?= ($activePage == '') ? 'active' : ''; ?>">
                     <a href="javascript:void(0)" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Legal Services</a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="{{route('legal.consultation.on.partnerships.and.LLPs')}}" class="nav-link">Legal Consultation on Partnerships & LLPs</a>
                        <a href="{{route('due.diligence.process')}}" class="nav-link">Due Diligence Process</a>
                        <a href="{{route('business.immigration.lawyer')}}" class="nav-link">Business Immigration Law</a>
                        <a href="{{route('IT.and.commercial.law')}}" class="nav-link">IT & Commercial Law</a>
                        <a href="{{route('data.protection.and.privacy.law')}}" class="nav-link">Data Protection & Privacy Law</a>
                     </div>
                  </li>
                  <li class="nav-item dropdown <?= ($activePage == '') ? 'active' : ''; ?>">
                     <a href="javascript:void(0)" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Resources</a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="{{route('trademark.learning.essentials')}}" class="nav-link">Trademark Learning Essentials</a>
                        <a href="{{route('country.wise.guide')}}" class="nav-link">Country Wise Guide</a>
                        <a href="{{route('faq')}}" class="nav-link">Frequently Asked Questions</a>
                        <!-- <a href="blog" class="nav-link">Blog</a> -->
                     </div>
                  </li>
               </ul>
               <div class="header-btn d-inline-block">
                  <a href="{{route('book.free.consultation')}}" class="button-round">Book Your Consultation</a>
               </div>
            </div>
         </div>
      </nav>
   </div>
</header>