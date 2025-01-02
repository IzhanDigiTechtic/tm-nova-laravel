<?php
include("../backend/connectiondb.php");
include "../includes/var.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../includes/compatibility.php") ?>
    <title>Company Name Change Services | Trademark Nova</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- Google Fonts -->
    <?php include("../includes/styles.php") ?>
    <?php include("../includes/header.php") ?>
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
            <section class="home-banner" style="background: url(assets/images/company-change-ban.webp) center/cover no-repeat;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <h3 class="banner-subtitle">Change of Company Name Service</h3>
                                <h2 class="banner-title">Rebrand With Confidence & Let Us Handle Your <span>Company Name Change</span></h2>
                                <div class="banner-text">
                                    <p>At Trademark Nova, our team of experienced professionals will take care of all the legal paperwork and ensure that your company name change is completed quickly and efficiently, leaving you free to focus on the future of your business. </p>
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
                                <div class="ribbon">
                                    <p>Same Day Application Filing Available</p>
                                </div>
                                <p>Fill out this brief form given below. It will take less than 60 seconds to complete it!</p>
                                <?php include('../includes/lead-form.php') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home banner section html end -->

            <section class="about-page-section">
                <div class="about-inner-page">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="section-head">
                                    <h2 class="section-title">Change of Company Name <span class="primary-color">Service</span></h2>
                                </div>
                                <p>A change of company name refers to a change in a company’s legal registered name at Companies House. It is a formal procedure which only becomes official once Companies House approves the change and issues a name change certificate called a Certificate of Incorporation on Change of Name.</p>
                                <p>Are you considering a change of your company's name but don't know where to start? Look no further than Trademark Nova's reliable Change of Company Name Service! We understand that rebranding your business can be a daunting process, but with our expert guidance and support, we'll make it simple and hassle-free. Our team of experienced professionals will take care of all the legal paperwork and ensure that your company name change is completed quickly and efficiently, leaving you free to focus on the future of your business. With our help, you can upgrade your company's image, attract new customers, and build a stronger brand identity. Don't wait any longer - contact us today to find out how we can help you make a successful company name change!</p>
                            </div>
                            <div class="col-md-6">
                                <figure class="aboutImg">
                                    <img src="assets/images/company-change-img1.webp" alt="">
                                    <span><img src="assets/images/logo-io.webp" alt=""></span>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-light-grey domainservice">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="section-title">How does this service <span class="primary-color">work?</span></h2>
                            <ul class="listStyle mt-4">
                                <li><i class="fas fa-arrow-circle-right"></i> Get a custom quote for 'Company Name Change Service' from our experts. Make the required payment and then provide us with the details.</li>
                                <li><i class="fas fa-arrow-circle-right"></i> We will send you digital documents in 1-2 working days by email for signature.</li>
                                <li><i class="fas fa-arrow-circle-right"></i> Once you have confirmed via email that the documents have been signed, we will submit your name change application (form NM01) electronically to Companies House.</li>
                                <li><i class="fas fa-arrow-circle-right"></i> The name change should be approved within 48 hours.</li>
                                <li><i class="fas fa-arrow-circle-right"></i> You will then receive a name change Certificate by email.</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <div class="schedule pt-5">
                                <h2>Request a Schedule For Free Consultation</h2>
                                <a href="book-free-consultation" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
                                <a href="tel:<?= $number; ?>" class="telNum"><span>Call Us Now:</span><?= $numberdisplay; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="whatDifferent">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-md-6">
                            <h2 class="section-title">What is the company name change process?</h2>
                            <p>There are two stages to a company name change. The first part is the decision to submit a name change application to Companies House. This is made by the company’s members passing a special resolution, although it can sometimes come from a decision by the directors.</p>
                            <p>The second stage is the submission of the name change application to Companies House. Only when Companies House approves the name change, and issues a name change certificate does the change become official.</p>
                        </div>
                        <div class="col-md-5">
                            <img src="assets/images/competency-img2.webp" alt="" class="rounded box-shadow">
                        </div>
                    </div>
                </div>
            </section>

            <!-- faq html start -->
            <div class="faq-page-section">
                <div class="container">
                    <div class="faq-page-container">
                        <div class="row justify-content-center">

                            <div class="col-lg-6">
                                <div class="schedule smal">
                                    <div>
                                        <h3>Full Company Secretary Service</h3>
                                        <p>A professional company secretary to take care of your business.</p>
                                    </div>
                                    <a href="nominee-director-and-secretarial-services" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
                                    <img src="assets/images/secretary-io.png" alt="" class="sch-io">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="schedule smal">
                                    <div>
                                        <h3>VAT Registration Service</h3>
                                        <p>Trusted company that offers VAT registration services in the UK.</p>
                                    </div>
                                    <a href="VAT-registration" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
                                    <img src="assets/images/env-io.png" alt="" class="sch-io">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="faq-content-wrap">
                                <div class="section-head text-center my-5">
                                    <h2 class="section-title">Frequently Asked <span class="primary-color">Questions!</span></h2>
                                </div>
                                <div id="accordion-tab-two" class="accordion-content" role="tablist">
                                    <div id="accordion-E" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="accordion-E">
                                        <div class="card-header" role="tab" id="qus-E">
                                            <h5 class="mb-0">
                                                <a data-bs-toggle="collapse" href="#collapse-five" aria-expanded="true" aria-controls="collapse-five">
                                                    When should we consider trademark protection for your brand?
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse-five" class="collapse show" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-E">
                                            <div class="card-body">
                                                Anybody introducing a new brand identity or planning on offering newly branded
                                                services or products should take the necessary steps to protect their trademark.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion-F" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-F">
                                        <div class="card-header" role="tab" id="qus-F">
                                            <h5 class="mb-0">
                                                <a class="collapsed" data-bs-toggle="collapse" href="#collapse-six" aria-expanded="false" aria-controls="collapse-six">
                                                    How long will the registration process take?
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse-six" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-F">
                                            <div class="card-body">
                                                The answer to this question will differ from agency to agency and based on staffing
                                                changes and enhanced technologies at the United Kingdom Intellectual Property Office. If you’re
                                                asking us specifically, you can count on the entire application process to take from
                                                5 to 6 months.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion-G" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-G">
                                        <div class="card-header" role="tab" id="qus-G">
                                            <h5 class="mb-0">
                                                <a class="collapsed" data-bs-toggle="collapse" href="#collapse-seven" aria-expanded="true" aria-controls="collapse-seven">
                                                    How long will the federal trademark registration last?
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse-seven" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-G">
                                            <div class="card-body">
                                                It can take up to 10 years. Also, the registration can easily be renewed so long as
                                                you have made sure to maintain an uninterrupted use of your trademark in interstate
                                                commerce.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion-H" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-H">
                                        <div class="card-header" role="tab" id="qus-H">
                                            <h5 class="mb-0">
                                                <a class="collapsed" data-bs-toggle="collapse" href="#collapse-eight" aria-expanded="true" aria-controls="collapse-eight">
                                                    When can I use the ® symbol?
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse-eight" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-H">
                                            <div class="card-body">
                                                If you have a federally registered trademark, you will be able to use the ® symbol.
                                                For every other mark, whether unregistered or registered, you will not be required
                                                to add a designation. However, we always advise mark owners to attach the ‘SM’ or
                                                ‘TM’ symbol to tell the industry that your company name, logo, or symbol is
                                                proprietary to your services or goods.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion-I" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-I">
                                        <div class="card-header" role="tab" id="qus-I">
                                            <h5 class="mb-0">
                                                <a class="collapsed" data-bs-toggle="collapse" href="#collapse-nine" aria-expanded="true" aria-controls="collapse-eight">
                                                    What are my chances of achieving a trademark registration?
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse-nine" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-I">
                                            <div class="card-body">
                                                We always tell our clients that we aren’t ‘oddsmakers’. In other words, you get
                                                exactly what you pay for. Our teams are skilled in improving the likelihood of your
                                                success. They perform clearance to search for similar trademarks before sending out
                                                an application and picking a highly distinctive mark.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion-J" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-J">
                                        <div class="card-header" role="tab" id="qus-J">
                                            <h5 class="mb-0">
                                                <a class="collapsed" data-bs-toggle="collapse" href="#collapse-ten" aria-expanded="true" aria-controls="collapse-eight">
                                                    What is your your trademark registration process?
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse-ten" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-J">
                                            <div class="card-body">
                                                We Help Drive Your Innovations in The Fast Lane. Complete Your Trademark Registration in Just 3 Simple Steps.
                                                <p></p>
                                                <h5>Submit Your Trademark Information</h5>
                                                <p>Spend a couple of minutes filling out a simple questionnaire. This will initiate your registration process for your trademark.</p>
                                                <h5>Select Your Service &amp; Make the Payment</h5>
                                                <p>Get all the details in order! Select your coveted service with Trademark Nova &amp; make the payment for your desired services.</p>
                                                <h5>Thorough Evaluation &amp; Trademark Filing</h5>
                                                <p>To ensure that your trademark is completely unique, our team conducts a thorough trademark search across numerous databases and then file your trademark with UKIPO.</p>
                                            </div>
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

    <?php include("../includes/testimonial.php") ?>

    </main>
    <?php include("../includes/footer.php") ?>
    <?php include("../includes/scripts.php") ?>