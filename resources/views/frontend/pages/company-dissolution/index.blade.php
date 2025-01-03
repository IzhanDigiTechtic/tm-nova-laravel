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
         <section class="home-banner" style="background: url(assets/images/dissolution-ban.webp) center/cover no-repeat;">
            <div class="container">
               <div class="row align-items-center justify-content-between">
                  <div class="col-md-6">
                     <div class="banner-content">
                        <h3 class="banner-subtitle">Company Dissolution Services</h3>
                        <h2 class="banner-title">Your Expert Insolvency Practitioners in the <span>UK</span></h2>
                        <div class="banner-text">

                           <p><i class="fas fa-check-circle"></i>Expert Practitioners Navigate the Process For You</p>
                           <p><i class="fas fa-check-circle"></i>Registered Firm with 100% Success Rate</p>
                           <p><i class="fas fa-check-circle"></i>Cost-Effective Solutions</p>
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
         </section>
         <!-- home banner section html end -->

         <section class="about-page-section">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-md-6">
                     <div class="section-head">
                        <h3 class="section-title">Company <span class="primary-color">Dissolution Service</span> By Trademark Nova - Support, when you need it the most.</h3>
                     </div>
                     <p>Looking for a reliable and professional company dissolution service? Look no further than Trademark Nova! We understand that the process of dissolving a company can be overwhelming and stressful, which is why our team of experts is here to provide you with the support and guidance you need every step of the way. Our comprehensive service includes everything from preparing and filing the necessary documents to handling any legal issues that may arise during the process. With our help, you can rest assured that your company dissolution will be completed smoothly and efficiently, allowing you to focus on the next chapter of your business journey. So why wait? Contact Trademark Nova today and let us help you navigate the process of company dissolution with ease!</p>
                  </div>
                  <div class="col-md-6">
                     <figure class="aboutImg">
                        <img src="{{asset('assets/images/dissolution-img1.webp')}}" alt="">
                        <span><img src="{{asset('assets/images/logo-io.webp')}}" alt=""></span>
                     </figure>
                  </div>

                  <div class="col-lg-12">
                     <div class="schedule">
                        <h2>Request a Schedule For Free Consultation</h2>
                        <a href="book-free-consultation" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
                        <a href="tel:{{ config('var.number') }}" class="telNum"><span>Call Us Now:</span>{{ config('var.numberdisplay') }}</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <section class="theRightSolution">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <ul class="keywordList nav" id="myTab" role="tablist">
                        <li role="presentation"><button class="active" id="one-tab" data-bs-toggle="tab" data-bs-target="#one-tab-pane" type="button" role="tab" aria-controls="one-tab-pane" aria-selected="true">Business Insolvency <i class="fa fa-angle-right"></i></button></li>
                        <li role="presentation"><button id="two-tab" data-bs-toggle="tab" data-bs-target="#two-tab-pane" type="button" role="tab" aria-controls="two-tab-pane" aria-selected="false">Bankruptcy <i class="fa fa-angle-right"></i></button></li>
                        <li role="presentation"><button id="three-tab" data-bs-toggle="tab" data-bs-target="#three-tab-pane" type="button" role="tab" aria-controls="three-tab-pane" aria-selected="false">Personal Insolvency <i class="fa fa-angle-right"></i></button></li>
                        <li role="presentation"><button id="four-tab" data-bs-toggle="tab" data-bs-target="#four-tab-pane" type="button" role="tab" aria-controls="four-tab-pane" aria-selected="false">Business Recovery <i class="fa fa-angle-right"></i></button></li>
                        <li role="presentation"><button id="five-tab" data-bs-toggle="tab" data-bs-target="#five-tab-pane" type="button" role="tab" aria-controls="five-tab-pane" aria-selected="false">Administration <i class="fa fa-angle-right"></i></button></li>
                        <li role="presentation"><button id="six-tab" data-bs-toggle="tab" data-bs-target="#six-tab-pane" type="button" role="tab" aria-controls="six-tab-pane" aria-selected="false">Individual Voluntary Arrangement <i class="fa fa-angle-right"></i></button></li>
                     </ul>
                  </div>
                  <div class="col-md-7">
                     <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="one-tab-pane" role="tabpanel" aria-labelledby="one-tab" tabindex="0">
                           <h3>Business Insolvency</h3>
                           <p>Running a business in the UK is hard. Running a successful, profitable business is even harder. With almost 60% of all businesses failing within the first five years, getting the right help and advice is vital to making your business a success story.</p>
                           <p>At Trademark Nova, we want nothing more than help you succeed. Keeping and growing your business is our first priority, and if a successful turnaround can be achieved then we will help you to do just that.</p>
                           <p>We sit down with you and consider every aspect of your business, and together we look for ways that could generate improvements in your cash flow and profits.</p>
                           <p>Corporate Recovery, therefore, is exactly as the name implies – the taking of positive and practical steps to restore a business to health and profitability.</p>
                           <p>Where a turnaround is not feasible, Trademark Nova will utilise highly creative and imaginative uses of established insolvency practitioner procedures, such as administration and company voluntary arrangements, in order to achieve a positive outcome for the benefit of all parties.</p>
                        </div>
                        <div class="tab-pane fade" id="two-tab-pane" role="tabpanel" aria-labelledby="two-tab" tabindex="0">
                           <h3>Bankruptcy</h3>
                           <p>Bankruptcy is a complex and multifaceted decision that businesses or individuals should not avoid due to fear, but should approach with caution. While it can help clear unpayable debts, it's important to consider the short and long-term consequences, which may include losing personal assets, such as your home.</p>
                           <p>It's also important to note that not all debts will be covered and will still need to be paid to their respective creditors.</p>
                           <p>Trademark Nova has extensive experience in dealing with bankruptcy and can guide individuals through the process using clear language and a practical approach.</p>
                           <p>While bankruptcy may not be the best option for everyone, our team can explain alternative solutions and provide accurate information to help make the right decision. We can dispel any myths and clarify the process to empower you to make an informed decision.</p>
                        </div>
                        <div class="tab-pane fade" id="three-tab-pane" role="tabpanel" aria-labelledby="three-tab" tabindex="0">
                           <h3>Personal Insolvency</h3>
                           <p>When dealing with personal financial issues, it's common to feel overwhelmed and alone. At Trademark Nova, we understand the challenges of personal insolvency and how to provide assistance.</p>
                           <p>Personal insolvency refers to the inability to pay debts when they become due. While incurring debt is a regular occurrence, it can become problematic when it becomes difficult to manage or factors outside of one's control lead to an inability to keep up with payments.</p>
                           <p>At Trademark Nova, we take a personalized approach to each case and take the time to fully understand the situation before offering our effective methods to help individuals make the best arrangements for their circumstances.</p>
                           <p>Our team of licensed insolvency practitioners provides a compassionate and confidential approach to help you navigate through your personal insolvency.</p>
                        </div>
                        <div class="tab-pane fade" id="four-tab-pane" role="tabpanel" aria-labelledby="four-tab" tabindex="0">
                           <h3>Business Recovery</h3>
                           <p>In some cases, businesses may experience financial struggles that prevent them from making a profit. Trademark Nova provides a corporate recovery service to help businesses overcome these challenges and return to a successful state.</p>
                           <p>Corporate recovery involves receiving guidance and support to address financial difficulties a company may be experiencing. The primary objective of corporate recovery is to avoid formal insolvency proceedings by creating plans to restructure finances.</p>
                           <p>Our team of experts will carefully evaluate all aspects of your business to identify potential solutions that can lead to increased profitability.</p>
                           <p>Our aim is to help you improve your financial situation before it becomes critical, thereby preventing the need for more urgent actions, such as corporate recovery.</p>
                        </div>
                        <div class="tab-pane fade" id="five-tab-pane" role="tabpanel" aria-labelledby="five-tab" tabindex="0">
                           <h3>Administration</h3>
                           <p>The term "going into administration" is commonly associated with failure and collapse, but with the guidance of a qualified and licensed insolvency practitioner from our team, this doesn't have to be the case.</p>
                           <p>Administration is a process that allows a struggling company to be rescued from insolvency by transferring control to an administrator. While it can be a challenging decision to make, the administrator will work to use the company's assets to pay off creditors in a timely and efficient manner.</p>
                           <p>For many insolvent businesses, administration provides a much-needed lifeline. With our expertise, it could be the difference between a new beginning for your business or liquidation.</p>
                           <p>Trademark Nova is here to help your company before it's too late.</p>
                        </div>
                        <div class="tab-pane fade" id="six-tab-pane" role="tabpanel" aria-labelledby="six-tab" tabindex="0">
                           <h3>Individual Voluntary Arrangement</h3>
                           <p>Consider an Individual Voluntary Arrangement (IVA) if you believe that you and your creditor(s) can reach a mutually agreeable solution.</p>
                           <p>An Individual Voluntary Arrangement (IVA) is an alternative to bankruptcy that involves a formal agreement between a debtor and their creditors to repay outstanding debts over a specified period. A licensed insolvency practitioner will draft a proposal for creditors, and a mutually agreeable solution will be reached.</p>
                           <p>IVAs offer additional protection in cases where legal action is threatened, as interim orders can halt any further creditor action. However, IVAs may be more costly, time-consuming, and risky than bankruptcy.</p>
                           <p>At Trademark Nova, we provide comprehensive guidance to help you make informed decisions about all of our services, including IVAs.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         @include ('includes/testimonial')
      </main>

@endsection