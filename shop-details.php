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
                        <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte">Shop Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <?php
    // Ensure that the 'id' parameter is set in the URL
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        // Sanitize the input to prevent SQL injection
        $product_id = mysqli_real_escape_string($conn, $_GET['id']);
        
        // Fetch product details from the database for the specified ID
        $query = "SELECT p.*, c.CategoryName, b.BrandName 
                  FROM products p 
                  INNER JOIN categories c ON p.CategoryID = c.CategoryID 
                  INNER JOIN brands b ON p.BrandID = b.BrandID
                  WHERE p.ProductID = $product_id";
        
        $result = mysqli_query($conn, $query);

        // Check if query execution was successful
        if ($result && mysqli_num_rows($result) > 0) {
            // Fetch the first row (there should only be one row)
            $row = mysqli_fetch_assoc($result);
        } else {
            // Product with the specified ID not found
            echo "Product not found.";
            exit; // Stop further execution
        }
    } else {
        // 'id' parameter is not set in the URL
        echo "Product ID is missing.";
        exit; // Stop further execution
    }
?>
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
                                <h2 class="d_block fs_30 lh_40 fw_sbold font_family_inter mb_5"><?= $row['ProductName']; ?></h2>                              
                            
                                <div class="text p_relative d_block mb_30">
                                    <p class="font_family_poppins mb_25"><?= $row['Description']; ?></p>

                                </div>
                                <div class="addto-cart-box p_relative d_block mb_35"> 
                                    <ul class="clearfix">
                                      
                                        <li class="p_relative d_block float_left mr_10"><a href="add-to-cart.php?ProductID=<?php echo $row['ProductID'];?>" class="theme-btn theme-btn-eight">Add To Cart</a></li>
                                   
                                    </ul>
                                </div>
                                <div class="other-option">
                                    <ul class="list">
                                        <li class="p_relative d_block fs_16 font_family_poppins mb_5"><span class="fw_medium color_black">Product ID:</span> KTW-10<?= $row['ProductID']; ?></li>
                                        <li class="p_relative d_block fs_16 font_family_poppins mb_5"><span class="fw_medium color_black">Category: </span><?= $row['CategoryName']; ?></li>
                                        <li class="p_relative d_block fs_16 font_family_poppins"><span class="fw_medium color_black">Brands: </span> <?= $row['BrandName']; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php        
    
?>
                </div>
                <div class="product-discription p_relative d_block mb_80">
                    <div class="tabs-box">
                        <div class="tab-btn-box p_relative d_block mb_35">
                            <ul class="tab-btns tab-buttons clearfix centred p_relative d_block">
                                <li class="tab-btn active-btn p_relative d_iblock fs_18 font_family_inter lh_20 fw_medium z_1 tran_5" data-tab="#tab-1">Description</li>                              
                            </ul>
                        </div>
                        <div class="tabs-content">
                            <div class="tab active-tab" id="tab-1">
                                <div class="content-box">
                                    <p class="font_family_poppins "><?= $row['Description']; ?></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <?php
// Ensure that the 'id' parameter is set in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $product_id = mysqli_real_escape_string($conn, $_GET['id']);
    
    // Fetch product details from the database for the specified ID

    $query = "SELECT p.*, i.ImageURL
              FROM products p 
              LEFT JOIN images i ON p.ProductID = i.ProductID
              WHERE p.show_product = 1 AND i.main = 1 AND p.ProductID != $product_id
              AND p.CategoryID IN (
                  SELECT CategoryID FROM products WHERE ProductID = $product_id
              )
              LIMIT 3";
    
    $result = mysqli_query($conn, $query);

    // Check if query execution was successful
    if ($result && mysqli_num_rows($result) > 0) {
?>

<section class="shop-details shop-details-2 p_relative pt_140 pb_80">
    <div class="auto-container">
        <div class="related-product shop-page-2 shop-page-section">
            <div class="title-text mb_25 centred">
                <h2 class="d_block fs_30 lh_40 fw_sbold">Related Products</h2>
            </div>
            <div class="row clearfix">
                <?php
                    // Loop through the results to display related products
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                    <div class="shop-block-one">
                        <div class="inner-box p_relative d_block tran_5 mb_30">
                            <div class="image-box p_relative d_block">
                                <!-- Adjust image source -->
                                <figure class="image p_relative d_block"><img src="assets/images/shop/<?= $row['ImageURL']; ?>" alt=""></figure>
                            </div>
                            <div class="lower-content p_relative d_block pt_25 pb_30">
                                <!-- Display product name -->
                                <h6 class="d_block fs_15 lh_20 mb_4"><a href="shop-details.php?id=<?= $row['ProductID']; ?>" class="d_iblock color_black"><?= $row['ProductName']; ?></a></h6>
                                <!-- Add more HTML elements to display other product details if needed -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
        </div>

    </div>
</section>

<?php
    } else {
        // No related products found
        echo "No related products found.";
    }
} else {
    // 'id' parameter is not set in the URL
    echo "Product ID is missing.";
}
?>


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
<?php include 'whatsapp.php';?>

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
