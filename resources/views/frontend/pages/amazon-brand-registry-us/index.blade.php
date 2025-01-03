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
            <section class="home-banner" style="background: url(assets/images/amazon-us-ban.webp) center/cover no-repeat;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <h3 class="banner-subtitle">Amazon Brand Registry United States </h3>
                                <h2 class="banner-title">Ready to Enroll in Amazon <span>Brand Registry?</span></h2>
                                <div class="banner-text">
                                    <p><i class="fas fa-check-circle"></i>Quickest Amazon Brand Registration in the Industry Available</p>
                                    <p><i class="fas fa-check-circle"></i>Industry’s Lowest Available Price of Just £99</p>
                                    <p><i class="fas fa-check-circle"></i>100% Guaranteed- Reliable Service Providers Available.</p>
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
                                <h2 class="section-title">Amazon Brand <span class="primary-color">Registry US</span></h2>
                            </div>
                            <p>Amazon Brand Registry is a service that enables brand owners to register their trademarks and safeguard their intellectual property while building their brand. Upon registration, Brand Registry users gain access to a range of tools that enhance the Amazon shopping experience. These exclusive tools are not available to unregistered brands or sellers and will be detailed below. </p>
                            <p>Enrolling your brand in Amazon's Brand Registry is crucial for those with a Seller Central or Vendor Central account, as it provides essential protection and unlocks valuable tools to establish brand credibility and loyalty. To enroll, you must meet specific requirements outlined by Amazon. Contact Trademark Nova to get detailed insight of enrollment criteria, and steps to register your brand.</p>
                        </div>
                        <div class="col-md-6">
                            <figure class="aboutImg">
                                <img src="assets/images/amazon-brands-us.webp" alt="">
                                <span><img src="assets/images/logo-io.webp" alt=""></span>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about-page-section bg-light-grey">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4 mb-4">
                            <img src="assets/images/amazon-img2.webp" alt="" class="rounded shadow">
                        </div>
                        <div class="col-md-8">
                            <h3 class="section-title">What is Amazon <span class="primary-color">Brand Registry 2.0</span></h3>
                            <p>As an Amazon seller who creates and sells your own private label products, you have protection available. By signing up for Amazon's Brand Registry 2.0, you can demonstrate ownership of your products and prevent forgeries from infiltrating your business.</p>
                            <p>The Brand Registry 2.0 is a revamped service designed for brand owners, product manufacturers, distributors, and resellers who have written permission from the brand owner to oversee a specific product on Amazon. If you don't fall into one of these categories, your application may not be approved. However, if you do qualify, it's essential to act swiftly and complete the setup process. After Amazon approves your Brand Registry 2.0 application, your product will be uniquely linked to your account, and your brand will enjoy an extra layer of protection on Amazon.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="apartSec">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h2><span class="primary-color">Benefits</span> of Amazon Brand Registry</h2>
                            <p>Brand Registry plays a crucial role in your Seller Central or Vendor Central strategy due to its significant benefits. It offers you greater control over your product listings on Amazon, enables you to establish a stronger brand presence, and fosters increased engagement with customers on Amazon. Below are some of the benefits provided by Amazon Brand Registry:</p>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="assets/images/io10.png" alt=""></div>
                                <h4>Detail Page Display Authority</h4>
                                <p>With Brand Registry, you can manage your product listings and have priority control over the content displayed on your product detail pages. This means your edits and updates take precedence over those made by other sellers.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="assets/images/io10.png" alt=""></div>
                                <h4>A+ Content</h4>
                                <p>Brand Registry enables you to build and publish A+ Content, which showcases your brand story and product features. This helps drive conversion, increase traffic, and boost sales.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="assets/images/io10.png" alt=""></div>
                                <h4>Amazon Brand Story</h4>
                                <p>: Creating a Brand Story allows you to connect with customers and increase brand awareness. It helps distinguish your products from competitors and strengthens your brand presence on Amazon.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="assets/images/io10.png" alt=""></div>
                                <h4>Amazon Stores</h4>
                                <p>Amazon Storefronts provide an excellent platform to introduce your brand story and unique value to shoppers, inspiring them to browse and purchase your products. You can also display all your product offerings in one place.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="assets/images/io10.png" alt=""></div>
                                <h4>Amazon Posts </h4>
                                <p>Similar to social media posts, Amazon Posts can be displayed on your Storefront, product listing pages, and in related product category feeds. With Posts, you can display a photo and link up to ten of your products.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="assets/images/io10.png" alt=""></div>
                                <h4>Sponsored Brand Advertising </h4>
                                <p>Sponsored Brands enable you to grow brand awareness with custom ads that include your logo, a unique headline, and up to three of your products. You can also launch a video ad campaign for your products.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="assets/images/io10.png" alt=""></div>
                                <h4>Brand Analytics & Brand Dashboard</h4>
                                <p>These tools offer unique insights about your brand, such as search terms, purchase behavior, and demographics.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="assets/images/io10.png" alt=""></div>
                                <h4>Customer Engagement Emails</h4>
                                <p>Brand Registered Sellers can send templated emails to their Amazon followers about new or featured products, driving traffic and brand engagement for free.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartCell">
                                <div class="circle"><img src="assets/images/io10.png" alt=""></div>
                                <h4>Manage Experiments</h4>
                                <p>Brand Registered Sellers can experiment with their listings on Amazon and create two different versions of A+ Content, titles, or images. They can then collect insights on traffic and conversion to determine which performed better.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pb-5">
                <div class="container">
                    <div class="amazonWrap">
                        <div class="title">
                            <h2>Trademark Nova's Amazon Brand Registry Service <span>$99</span></h2>
                        </div>
                        <div class="body">
                            <div class="left">
                                <p>To showcase your ecommerce business and sell your brand on Amazon, it’s a MANDATORY requirement to get your brand registered. Amazon Brand Registry is a protection offered by Trademark Nova to assist Amazon sellers register their brand and to remove listings that infringe on their trademark rights. If any other seller is using your trademark logo or name to sell goods or is copying your listings, Trademark Nova will have them banned.</p>
                                <a href="/sequence-form-step1/" class="button-round">START TRADEMARK REGISTRATION</a>
                            </div>
                            <div class="right"><img src="assets/images/amazon.webp" alt=""></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-light-grey ourProcess">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8 text-center mb-5">
                            <h2 class="section-title">How to Enroll in <span class="primary-color"> Amazon </span>Brand Registry</h2>
                            <p>After setting up your active Seller Central or Vendor Central account, you will need to establish a Brand Services account. It is crucial to ensure that the email or username used to create your Seller Central or Vendor Central account matches the one used for your Brand Registry account. This will link your Brand Registry to your Seller Central or Vendor Central account. Once you have gathered all the required details and created your Brand Registry account, the enrollment process is straightforward and fast. You will need to provide information about your brand, selling account, and distribution details.</p>
                        </div>
                        <div class="col-md-12 mt-5">
                            <div class="processRow">
                                <img src="assets/images/arrow.webp" alt="" class="arrow">
                                <div class="cell left">
                                    <div class="circleBig">
                                        <span class="dot topLeft"></span>
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">01</span>
                                        <div class="circle"><img src="assets/images/process-io-10.webp" alt=""></div>
                                    </div>
                                    <h4>Brand Information</h4>
                                    <p>Enter your brand's name, the country of trademark registration, the trademark registration number, and provide an image of your product or packaging.</p>
                                </div>
                                <div class="cell center">
                                    <div class="circleBig">
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">02</span>
                                        <div class="circle"><img src="assets/images/process-io-11.webp" alt=""></div>
                                    </div>
                                    <h4>Selling Account Information</h4>
                                    <p>Indicate whether you have a Seller or Vendor account and select the product categories that best represent your brand's offerings. Additionally, you must provide the top-selling ASINs for each product category where your brand is present.</p>
                                </div>
                                <div class="cell right">
                                    <div class="circleBig">
                                        <span class="dot left"></span>
                                        <span class="dot right"></span>
                                        <span class="num">03</span>
                                        <div class="circle"><img src="assets/images/process-io-12.webp" alt=""></div>
                                    </div>
                                    <h4>Distribution Information</h4>
                                    <p>Disclose if your brand sells to distributors and if your brand licenses trademarks to third-party manufacturers who produce products related to your intellectual property.</p>
                                </div>
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
                                                        1. What is Amazon Brand Registry, and why should I sign up for it?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-five" class="collapse show" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-E">
                                                <div class="card-body">
                                                    Amazon Brand Registry is a service offered by Amazon that helps brand owners protect their intellectual property and control the content of their product listings on Amazon. By signing up for Brand Registry, you can enjoy a range of benefits, including enhanced control over your product listings, access to A+ content, and the ability to create Amazon Stores and Amazon Posts to promote your brand and products.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-F" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-F">
                                            <div class="card-header" role="tab" id="qus-F">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-six" aria-expanded="false" aria-controls="collapse-six">
                                                        2. How do I qualify for Amazon Brand Registry in the US?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-six" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-F">
                                                <div class="card-body">
                                                    To qualify for Amazon Brand Registry in the US, you must have an active registered trademark in the US or in one of several other eligible countries, such as the US, Canada, or the EU. You must also be able to provide evidence of your trademark registration, such as a registration certificate or a screenshot from an online trademark database.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-G" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-G">
                                            <div class="card-header" role="tab" id="qus-G">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-seven" aria-expanded="true" aria-controls="collapse-seven">
                                                        3. What information do I need to provide when signing up for Amazon Brand Registry in the US?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-seven" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-G">
                                                <div class="card-body">
                                                    When signing up for Amazon Brand Registry in the US, you will need to provide basic information about your brand, such as your brand name, trademark registration number, and product images. You will also need to provide information about your selling account and distribution channels.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-H" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-H">
                                            <div class="card-header" role="tab" id="qus-H">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-eight" aria-expanded="true" aria-controls="collapse-eight">
                                                        4. Can I sign up for Amazon Brand Registry if I sell on Amazon as a third-party seller?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-eight" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-H">
                                                <div class="card-body">
                                                    Yes, third-party sellers who sell their own branded products on Amazon can sign up for Amazon Brand Registry. However, you must be the registered trademark owner or have written permission from the trademark owner to use the trademark on Amazon.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-I" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-I">
                                            <div class="card-header" role="tab" id="qus-I">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-nine" aria-expanded="true" aria-controls="collapse-eight">
                                                        5. Can I use Amazon Brand Registry to report trademark infringement on Amazon?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-nine" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-I">
                                                <div class="card-body">
                                                    Yes, one of the main benefits of Amazon Brand Registry is that it gives you the ability to report trademark infringement on Amazon. If you believe that someone is using your trademark without permission on Amazon, you can submit a report through the Brand Registry portal.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-J" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-J">
                                            <div class="card-header" role="tab" id="qus-J">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-ten" aria-expanded="true" aria-controls="collapse-eight">
                                                        6. How long does it take to get approved for Amazon Brand Registry in the US?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-ten" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-J">
                                                <div class="card-body">
                                                    The time it takes to get approved for Amazon Brand Registry in the US can vary, but Amazon typically processes applications within a few weeks. However, if there are any issues with your application or if Amazon requires additional information from you, the process may take longer.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-K" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-K">
                                            <div class="card-header" role="tab" id="qus-K">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-eleven" aria-expanded="true" aria-controls="collapse-eleven">
                                                        7. Can I use Amazon Brand Registry to create product bundles or multi-packs?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-eleven" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-K">
                                                <div class="card-body">
                                                    Yes, Amazon Brand Registry allows you to create virtual bundles, which are collections of your existing products that are sold together on a single product detail page. Virtual bundles can help increase your sales by encouraging customers to purchase multiple products at once.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-L" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-L">
                                            <div class="card-header" role="tab" id="qus-L">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-twelve" aria-expanded="true" aria-controls="collapse-twelve">
                                                        8. Can I use Amazon Brand Registry to track my brand's performance on Amazon?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-twelve" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-L">
                                                <div class="card-body">
                                                    Yes, Amazon Brand Registry includes a range of tools and reports that can help you track your brand's performance on Amazon. For example, you can use the Brand Analytics tool to see how customers are searching for and buying your products on Amazon, and you can use the Brand Dashboard to monitor your brand's health and track key performance metrics.</p>
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
            @include ('includes/testimonial')
               
        </main>

@endsection 