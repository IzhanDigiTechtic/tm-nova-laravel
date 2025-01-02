<?php
include("../backend/connectiondb.php");
include "../includes/var.php" ?>
<!doctype html>
<html lang="en">

<head>
   <?php include("../includes/compatibility.php") ?>
   <title>FAQs | Trademark Nova</title>
   <meta name="description" content="" />
   <meta name="keywords" content="" />
   <!-- Google Fonts -->
   <?php include("../includes/styles.php") ?>
   <?php include("../includes/header.php") ?>
</head>

<body>
   <div id="page" class="full-page">
      <main id="content" class="site-main">
         <!-- home banner section html start -->
         <section class="home-banner" style="background: url(./assets/images/home-main-bg.webp) center/cover no-repeat;">
            <div class="container">
               <div class="row justify-content-between">
                  <div class="col-md-6 d-flex flex-wrap align-items-center">
                     <div class="banner-content">
                        <h2 class="banner-title">Frequently Asked Questions</h2>
                        <div class="banner-text">
                           <p>Save yourself from the hassle of expensive redesigns after finding out you’re violating existing trademarks. Know everything you need to know before starting your trademark registration process.</p>
                        </div>
                        <div class="banner-button btnSec">
                           <a href="/sequence-form-step1/" class="button-round d-md-none d-block">Get Started Now</a>
                           <a href="javascript:void(0);" class="alphaChat button-round">TALK TO OUR CONSULTANT</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5 col-md-6 d-flex flex-wrap align-items-end">
                     <div class="formStyle">
                        <img src="assets/images/arrow.png" alt="" class="targetedDown" />
                        <h4 class="blinkAnim">Start Your <span>Trademark</span> Registration Process</h4>
                        <p>Fill out this brief form given below. It will take less than 60 seconds to complete it!</p>
                        <?php include('../includes/lead-form.php') ?>
                     </div>
                  </div>
               </div>
            </div>
            <!--<div class="banner-pattern" style="background-image: url(assets/images/banner-pattern1.png);"></div>-->
         </section>
         <!-- home banner section html end -->
         <!-- faq html start -->
         <div class="faq-page-section">
            <div class="container">
               <div class="faq-page-container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="section-head text-center mb-5">
                           <h2 class="section-title">Trademark Registration <span class="primary-color">Questions!!</span></h2>
                        </div>
                        <div id="accordion-tab-one" class="accordion-content" role="tablist">
                           <div id="accordion-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="accordion-A">
                              <div class="card-header" role="tab" id="qus-A">
                                 <h5 class="mb-0">
                                    <a data-bs-toggle="collapse" href="#collapse-one" aria-expanded="true" aria-controls="collapse-one">
                                       What is a trademark registration service, and why would I need one?
                                    </a>
                                 </h5>
                              </div>
                              <div id="collapse-one" class="collapse show" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-A">
                                 <div class="card-body">
                                    A trademark registration service is a company or individual that provides assistance with the process of registering a trademark with your respective Intellectual Property Office (IPO). You may need a trademark registration service if you want to protect your brand name or logo from infringement by others.
                                 </div>
                              </div>
                           </div>
                           <div id="accordion-B" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-B">
                              <div class="card-header" role="tab" id="qus-B">
                                 <h5 class="mb-0">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-two" aria-expanded="false" aria-controls="collapse-two">
                                       How long will the registration process take?
                                    </a>
                                 </h5>
                              </div>
                              <div id="collapse-two" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-B">
                                 <div class="card-body">
                                    The answer to this question will differ from requirements to requirements and based on package selection and enhanced technologies at your respective Intellectual Property Office (IPO). For more details, you can check our packages!.
                                 </div>
                              </div>
                           </div>
                           <div id="accordion-C" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-C">
                              <div class="card-header" role="tab" id="qus-C">
                                 <h5 class="mb-0">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-three" aria-expanded="true" aria-controls="collapse-three">
                                       What are my chances of achieving a trademark registration?
                                    </a>
                                 </h5>
                              </div>
                              <div id="collapse-three" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-C">
                                 <div class="card-body">
                                    We always tell our clients that we aren’t ‘oddsmakers’. In other words, you get exactly what you pay for. Our teams are skilled in improving the likelihood of your success. They perform clearance to search for similar trademarks before sending out an application and picking a highly distinctive mark.
                                 </div>
                              </div>
                           </div>
                           <div id="accordion-D" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-D">
                              <div class="card-header" role="tab" id="qus-D">
                                 <h5 class="mb-0">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-four" aria-expanded="true" aria-controls="collapse-four">
                                       What is your trademark registration process?
                                    </a>
                                 </h5>
                              </div>
                              <div id="collapse-four" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-D">
                                 <div class="card-body">
                                    <p>We Help Drive Your Innovations in The Fast Lane. Complete Your Trademark Registration in Just 3 Simple Steps.</p>
                                    <h5>Submit Your Trademark Information</h5>
                                    <p>Spend a couple of minutes filling out a simple questionnaire. This will initiate your registration process for your trademark.</p>
                                    <h5>Select Your Service & Make the Payment</h5>
                                    <p>Get all the details in order! Select your coveted service with Trademark Nova & make the payment for your desired services.</p>
                                    <h5>Thorough Evaluation & Trademark Filing</h5>
                                    <p>To ensure that your trademark is completely unique, our team conducts a thorough trademark search across numerous databases and then file your trademark with your respective IPO.</p>
                                 </div>
                              </div>
                           </div>
                           <div id="accordion-E" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-E">
                              <div class="card-header" role="tab" id="qus-E">
                                 <h5 class="mb-0">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-five" aria-expanded="true" aria-controls="collapse-five">
                                       What is a common law trademark and why bother to register a mark?
                                    </a>
                                 </h5>
                              </div>
                              <div id="collapse-five" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-E">
                                 <div class="card-body">
                                    <p>Under UK law, a “common law trademark” is generally established when someone uses a company name, logo or slogan in commerce, even if it is not registered. So, why pay to register a trademark when a common law trademark may already exist?</p>
                                    <p>Common law rights ordinarily are limited to the geographic area where the mark is used as opposed to the nationwide protection customarily obtained when a mark is registered with your respective IPO. So, unless registered, the use of a mark can be geographically limited, which hampers the ability to expand the brand.</p>
                                 </div>
                              </div>
                           </div>
                           <div id="accordion-F" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-F">
                              <div class="card-header" role="tab" id="qus-F">
                                 <h5 class="mb-0">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-six" aria-expanded="true" aria-controls="collapse-six">
                                       Can you register my Amazon ecommerce brand?
                                    </a>
                                 </h5>
                              </div>
                              <div id="collapse-six" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-F">
                                 <div class="card-body">
                                    Whether you are a small or a big manufacturer, we can register your brand with Amazon, so that you can gain complete control over the product listings.
                                 </div>
                              </div>
                           </div>
                           <div id="accordion-G" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-G">
                              <div class="card-header" role="tab" id="qus-G">
                                 <h5 class="mb-0">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-seven" aria-expanded="true" aria-controls="collapse-seven">
                                       Can I register a trademark without a registration service?
                                    </a>
                                 </h5>
                              </div>
                              <div id="collapse-seven" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-G">
                                 <div class="card-body">
                                    Yes, you can register a trademark on your own, but the process can be complex and time-consuming. A trademark registration service from Trademark Nova can help simplify the process and ensure that your trademark application is properly completed and submitted to your respective IPO.
                                 </div>
                              </div>
                           </div>
                           <div id="accordion-H" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-H">
                              <div class="card-header" role="tab" id="qus-H">
                                 <h5 class="mb-0">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-eight" aria-expanded="true" aria-controls="collapse-eight">
                                       What trademark registration services do Trademark Nova offer?
                                    </a>
                                 </h5>
                              </div>
                              <div id="collapse-eight" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-H">
                                 <div class="card-body">
                                    Trademark Nova typically offer a variety of services, including conducting a trademark search to determine if your desired trademark is available, preparing and filing your trademark application, monitoring your trademark for potential infringement, and providing legal advice and guidance throughout the trademark registration process.
                                 </div>
                              </div>
                           </div>
                           <div id="accordion-I" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-I">
                              <div class="card-header" role="tab" id="qus-I">
                                 <h5 class="mb-0">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-nine" aria-expanded="true" aria-controls="collapse-nine">
                                       How much does it cost to use a trademark registration service from Trademark Nova?
                                    </a>
                                 </h5>
                              </div>
                              <div id="collapse-nine" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-I">
                                 <div class="card-body">
                                    The cost of a trademark registration service varies depending on the specific services you require. Some services require a flat fee, while others require an hourly rate. However, if you choose to file your trademark application through Trademark Nova, it will cost you $55 exclusive of govt. fee and taxes for one class.
                                 </div>
                              </div>
                           </div>
                           <div id="accordion-J" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-J">
                              <div class="card-header" role="tab" id="qus-J">
                                 <h5 class="mb-0">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-ten" aria-expanded="true" aria-controls="collapse-ten">
                                       What is a trademark search, and why is it important?
                                    </a>
                                 </h5>
                              </div>
                              <div id="collapse-ten" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-J">
                                 <div class="card-body">
                                    A trademark search is the process of checking to see if your desired trademark is already in use by another party. It is important to conduct a trademark search before submitting your application to avoid potential conflicts with existing trademarks and increase your chances of a successful registration.
                                 </div>
                              </div>
                           </div>
                           <div id="accordion-K" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-K">
                              <div class="card-header" role="tab" id="qus-K">
                                 <h5 class="mb-0">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-eleven" aria-expanded="true" aria-controls="collapse-eleven">
                                       Can I trademark a name or logo that someone else is already using?
                                    </a>
                                 </h5>
                              </div>
                              <div id="collapse-eleven" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-K">
                                 <div class="card-body">
                                    No, you cannot trademark a name or logo that is already in use by another party. Conducting a thorough trademark search before submitting your application can help you avoid potential conflicts.
                                 </div>
                              </div>
                           </div>
                           <div id="accordion-L" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-L">
                              <div class="card-header" role="tab" id="qus-L">
                                 <h5 class="mb-0">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-twelve" aria-expanded="true" aria-controls="collapse-twelve">
                                       What is a trademark opposition, and how can a registration service help me handle it?
                                    </a>
                                 </h5>
                              </div>
                              <div id="collapse-twelve" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-L">
                                 <div class="card-body">
                                    A trademark opposition is a legal challenge to your trademark application by another party. A trademark registration service can help you respond to a trademark opposition by drafting legal documents and providing guidance throughout the process.
                                 </div>
                              </div>
                           </div>
                           <div id="accordion-M" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-M">
                              <div class="card-header" role="tab" id="qus-M">
                                 <h5 class="mb-0">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-thirteen" aria-expanded="true" aria-controls="collapse-thirteen">
                                       How long does a trademark registration last, and do I need to renew it?
                                    </a>
                                 </h5>
                              </div>
                              <div id="collapse-thirteen" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-M">
                                 <div class="card-body">
                                    A trademark registration lasts for 10 years from the date of registration, and can be renewed for additional 10-year periods as long as the trademark remains in use. You are responsible for renewing your trademark registration and maintaining it throughout its lifetime.
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
      </main>
      <?php include("../includes/footer.php") ?>
      <?php include("../includes/scripts.php") ?>