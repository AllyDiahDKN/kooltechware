    <?php
    // Start session
    session_start();
    require_once 'db.php';
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
<link href="assets/css/responsive.css" rel="stylesheet">

</head>
<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">
        <!-- mouse-pointer -->
        <div class="mouse-pointer display_none" id="mouse-pointer">
            <div class="icon"><i class="far fa-angle-left"></i><i class="far fa-angle-right"></i></div>
        </div>
        <!-- mouse-pointer end -->

        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="index.html"><img src="assets/images/logo-8.png" alt=""></a></figure>
                    <div class="close-search pull-right"><span class="icon-179"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="https://html.tonatheme.com/2023/atrix/index.html">
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

        <!-- sidebar cart item -->
        <div class="xs-sidebar-group info-group info-sidebar">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="#" class="close-side-widget"><i class="icon-179"></i></a>
                    </div>
                    <div class="sidebar-textwidget">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/images/kooltech/logo1.png" alt="" /></a>
                                </div>
                                <div class="text-box">
                                    <h4>About Us</h4>
                                    <p> Our technical department is highly skilled and capable of quickly diagnosing and
                                        solving software and hardware-related issues. We offer comprehensive networking
                                        solutions, which is our strongest area of expertise. From consultation to site survey,
                                        we provide end-to-end services to ensure our clients' needs are met.
                                    </p>
                                </div>
                                <div class="info-inner">
                                    <h4>Find Us Our Location</h4>
                                    <ul class="info clearfix">
                                        <li><i class="icon-180"></i>P.O. Box 38043 Red Cross Building, Bibi Titi/Morogoro Rd. Dar es salaam</li>                                                                                                       
                                        <li><i class="icon-181"></i><a href="mailto:kb@kooltechware.co.tz">kb@kooltechware.co.tz</a></li>
                                        <li><i class="icon-182"></i><a href="tel:+255 785 252 525">+255 785 252 525</a></li>
                                    </ul>
                                </div>
                                <div class="social-inner">
                                    <h4>Follow Us On</h4>
                                    <ul class="social-links clearfix">
                                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>                                    
                                        <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END sidebar widget item -->


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
                        <li><a href=""><span class="fab fa-instagram"></span></a></li>
                        <li><a href=""><span class="fab fa-linkedin"></span></a></li>
                   
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- Page Title -->
        <section class="page-title p_relative centred">
            <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/images/background/page-title-4.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1 class="d_block fs_60 lh_70 fw_bold mb_10">Contact Us</h1>
                    <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                        <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter mr_20"><a href="index.php">Home</a></li>
                        <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter mr_20">Pages</li>
                        <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter">Contact Us 1</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- contactinfo-one -->
        <section class="contactinfo-one p_relative pt_130 centred">
            <div class="bg-color p_absolute l_0 t_0 r_0 bg-color-1"></div>
            <div class="auto-container">
                <div class="sec-title p_relative d_block mb_50">
                    <h5 class="d_block fs_17 lh_20 fw_sbold uppercase mb_15">Get In Touch</h5>
                    <h2 class="d_block fs_40 fw_bold">Have a Project in Mind? <br/>Let’s Contact</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="info-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10 b_shadow_6 pt_40 pr_40 pb_35 pl_40">
                                <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1 mb_25 tran_5">
                                    <div class="icon p_relative d_iblock"><i class="icon-180"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-133.png" alt=""></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 fw_sbold mb_7">Office Location</h4>
                                <p class="font_family_poppins">P.O. Box 38043 Red Cross Building, Bibi Titi/Morogoro Rd. Dar es salaam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="info-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10 b_shadow_6 pt_40 pr_40 pb_35 pl_40">
                                <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1 mb_25 tran_5">
                                    <div class="icon p_relative d_iblock"><i class="icon-181"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-134.png" alt=""></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 fw_sbold mb_7">Company Email</h4>
                                <p class="font_family_poppins"><a href="mailto:kb@kooltechware.co.tz">kb@kooltechware.co.tz</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="info-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10 b_shadow_6 pt_40 pr_40 pb_35 pl_40">
                                <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1 mb_25 tran_5">
                                    <div class="icon p_relative d_iblock"><i class="icon-182"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-135.png" alt=""></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 fw_sbold mb_7">Contact Us</h4>
                                <p class="font_family_poppins"><a href="tel:255 785 252 525">+255 785 252 525</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contactinfo-one end -->


        <!-- contact-three end -->
        <section class="contact-three p_relative sec-pad">
            <div class="shape">
                <div class="shape-1 p_absolute l_90" style="background-image: url(assets/images/shape/shape-208.png);"></div>
                <div class="shape-2 p_absolute r_130 b_0" style="background-image: url(assets/images/shape/shape-209.png);"></div>
            </div>
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 map-column">
                        <div class="map-inner p_relative d_block">
                            <div 
                                class="google-map p_relative d_block" 
                                id="contact-google-map" 
                                data-map-lat="-6.816416" 
                                data-map-lng="39.2796271" 
                                data-icon-path="assets/images/icons/map-marker-2.png"  
                                data-map-title=" Red Cross Building, Bibi Titi/Morogoro Rd. Dar es salaam" 
                                data-map-zoom="16" 
                                data-markers='{
                                    "marker-1": [-6.816416, 39.2796271, "<h4>Branch Office</h4><p>77/99 Morogoro Rd. Dar es salaam</p>","assets/images/icons/map-marker.png"]
                                }'>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                        <div class="content-box p_relative d_block pl_50">
                            <div class="text p_relative d_block mb_30">
                                <h3 class="d_block fs_30 lh_40 fw_bold mb_15">Send a Message</h3>
                                <p class="font_family_poppins">We support businesses through periods of expansion succession, and all other important transitions.</p>
                            </div>
                            <?php
                            // Check if session message exists
                            if (isset($_SESSION['success_message'])) {
                                echo '<div class="success-message"><font color="red">' . $_SESSION['success_message'] . '</font></div>';

                            // End session
                            session_destroy();
                            }
                            ?>
                            <!-- Your HTML content goes here -->
                            <div class="form-inner p_relative ml_5 mr_5">
                                                        <form method="post" action="sendMail.php" id="contact-form"> 
                                                            <div class="row clearfix">
                                                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                                    <input type="text" name="username" placeholder="Your Name" id="username" required="">
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                                    <input type="email" name="email" placeholder="Email Address" id="email" required="">
                                                                </div>
                                                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                                                    <input type="text" name="phone" required="" id="phone" placeholder="Phone Number">
                                                                </div>
                                                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                                                    <input type="text" name="subject" required="" id="subject"placeholder="Subject">
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                                    <textarea name="message" id="message" placeholder="Leave A Comment"></textarea>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                                                    <button class="theme-btn theme-btn-eight" type="submit" name="submit-form">Send Message <i class="icon-4"></i></button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-three end -->

        <!-- footer-three -->
        <?php include'footer.php';?>
        <!-- footer-three end -->


        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text g_color_2">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->
    </div>
    <?php include 'Whatsapp.php';?>
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
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/nav-tool.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.paroller.min.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/map-helper.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>