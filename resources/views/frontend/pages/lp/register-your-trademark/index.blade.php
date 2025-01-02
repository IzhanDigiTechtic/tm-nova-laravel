<?php
include("../../backend/connectiondb.php");
include "../../includes/var.php";

$taxUS = 0;
$taxUK = 0;
$taxEU = 0;
$silverpriceUS = 0;
$goldpriceUS = 0;
$diamondpriceUS = 0;
$silverpriceUK = 0;
$goldpriceUK = 0;
$diamondpriceUK = 0;
$silverpriceEU = 0;
$goldpriceEU = 0;
$diamondpriceEU = 0;

$silverpriceUSCur = 0;
$goldpriceUSCur = 0;
$diamondpriceUSCur = 0;
$silverpriceUSCur = 0;
$goldpriceUSCur = 0;
$diamondpriceUSCur = 0;
$silverpriceUSCur = 0;
$goldpriceUSCur = 0;
$diamondpriceUSCur = 0;

//Taxes
$querytax = "select " . $table31Col1 . " from " . $table32 . " where " . $common7 . "='1' and " . $common2 . "='1'";
$vacanciestax = mysqli_query($con, $querytax);
if ($vacanciestax->num_rows > 0) {
   $itemtax = mysqli_fetch_assoc($vacanciestax);
   $taxUS = (float)$itemtax[$table31Col1];
}
$querytax = "select " . $table31Col1 . " from " . $table32 . " where " . $common7 . "='1' and " . $common2 . "='2'";
$vacanciestax = mysqli_query($con, $querytax);
if ($vacanciestax->num_rows > 0) {
   $itemtax = mysqli_fetch_assoc($vacanciestax);
   $taxUK = (float)$itemtax[$table31Col1];
}
$querytax = "select " . $table31Col1 . " from " . $table32 . " where " . $common7 . "='1' and " . $common2 . "='3'";
$vacanciestax = mysqli_query($con, $querytax);
if ($vacanciestax->num_rows > 0) {
   $itemtax = mysqli_fetch_assoc($vacanciestax);
   $taxEU = (float)$itemtax[$table31Col1];
}

//silver Package Price US
$query = "select t1." . $table20Col1 . ",t1." . $table31Col1 . ",t2." . $table21Col1 . " from " . $table31 . " t1
    inner join " . $table21 . " t2 on t1." . $common14 . " = t2." . $common2 . "
    where t1." . $common7 . "='1' and t1." . $common13 . "='1' and t1." . $common19 . " = '1'  and t1." . $table31Col1 . " = '1'";
$vacancies = mysqli_query($con, $query);
if ($vacancies->num_rows > 0) {
   while ($item = mysqli_fetch_assoc($vacancies)) {
      $temp = (float)$item["price"];
      if ($item[$table31Col1] == "1") {
         $temp = $temp + (($temp * $taxUS) / 100);
      }
      $silverpriceUSCur = $item[$table21Col1];
      $silverpriceUS = $silverpriceUS + $temp;
   }
}

//Gold Package Price US
$query = "select t1." . $table20Col1 . ",t1." . $table31Col1 . ",t2." . $table21Col1 . " from " . $table31 . " t1
    inner join " . $table21 . " t2 on t1." . $common14 . " = t2." . $common2 . "
    where t1." . $common7 . "='1' and t1." . $common13 . "='2' and t1." . $common19 . " = '1'  and t1." . $table31Col1 . " = '1'";
$vacancies = mysqli_query($con, $query);
if ($vacancies->num_rows > 0) {
   while ($item = mysqli_fetch_assoc($vacancies)) {
      $temp = (float)$item["price"];
      if ($item[$table31Col1] == "1") {
         $temp = $temp + (($temp * $taxUS) / 100);
      }
      $goldpriceUSCur = $item[$table21Col1];
      $goldpriceUS = $goldpriceUS + $temp;
   }
}

//Diamond Package Price US
$query = "select t1." . $table20Col1 . ",t1." . $table31Col1 . ",t2." . $table21Col1 . " from " . $table31 . " t1
    inner join " . $table21 . " t2 on t1." . $common14 . " = t2." . $common2 . "
    where t1." . $common7 . "='1' and t1." . $common13 . "='3' and t1." . $common19 . " = '1'  and t1." . $table31Col1 . " = '1'";
$vacancies = mysqli_query($con, $query);
if ($vacancies->num_rows > 0) {
   while ($item = mysqli_fetch_assoc($vacancies)) {
      $temp = (float)$item["price"];
      if ($item[$table31Col1] == "1") {
         $temp = $temp + (($temp * $taxUS) / 100);
         //$temp = $temp;
      }
      $diamondpriceUSCur = $item[$table21Col1];
      $diamondpriceUS = $diamondpriceUS + $temp;
   }
}

//silver Package Price UK
$query = "select t1." . $table20Col1 . ",t1." . $table31Col1 . ",t2." . $table21Col1 . " from " . $table31 . " t1
    inner join " . $table21 . " t2 on t1." . $common14 . " = t2." . $common2 . "
    where t1." . $common7 . "='1' and t1." . $common13 . "='1' and t1." . $common19 . " = '2'  and t1." . $table31Col1 . " = '1'";
$vacancies = mysqli_query($con, $query);
if ($vacancies->num_rows > 0) {
   while ($item = mysqli_fetch_assoc($vacancies)) {
      $temp = (float)$item["price"];
      if ($item[$table31Col1] == "1") {
         $temp = $temp + (($temp * $taxUK) / 100);
         // $temp = $temp; 
      }
      $silverpriceUK = $silverpriceUK + $temp;
      $silverpriceUKCur = $item[$table21Col1];
   }
}

//Gold Package Price UK
$query = "select t1." . $table20Col1 . ",t1." . $table31Col1 . ",t2." . $table21Col1 . " from " . $table31 . " t1
    inner join " . $table21 . " t2 on t1." . $common14 . " = t2." . $common2 . "
    where t1." . $common7 . "='1' and t1." . $common13 . "='2' and t1." . $common19 . " = '2'  and t1." . $table31Col1 . " = '1'";
$vacancies = mysqli_query($con, $query);
if ($vacancies->num_rows > 0) {
   while ($item = mysqli_fetch_assoc($vacancies)) {
      $temp = (float)$item["price"];
      if ($item[$table31Col1] == "1") {
         $temp = $temp + (($temp * $taxUK) / 100);
         // $temp = $temp; 
      }
      $goldpriceUK = $goldpriceUK + $temp;
      $goldpriceUKCur = $item[$table21Col1];
   }
}

//Diamond Package Price UK
$query = "select t1." . $table20Col1 . ",t1." . $table31Col1 . ",t2." . $table21Col1 . " from " . $table31 . " t1
    inner join " . $table21 . " t2 on t1." . $common14 . " = t2." . $common2 . "
    where t1." . $common7 . "='1' and t1." . $common13 . "='3' and t1." . $common19 . " = '2'  and t1." . $table31Col1 . " = '1'";
$vacancies = mysqli_query($con, $query);
if ($vacancies->num_rows > 0) {
   while ($item = mysqli_fetch_assoc($vacancies)) {
      $temp = (float)$item["price"];
      if ($item[$table31Col1] == "1") {
         $temp = $temp + (($temp * $taxUK) / 100);
         // $temp = $temp;  
      }
      $diamondpriceUK = $diamondpriceUK + $temp;
      $diamondpriceUKCur = $item[$table21Col1];
   }
}

//silver Package Price EU
$query = "select t1." . $table20Col1 . ",t1." . $table31Col1 . ",t2." . $table21Col1 . " from " . $table31 . " t1
    inner join " . $table21 . " t2 on t1." . $common14 . " = t2." . $common2 . "
    where t1." . $common7 . "='1' and t1." . $common13 . "='1' and t1." . $common19 . " = '3'  and t1." . $table31Col1 . " = '1'";
$vacancies = mysqli_query($con, $query);
if ($vacancies->num_rows > 0) {
   while ($item = mysqli_fetch_assoc($vacancies)) {
      $temp = (float)$item["price"];
      if ($item[$table31Col1] == "1") {
         $temp = $temp + (($temp * $taxEU) / 100);
         //$temp = $temp;
      }
      $silverpriceEU = $silverpriceEU + $temp;
      $silverpriceEUCur = $item[$table21Col1];
   }
}

//Gold Package Price EU
$query = "select t1." . $table20Col1 . ",t1." . $table31Col1 . ",t2." . $table21Col1 . " from " . $table31 . " t1
    inner join " . $table21 . " t2 on t1." . $common14 . " = t2." . $common2 . "
    where t1." . $common7 . "='1' and t1." . $common13 . "='2' and t1." . $common19 . " = '3'  and t1." . $table31Col1 . " = '1'";
$vacancies = mysqli_query($con, $query);
if ($vacancies->num_rows > 0) {
   while ($item = mysqli_fetch_assoc($vacancies)) {
      $temp = (float)$item["price"];
      if ($item[$table31Col1] == "1") {
         $temp = $temp + (($temp * $taxEU) / 100);
         //$temp = $temp; 
      }
      $goldpriceEU = $goldpriceEU + $temp;
      $goldpriceEUCur = $item[$table21Col1];
   }
}

//Diamond Package Price EU
$query = "select t1." . $table20Col1 . ",t1." . $table31Col1 . ",t2." . $table21Col1 . " from " . $table31 . " t1
    inner join " . $table21 . " t2 on t1." . $common14 . " = t2." . $common2 . "
    where t1." . $common7 . "='1' and t1." . $common13 . "='3' and t1." . $common19 . " = '3'  and t1." . $table31Col1 . " = '1'";
$vacancies = mysqli_query($con, $query);
if ($vacancies->num_rows > 0) {
   while ($item = mysqli_fetch_assoc($vacancies)) {
      $temp = (float)$item["price"];
      if ($item[$table31Col1] == "1") {
         $temp = $temp + (($temp * $taxEU) / 100);
         //$temp = $temp;
      }
      $diamondpriceEU = $diamondpriceEU + $temp;
      $diamondpriceEUCur = $item[$table21Col1];
   }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("../../includes/compatibility.php") ?>
   <title>File A Trademark Now | Trademark Nova</title>
   <meta name="description" content="" />
   <meta name="keywords" content="file a trademark, trademark registration, file my trademark, register a logo, apply for trademark, trademark a slogan, register brand name, register trademark, trademark my business name, register a trademark" />
   <!-- Google Fonts -->
   <?php include("../../includes/styles.php") ?>
   <style>
      .iti--separate-dial-code .iti__selected-flag {
         background-color: white;
      }

      .bannerlp {
         background: url(./assets/images/lp-banner.webp) right/cover no-repeat;
         display: flex;
         align-items: flex-end;
      }

      .bannerlp .banner-content .banner-title span {
         font-weight: 800;
      }

      .bannerlp .banner-content .banner-title {
         font-size: 44px;
         line-height: 1.4;
         font-weight: 700;
         margin: 0 0 1rem;
      }

      .bannerlp .banner-content .banner-text p i {
         color: #FFCD15;
      }

      .bannerlp .banner-text p {
         display: flex;
         align-items: start;
         gap: 8px;
      }

      .bannerlp .banner-content .banner-subtitle {
         margin: 0;
         color: #ffcd15;
      }

      .lp-header .button-round {
         color: #fff;
         display: initial;
      }

      .lp-header {
         padding: 18px 0;
      }

      .home-about {
         padding-top: 2rem;
      }

      @media only screen and (max-width: 1445px) {}

      @media only screen and (max-width: 1366px) {}

      @media only screen and (max-width: 1199px) {
         .bannerlp {
            min-height: auto;
         }

         .lp-header ul li .button-round {
            padding: 1rem;
            font-size: 0.8rem;
         }

         .lp-header ul li .numSec {
            font-size: 0;
         }

         .lp-header ul li .numSec i {
            font-size: 1rem;
            color: #675ef5;
         }

         .lp-header ul li {
            font-size: 1.2rem;
         }

         .bannerlp .banner-content .banner-title {
            font-size: 29px;
            margin: 0 0 1rem;
         }
      }

      @media only screen and (max-width: 767px) {

         .lp-header ul li:nth-child(3),
         .lp-girl,
         .rateImg {
            display: none;
         }

         .banner-content .banner-subtitle {
            font-size: 18px;
         }

         .bannerlp {
            padding-top: 0;
            padding-bottom: 0;
            background-image: linear-gradient(to right bottom, #968ff8, #847bf8, #7268f7, #5e53f5, #483df2);
         }

         .rateImg img {
            width: 120px;
            margin-top: 0.5rem;
         }

         .btnSec {
            flex-direction: column;
            gap: 1rem;
         }

         .btnSec a {
            background: #213643;
            padding: 10px;
            font-size: 1rem;
         }

         .bannerlp .banner-content .banner-title {
            font-size: 28px;
         }

         .bannerlp .banner-content .banner-subtitle {
            font-size: 16px !important;
         }

         .bannerlp .banner-text p {
            align-items: flex-start;
            padding: 0;
            font-size: 1rem;
            line-height: 1.3;
         }

         .bannerlp .banner-text p img {
            width: 14px;
            position: relative;
            top: 2px;
         }

         .home-banner-us .banner-content {
            padding: 1.5rem 0 2rem;
            margin-top: 4rem;
         }

         .home-banner-us {
            background: url(./assets/images/file-a-us-trademark.jpg) center/cover no-repeat;
            height: 770px;
         }

         .lp-header ul {
            margin-top: -2rem;
            gap: 1rem;
         }
      }

      @media only screen and (max-width: 575px) {
         .home-about {
            padding-top: 1rem;
         }
      }
   </style>
</head>

<body class="home">
   <header class="lp-header">
      <div class="container">
         <div class="row justify-content-between align-items-center">
            <div class="col-lg-2 col-md-2 col-sm-6">
               <img src="assets/images/site-logo.webp" class="img-fluid">
            </div>
            <div class="col-lg-8 col-md-10 col-sm-6">
               <ul>
                  <!--<li><a href="tel:{{ config('var.number') }}" class="numSec"><i class="fas fa-phone-alt"></i>  {{ config('var.numberdisplay') }}</a></li>-->
                  <li> <a href="mailto:<?= $email ?>" class="numSec"> <i class="fas fa-envelope me-2"></i><?= $email ?></a></li>
                  <li><a href="/sequence-form-step1/" class="button-round">GET STARTED NOW</a></li>
               </ul>
            </div>
         </div>
      </div>
   </header>
   <!-- <div id="page" class="full-page"> -->
   <!-- site header html end  -->
   <!-- <main id="content" class="site-main homePage"> -->
   <!-- home banner section html start -->
   <section class="home-banner bannerlp">
      <div class="container">
         <div class="row align-items-lg-center align-items-end justify-content-between">
            <div class="col-lg-7 col-md-7">
               <div class="banner-content">
                  <h3 class="banner-subtitle" style="font-size: 22px;">Let’s Protect What You Have Built</h3>
                  <h2 class="banner-title">Trademark Your Brand Name, Slogan, and Logo in <span> $49!</span></h2>
                  <div class="banner-text">
                     <p><i class="fa fa-check-square"></i> Expert trademark attorneys navigate the trademark process for you</p>
                     <p><i class="fa fa-check-square"></i> Official USPTO filing firm with 100% success rate</p>
                     <p><i class="fa fa-check-square"></i> Same day trademark application filing available</p>
                  </div>
                  <!--<div class="row align-items-end mb-4 d-none">-->
                  <!--    <div class="col-md-4">-->
                  <!--        <div class="rateImg">-->
                  <!--        <img src="assets/images/rate2.webp" class="img-fluid">-->
                  <!--    </div>-->
                  <!--    </div>-->
                  <!--    <div class="col-md-8">-->
                  <!--        <div class="rateBox-slider">-->
                  <!--            <div>-->
                  <!--                <img src="assets/images/3.webp" class="img-fluid">-->
                  <!--            </div>-->
                  <!--             <div>-->
                  <!--                <img src="assets/images/4.webp" class="img-fluid">-->
                  <!--            </div>-->
                  <!--             <div>-->
                  <!--                <img src="assets/images/5.webp" class="img-fluid">-->
                  <!--            </div>-->
                  <!--             <div>-->
                  <!--                <img src="assets/images/6.webp" class="img-fluid">-->
                  <!--            </div>-->
                  <!--             <div>-->
                  <!--                <img src="assets/images/7.webp" class="img-fluid">-->
                  <!--            </div>-->
                  <!--             <div>-->
                  <!--                <img src="assets/images/8.webp" class="img-fluid">-->
                  <!--            </div>-->
                  <!--             <div>-->
                  <!--                <img src="assets/images/9.webp" class="img-fluid">-->
                  <!--            </div>-->
                  <!--        </div>-->
                  <!--    </div>-->
                  <!--</div>-->
                  <!--<div class="rateSec">-->
                  <!--    <div class="rateImg">-->
                  <!--        <img src="assets/images/rate2.webp" class="img-fluid">-->
                  <!--    </div>-->
                  <!--    <div>-->

                  <!--    </div>-->
                  <!--</div>-->
                  <div class="btnSec">
                     <a href="/sequence-form-step1/" class="button-round">Get Started Now</a>
                     <a href="javascript:void(0);" class="alphaChat button-round">Chat now for instant support </a>
                  </div>
                  <p class="lastPara">Start as low as <span>$49</span>, view <a href="#pakgeSec" class="goDown">Trademark Registration packages</a></p>
               </div>
            </div>
            <div class="col-lg-5 col-md-5">
               <figure class="lp-girl">
                  <img src="assets/images/lp-girl.webp" class="img-fluid">
               </figure>
            </div>

         </div>
      </div>
   </section>
   <!-- home banner section html end -->

   <section class="trustSec">
      <div class="container">
         <div class="row align-items-start">
            <div class="col-md-2 d-md-block d-none">
               <img src="assets/images/rating.webp" class="img-fluid">
            </div>
            <div class="col-md-10">
               <div class="rateBox-slider">
                  <div>
                     <div class="reviewBox">
                        <div class="trust">
                           <img src="assets/images/rate-star.webp" class="img-fluid">
                           <h6>May 13, 2023</h6>
                        </div>
                        <p>Trademark Nova rocks! Got my first legal trademark approved with their help, and I'm already working with them on a second one.</p>
                     </div>
                  </div>
                  <div>
                     <div class="reviewBox">
                        <div class="trust">
                           <img src="assets/images/rate-star.webp" class="img-fluid">
                           <h6>May 5, 2023</h6>
                        </div>
                        <p>Overall great experience so far! Give the 4 because there is always room for improvement. Waiting to get my trademark information.</p>
                     </div>
                  </div>
                  <div>
                     <div class="reviewBox">
                        <div class="trust">
                           <img src="assets/images/rate-star.webp" class="img-fluid">
                           <h6> May 9, 2023</h6>
                        </div>
                        <p>I had a really easy experience using Trademark Nova to trademark my slogan. Communication with the lawyer was excellent.</p>
                     </div>
                  </div>
                  <div>
                     <div class="reviewBox">
                        <div class="trust">
                           <img src="assets/images/rate-star.webp" class="img-fluid">
                           <h6>Apr 13, 2023</h6>
                        </div>
                        <p>I approached Trademark Nova with some hesitation, as I had heard horror stories about the complexities of trademark registration.</p>
                     </div>
                  </div>
                  <div>
                     <div class="reviewBox">
                        <div class="trust">
                           <img src="assets/images/rate-star.webp" class="img-fluid">
                           <h6>Mar 12, 2023</h6>
                        </div>
                        <p>I didn't know what to expect when I decided to register my trademark with Trademark Nova, but I was pleasantly surprised by their level of service.</p>
                     </div>
                  </div>
                  <div>
                     <div class="reviewBox">
                        <div class="trust">
                           <img src="assets/images/rate-star.webp" class="img-fluid">
                           <h6>Mar 12, 2023</h6>
                        </div>
                        <p>Trademark registration was a task I was dreading, but Trademark Nova made it surprisingly easy.</p>
                     </div>
                  </div>
                  <div>
                     <div class="reviewBox">
                        <div class="trust">
                           <img src="assets/images/rate-star.webp" class="img-fluid">
                           <h6>Feb 17, 2023</h6>
                        </div>
                        <p>My experience with Trademark Nova for trademark registration was excellent.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

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

               <div class="col-lg-6 col-md-12">
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
                           <h4>BASIC</h4>
                           <p><span>*</span>Get Your Trademark Registration Serial Number in <span> Just 10 Days! </span></p>
                        </div>
                        <div class="botom">
                           <h2><i class="fas <?= $silverpriceUSCur ?>"></i><?= $silverpriceUS ?></h2>
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
                           <h4>DELUXE</h4>
                           <p><span>*</span>Get Your Trademark Registration Serial Number in <span> Just 3-5 Days! </span></p>
                        </div>
                        <div class="botom">
                           <h2><i class="fas <?= $goldpriceUSCur ?>"></i><?= $goldpriceUS ?></h2>
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
                           <h4>PREMIUM</h4>
                           <p><span>*</span>Get Your Trademark Registration Serial Number on the <span> Same Day! </span></p>
                        </div>
                        <div class="botom">
                           <h2><i class="fas <?= $diamondpriceUSCur ?>"></i><?= $diamondpriceUS ?></h2>
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
            <!--                    <h2><i class="fas <?= $silverpriceUKCur ?>"></i><?= $silverpriceUK ?></h2>-->
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
            <!--                    <h2><i class="fas <?= $goldpriceUKCur ?>"></i><?= $goldpriceUK ?></h2>-->
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
            <!--                    <h2><i class="fas <?= $diamondpriceUKCur ?>"></i><?= $diamondpriceUK ?></h2>-->
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
            <!--                     <h2><i class="fas <?= $silverpriceUKCur ?>"></i><?= $silverpriceUK ?></h2>-->
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
            <!--                     <h2><i class="fas <?= $goldpriceUKCur ?>"></i><?= $goldpriceUK ?></h2>-->
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
            <!--                     <h2><i class="fas <?= $diamondpriceUKCur ?>"></i><?= $diamondpriceUK ?></h2>-->
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
            <!--                     <h2><i class="fas <?= $silverpriceUSCur ?>"></i><?= $silverpriceUS ?></h2>-->
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
            <!--                     <h2><i class="fas <?= $goldpriceUSCur ?>"></i><?= $goldpriceUS ?></h2>-->
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
            <!--                     <h2><i class="fas <?= $diamondpriceUSCur ?>"></i><?= $diamondpriceUS ?></h2>-->
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
            <!--                     <h2><i class="fas <?= $silverpriceEUCur ?>"></i><?= $silverpriceEU ?></h2>-->
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
            <!--                     <h2><i class="fas <?= $goldpriceEUCur ?>"></i><?= $goldpriceEU ?></h2>-->
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
            <!--                     <h2><i class="fas <?= $diamondpriceEUCur ?>"></i><?= $diamondpriceEU ?></h2>-->
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
                        <img src="assets/images/img3.webp" alt="">
                        <span class="cat-link">
                        </span>
                     </figure>
                     <div class="portfolio-content">
                        <h4><a href="/trademark-renewal/">Trademark Renewal</a></h4>
                        <p>Securing a registered trademark protects your brand, & provides with the tools to prevent someone using similar signs and riding off the back of your business.</p>
                        <a href="javascript:" class="button-round">VIEW DETAILS</a>
                     </div>
                  </article>
               </div>
               <div class="col-sm-6 col-lg-4 col-md-6">
                  <article class="portfolio-item">
                     <figure class="portfolio-img">
                        <img src="assets/images/tm-search.webp" alt="">
                        <span class="cat-link">
                        </span>
                     </figure>
                     <div class="portfolio-content">
                        <h4><a href="/comprehensive-trademark-search/">Trademark Search</a></h4>
                        <p>Using AI tools to search for alternative spellings, and more. We ensure you don’t waste your time & money on a name that isn’t unique enough to be trademarked.</p>
                        <a href="javascript:" class="button-round">VIEW DETAILS</a>
                     </div>
                  </article>
               </div>
               <div class="col-sm-6 col-lg-4 col-md-6">
                  <article class="portfolio-item">
                     <figure class="portfolio-img">
                        <img src="assets/images/amaz.webp" alt="">
                        <span class="cat-link">
                        </span>
                     </figure>

                     <div class="portfolio-content">
                        <h4><a href="/trademark-monitoring/">Trademark Monitoring</a></h4>
                        <p>To enforce your rights, know when others are using your trademark. Trademark Monitoring gives the information you need to enforce your trademark rights!</p>
                        <a href="javascript:" class="button-round">VIEW DETAILS</a>
                     </div>
                  </article>
               </div>
               <div class="col-sm-6 col-lg-4 col-md-6">
                  <article class="portfolio-item">
                     <figure class="portfolio-img">
                        <img src="assets/images/fam-law.webp" alt="">
                        <span class="cat-link">
                        </span>
                     </figure>

                     <div class="portfolio-content">
                        <h4><a href="/response-to-opposition/">Response to Opposition</a></h4>
                        <p>Assisting applicants in responding to office actions issued by the trademark office for a seamless trademark registration process.</p>
                        <a href="javascript:" class="button-round">VIEW DETAILS</a>
                     </div>
                  </article>
               </div>
               <div class="col-sm-6 col-lg-4 col-md-6">
                  <article class="portfolio-item">
                     <figure class="portfolio-img">
                        <img src="assets/images/legal-writing.webp" alt="">
                        <span class="cat-link">
                        </span>
                     </figure>

                     <div class="portfolio-content">
                        <h4><a href="/cease-desist-letter/">Cease & Desist Letter</a></h4>
                        <p>Are you facing infringement, or breach of contract? Our Cease & desist letter can provide an affordable solution to protect your rights & prevent further harm.</p>
                        <a href="javascript:" class="button-round">VIEW DETAILS</a>
                     </div>
                  </article>
               </div>
               <div class="col-sm-6 col-lg-4 col-md-6">
                  <article class="portfolio-item">
                     <figure class="portfolio-img">
                        <img src="assets/images/amazon.webp" alt="">
                        <span class="cat-link">
                        </span>
                     </figure>

                     <div class="portfolio-content">
                        <h4><a href="/amazon-brand-registry-us">Amazon Brand Registry</a></h4>
                        <p>Amazon Brand Registry enables brand owners to register their trademarks and safeguard their intellectual property while building their brand. </p>
                        <a href="javascript:" class="button-round">VIEW DETAILS</a>
                     </div>
                  </article>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- home portfolio section html end -->


   <?php include("../../includes/testimonial.php") ?>

   <?php include("../../includes/faq.php") ?>
   <!-- </main> -->

   <?php include '../../includes/ind-leader.php'; ?>
   <?php include("../../includes/lp-footer.php") ?>

   <?php include("../../includes/scripts.php") ?>