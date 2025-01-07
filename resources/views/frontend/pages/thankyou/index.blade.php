@extends('frontend.layouts.thankyou.master')
@section('main-content')
      <div id="page" class="full-page">
         <main id="content" class="site-main">
           <!-- home banner section html start -->
            <section class="home-banner thankyou">
               <div class="container">
                  <div class="row justify-content-between">
                     <div class="col-md-6 d-flex flex-wrap align-items-center">
<div class="banner-content" >

<h2 class="banner-title" style="
    font-size: 60px;
">We've Received Your Request Successfully!</h2>
                           <div class="banner-text">
                              <p>Thank you for showing your interest in {{ config('var.websitename') }}. It will be a pleasure for us to serve you. One of your account managers will reach out to you shortly. </p> 
                              <p>Should You Have Any Questions Or Queries, Please Feel Free To Contact Us At <span style="
    color: #ffcd15;
    font-weight: 600;
    font-size: 16px;
">sales@trademarknova.com</span></p>
                           </div>
                           <div class="banner-button">
                              <a href="mailto:sales@trademarknova.com" class="button-round">CONTACT YOUR ASSIGNED REPRESENTATIVE</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5 col-md-6 d-flex flex-wrap align-items-end">
                        <!--<figure class="banner-img">
                           <img src="assets/images/banner-img1.png" alt="">
                        </figure>-->

                     </div>
                  </div>
               </div>
                <!--<div class="banner-pattern" style="background-image: url(assets/images/banner-pattern1.png);"></div>-->
            </section>
            <!-- home banner section html end -->

@endsection
