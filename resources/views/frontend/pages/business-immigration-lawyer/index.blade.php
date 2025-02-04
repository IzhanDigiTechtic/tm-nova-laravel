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
            <section class="home-banner" style="background: url(assets/images/imigration-ban.webp) center/cover no-repeat;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <h3 class="banner-subtitle">Business Immigration Solicitors</h3>
                                <h2 class="banner-title">Your Gateway to <span>Global </span>Business Opportunities </h2>
                                <div class="banner-text">

                                    <p><i class="fas fa-check-circle"></i>Skilled, Collaborative Expertise & Support Every Step of the Way</p>
                                    <p><i class="fas fa-check-circle"></i>Sponsor Management, Business Visas, & HR Immigration Support</p>
                                    <p><i class="fas fa-check-circle"></i>Transparent Pricing At All Stages</p>
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
            </section>
            <!-- home banner section html end -->

            <section class="about-page-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="section-head">
                                <h3 class="section-title">Guiding Businesses Through The United Kingdom <span class="primary-color">Immigration System </span></h3>
                            </div>
                            <p>Our team of business immigration solicitors can assist you throughout the entire process of securing a sponsor licence, issuing work authorisations, and applying for the appropriate visas to hire foreign employees. The sponsor management system can be challenging for those without specialist knowledge, but our team possesses the expertise necessary to help your organisation achieve its goals.</p>
                            <p>Moreover, we are well-known for representing affluent individuals seeking UK residency through Investor visas, as well as experienced entrepreneurs with innovative business concepts who apply for the Innovator visa. Our team also provides guidance to leaders and aspiring leaders in fields such as arts and culture, digital technology, and research to navigate the immigration system.</p>
                            <p><a href="book-free-consultation">Contact Trademark Nova</a> to schedule a free consultation.</p>
                        </div>
                        <div class="col-md-6">
                            <figure class="aboutImg">
                                <img src="{{asset('assets/images/imigration-img1.webp')}}" alt="">
                                <span><img src="{{asset('assets/images/logo-io.webp')}}" alt=""></span>
                            </figure>
                        </div>
                        <div class="col-md-12">
                            <div class="engagingBusiness">
                                <div class="title">
                                    <h3>Our business immigration lawyers’ expertise</h3>
                                    <p>Our business immigration lawyers are experts in navigating the complex and ever-changing landscape of UK immigration law. They possess a deep understanding of the sponsor management system, work authorisations, and the various visa categories available to businesses and individuals. Our team is committed to helping organisations of all sizes and industries achieve their immigration objectives, whether it be hiring the right foreign talent, sponsoring employees for settlement, or obtaining the necessary permits for overseas assignments.</p>
                                </div>
                                <div class="body">
                                    <div class="cell">
                                        <img src="{{asset('assets/images/engaging1.webp')}}" alt="">
                                        <div class="content">
                                            <h4>Sponsorship lawyers</h4>
                                            <p>At Trademark Nova, our team of sponsorship lawyers can assist you with every aspect of sponsoring employees in the UK. We have extensive experience helping businesses with licence applications and renewals, and we can guide you through the complexities of the sponsor management system. Our team can also provide support with obtaining certificates of sponsorship and determining the most appropriate visa for your needs.</p>
                                        </div>
                                    </div>
                                    <div class="cell">
                                        <img src="{{asset('assets/images/engaging2.webp')}}" alt="">
                                        <div class="content">
                                            <h4>High value & innovation immigration</h4>
                                            <p>Our business immigration team at Trademark Nova includes expert solicitors who specialize in Global Talent, Innovator, and Investor visas. Whether you are a high net worth individual, entrepreneur, or potential leader in your field, we can work with you to identify the best business visa for your specific circumstances and provide the legal expertise needed for a successful application.</p>
                                        </div>
                                    </div>
                                    <div class="cell">
                                        <img src="{{asset('assets/images/engaging3.webp')}}" alt="">
                                        <div class="content">
                                            <h4>HR immigration training & support</h4>
                                            <p>In addition to assisting businesses with immigration compliance solutions and sponsor licence audits, Trademark Nova also offer bespoke HR immigration training for global mobility and recruitment teams. Our training packages cover a range of topics, including right to work compliance, the UK's points-based immigration system, and sponsorship duties. Our cost-effective solutions are tailored to suit the needs of your business.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="apartSec intTrademark">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h2>The Process of Engaging Business Immigration Lawyers</h2>
                            <p>Engaging business immigration lawyers is an important step for any organisation seeking to navigate the complexities of UK immigration law. The process typically begins with an initial consultation, during which you can discuss your immigration needs with a qualified lawyer. Based on your specific circumstances, the lawyer can then recommend the most appropriate immigration solution, outline the costs involved, and provide an estimate of the time required for the process. </p>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io10.png')}}" alt=""></div>
                                <h4>Request a Free Consultation</h4>
                                <p>Simply call us or book a free consultation with us. Within two hours of your inquiry, a member of our team will contact you to arrange a 15-minute consultation with one of our immigration experts, with no obligation to proceed. </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io10.png')}}" alt=""></div>
                                <h4>License/Visa Application</h4>
                                <p>If you choose to move forward, we will assist you with the initial sponsor license or work visa application for your chosen candidate. The candidate will participate in a fact-finding meeting with us so we can explore potential solutions. </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="{{asset('assets/images/io10.png')}}" alt=""></div>
                                <h4>Additional Legal Support</h4>
                                <p>Once the applications have been submitted, our immigration experts at Trademark Nova will be available to answer any questions you may have and provide additional legal support as needed.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- faq html start -->
            <div class="faq-page-section">
                <div class="container">
                    <div class="faq-page-container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="schedule mt-0 mb-5">
                                    <h2>Request a Schedule For Free Consultation</h2>
                                    <a href="book-free-consultation" class="button-round">Get Started <i class="fa fa-arrow-right"></i></a>
                                    <a href="tel:{{ config('var.number') }}" class="telNum"><span>Call Us Now:</span>{{ config('var.numberdisplay') }}</a>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="faq-content-wrap">
                                    <div class="section-head text-center mb-5">
                                        <h2 class="section-title">Frequently Asked <span class="primary-color">Questions!</span></h2>
                                    </div>
                                    <div id="accordion-tab-two" class="accordion-content" role="tablist">
                                        <div id="accordion-E" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="accordion-E">
                                            <div class="card-header" role="tab" id="qus-E">
                                                <h5 class="mb-0">
                                                    <a data-bs-toggle="collapse" href="#collapse-five" aria-expanded="true" aria-controls="collapse-five">
                                                        1. What types of immigration issues do your business immigration lawyers handle?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-five" class="collapse show" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-E">
                                                <div class="card-body">
                                                    Our business immigration lawyers handle a wide range of immigration issues, including obtaining sponsor licences, assigning work authorisation, applying for visas for non-UK employees, and representing high net worth individuals and entrepreneurs seeking to obtain UK residency or visas.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-F" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-F">
                                            <div class="card-header" role="tab" id="qus-F">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-six" aria-expanded="false" aria-controls="collapse-six">
                                                        2. How can your business immigration lawyers help me if I need to sponsor foreign workers?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-six" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-F">
                                                <div class="card-body">
                                                    Our lawyers can guide you through the entire process of obtaining a sponsor licence, from submitting the application to helping you meet your ongoing compliance obligations. We can also help you understand which visas are most appropriate for your business and employees.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-G" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-G">
                                            <div class="card-header" role="tab" id="qus-G">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-seven" aria-expanded="true" aria-controls="collapse-seven">
                                                        3. Can your lawyers help me obtain an Investor or Innovator visa?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-seven" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-G">
                                                <div class="card-body">
                                                    Yes, we have specialist lawyers who are experienced in helping high net worth individuals and entrepreneurs obtain Investor and Innovator visas.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-H" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-H">
                                            <div class="card-header" role="tab" id="qus-H">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-eight" aria-expanded="true" aria-controls="collapse-eight">
                                                        4. What is your pricing structure for business immigration services?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-eight" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-H">
                                                <div class="card-body">
                                                    We offer transparent and competitive pricing for our services, which are tailored to each client's specific needs.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-I" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-I">
                                            <div class="card-header" role="tab" id="qus-I">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-nine" aria-expanded="true" aria-controls="collapse-eight">
                                                        5. How do I schedule a consultation with a business immigration lawyer?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-nine" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-I">
                                                <div class="card-body">
                                                    You can request a free consultation by filling out our online form or calling us. A member of our team will be in touch within two hours to arrange a consultation with one of our immigration experts.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-J" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-J">
                                            <div class="card-header" role="tab" id="qus-J">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-ten" aria-expanded="true" aria-controls="collapse-eight">
                                                        6. How long does the business immigration process typically take?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-ten" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-J">
                                                <div class="card-body">
                                                    The timeline for the business immigration process can vary depending on the specific circumstances, but our lawyers will work with you to provide an estimate of the time required and keep you updated throughout the process.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-K" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-K">
                                            <div class="card-header" role="tab" id="qus-K">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-eleven" aria-expanded="true" aria-controls="collapse-eleven">
                                                        7. What happens if my visa application is denied?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-eleven" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-K">
                                                <div class="card-body">
                                                    If your visa application is denied, our lawyers can help you understand the reasons for the denial and explore potential options for appeal or alternative visas.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-L" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-L">
                                            <div class="card-header" role="tab" id="qus-L">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-twelve" aria-expanded="true" aria-controls="collapse-twelve">
                                                        8. Do you provide HR immigration training for businesses?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-twelve" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-L">
                                                <div class="card-body">
                                                    Yes, we offer bespoke HR immigration training for businesses across the UK, covering topics such as right to work compliance and understanding the UK's points-based immigration system.</p>
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

        </main>

@endsection