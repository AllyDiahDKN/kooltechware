<?php 
require_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <?php include 'meta_tags.php'; ?>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon1.png" type="image/x-icon">
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
                                
                                <div class="text-box">
                                    <h4>Kool Techware</h4>
                                    <p>We're passionate about providing exceptional value to our clients. From high quality products and competitive prices to personalized support and innovative
                                            solutions, we're committed to helping businesses thrive with cutting-edge ICT
                                            services.</p>
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
        <?php include 'header.php';?>
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
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                      
                        <li><a href=""><span class="fab fa-facebook-square"></span></a></li>                      
                        <li><a href=""><span class="fab fa-instagram"></span></a></li>
                        <li><a href=""><span class="fab fa-youtube"></span></a></li>
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
                    <h1 class="d_block fs_60 lh_70 fw_bold mb_10">Shop Page</h1>
                    <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                        <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20"><a href="index.php">Home</a></li>
                        <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20">Shop</li>
                        <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte">Shop Page 1</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- shop-page-section -->
        <section class="shop-page-section p_relative sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-12 cols-sm-12 sidebar-side">
                        <div class="shop-sidebar">
                            <div class="search-widget sidebar-widget p_relative d_block pb_40 mb_25">
                                <form action="" method="post" class="search-form">
                                    <div class="form-group p_relative m_0">
                                        <input type="search" name="search-field" placeholder="Search" required>
                                        <button type="submit"><i class="icon-1"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="category-widget sidebar-widget pb_35 mb_35">
                                <div class="widget-title p_relative d_block mb_30">
                                    <h4 class="p_relative d_block fs_20 lh_30">Categories</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">

                                        <?php
// SQL query to fetch category names along with the count of products in each category
$query = "SELECT categories.CategoryName, categories.CategoryID, COUNT(products.CategoryID) AS ProductCount 
          FROM categories 
          LEFT JOIN products ON categories.CategoryID = products.CategoryID 
          GROUP BY categories.CategoryID";

$result = mysqli_query($conn, $query);

if ($result) {
    echo '<li class="p_relative d_block mb_11">';
        echo '<a href="shop.php" class="p_relative d_iblock fs_15 font_family_inter color_black pl_20">All Products</a></li>';
    while ($row = mysqli_fetch_assoc($result)) {
        $categoryName = $row['CategoryName'];
        $categoryID = $row['CategoryID'];
        $productCount = $row['ProductCount'];
        echo '<li class="p_relative d_block mb_11">';
        echo '<a href="shop.php?category_id='.$categoryID.'" class="p_relative d_iblock fs_15 font_family_inter color_black pl_20">';
        echo $categoryName . ' (' . $productCount . ')';
        echo '</a>';
        echo '</li>';
    }
} else {
    echo "Error: " . mysqli_error($conn);
}
?>

                                    </ul>
                                </div>
                            </div>
                            <div class="category-widget sidebar-widget pb_35 mb_35">
                                <div class="widget-title p_relative d_block mb_30">
                                    <h4 class="p_relative d_block fs_20 lh_30">Brands</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                                                                <?php
// SQL query to fetch category names along with the count of products in each category
$query = "SELECT brands.BrandName, brands.BrandID, COUNT(products.BrandID) AS ProductCountbrand 
          FROM brands 
          LEFT JOIN products ON brands.BrandID = products.BrandID 
          GROUP BY brands.BrandID";

$result = mysqli_query($conn, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $brandName = $row['BrandName'];
        $brandID = $row['BrandID'];
        $productCountbrand = $row['ProductCountbrand'];
        echo '<li class="p_relative d_block mb_11">';
        echo '<a href="shop.php?brand_id='.$brandID.'" class="p_relative d_iblock fs_15 font_family_inter color_black pl_20">';
        echo $brandName . ' (' . $productCountbrand . ')';
        echo '</a>';
        echo '</li>';
    }
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
<div class="col-lg-9 col-md-12 cols-sm-12 content-side">
                        <div class="our-shop">
                            <div class="wrapper grid">
                                <div class="shop-grid-content">
                                    <div class="row clearfix">
                 <?php
// Fetch products based on category ID or brand ID from the URL
$categoryID = isset($_GET['category_id']) ? $_GET['category_id'] : null;
$brandID = isset($_GET['brand_id']) ? $_GET['brand_id'] : null;

// Construct the SQL query based on the presence of category ID or brand ID
if ($categoryID !== null) {
    $productQuery = "SELECT p.*, i.ImageURL 
                     FROM products p
                     LEFT JOIN images i ON p.ProductID = i.ProductID
                     WHERE p.show_product = 1 AND p.CategoryID = $categoryID AND i.main = 1";
} elseif ($brandID !== null) {
    $productQuery = "SELECT p.*, i.ImageURL 
                     FROM products p
                     LEFT JOIN images i ON p.ProductID = i.ProductID
                     WHERE p.show_product = 1 AND p.BrandID = $brandID AND i.main = 1";
} else {
    $productQuery = "SELECT p.*, i.ImageURL 
                     FROM products p
                     LEFT JOIN images i ON p.ProductID = i.ProductID
                     WHERE p.show_product = 1 AND i.main = 1";
}

$productResult = mysqli_query($conn, $productQuery);

if ($productResult) {
    while ($product = mysqli_fetch_assoc($productResult)) {
        $isOutOfStock = $product['available'] == 0;
        $isNew = strtotime($product['date_added']) > strtotime('-1 month');

        echo '<div class="col-lg-4 col-md-6 col-sm-12 shop-block">';
        echo '<div class="shop-block-one">';
        echo '<div class="inner-box p_relative d_block tran_5 mb_30">';
        echo '<div class="image-box p_relative d_block">';
        
        if ($isOutOfStock) {
            echo '<span class="category hot p_absolute l_10 t_10 fs_13 fw_medium font_family_poppins z_1">Out of Stock</span>';
        } elseif ($isNew) {
            echo '<span class="category sale p_absolute l_10 t_10 fs_13 fw_medium font_family_poppins z_1">New</span>';
        }

        echo '<figure class="image p_relative d_block"><img src="assets/images/shop/' . $product['ImageURL'] . '" alt=""></figure>';
        echo '<ul class="option-list clearfix">';
        echo '<li><a href="assets/images/shop/' . $product['ImageURL'] . '" class="lightbox-image"><i class="icon-156"></i></a></li>';
        echo '<li><a href="shop-details.php"><i class="icon-78"></i></a></li>';
        echo '<li><a href="shop-details.php"><i class="icon-140"></i></a></li>';
        echo '</ul>';
        echo '</div>';
        echo '<div class="lower-content p_relative d_block pt_3 pr_20 pb_20 pl_20">';
        echo '<h6 class="d_block fs_15 lh_20 mb_4"><a href="shop-details.php?id='.$product['ProductID'].'" class="d_iblock color_black">' . $product['ProductName'] . '</a></h6>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

?>
           </div>
                                </div>
                            </div>
                            <div class="pagination-wrapper centred mt_40">
                                <ul class="pagination clearfix">
                                    <li><a href="shop.html" class="current">1</a></li>
                                    <li><a href="shop.html">2</a></li>
                                    <li><a href="shop.html">3</a></li>
                                    <li class="dot">...</li>
                                    <li><a href="shop.html">9</a></li>
                                    <li><a href="shop.html"><i class="icon-4"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-page-section end -->


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
    <script src="assets/js/parallax-scroll.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
<?php
// Close the database connection
mysqli_close($conn);
?>