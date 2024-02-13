<?php
require_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>KoolTechWare| Home</title>

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

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">

        <!-- mouse-pointer -->
        <div class="mouse-pointer" id="mouse-pointer">
            <div class="icon"><i class="far fa-angle-left"></i><i class="far fa-angle-right"></i></div>
        </div>
        <!-- mouse-pointer end -->

        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></figure>
                    <div class="close-search pull-right"><span class="icon-179"></span></div>
                </div>
                <div class="overlay-layer"></div>
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
        </div>

        <!-- main header -->
        <?php include'header.php';?>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/kooltech/logo1.png" alt="" title=""></a></div>
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
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-linkedin"></span></a></li>
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
                            <h2 class="p_relative d_iblock fw_bold fs_80 lh_70 mb_25"><span class="slider-text-anim">Make Your Business with</span><br /> <span class="slider-text-anim">Unique Ideas.</span></h2>
                            <p class="d_block fs_18 mb_45">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia <br />deserunt mollit anim id est laborum.</p>
                            <div class="btn-box clearfix">
                                <a href="index.html" class="theme-btn theme-btn-two"><span data-text="Get Started">Get Started</span></a>
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
                            <h2 class="p_relative d_iblock fw_bold fs_80 lh_70 mb_25"><span class="slider-text-anim">Make Your Business with</span><br /> <span class="slider-text-anim">Unique Ideas.</span></h2>
                            <p class="d_block fs_18 mb_45">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia <br />deserunt mollit anim id est laborum.</p>
                            <div class="btn-box clearfix">
                                <a href="index.html" class="theme-btn theme-btn-two"><span data-text="Get Started">Get Started</span></a>
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
                    <div class="image-layer p_absolute" style="background-image:url(assets/images/banner/banner-3.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h2 class="p_relative d_iblock fw_bold fs_80 lh_70 mb_25"><span class="slider-text-anim">Make Your Business with</span><br /> <span class="slider-text-anim">Unique Ideas.</span></h2>
                            <p class="d_block fs_18 mb_45">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia <br />deserunt mollit anim id est laborum.</p>
                            <div class="btn-box clearfix">
                                <a href="index.html" class="theme-btn theme-btn-two"><span data-text="Get Started">Get Started</span></a>
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
                                    <img src="assets/images/badge1.png" alt="">
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block pl_20 pr_100 pt_11 pb_9">
                                    <img src="assets/images/badge1.png" alt="">
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block pl_20 pr_100 pt_11 pb_9">
                                    <img src="assets/images/badge1.png" alt="">
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
                                    <figure data-animation-text class="overlay-anim-black-bg image image-1 p_relative d_block b_radius_10" data-animation="overlay-animation"><img src="assets/images/resource/about-1.jpg" alt=""></figure>
                                    <div class="video-inner p_absolute r_140 b_0 pt_60 pb_60 text-center b_radius_10 w_200 z_2" style="background-image: url(assets/images/resource/about-2.jpg);">
                                        <div class="video-btn">
                                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn p_relative d_iblock w_80 h_80 lh_85 text-center b_radius_50" data-caption=""><i class="icon-10"></i></a>
                                        </div>
                                    </div>
                                    <div class="skills-box text-center p_absolute t_0 r_0 b_radius_10 pt_40 pr_40 pl_40 pb_25">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12 progress-block">
                                                <div class="single-progress-box">
                                                    <div class="box">
                                                        <div class="piechart p_relative mb_5"  data-fg-color="#f4244f" data-value=".45">
                                                            <span>.45</span>
                                                        </div>
                                                        <h6 class="d_block fs_15 lh_20 fw_bold mb_0">Development</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 progress-block">
                                                <div class="single-progress-box">
                                                    <div class="box">
                                                        <div class="piechart p_relative mb_5"  data-fg-color="#f4244f" data-value=".60">
                                                            <span>.60</span>
                                                        </div>
                                                        <h6 class="d_block fs_15 lh_20 fw_bold mb_0">UX Design</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_one">
                                <div class="content-box p_relative d_block ml_30">
                                    <div class="sec-title p_relative d_block mb_20">
                                        <span class="sub-title p_relative d_iblock fs_15 fw_medium g_color mb_19">About Us</span>
                                        <h2 class="p_relative d_block fs_40 fw_bold mb_0">The Best Solutions for Best Business</h2>

                                    </div>
                                    <div class="text p_relative d_block mb_25 wow fadeInUp" data-wow-duration="1500ms">
                                        <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod ex tempor incididunt labore dolore magna aliquaenim ad minim veniam quis nostrud exercitation laboris.</p>
                                    </div>
                                    <ul class="list-style-one clearfix p_relative d_block mb_30 wow fadeInUp" data-wow-duration="1500ms">
                                        <li class="p_relative d_block fs_16 lh_25 fw_sbold pull-left pl_35 mb_13">Clients Focused</li>
                                        <li class="p_relative d_block fs_16 lh_25 fw_sbold pull-left pl_35 mb_13">Targeting & Positioning</li>
                                        <li class="p_relative d_block fs_16 lh_25 fw_sbold pull-left pl_35 mb_13">We Can Save You Money</li>
                                        <li class="p_relative d_block fs_16 lh_25 fw_sbold pull-left pl_35 mb_13">Tax Advantages</li>
                                        <li class="p_relative d_block fs_16 lh_25 fw_sbold pull-left pl_35">Unique Ideas & Solution</li>
                                    </ul>
                                    <div class="btn-box wow fadeInUp" data-wow-duration="1500ms">
                                        <a href="about.html" class="theme-btn theme-btn-three"><span data-text="Get A Quote">Get A Quote</span></a>
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
                    <h2 class="p_relative d_block fs_40 fw_bold mb_30">Great Business Solutions <br />System</h2>
                    <p class="d_block fs_18">Amet consectur adipiscing elit sed eiusmod ex tempor incididunt <br />labore dolore magna aliquaenim ad minim veniam.</p>
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
                                <h4 class="p_relative d_block fs_20 lh_30 fw_sbold mb_20"><a href="service-details.html">Strategic Consulting Services</a></h4>
                                <p class="p_relative d_block mb_20">Lorem ipsum dolor sit elit consectetur sed eiusmod tempor labore.</p>
                                <div class="link">
                                    <a href="service-details.html" class="p_relative d_iblock fs_15 lh_25 fw_sbold">Learn more<i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block pl_40 pt_50 pr_30 pb_35 b_radius_10 tran_5">
                                <div class="icon-box p_relative d_iblock mb_30">
                                    <div class="icon p_relative d_iblock fs_50 g_color tran_5"><i class="icon-12"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-3.png" alt=""></div>
                                    <div class="icon-shape hero-shape-four p_absolute w_90 h_70"></div>
                                </div>
                                <h4 class="p_relative d_block fs_20 lh_30 fw_sbold mb_20"><a href="service-details.html">Best Financial Advice</a></h4>
                                <p class="p_relative d_block mb_20">Lorem ipsum dolor sit elit consectetur sed eiusmod tempor labore.</p>
                                <div class="link">
                                    <a href="service-details.html" class="p_relative d_iblock fs_15 lh_25 fw_sbold">Learn more<i class="icon-4"></i></a>
                                </div>
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
                                <h4 class="p_relative d_block fs_20 lh_30 fw_sbold mb_20"><a href="service-details.html">Investment & Management</a></h4>
                                <p class="p_relative d_block mb_20">Lorem ipsum dolor sit elit consectetur sed eiusmod tempor labore.</p>
                                <div class="link">
                                    <a href="service-details.html" class="p_relative d_iblock fs_15 lh_25 fw_sbold">Learn more<i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block pl_40 pt_50 pr_30 pb_35 b_radius_10 tran_5">
                                <div class="icon-box p_relative d_iblock mb_30">
                                    <div class="icon p_relative d_iblock fs_50 g_color tran_5"><i class="icon-14"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-5.png" alt=""></div>
                                    <div class="icon-shape hero-shape-four p_absolute w_90 h_70"></div>
                                </div>
                                <h4 class="p_relative d_block fs_20 lh_30 fw_sbold mb_20"><a href="service-details.html">Corporate Clients & Services</a></h4>
                                <p class="p_relative d_block mb_20">Lorem ipsum dolor sit elit consectetur sed eiusmod tempor labore.</p>
                                <div class="link">
                                    <a href="service-details.html" class="p_relative d_iblock fs_15 lh_25 fw_sbold">Learn more<i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-one end -->


        <!-- video-one -->
        <section class="video-one p_relative pt_140 pb_150">
            <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/images/background/video-bg.jpg);"></div>
            <div class="pattern-layer">
                <div class="pattern-1 p_absolute hero-shape-two l_0 b_0 z_1" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                <div class="pattern-2 p_absolute l_0 b_0 z_1" style="background-image: url(assets/images/shape/shape-14.png);"></div>
                <div class="pattern-3 p_absolute hero-shape z_1" style="background-image: url(assets/images/shape/shape-15.png);"></div>
                <div class="pattern-4 p_absolute t_0 r_0 z_1" style="background-image: url(assets/images/shape/shape-16.png);"></div>
            </div>
            <div class="auto-container">
                <div class="inner-container p_relative d_block">
                    <div class="video-btn p_absolute r_0 z_1">
                        <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn p_relative d_iblock w_100 h_100 lh_100 text-center b_radius_50 fs_25" data-caption=""><i class="icon-10"></i></a>
                    </div>
                    <div class="content-box p_relative d_block z_1">
                        <h2 class="p_relative d_block fs_40 lh_50 fw_bold mb_10">Services That Lead The Way To Better Business.</h2>
                        <p class="fs_17 mb_20">Fruit is their fill meat, hath abundantly place meat don't stars so and which signs third second after seasons under.</p>
                        <div class="btn-box">
                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="theme-btn theme-btn-two lightbox-image"><span data-text="Play Video">Play Video</span></a>
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
                                        <span class="sub-title p_relative d_iblock fs_15 fw_medium g_color mb_19">CHOOSE Atrix</span>
                                        <h2 class="p_relative d_block fs_40 fw_bold mb_0">Few Reasons Why You Should Choose Us</h2>
                                    </div>
                                    <div class="text p_relative d_block mb_25 wow fadeInUp" data-wow-duration="1500ms">
                                        <p class="fs_18">Fruit is their fill meat, hath abundantly place meat don't stars.</p>
                                    </div>
                                    <div class="inner-box p_relative d_block wow fadeInUp" data-wow-duration="1500ms">
                                        <div class="single-item p_relative d_block pl_80 mb_16">
                                            <div class="icon-box p_absolute l_0 t_3 w_50 h_50 lh_50 text-center b_radius_50 b_shadow_7">
                                                <div class="icon p_relative d_iblock g_color"><i class="icon-15"></i></div>
                                                <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-1.png" alt=""></div>
                                            </div>
                                            <h4 class="d_block fs_20 lh_30 mb_4">Innovative Business</h4>
                                            <p class="mb_0">Lorem ipsum dolor sit elit consectetur sed tempor.</p>
                                        </div>
                                        <div class="single-item p_relative d_block pl_80 mb_16">
                                            <div class="icon-box p_absolute l_0 t_3 w_50 h_50 lh_50 text-center b_radius_50 b_shadow_7">
                                                <div class="icon p_relative d_iblock g_color"><i class="icon-15"></i></div>
                                                <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-1.png" alt=""></div>
                                            </div>
                                            <h4 class="d_block fs_20 lh_30 mb_4">Expert Marketing</h4>
                                            <p class="mb_0">Lorem ipsum dolor sit elit consectetur sed tempor.</p>
                                        </div>
                                        <div class="single-item p_relative d_block pl_80">
                                            <div class="icon-box p_absolute l_0 t_3 w_50 h_50 lh_50 text-center b_radius_50 b_shadow_7">
                                                <div class="icon p_relative d_iblock g_color"><i class="icon-15"></i></div>
                                                <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-1.png" alt=""></div>
                                            </div>
                                            <h4 class="d_block fs_20 lh_30 mb_4">Audiance Analysis</h4>
                                            <p class="mb_0">Lorem ipsum dolor sit elit consectetur sed tempor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image_block_two">
                                <div data-animation-box class="image-box p_relative d_block ml_30 pb_140 mt_20">
                                    <div class="shape parallax-scene parallax-scene-3">
                                        <div data-depth="0.40" class="shape-1 p_absolute w_150 h_150 z_2" style="background-image: url(assets/images/shape/shape-17.png);"></div>
                                        <div data-depth="0.50" class="shape-2 p_absolute w_95 h_95" style="background-image: url(assets/images/shape/shape-18.png);"></div>
                                        <div data-depth="0.30" class="shape-3 p_absolute w_95 h_95" style="background-image: url(assets/images/shape/shape-18.png);"></div>
                                    </div>
                                    <figure data-animation-text class="overlay-anim-black-bg image image-1 p_relative d_block b_radius_10" data-animation="overlay-animation"><img src="assets/images/resource/chooseus-1.jpg" alt=""></figure>
                                    <figure data-animation-text class="overlay-anim-black-bg image image-2 p_absolute l_0 b_0 b_radius_10 d_block" data-animation="overlay-animation"><img src="assets/images/resource/chooseus-2.jpg" alt=""></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-one end -->

        <!-- process-one -->
        <section class="process-one p_relative sec-pad text-center bg-color-1">
            <div class="pattern-layer">
                <div class="pattern-1 p_absolute t_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-9.png);"></div>
                <div class="pattern-2 p_absolute t_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-10.png);"></div>
                <div class="pattern-3 p_absolute r_0 b_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-11.png);"></div>
                <div class="pattern-4 p_absolute r_0 b_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-12.png);"></div>
            </div>
            <div class="auto-container">
                <div class="sec-title p_relative d_block mb_60">
                    <span class="sub-title p_relative d_iblock fs_15 fw_medium g_color mb_19">Process</span>
                    <h2 class="p_relative d_block fs_40 fw_bold mb_30">Always Work Done by The <br />Following Process</h2>
                    <p>Amet consectur adipiscing elit sed eiusmod ex tempor incididunt <br />labore dolore aliquaenim minim veniam.</p>
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
                                <p>Lorem ipsum dolor sit amet adipelit sed eiusmtempor dolore.</p>
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
                                <p>Lorem ipsum dolor sit amet adipelit sed eiusmtempor dolore.</p>
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
                                <p>Lorem ipsum dolor sit amet adipelit sed eiusmtempor dolore.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- process-one end -->


        <!-- skills-one -->
        <section class="skills-one p_relative">
            <div class="auto-container">
                <div class="inner-container p_relative sec-pad">
                    <div class="section-line">
                        <div class="line line-1 p_absolute"></div>
                        <div class="line line-2 p_absolute"></div>
                        <div class="line line-3 p_absolute"></div>
                    </div>
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image_block_three">
                                <div data-animation-box class="image-box p_relative d_block mr_30 pr_190 pt_90">
                                    <div class="shape parallax-scene parallax-scene-4">
                                        <div data-depth="0.50" class="shape-1 p_absolute w_65 h_65" style="background-image: url(assets/images/shape/shape-20.png);"></div>
                                        <div data-depth="0.30" class="shape-2 p_absolute w_95 h_95" style="background-image: url(assets/images/shape/shape-18.png);"></div>
                                    </div>
                                    <figure data-animation-text class="overlay-anim-black-bg image image-2 p_absolute t_0 r_0 b_radius_10" data-animation="overlay-animation"><img src="assets/images/resource/skills-2.jpg" alt=""></figure>
                                    <figure data-animation-text class="overlay-anim-black-bg image image-1 p_relative d_block b_radius_10" data-animation="overlay-animation"><img src="assets/images/resource/skills-1.jpg" alt=""></figure>
                                    <div class="text p_absolute r_30 b_30 pt_25 pr_70 pl_30 pb_25 z_1">
                                        <h4 class="p_relative d_block fs_20 lh_30 mb_0">Custom Business Solutions Since 1995.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_three">
                                <div class="content-box p_relative d_block ml_30">
                                    <div class="sec-title p_relative d_block mb_20">
                                        <span class="sub-title p_relative d_iblock fs_15 fw_medium g_color mb_19">Expertise</span>
                                        <h2 class="p_relative d_block fs_40 fw_bold mb_30">Make Your Dream Come True & Great Number</h2>
                                    </div>
                                    <div class="text p_relative d_block mb_30 wow fadeInUp" data-wow-duration="1500ms">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                                    </div>
                                    <div class="progress-inner p_relative d_block wow fadeInUp" data-wow-duration="1500ms">
                                        <div class="progress-box p_relative d_block mb_35">
                                            <h6 class="d_block fs_16 lh_20 mb_7">Analysis</h6>
                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="95%"></div>
                                                <div class="count-text p_absolute r_0 b_10 fs_16">95%</div>
                                            </div>
                                        </div>
                                        <div class="progress-box p_relative d_block mb_35">
                                            <h6 class="d_block fs_16 lh_20 mb_7">SEO Audit</h6>
                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="70%"></div>
                                                <div class="count-text p_absolute r_0 b_10 fs_16">70%</div>
                                            </div>
                                        </div>
                                        <div class="progress-box p_relative d_block">
                                            <h6 class="d_block fs_16 lh_20 mb_7">Optimization</h6>
                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="90%"></div>
                                                <div class="count-text p_absolute r_0 b_10 fs_16">90%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- skills-one end -->


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
                            <figure class="image"><a href="index.html"><img src="assets/images/clients/clients-logo-1.png" alt=""></a></figure>
                            <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/clients-logo-1.png" alt=""></a></figure>
                        </div>
                        <div class="clients-logo-box">
                            <figure class="image"><a href="index.html"><img src="assets/images/clients/clients-logo-2.png" alt=""></a></figure>
                            <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/clients-logo-2.png" alt=""></a></figure>
                        </div>
                        <div class="clients-logo-box">
                            <figure class="image"><a href="index.html"><img src="assets/images/clients/clients-logo-3.png" alt=""></a></figure>
                            <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/clients-logo-3.png" alt=""></a></figure>
                        </div>
                        <div class="clients-logo-box">
                            <figure class="image"><a href="index.html"><img src="assets/images/clients/clients-logo-4.png" alt=""></a></figure>
                            <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/clients-logo-4.png" alt=""></a></figure>
                        </div>
                        <div class="clients-logo-box">
                            <figure class="image"><a href="index.html"><img src="assets/images/clients/clients-logo-5.png" alt=""></a></figure>
                            <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/clients-logo-5.png" alt=""></a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- clients-one end -->

        <!-- testimonial-one -->
        <section class="testimonial-one p_relative">
            <div class="auto-container">
                <div class="inner-container p_relative pt_150 pb_140">
                    <div class="section-line">
                        <div class="line line-1 p_absolute"></div>
                        <div class="line line-2 p_absolute"></div>
                        <div class="line line-3 p_absolute"></div>
                    </div>
                    <div class="sec-title p_relative d_block mb_60 text-center z_1">
                        <span class="sub-title p_relative d_iblock fs_15 fw_medium g_color mb_19">Testimonials</span>
                        <h2 class="p_relative d_block fs_40 fw_bold mb_30">Trusted by More Than 3k Clients <br />Around The World</h2>
                        <p>Amet consectur adipiscing elit sed eiusmod ex tempor incididunt <br />labore dolore aliquaenim minim veniam.</p>
                    </div>
                    <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                                    <ul class="rating clearfix p_relative d_block mb_15">
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix.</p>
                                </div>
                                <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                                    <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-1.png" alt=""></figure>
                                    <h4 class="d_block fs_20 lh_30 mb_2">Kevin Spacey</h4>
                                    <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                                    <ul class="rating clearfix p_relative d_block mb_15">
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor amet consectur elit dicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix unde omnis iste natus error sit voluptatem accusantium doloreque laudantum.</p>
                                </div>
                                <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                                    <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-2.png" alt=""></figure>
                                    <h4 class="d_block fs_20 lh_30 mb_2">Nicolas Lawson</h4>
                                    <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                                    <ul class="rating clearfix p_relative d_block mb_15">
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor quis incididunt enim.</p>
                                </div>
                                <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                                    <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-3.png" alt=""></figure>
                                    <h4 class="d_block fs_20 lh_30 mb_2">Keanu Reeves</h4>
                                    <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                                    <ul class="rating clearfix p_relative d_block mb_15">
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix.</p>
                                </div>
                                <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                                    <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-1.png" alt=""></figure>
                                    <h4 class="d_block fs_20 lh_30 mb_2">Kevin Spacey</h4>
                                    <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                                    <ul class="rating clearfix p_relative d_block mb_15">
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor amet consectur elit dicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix unde omnis iste natus error sit voluptatem accusantium doloreque laudantum.</p>
                                </div>
                                <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                                    <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-2.png" alt=""></figure>
                                    <h4 class="d_block fs_20 lh_30 mb_2">Nicolas Lawson</h4>
                                    <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                                    <ul class="rating clearfix p_relative d_block mb_15">
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor quis incididunt enim.</p>
                                </div>
                                <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                                    <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-3.png" alt=""></figure>
                                    <h4 class="d_block fs_20 lh_30 mb_2">Keanu Reeves</h4>
                                    <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                                    <ul class="rating clearfix p_relative d_block mb_15">
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix.</p>
                                </div>
                                <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                                    <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-1.png" alt=""></figure>
                                    <h4 class="d_block fs_20 lh_30 mb_2">Kevin Spacey</h4>
                                    <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                                    <ul class="rating clearfix p_relative d_block mb_15">
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor amet consectur elit dicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix unde omnis iste natus error sit voluptatem accusantium doloreque laudantum.</p>
                                </div>
                                <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                                    <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-2.png" alt=""></figure>
                                    <h4 class="d_block fs_20 lh_30 mb_2">Nicolas Lawson</h4>
                                    <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                                    <ul class="rating clearfix p_relative d_block mb_15">
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor quis incididunt enim.</p>
                                </div>
                                <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                                    <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-3.png" alt=""></figure>
                                    <h4 class="d_block fs_20 lh_30 mb_2">Keanu Reeves</h4>
                                    <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-one -->

        <!-- funfact-one -->
        <section class="funfact-one pt_90 pb_80 text-center p_relative">
            <div class="shape parallax-scene parallax-scene-5">
                <div data-depth="0.50" class="shape-1 p_absolute" style="background-image: url(assets/images/shape/shape-21.png);"></div>
                <div data-depth="0.30" class="shape-2 p_absolute" style="background-image: url(assets/images/shape/shape-22.png);"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="counter-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <div class="count-outer count-box p_relative d_block fs_70 lh_70 g_color fw_bold mb_17">
                                    <span class="count-text" data-speed="2500" data-stop="90">0</span>
                                </div>
                                <p class="p_relative d_block fs_16 lh_20 fw_medium color_white">Successful projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="counter-block-one wow slideInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <div class="count-outer count-box p_relative d_block fs_70 lh_70 g_color fw_bold mb_17">
                                    <span class="count-text" data-speed="2500" data-stop="2.6">0</span><span>M</span>
                                </div>
                                <p class="p_relative d_block fs_16 lh_20 fw_medium color_white">Satisfied Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="counter-block-one wow slideInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <div class="count-outer count-box p_relative d_block fs_70 lh_70 g_color fw_bold mb_17">
                                    <span class="count-text" data-speed="2500" data-stop="35">0</span>
                                </div>
                                <p class="p_relative d_block fs_16 lh_20 fw_medium color_white">Experienced Staff</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="counter-block-one wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <div class="count-outer count-box p_relative d_block fs_70 lh_70 g_color fw_bold mb_17">
                                    <span class="count-text" data-speed="2500" data-stop="10">0</span>
                                </div>
                                <p class="p_relative d_block fs_16 lh_20 fw_medium color_white">Awards Win</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-one end -->

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
                    <h2 class="d_block fs_40 fw_bold mb_20">Need Help Finding The Best Solution To Operate Your Business?</h2>
                    <p class="fs_17 mb_35">We help our clients succeed by creating brand identities, digital <br />experiences, and print materials that communicate clearly.</p>
                    <a href="index.html" class="theme-btn theme-btn-two wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"><span data-text="Get Started">Get Started</span></a>
                </div>
            </div>
        </section>
        <!-- cta-one end -->


        <!-- news-one -->
        <section class="news-one p_relative">
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
                                        <figure class="image p_relative d_block"><a href="blog-details.html"><img src="assets/images/news/news-1.jpg" alt=""></a></figure>
                                        <div class="post-date p_absolute l_30 t_30 b_shadow_6 pt_1 pr_19 pb_1 pl_19 z_1">
                                            <h6 class="p_relative d_iblock fs_15 fw_medium g_color">Oct 20, 2021</h6>
                                        </div>
                                    </div>
                                    <div class="lower-content p_relative d_block pt_30 pr_30 pb_40 pl_40">
                                        <ul class="post-info clearfix p_relative d_block mb_5">
                                            <li class="p_relative d_iblock float_left mr_30 fs_16"><a href="blog-details.html">Ashley Bronks</a></li>
                                            <li class="p_relative d_iblock float_left fs_16">10 mins Read</li>
                                        </ul>
                                        <h4 class="d_block fs_20 lh_30 mb_15"><a href="blog-details.html">Unsatiable Entreaties May Collecting Power.</a></h4>
                                        <p class="d_block mb_20">Lorem ipsum dolor sit amet consectur adipisicing sed.</p>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn theme-btn-two"><span data-text="Learn More">Learn More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow slideInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box p_relative d_block b_radius_10 b_shadow_6">
                                    <div class="image-box p_relative d_block">
                                        <figure class="image p_relative d_block"><a href="blog-details.html"><img src="assets/images/news/news-2.jpg" alt=""></a></figure>
                                        <div class="post-date p_absolute l_30 t_30 b_shadow_6 pt_1 pr_19 pb_1 pl_19 z_1">
                                            <h6 class="p_relative d_iblock fs_15 fw_medium g_color">Oct 15, 2021</h6>
                                        </div>
                                    </div>
                                    <div class="lower-content p_relative d_block pt_30 pr_30 pb_40 pl_40">
                                        <ul class="post-info clearfix p_relative d_block mb_5">
                                            <li class="p_relative d_iblock float_left mr_30 fs_16"><a href="blog-details.html">Ashley Bronks</a></li>
                                            <li class="p_relative d_iblock float_left fs_16">10 mins Read</li>
                                        </ul>
                                        <h4 class="d_block fs_20 lh_30 mb_15"><a href="blog-details.html">Need Help Finding The Best Solution.</a></h4>
                                        <p class="d_block mb_20">Lorem ipsum dolor sit amet consectur adipisicing sed.</p>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn theme-btn-two"><span data-text="Learn More">Learn More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box p_relative d_block b_radius_10 b_shadow_6">
                                    <div class="image-box p_relative d_block">
                                        <figure class="image p_relative d_block"><a href="blog-details.html"><img src="assets/images/news/news-3.jpg" alt=""></a></figure>
                                        <div class="post-date p_absolute l_30 t_30 b_shadow_6 pt_1 pr_19 pb_1 pl_19 z_1">
                                            <h6 class="p_relative d_iblock fs_15 fw_medium g_color">Oct 12, 2021</h6>
                                        </div>
                                    </div>
                                    <div class="lower-content p_relative d_block pt_30 pr_30 pb_40 pl_40">
                                        <ul class="post-info clearfix p_relative d_block mb_5">
                                            <li class="p_relative d_iblock float_left mr_30 fs_16"><a href="blog-details.html">Ashley Bronks</a></li>
                                            <li class="p_relative d_iblock float_left fs_16">10 mins Read</li>
                                        </ul>
                                        <h4 class="d_block fs_20 lh_30 mb_15"><a href="blog-details.html">Make Your Dream Come True & Great Number</a></h4>
                                        <p class="d_block mb_20">Lorem ipsum dolor sit amet consectur adipisicing sed.</p>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn theme-btn-two"><span data-text="Learn More">Learn More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
