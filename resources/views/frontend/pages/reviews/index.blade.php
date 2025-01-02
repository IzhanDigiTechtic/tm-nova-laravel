<?php
include("../backend/connectiondb.php");
include "../includes/var.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../includes/compatibility.php") ?>
    <title>Client Testimonials | Trademark Nova</title>
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
            <section class="home-banner" style="background: url(assets/images/dissolution-ban.webp) center/cover no-repeat;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <h3 class="banner-subtitle">Our Clients' Testimonials</h3>
                                <h2 class="banner-title">Join The Satisfied Clients' Tribe at <span>Trademark Nova!</span></h2>
                                <div class="banner-text">
                                    <p>Don't hesitate to check out what our customers have to say about the services of Trademark Nova and become a part of our community of happy customers today!</p>
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
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h3 class="section-title">Customer <span class="primary-color">Reviews</span></h3>
                            <p>At Trademark Nova, we take pride in the positive feedback we receive from our customers and we want to share their experiences with you. By discovering what our customers are saying, you can get an idea of the level of satisfaction that others have found in our offerings. We're confident that once you join our satisfied testimonial tribe, you'll be just as happy with our services as they are. </p>
                        </div>

                        <?php
                        $batch = mysqli_query($con, "Select t1." . $common3 . ",t1." . $table24Col1 . ",t1." . $common9 . ",t1." . $table34Col1 . "
						,t1." . $table34Col3 . " From " . $table34 . " t1 where t1." . $common7 . "='1' and t1." . $table34Col2 . "='1' Order by " . $common2 . " DESC");
                        while ($item = mysqli_fetch_array($batch)) {
                        ?>
                            <div class="col-md-6">
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <p>"<?= $item[2] ?>"</p>
                                        <h5>- <?= $item[0] ?> <span>( <?= $item[3] ?>)</span></h5>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>


                    </div>
                </div>
            </section>

            <section class="bg-light-grey writeReviewSec">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h3 class="section-title">Write a <span class="primary-color">Review</span></h3>
                            <p>We request you to leave an honest reviews, so that other potential customers make informed decisions and you can also provide valuable feedback to Trademark Nova on areas we need to improve. Looking forward to your feedback!</p>
                        </div>
                        <div class="col-md-8">
                            <form action="backend/reviewadd.php" method="POST" class="reviewForm row">
                                <div class="col-md-6"><input type="text" name="reviewName" class="form-control" placeholder="Enter Your Name" required></div>
                                <div class="col-md-6"><input type="text" name="reviewEmail" class="form-control" placeholder="Enter Your Email" required></div>

                                <div class="col-md-12"><input type="text" name="reviewCompany" class="form-control" placeholder="Enter Your Company" required></div>
                                <div class="col-md-12">
                                    <textarea name="reviewMsg" id="" rows="8" class="form-control" placeholder="Write Review" required></textarea>
                                    <!--<div class="uploadVideo">-->
                                    <!--    <input type="file">-->
                                    <!--    <i class="fa fa-video"></i> Upload Video-->
                                    <!--</div>-->
                                    <div class="rating">
                                        <label for="">Rating</label>
                                        <select name="reviewRating" required>
                                            <option value="5">5.0</option>
                                            <option value="4">4.0</option>
                                            <option value="3">3.0</option>
                                            <option value="2">2.0</option>
                                            <option value="1">1.0</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="button-round w-100">Submit Your Review <i class="fa fa-right-arrow"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <?php include("../includes/footer.php") ?>
        <?php include("../includes/scripts.php") ?>