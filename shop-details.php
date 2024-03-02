<?php
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
<link rel="icon" href="assets/images/favicon-11.ico" type="image/x-icon">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/global.css" rel="stylesheet">
<link href="assets/css/jquery-ui.css" rel="stylesheet">
<link href="assets/css/nice-select.css" rel="stylesheet">
<link href="assets/css/elpath.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/woocommerce.css" rel="stylesheet">
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
                                    <a href="index.html"><img src="assets/images/logo-8.png" alt="" /></a>
                                </div>
                                <div class="text-box">
                                    <h4>About Atrix</h4>
                                    <p>Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor incididunt labore magna aliqua enim minim veniam nostrud exercitation aboris nis aliquip exeo.</p>
                                </div>
                                <div class="info-inner">
                                    <h4>Find Us Our Location</h4>
                                    <ul class="info clearfix">
                                        <li><i class="icon-180"></i>629 12th St, Modesto, CA 95354 United States</li>
                                        <li><i class="icon-181"></i><a href="mailto:atrixmain@gmail.com">atrixmain@gmail.com</a></li>
                                        <li><i class="icon-182"></i><a href="tel:123045615523">+1 (230)-456-155-23</a></li>
                                    </ul>
                                </div>
                                <div class="social-inner">
                                    <h4>Follow Us On</h4>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
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
        <?php include 'header.php';?>
        <!-- main-header end -->


        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/mobile-logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- Page Title -->
        <section class="page-title about-page-5 style-two p_relative centred">
            <div class="pattern-layer">
                <div class="shape-1 p_absolute l_120 t_120 rotate-me" style="background-image: url(assets/images/shape/shape-176.png);"></div>
                <div class="shape-2 p_absolute t_180 r_170 float-bob-y" style="background-image: url(assets/images/shape/shape-56.png);"></div>
                <div class="shape-3 p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-189.png);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <h1 class="d_block fs_60 lh_70 fw_bold mb_10">Shop Details</h1>
                    <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                        <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20"><a href="index.html">Home</a></li>
                        <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20">Shop</li>
                        <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte">Shop Details 1</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- shop-details -->
        <section class="shop-details p_relative pt_140 pb_80">
            <div class="auto-container">
                <div class="product-details-content p_relative d_block mb_100">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box p_relative d_block">
                                <figure class="image"><img src="assets/images/shop/shop-13.jpg" alt=""></figure>
                                <div class="preview-link p_absolute t_20 r_20"><a href="assets/images/shop/shop-13.jpg" class="lightbox-image p_relative d_iblock fs_20 centred z_1 w_50 h_50 color_black lh_50" data-fancybox="gallery"><i class="far fa-search-plus"></i></a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="product-details p_relative d_block ml_20">
                                <h2 class="d_block fs_30 lh_40 fw_sbold font_family_inter mb_5">Lenovo IdeaPad Slim 250U 15.6" Laptop</h2>
                                <div class="customer-rating clearfix p_relative d_block mb_5">
                                    <ul class="rating clearfix">
                                        <li class="p_relative d_iblock pull-left mr_3 fs_13"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left mr_3 fs_13"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left mr_3 fs_13"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left mr_3 fs_13"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left mr_5 fs_13"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_14"><a href="shop.html" class="color_black">(3)</a></li>
                                    </ul>
                                </div>
                                <span class="price p_relative d_block fs_20 lh_30 fw_medium color_black mb_25 font_family_inter">$70.30</span>
                                <div class="text p_relative d_block mb_30">
                                    <p class="font_family_poppins mb_25">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspic atis unde omnis iste natus.</p>
                                    <p class="font_family_poppins">Error sit voluptam accusan enim ipsam voluptam quia voluptas sit aspern odit aut fugit.</p>
                                </div>
                                <div class="addto-cart-box p_relative d_block mb_35"> 
                                    <ul class="clearfix">
                                        <li class="item-quantity p_relative d_block float_left mr_10"><input class="quantity-spinner" type="text" value="1" name="quantity"></li>
                                        <li class="p_relative d_block float_left mr_10"><button type="button" class="theme-btn theme-btn-eight">Add To Cart</button></li>
                                        <li class="p_relative d_block float_left mr_10"><a href="shop-details.html" class="d_iblock p_relative fs_20 lh_50 w_50 h_50 centred b_radius_5"><i class="icon-154"></i></a></li>
                                        <li class="p_relative d_block float_left mr_10"><a href="shop.html" class="d_iblock p_relative fs_20 lh_50 w_50 h_50 centred b_radius_5"><i class="icon-156"></i></a></li>
                                    </ul>
                                </div>
                                <div class="other-option">
                                    <ul class="list">
                                        <li class="p_relative d_block fs_16 font_family_poppins mb_5"><span class="fw_medium color_black">Product ID:</span> AZ-2305</li>
                                        <li class="p_relative d_block fs_16 font_family_poppins mb_5"><span class="fw_medium color_black">Category</span> Accessories</li>
                                        <li class="p_relative d_block fs_16 font_family_poppins"><span class="fw_medium color_black">Tags:</span> <a href="shop-details.html">Laptop</a>, <a href="shop-details.html">Device</a>, <a href="shop-details.html">Desktop</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-discription p_relative d_block mb_80">
                    <div class="tabs-box">
                        <div class="tab-btn-box p_relative d_block mb_35">
                            <ul class="tab-btns tab-buttons clearfix">
                                <li class="tab-btn active-btn p_relative d_iblock fs_18 font_family_inter lh_20 float_left fw_medium z_1 mr_35 tran_5" data-tab="#tab-1">Description</li>
                                <li class="tab-btn p_relative d_iblock fs_18 font_family_inter lh_20 float_left fw_medium z_1 tran_5" data-tab="#tab-2">Reviews (1)</li>
                            </ul>
                        </div>
                        <div class="tabs-content">
                            <div class="tab active-tab" id="tab-1">
                                <div class="content-box">
                                    <p class="font_family_poppins mb_25">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.enim ad minim veniam quis nostrud exercita mco laboris nisi ut aliquip ex ea commodo consequat. duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur consequuntur magni dolores.</p>
                                    <p class="font_family_poppins ">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
                                </div>
                            </div>
                            <div class="tab" id="tab-2">
                                <div class="customer-inner">
                                    <div class="customer-review p_relative d_block pb_65 mb_65">
                                        <h4 class="p_relative d_block fs_20 lh_30 fw_medium fw_sbold mb_40">1 Review for Lenevo Laptop 15.6”</h4>
                                        <div class="comment-box p_relative d_block pl_110">
                                            <figure class="comment-thumb p_absolute l_0 t_0 w_80 h_80 b_radius_55"><img src="assets/images/shop/comment-1.jpg" alt=""></figure>
                                            <h5 class="d_block fs_18 lh_20 fw_sbold">Keanu Reeves<span class="d_iblock fs_16 font_family_poppins"> - May 1, 2021</span></h5>
                                            <ul class="rating clearfix mb_15">
                                                <li class="p_relative d_iblock pull-left mr_3 fs_13"><i class="fas fa-star"></i></li>
                                                <li class="p_relative d_iblock pull-left mr_3 fs_13"><i class="fas fa-star"></i></li>
                                                <li class="p_relative d_iblock pull-left mr_3 fs_13"><i class="fas fa-star"></i></li>
                                                <li class="p_relative d_iblock pull-left mr_3 fs_13"><i class="fas fa-star"></i></li>
                                                <li class="p_relative d_iblock pull-left mr_5 fs_13"><i class="far fa-star"></i></li>
                                            </ul>
                                            <div class="text">
                                                <p class="fs_15 font_family_poppins">Excepteur sint occaecat cupidatat non proident sunt in culpa  qui officia deserunt mollit anim  est laborum. Sed perspiciatis unde omnis natus error sit voluptatem accusa dolore mque laudant totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi arch tecto beatae vitae dicta.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="customer-comments p_relative">
                                        <h4 class="p_relative d_block fs_20 lh_30 fw_medium fw_sbold mb_25">Be First to Add a Review</h4>
                                        <div class="rating-box clearfix mb_12">
                                            <h6 class="p_relative d_iblock fs_16 fw_medium mr_15 float_left">Your Rating</h6>
                                            <ul class="rating p_relative d_block clearfix float_left">
                                                <li class="p_relative d_iblock fs_12 lh_26 float_left mr_3"><i class="far fa-star"></i></li>
                                                <li class="p_relative d_iblock fs_12 lh_26 float_left mr_3"><i class="far fa-star"></i></li>
                                                <li class="p_relative d_iblock fs_12 lh_26 float_left mr_3"><i class="far fa-star"></i></li>
                                                <li class="p_relative d_iblock fs_12 lh_26 float_left mr_3"><i class="far fa-star"></i></li>
                                                <li class="p_relative d_iblock fs_12 lh_26 float_left"><i class="far fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <form action="https://html.tonatheme.com/2023/atrix/shop-details.html" method="post" class="comment-form default-form">
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_15">
                                                    <label class="p_relative d_block fs_16 mb_3 font_family_poppins">Your Review</label>
                                                    <textarea name="message"></textarea>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_15">
                                                    <label class="p_relative d_block fs_16 mb_3 font_family_poppins">Your Name</label>
                                                    <input type="text" name="name" required="">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_15">
                                                    <label class="p_relative d_block fs_16 mb_3 font_family_poppins">Your Email</label>
                                                    <input type="email" name="email" required="">
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_15">
                                                    <div class="check-box pt_8 pb_9">
                                                        <input class="check" type="checkbox" id="checkbox">
                                                        <label for="checkbox" class="fs_16 font_family_poppins">Save my name, email, and website in this browser for the next time I comment</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn m_0">
                                                    <button type="submit" class="theme-btn theme-btn-eight">Submit Your Review <i class="icon-4"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="related-product shop-page-2 shop-page-section">
                    <div class="title-text mb_25">
                        <h2 class="d_block fs_30 lh_40 fw_sbold">Related Products</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box p_relative d_block tran_5 mb_30">
                                    <div class="image-box p_relative d_block">
                                        <span class="category hot p_absolute l_10 t_10 fs_13 fw_medium font_family_poppins z_1">Hot</span>
                                        <figure class="image p_relative d_block"><img src="assets/images/shop/shop-1.jpg" alt=""></figure>
                                        <ul class="option-list clearfix">
                                            <li><a href="assets/images/shop/shop-1.jpg" class="lightbox-image"><i class="icon-156"></i></a></li>
                                            <li><a href="shop-details.html"><i class="icon-155"></i></a></li>
                                            <li><a href="shop.html"><i class="icon-154"></i></a></li>
                                            <li><a href="shop-details.html"><i class="icon-140"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="lower-content p_relative d_block pt_25 pb_30">
                                        <h6 class="d_block fs_15 lh_20 mb_4"><a href="shop-details.html" class="d_iblock color_black">ASRock DeskMini H470 Portable Mini PC</a></h6>
                                        <ul class="rating clearfix">
                                            <li class="p_relative d_iblock pull-left mr_3 fs_13"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left mr_3 fs_13"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left mr_3 fs_13"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left mr_3 fs_13"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left mr_5 fs_13"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left fs_14"><a href="shop.html" class="color_black">(3)</a></li>
                                        </ul>
                                        <span class="price p_relative d_block fs_15 fw_medium font_family_inter color_black mb_2">$70.30</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box p_relative d_block tran_5 mb_30">
                                    <div class="image-box p_relative d_block">
                                        <figure class="image p_relative d_block"><img src="assets/images/shop/shop-2.jpg" alt=""></figure>
                                        <ul class="option-list clearfix">
                                            <li><a href="assets/images/shop/shop-2.jpg" class="lightbox-image"><i class="icon-156"></i></a></li>
                                            <li><a href="shop-details.html"><i class="icon-155"></i></a></li>
                                            <li><a href="shop.html"><i class="icon-154"></i></a></li>
                                            <li><a href="shop-details.html"><i class="icon-140"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="lower-content p_relative d_block pt_25 pb_30">
                                        <h6 class="d_block fs_15 lh_20 mb_4"><a href="shop-details.html" class="d_iblock color_black">Wiwu S700 Aluminum Alloy Adjustable Laptop</a></h6>
                                        <ul class="rating clearfix">
                                            <li class="p_relative d_iblock pull-left mr_3 fs_13"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left mr_3 fs_13"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left mr_3 fs_13"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left mr_3 fs_13"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left mr_5 fs_13"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left fs_14"><a href="shop.html" class="color_black">(3)</a></li>
                                        </ul>
                                        <span class="price p_relative d_block fs_15 fw_medium font_family_inter color_black mb_2">$80.50</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box p_relative d_block tran_5 mb_30">
                                    <div class="image-box p_relative d_block">
                                        <span class="category sale p_absolute l_10 t_10 fs_13 fw_medium font_family_poppins z_1">Sale</span>
                                        <figure class="image p_relative d_block"><img src="assets/images/shop/shop-3.jpg" alt=""></figure>
                                        <ul class="option-list clearfix">
                                            <li><a href="assets/images/shop/shop-3.jpg" class="lightbox-image"><i class="icon-156"></i></a></li>
                                            <li><a href="shop-details.html"><i class="icon-155"></i></a></li>
                                            <li><a href="shop.html"><i class="icon-154"></i></a></li>
                                            <li><a href="shop-details.html"><i class="icon-140"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="lower-content p_relative d_block pt_25 pb_30">
                                        <h6 class="d_block fs_15 lh_20 mb_4"><a href="shop-details.html" class="d_iblock color_black">HP Pavilion Adapter Blue Pin 3.33A</a></h6>
                                        <ul class="rating clearfix">
                                            <li class="p_relative d_iblock pull-left mr_3 fs_13"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left mr_3 fs_13"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left mr_3 fs_13"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left mr_3 fs_13"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left mr_5 fs_13"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left fs_14"><a href="shop.html" class="color_black">(3)</a></li>
                                        </ul>
                                        <span class="price p_relative d_block fs_15 fw_medium font_family_inter color_black mb_2">$60.50</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-details end -->


        <!-- footer-three -->
        <?php include 'footer.php';?>
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
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/product-filter.js"></script>
    <script src="assets/js/jquery.bootstrap-touchspin.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>


    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
