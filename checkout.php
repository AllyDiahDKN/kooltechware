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

    <?php include 'meta_tags.php'; ?>

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

        <?php include 'header.php';?>


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
                    <h1 class="d_block fs_60 lh_70 fw_bold mb_10">Request for Quote</h1>
                    <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                        <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20"><a href="index.php">Home</a></li>
                        <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20">Shop</li>
                        <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte">Quote</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- checkout-section -->
        <section class="checkout-section p_relative pt_140 pb_150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                        <div class="inner-box">
                            <div class="billing-info p_relative d_block mb_55">
                                <h4 class="sub-title d_block fs_30 lh_40 mb_25">Request for Quote</h4>
                                <form action="process_quote_request.php" method="post" class="billing-form p_relative d_block">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <label class="p_relative d_block fs_16 font_family_poppins color_black mb_2">First Name*</label>
            <div class="field-input">
                <input type="text" name="first_name" required>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <label class="p_relative d_block fs_16 font_family_poppins color_black mb_2">Last Name*</label>
            <div class="field-input">
                <input type="text" name="last_name" required>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
            <label class="p_relative d_block fs_16 font_family_poppins color_black mb_2">Company Name</label>
            <div class="field-input">
                <input type="text" name="company_name">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
            <label class="p_relative d_block fs_16 font_family_poppins color_black mb_2">Email Address*</label>
            <div class="field-input">
                <input type="email" name="email" required>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
            <label class="p_relative d_block fs_16 font_family_poppins color_black mb_2">Mobile Number*</label>
            <div class="field-input">
                <input type="text" name="phone" placeholder="Start with Country Code; +255.." required>
            </div>
        </div>
    </div>
    <div class="additional-info">
        <div class="note-book p_relative d_block">
            <label class="p_relative d_block fs_16 font_family_poppins color_black mb_2">Extra notes</label>
            <textarea name="note_box" placeholder="Notes about your quote"></textarea>
        </div>
    </div>
    <input type="hidden" name="userID" value="<?php echo $user_id;?>">
    <br>
    <div class="btn-box">
        <button type="submit" class="theme-btn theme-btn-eight">Request for Quote <i class="icon-4"></i></button>
    </div>
</form>
</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 right-column">
                        <div class="inner-box">
                            <div class="order-info p_relative d_block pt_45 pr_50 pb_25 pl_50 mb_50">
                                <h4 class="sub-title d_block fs_24 lh_30 mb_25">Your Order</h4>
                                <div class="order-product">
                                    <ul class="order-list clearfix">

<?php
// Get the user_id from the cookie or session
$user_id = $_COOKIE['user_id']; // Assuming you have stored user_id in a cookie

// Fetch products from the cart table for the specific user
$sql = "SELECT cart.*, products.ProductName, images.ImageURL FROM cart 
        INNER JOIN products ON cart.ProductID = products.ProductID 
        INNER JOIN images ON products.ProductID = images.ProductID 
        WHERE cart.UserID = '$user_id' AND images.main = 1";
$result = mysqli_query($conn, $sql);

if (!$result) {
    // Query execution failed, print error message
    echo "Error: " . mysqli_error($conn);
} else {
    // Query execution succeeded, check if there are rows in the result set
    if (mysqli_num_rows($result) > 0) {
    // Output each product
        $count=0;
    while ($row = mysqli_fetch_assoc($result)) {
        $count+=1;
        echo '
        <li class="p_relative d_block clearfix pt_17 pb_16">
            <h6 class="fs_15 lh_20 pull-left fw_normal">'.$count.'. ' . $row['ProductName'] . '</h6>                      
        </li>';
    }
} else {
    // No products in the cart
    echo '<li class="p_relative d_block clearfix pt_17 pb_16">
            <h6 class="fs_15 lh_20 pull-left fw_normal">No products in the cart</h6>                      
        </li>';
}
}

?>

                                        
                                       
                                    
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- checkout-section end -->


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
    <script src="assets/js/bxslider.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from html.tonatheme.com/2023/atrix/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Feb 2024 19:40:21 GMT -->
</html>
