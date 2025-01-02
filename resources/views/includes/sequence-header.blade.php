<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<header id="masthead" class="site-header site-header-transparent sequenceNavbar">
   <!-- header html start -->
   <!-- <div class="top-header">
      <div class="container-fluid">
         <div class="row align-items-center">
            <div class="col-lg-3 col-md-6 col-6">
               <div class="header-social social-links">
                  <a href="https://www.facebook.com/trademarknova/" target="_blank"><i class="fab fa-facebook-f"></i></a>
               </div>
            </div>
            <div class="col-lg-9 col-md-6 col-6">
               <div class="header-contact-info">
                  <ul>

                     <li>
                        <a href="tel:{{ config('var.number') }}"><i class="fas fa-phone-alt"></i>{{ config('var.numberdisplay') }}</a>
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
   </div> -->
   <div class="bottom-header py-3">
      <div class="container-fluid">
         <div class="row align-items-center justify-content-between">
            <div class="col">
               <a href="./">
                  <img src="{{asset('assets/images/site-logo.webp')}}" alt="logo" class="desk d-md-block d-none">
                  <img src="{{asset('assets/images/logo-mob.webp')}}" alt="logo" class="mob d-md-none">
               </a>
            </div>
            <!--<div class="col text-end">-->
            <!--    <a href="book-free-consultation" class="button-round">Book Your Consultation</a>-->
            <!--</div>-->
         </div>
      </div>
   </div>
</header>