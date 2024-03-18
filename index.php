<?php 
require_once 'db.php';

// Step 1: Check if a cookie exists
if(isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    // Step 2: Generate a unique ID
    $user_id = uniqid('user_'); // You can use any method to generate a unique ID
    
    // Step 3: Save the ID in a cookie
    setcookie('user_id', $user_id, time() + (86400 * 7), "/"); // Cookie valid for 7 days
    
    // Prepare and execute SQL statement to insert the user ID into the database
    $sql = "INSERT INTO users (uniqueID) VALUES ('$user_id')";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<?php include 'meta_tags.php';?>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/kooltech/logo1.png" type="image/x-icon">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/global.css" rel="stylesheet">
<link href="assets/css/elpath.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/woocommerce.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

</head>A


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">

        <!-- mouse-pointer -->
        <div class="mouse-pointer" id="mouse-pointer">
            <div class="icon"><i class="far fa-angle-left"></i><i class="far fa-angle-right"></i></div>
        </div>
        <!-- mouse-pointer end -->

       
        <!-- main header -->
        <?php include'header.php';?>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo">
                    <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required >
                                    <button type="submit"><i class="icon-1"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>P.O. Box 38043 Red Cross Building, Bibi Titi/Morogoro Rd. Dar es salaam</li>
                        <li><a href="tel:+255 785 252 525">+255 785 252 525</a></li>
                        <li><a href="mailto:kb@kooltechware.co.tz">kb@kooltechware.co.tz</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">                     
                        <li><a href=""><span class="fab fa-facebook-square"></span></a></li>                    
                        <li><a href=""><span class="fab fa-instagram"></span></a></li>
                        <li><a href=""><span class="fab fa-linkedin"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


<!-- banner-section -->
        <section class="slider-one centred p_relative">
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                 <div class="slide-item p_relative pt_140 pb_170">
                    <div class="shape-layer">
                        <div class="shape-1 p_absolute l_0 z_1" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                        <div class="shape-2 p_absolute l_0 t_0 z_1" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                        <div class="shape-3 p_absolute r_0 b_0 z_1" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                        <div class="shape-4 p_absolute r_0 b_0 z_1" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                    </div>
                    <div class="image-layer p_absolute" style="background-image:url(assets/images/banner/banner-1.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h2 class="p_relative d_iblock fw_bold fs_80 lh_70 mb_25"><span class="slider-text-anim">Workstation Specialist Partner</span><br /> <span class="slider-text-anim">2023 Africa.</span></h2>
                            <p class="d_block fs_18 mb_45">Awarded Africa's top Workstation Specialist Partner for 2023, we excel in personalized<br />technology solutions.</p>
                            <div class="btn-box clearfix">
                                <a href="contact.php" class="theme-btn theme-btn-two"><span data-text="Talk to us">Talk to us</span></a>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="slide-item p_relative pt_140 pb_170">
                    <div class="shape-layer">
                        <div class="shape-1 p_absolute l_0 z_1" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                        <div class="shape-2 p_absolute l_0 t_0 z_1" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                        <div class="shape-3 p_absolute r_0 b_0 z_1" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                        <div class="shape-4 p_absolute r_0 b_0 z_1" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                    </div>
                    <div class="image-layer p_absolute" style="background-image:url(assets/images/banner/banner-1.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h2 class="p_relative d_iblock fw_bold fs_80 lh_70 mb_25"><span class="slider-text-anim">Platinum Lenovo Partner in</span><br /> <span class="slider-text-anim">Tanzania.</span></h2>
                            <p class="d_block fs_18 mb_45">We proudly serve as a trusted provider of Lenovo products and solutions<br />across Tanzania.</p>
                            <div class="btn-box clearfix">
                                <a href="contact.php" class="theme-btn theme-btn-two"><span data-text="Talk to us">Talk to us</span></a>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="slide-item p_relative pt_140 pb_170">
                    <div class="shape-layer">
                        <div class="shape-1 p_absolute l_0 z_1" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                        <div class="shape-2 p_absolute l_0 t_0 z_1" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                        <div class="shape-3 p_absolute r_0 b_0 z_1" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                        <div class="shape-4 p_absolute r_0 b_0 z_1" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                    </div>
                    <div class="image-layer p_absolute" style="background-image:url(assets/images/banner/banner-2.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h2 class="p_relative d_iblock fw_bold fs_80 lh_70 mb_25"><span class="slider-text-anim">Unleash business potential</span><br /> <span class="slider-text-anim">with cutting-edge tech.</span></h2>
                            <p class="d_block fs_18 mb_45">Empower your business with top-tier technology solutions for computing and beyond.</p>
                            <div class="btn-box clearfix">
                                <a href="shop.php" class="theme-btn theme-btn-two"><span data-text="Check our Products">Check our Products</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->
        <!-- feature-section -->
        <section class="feature-one p_relative pt_50 pb_50">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block pl_20 pr_100 pt_11 pb_9">
                                    <img src="assets/images/badge11.png" alt="">                          
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block pl_20 pr_100 pt_11 pb_9">
                                    <img src="assets/images/badge2.png" alt="22">
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block pl_20 pr_100 pt_11 pb_9">
                                    <img src="assets/images/badge3.png" alt="33">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- feature-section end -->


        <!-- about-one -->
        <section class="about-one p_relative">
            <div class="pattern-layer parallax-scene parallax-scene-2">
                <div data-depth="0.40" class="pattern-1 p_absolute b_radius_50"></div>
                <div data-depth="0.50" class="pattern-2 p_absolute w_80 h_80" style="background-image: url(assets/images/shape/shape-7.png);"></div>
            </div>
            <div class="auto-container">
                <div class="inner-container p_relative sec-pad">
                    <div class="section-line">
                        <div class="line line-1 p_absolute"></div>
                        <div class="line line-2 p_absolute"></div>
                        <div class="line line-3 p_absolute"></div>
                    </div>
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image_block_one">
                                <div data-animation-box class="image-box p_relative d_block mr_30 pb_100 pt_130">
                                    <div class="shape parallax-scene parallax-scene-1">
                                        <div data-depth="0.40" class="shape-1 p_absolute w_95 h_95" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                                        <div data-depth="0.50" class="shape-2 p_absolute w_95 h_95" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                                    </div>
                                    <figure data-animation-text class="overlay-anim-black-bg image image-1 p_relative d_block b_radius_10" data-animation="overlay-animation"><img src="assets/images/kooltech/complimentary/high-angle-employees-working-together-min.jpg" alt="image not displayed"></figure>
                                    <div class="video-inner p_absolute r_140 b_0 pt_60 pb_60 text-center b_radius_10 w_200 z_2" style="background-image: url(assets/images/kooltech/complimentary/setup.jpeg);">
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_one">
                                <div class="content-box p_relative d_block ml_30">
                                    <div class="sec-title p_relative d_block mb_20">
                                        <span class="sub-title p_relative d_iblock fs_15 fw_medium g_color mb_19">About Us</span>
                                        <h2 style="text-align: center;" class="p_relative d_block fs_40 fw_bold mb_0" >Elevate your business with the right solution   </h2>

                                    </div>
                                    <div class="text p_relative d_block mb_25 wow fadeInUp" data-wow-duration="1500ms">
                                        <p>We specialize in network design and implementation, IT solutions, software, technical services and security systems.
                                        Our customer-centric approach, experience and position as the premier tech company, enable us to offer specialized solutions to suit every business.</p>
                                    </div>
                                    <ul class="list-style-one clearfix p_relative d_block mb_30 wow fadeInUp" data-wow-duration="1500ms">
                                        <li class="p_relative d_block fs_16 lh_25 fw_sbold pull-left pl_35 mb_13">Client focused </li>
                                        <li class="p_relative d_block fs_16 lh_25 fw_sbold pull-left pl_35 mb_13">Bespoke solutions </li>
                                        <li class="p_relative d_block fs_16 lh_25 fw_sbold pull-left pl_35 mb_13">Innovative and forward-thinking</li>
                                        <li class="p_relative d_block fs_16 lh_25 fw_sbold pull-left pl_35 mb_13">Effective time and cost management strategies</li>                                     
                                    </ul>
                                    <div class="btn-box wow fadeInUp" data-wow-duration="1500ms">
                                        <p style="text-align: center;"><a href="shop.php" class="theme-btn theme-btn-three">Check out our Products</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-one end -->


        <!-- service-one -->
        <section class="service-one p_relative sec-pad">
            <div class="pattern-layer">
                <div class="pattern-1 p_absolute t_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-9.png);"></div>
                <div class="pattern-2 p_absolute t_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-10.png);"></div>
                <div class="pattern-3 p_absolute b_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-11.png);"></div>
                <div class="pattern-4 p_absolute b_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-12.png);"></div>
            </div>
            <div class="auto-container">
                <div class="sec-title p_relative d_block mb_50 text-center">
                    <span class="sub-title p_relative d_iblock fs_15 fw_medium g_color mb_19">SERVICES</span>
                    <h2 class="p_relative d_block fs_40 fw_bold mb_30">We specialize in</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block pl_40 pt_50 pr_30 pb_35 b_radius_10 tran_5">
                                <div class="icon-box p_relative d_iblock mb_30">
                                    <div class="icon p_relative d_iblock fs_50 g_color tran_5"><i class="icon-11"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-2.png" alt=""></div>
                                    <div class="icon-shape hero-shape-four p_absolute w_90 h_70"></div>
                                </div>
                                <h4 class="p_relative d_block fs_20 lh_30 fw_sbold mb_20"><a href="service-details.html">Network Designs & Implementation </a></h4>
                                <p class="p_relative d_block mb_20">Our adept technical team is competent in identifying and recommending comprehensive end-to-end solutions for any type of network systems.  </p>                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block pl_40 pt_50 pr_30 pb_35 b_radius_10 tran_5">
                                <div class="icon-box p_relative d_iblock mb_30">
                                    <div class="icon p_relative d_iblock fs_50 g_color tran_5"><i class="icon-12"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-5.png" alt=""></div>
                                    <div class="icon-shape hero-shape-four p_absolute w_90 h_70"></div>
                                </div>
                                <h4 class="p_relative d_block fs_20 lh_30 fw_sbold mb_20"><a href="service-details.html">Software solutions</a></h4>
                                <p class="p_relative d_block mb_20">Our range of software solutions allow us to recommend the right product for you. We offer software applications and after sales support to facilitate seamless transition for your business.</p>                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block pl_40 pt_50 pr_30 pb_35 b_radius_10 tran_5">
                                <div class="icon-box p_relative d_iblock mb_30">
                                    <div class="icon p_relative d_iblock fs_50 g_color tran_5"><i class="icon-13"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-4.png" alt=""></div>
                                    <div class="icon-shape hero-shape-four p_absolute w_90 h_70"></div>
                                </div>
                                <h4 class="p_relative d_block fs_20 lh_30 fw_sbold mb_20"><a href="service-details.html">Technical Support</a></h4>
                                <p class="p_relative d_block mb_20">Our technical team is well equipped, qualified and experienced to manage hardware and software breakdowns. In case of any event, we are accessible and always ready to support you.</p>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block pl_40 pt_50 pr_30 pb_35 b_radius_10 tran_5">
                                <div class="icon-box p_relative d_iblock mb_30">
                                    <div class="icon p_relative d_iblock fs_50 g_color tran_5"><i class="icon-14"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-3.png" alt=""></div>
                                    <div class="icon-shape hero-shape-four p_absolute w_90 h_70"></div>
                                </div>
                                <h4 class="p_relative d_block fs_20 lh_30 fw_sbold mb_20"><a href="service-details.html">Security systems/Surveillance </a></h4>
                                <p class="p_relative d_block mb_20">We have the expertise to install and service CCTV cameras, biometric and customized security systems. We offer the right system based on your needs and requirements</p>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-one end -->


        <!-- video-one -->
        <section class="video-one p_relative pt_140 pb_150">
            <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/images/banner/banner-1.jpg);"></div>
            <div class="pattern-layer">
                <div class="pattern-1 p_absolute hero-shape-two l_0 b_0 z_1" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                <div class="pattern-2 p_absolute l_0 b_0 z_1" style="background-image: url(assets/images/shape/shape-14.png);"></div>
                <div class="pattern-3 p_absolute hero-shape z_1" style="background-image: url(assets/images/shape/shape-15.png);"></div>
                <div class="pattern-4 p_absolute t_0 r_0 z_1" style="background-image: url(assets/images/shape/shape-16.png);"></div>
            </div>
            <div class="auto-container">
                <div class="inner-container p_relative d_block">
                    <div class="content-box p_relative d_block z_1">
                        <h2 class="p_relative d_block fs_40 lh_50 fw_bold mb_10">Solutions that pave the way into the future with the right products and technology</h2>
                        <!--<p class="fs_17 mb_20">Explore more</p>-->
                        <div class="btn-box">
                            <a href="shop.php" class="theme-btn theme-btn-two lightbox-image"><span data-text="Look for the product and request for quote">Look for the product and request for quote</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video-one -->


        <!-- chooseus-one -->
        <section class="chooseus-one p_relative">
            <div class="auto-container">
                <div class="inner-container p_relative sec-pad">
                    <div class="section-line">
                        <div class="line line-1 p_absolute"></div>
                        <div class="line line-2 p_absolute"></div>
                        <div class="line line-3 p_absolute"></div>  
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_two">
                                <div class="content-box p_relative d_block mr_130 z_1">
                                    <div class="sec-title p_relative d_block mb_20">
                                        <span class="sub-title p_relative d_iblock fs_15 fw_medium g_color mb_19">CHOOSE KOOL TECHWARE</span>
                                        <h2 class="p_relative d_block fs_40 fw_bold mb_0">Why work with us</h2>
                                    </div>                                  
                                    <div class="inner-box p_relative d_block wow fadeInUp" data-wow-duration="1500ms">
                                        <div class="single-item p_relative d_block pl_80 mb_16">
                                            <div class="icon-box p_absolute l_0 t_3 w_50 h_50 lh_50 text-center b_radius_50 b_shadow_7">
                                                <div class="icon p_relative d_iblock g_color"><i class="icon-15"></i></div>
                                                <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-1.png" alt=""></div>
                                            </div>
                                            <h4 class="d_block fs_20 lh_30 mb_4">Right Expertise </h4>
                                            <p class="mb_0">Our team possesses expertise in cutting-edge technologies and frameworks, ensuring we deliver innovative solutions tailored to client needs.</p>
                                        </div>
                                        <div class="single-item p_relative d_block pl_80 mb_16">
                                            <div class="icon-box p_absolute l_0 t_3 w_50 h_50 lh_50 text-center b_radius_50 b_shadow_7">
                                                <div class="icon p_relative d_iblock g_color"><i class="icon-15"></i></div>
                                                <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-1.png" alt=""></div>
                                            </div>
                                            <h4 class="d_block fs_20 lh_30 mb_4">Product Understanding </h4>
                                            <p class="mb_0">We bring valuable insights and domain knowledge to every project, driving success and client satisfaction.</p>
                                        </div>
                                        <div class="single-item p_relative d_block pl_80">
                                            <div class="icon-box p_absolute l_0 t_3 w_50 h_50 lh_50 text-center b_radius_50 b_shadow_7">
                                                <div class="icon p_relative d_iblock g_color"><i class="icon-15"></i></div>
                                                <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-1.png" alt=""></div>
                                            </div>
                                            <h4 class="d_block fs_20 lh_30 mb_4">Industry Experience </h4>
                                            <p class="mb_0">With years of hands-on experience across various industries, we have successfully executed projects in diverse sectors, demonstrating our ability to adapt and excel in any industry landscape.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image_block_two">
                                <div data-animation-box class="image-box p_relative d_block ml_30 pb_140 mt_20">
                                    <div class="shape parallax-scene parallax-scene-3">
                                       
                                        <div data-depth="0.50" class="shape-2 p_absolute w_95 h_95" style="background-image: url(assets/images/shape/shape-18.png);"></div>
                                        <div data-depth="0.30" class="shape-3 p_absolute w_95 h_95" style="background-image: url(assets/images/shape/shape-18.png);"></div>
                                    </div>
                                    <figure data-animation-text class="overlay-anim-black-bg image image-1 p_relative d_block b_radius_10" data-animation="overlay-animation"><img src="assets/images/resource/about-5.png" alt=""></figure>
                                    <figure data-animation-text class="overlay-anim-black-bg image image-2 p_absolute l_0 b_0 b_radius_10 d_block" data-animation="overlay-animation"><img src="assets/images/resource/1.jpg" alt=""></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-one end -->

        <!-- process-one -->
        <!-- <section class="process-one p_relative sec-pad text-center bg-color-1">
            <div class="pattern-layer">
                <div class="pattern-1 p_absolute t_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-9.png);"></div>
                <div class="pattern-2 p_absolute t_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-10.png);"></div>
                <div class="pattern-3 p_absolute r_0 b_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-11.png);"></div>
                <div class="pattern-4 p_absolute r_0 b_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-12.png);"></div>
            </div>
            <div class="auto-container">
                <div class="sec-title p_relative d_block mb_60">
                    <span class="sub-title p_relative d_iblock fs_15 fw_medium g_color mb_19">Process</span>
                    <h2 class="p_relative d_block fs_40 fw_bold mb_30">Request a Quotation</h2>                   
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                        <div class="processing-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <div class="shape p_absolute" style="background-image: url(assets/images/shape/shape-19.png);"></div>
                                <div class="icon-box p_relative d_iblock w_170 h_170 lh_170 tran_5 b_radius_50 mb_30 z_1">
                                    <div class="icon p_relative d_iblock tran_5 g_color fs_50"><i class="icon-17"></i></div>
                                    <div class="hov-icon p_absolute l_0 t_0 r_0 w_170 h_170 lh_170 r_0 fs_50 tran_5"><i class="icon-16"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-9.png" alt=""></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 mb_15">Make Schedule</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                        <div class="processing-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <div class="shape p_absolute" style="background-image: url(assets/images/shape/shape-19.png);"></div>
                                <div class="icon-box p_relative d_iblock w_170 h_170 lh_170 tran_5 b_radius_50 mb_30 z_1">
                                    <div class="icon p_relative d_iblock tran_5 g_color fs_50"><i class="icon-18"></i></div>
                                    <div class="hov-icon p_absolute l_0 t_0 r_0 w_170 h_170 lh_170 r_0 fs_50 tran_5"><i class="icon-16"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-9.png" alt=""></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 mb_15">Start Discussion</h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                        <div class="processing-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <div class="icon-box p_relative d_iblock w_170 h_170 lh_170 tran_5 b_radius_50 mb_30 z_1">
                                    <div class="icon p_relative d_iblock tran_5 g_color fs_50"><i class="icon-19"></i></div>
                                    <div class="hov-icon p_absolute l_0 t_0 r_0 w_170 h_170 lh_170 r_0 fs_50 tran_5"><i class="icon-16"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-9.png" alt=""></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 mb_15">Enjoy Plan</h4>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- process-one end -->


       
       
        <!-- cta-one -->
        <section class="cta-one p_relative pt_130 pb_140 centred">
            <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/images/background/cta-bg.jpg);"></div>
            <div class="shape">
                <div class="shape-1 hero-shape-three p_absolute z_1"></div>
                <div class="shape-2 p_absolute l_0 b_0 z_1" style="background-image: url(assets/images/shape/shape-26.png);"></div>
                <div class="shape-3 hero-shape-three p_absolute z_1"></div>
                <div class="shape-4 p_absolute t_0 r_0 z_1" style="background-image: url(assets/images/shape/shape-16.png);"></div>
            </div>
            <div class="auto-container">
                <div class="inner-box p_relative z_1">
                    <h2 class="d_block fs_40 fw_bold mb_20">Need help finding the right product? </h2>
                    <p class="fs_17 mb_35">Allow us to assist you in discovering the perfect product to meet your needs.</p>
                    <a href="https://wa.me/255785252525" class="theme-btn theme-btn-two wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"><span data-text="Whatsapp us">Whatsapp us</span></a>
                </div>
            </div>
        </section>
        <!-- cta-one end -->
        <br>

        <!-- clients-one -->
        <section class="clients-one p_relative">
            <div class="auto-container">
                <div class="inner-container p_relative">
                    <div class="section-line">
                        <div class="line line-1 p_absolute"></div>
                        <div class="line line-2 p_absolute"></div>
                        <div class="line line-3 p_absolute"></div>
                    </div>
                    <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                        <div class="clients-logo-box">
                            <figure class="image"><a href="index.php"><img src="assets/images/kooltech/complimentary/logos/L1.png" alt=""></a></figure>
                            <figure class="overlay-image"><a href="index.php"><img src="assets/images/kooltech/complimentary/logos/L1.png" alt=""></a></figure>
                        </div>
                        <div class="clients-logo-box">
                            <figure class="image"><a href="index.php"><img src="assets/images/kooltech/complimentary/logos/L2.png" alt=""></a></figure>
                            <figure class="overlay-image"><a href="index.php"><img src="assets/images/kooltech/complimentary/logos/L2.png" alt=""></a></figure>
                        </div>
                        <div class="clients-logo-box">
                            <figure class="image"><a href="index.php"><img src="assets/images/kooltech/complimentary/logos/L3.png" alt=""></a></figure>
                            <figure class="overlay-image"><a href="index.php"><img src="assets/images/kooltech/complimentary/logos/L3.png" alt=""></a></figure>
                        </div>
                        <div class="clients-logo-box">
                            <figure class="image"><a href="index.php"><img src="assets/images/kooltech/complimentary/logos/L44.png" alt=""></a></figure>
                            <figure class="overlay-image"><a href="index.php"><img src="assets/images/kooltech/complimentary/logos/L44.png" alt=""></a></figure>
                        </div>
                        <div class="clients-logo-box">
                            <figure class="image"><a href="index.php"><img src="assets/images/kooltech/complimentary/logos/L5.png" alt=""></a></figure>
                            <figure class="overlay-image"><a href="index.php"><img src="assets/images/kooltech/complimentary/logos/L5.png" alt=""></a></figure>
                        </div>
                        <div class="clients-logo-box">
                            <figure class="image"><a href="index.php"><img src="assets/images/kooltech/complimentary/logos/L6.png" alt=""></a></figure>
                            <figure class="overlay-image"><a href="index.php"><img src="assets/images/kooltech/complimentary/logos/L6.png" alt=""></a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- clients-one end -->
        <br>

        <!-- news-one -->
        <!-- <section class="news-one p_relative">
            <div class="auto-container">
                <div class="inner-container p_relative sec-pad">
                    <div class="section-line">
                        <div class="line line-1 p_absolute"></div>
                        <div class="line line-2 p_absolute"></div>
                        <div class="line line-3 p_absolute"></div>
                    </div>
                    <div class="upper-box p_relative d_block z_1 pb_30">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                                <div class="sec-title p_relative d_block mb_20">
                                    <span class="sub-title p_relative d_iblock fs_15 fw_medium g_color mb_19">Article</span>
                                    <h2 class="p_relative d_block fs_40 fw_bold mb_0">Latest Articles</h2>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                                <div class="text p_relative d_block pl_100">
                                    <p class="fs_18">Our design services starts and ends with a best-in-class experience strategy that builds brands.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box p_relative d_block b_radius_10 b_shadow_6">
                                    <div class="image-box p_relative d_block">
                                        <figure class="image p_relative d_block"><a href="https://news.lenovo.com/storyhub/company-news/"><img src="assets/images/kooltech/complimentary/logos/lenovo1.jpg" alt=""></a></figure>
                                       
                                    </div>
                                    <div class="lower-content p_relative d_block pt_30 pr_30 pb_40 pl_40">
                                        <ul class="post-info clearfix p_relative d_block mb_5">
                                            <li class="p_relative d_iblock float_left mr_30 fs_16"><a href="https://news.lenovo.com/storyhub/company-news/">Lenovo</a></li>
                                            <li class="p_relative d_iblock float_left fs_16">10 mins Read</li>
                                        </ul>
                                        <h4 class="d_block fs_20 lh_30 mb_15"><a href="https://news.lenovo.com/storyhub/company-news/">Lenovo Unveils Trailblazing Products and Solutions Designed to Power AI for All at MWC 2024.</a></h4>
                                        <p class="d_block mb_20">Latest portfolio of innovative PCs, software, proof of concept, and infrastructure solutions and services enable smarter technology for all.</p>
                                        <div class="btn-box">
                                            <a href="https://news.lenovo.com/storyhub/company-news/" class="theme-btn theme-btn-two"><span data-text="Learn More">Learn More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow slideInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box p_relative d_block b_radius_10 b_shadow_6">
                                    <div class="image-box p_relative d_block">
                                        <figure class="image p_relative d_block"><a href="https://news.lenovo.com/storyhub/company-news/"><img src="assets/images/kooltech/complimentary/logos/lenovo2.jpg" alt=""></a></figure>
                                        
                                    </div>
                                    <div class="lower-content p_relative d_block pt_30 pr_30 pb_40 pl_40">
                                        <ul class="post-info clearfix p_relative d_block mb_5">
                                            <li class="p_relative d_iblock float_left mr_30 fs_16"><a href="https://news.lenovo.com/storyhub/company-news/">Lenovo</a></li>
                                            <li class="p_relative d_iblock float_left fs_16">10 mins Read</li>
                                        </ul>
                                        <h4 class="d_block fs_20 lh_30 mb_15"><a href="https://news.lenovo.com/storyhub/company-news/">Kasper Roersted Joins Lenovo Board of Directors.</a></h4>
                                        <p class="d_block mb_20">Lenovo announced the appointment of Mr. Kasper Roersted as an independent non-executive director of the company, where he will serve as a member of both the.</p>
                                        <div class="btn-box">
                                            <a href="https://news.lenovo.com/storyhub/company-news/" class="theme-btn theme-btn-two"><span data-text="Learn More">Learn More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box p_relative d_block b_radius_10 b_shadow_6">
                                    <div class="image-box p_relative d_block">
                                        <figure class="image p_relative d_block"><a href="https://news.lenovo.com/storyhub/company-news/"><img src="assets/images/kooltech/complimentary/logos/lenovo3.png" alt=""></a></figure>
                                        
                                    </div>
                                    <div class="lower-content p_relative d_block pt_30 pr_30 pb_40 pl_40">
                                        <ul class="post-info clearfix p_relative d_block mb_5">
                                            <li class="p_relative d_iblock float_left mr_30 fs_16"><a href="https://news.lenovo.com/storyhub/company-news/">Lenovo</a></li>
                                            <li class="p_relative d_iblock float_left fs_16">10 mins Read</li>
                                        </ul>
                                        <h4 class="d_block fs_20 lh_30 mb_15"><a href="blog-details.html">Lenovo resumes year-on-year revenue growth </a></h4>
                                        <p class="d_block mb_20">Lenovo announced third quarter results, achieveing year-on-year growth and seizing AI opportunities..</p>
                                        <div class="btn-box">
                                            <a href="https://news.lenovo.com/storyhub/company-news/" class="theme-btn theme-btn-two"><span data-text="Learn More">Learn More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- news-one end -->


        <!-- footer-one -->
       <?php include'footer.php';?>
        <!-- footer-one end -->


        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text g_color">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->
    <?php include 'Whatsapp.php';?>
    </div>
    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/circle-progress.js"></script>
        <script src="assets/js/nav-tool.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body>
<!-- End of .page_wrapper -->
</html>