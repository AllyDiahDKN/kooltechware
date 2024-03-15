<?php 
require_once 'db.php';

// Step 1: Check if a cookie exists
if(isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
    echo $user_id;

    // Step 2: Check if user already exists in the database
    $sql_select = "SELECT * FROM users WHERE uniqueID = '$user_id'";
    $result = $conn->query($sql_select);
    
    if ($result->num_rows == 0) {
        // Step 3: If user doesn't exist, insert into the database
        $sql_insert = "INSERT INTO users (uniqueID) VALUES ('$user_id')";
        if ($conn->query($sql_insert) === TRUE) {
            echo "New record inserted successfully";
        } else {
            echo "Error: " . $sql_insert . "<br>" . $conn->error;
        }
    } else {
        echo "User already exists in the database";
    }
} else {
    // Step 4: Generate a unique ID
    $user_id = uniqid('user_'); // You can use any method to generate a unique ID
    
    // Step 5: Save the ID in a cookie
    setcookie('user_id', $user_id, time() + (86400 * 7), "/"); // Cookie valid for 7 days
    
    echo "New user created with ID: " . $user_id;
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
                        <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte">Shop Page</li>
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
                    <!-- Search form -->
                    <div class="search-widget sidebar-widget p_relative d_block pb_40 mb_25">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" class="search-form">
                            <div class="form-group p_relative m_0">
                                <input type="search" name="search" placeholder="Search" required>
                                <button type="submit"><i class="icon-1"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- Categories widget -->
                    <div class="category-widget sidebar-widget pb_35 mb_35">
                        <div class="widget-title p_relative d_block mb_30">
                            <h4 class="p_relative d_block fs_20 lh_30">Categories</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="category-list clearfix">
                                <?php
                                // Fetch categories
                                $query = "SELECT categories.CategoryName, categories.CategoryID, COUNT(products.CategoryID) AS ProductCount 
                                            FROM categories 
                                            LEFT JOIN products ON categories.CategoryID = products.CategoryID 
                                            GROUP BY categories.CategoryID";

                                $result = mysqli_query($conn, $query);

                                if ($result) {
                                    // Display categories
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
                    <!-- Brands widget -->
                    <div class="category-widget sidebar-widget pb_35 mb_35">
                        <div class="widget-title p_relative d_block mb_30">
                            <h4 class="p_relative d_block fs_20 lh_30">Brands</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="category-list clearfix">
                                <?php
                                // Fetch brands
                                $query = "SELECT brands.BrandName, brands.BrandID, COUNT(products.BrandID) AS ProductCountbrand 
                                            FROM brands 
                                            LEFT JOIN products ON brands.BrandID = products.BrandID 
                                            GROUP BY brands.BrandID";

                                $result = mysqli_query($conn, $query);

                                if ($result) {
                                    // Display brands
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
                                // Define pagination variables
                                $limit = 12; // Number of products per page
                                $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Current page number

                                // Calculate offset for the query
                                $offset = ($currentPage - 1) * $limit;

                                // Construct the main product query
                                $productQuery = "SELECT p.*, i.ImageURL 
                                                 FROM products p
                                                 LEFT JOIN images i ON p.ProductID = i.ProductID
                                                 WHERE p.show_product = 1 AND i.main = 1";

                                // Add search keyword condition if present
                                if (isset($_GET['search'])) {
                                    $searchKeyword = $_GET['search'];
                                    $productQuery .= " AND p.ProductName LIKE '%$searchKeyword%'";
                                }

                                // Add category or brand condition if present
                                if (isset($_GET['category_id'])) {
                                    $categoryID = $_GET['category_id'];
                                    $productQuery .= " AND p.CategoryID = $categoryID";
                                } elseif (isset($_GET['brand_id'])) {
                                    $brandID = $_GET['brand_id'];
                                    $productQuery .= " AND p.BrandID = $brandID";
                                }

                                // Add pagination limits
                                $productQuery .= " LIMIT $limit OFFSET $offset";

                                // Execute the product query
                                $productResult = mysqli_query($conn, $productQuery);

                                if ($productResult) {
                                    // Display products
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
                                        echo '<li><a href="shop-details.php?id='.$product['ProductID'].'"><i class="icon-183"></i></a></li>';
                                        echo '<li><a href="add-to-cart.php?ProductID='.$product['ProductID'].'"><i class="icon-150"></i></a></li>';
                                        echo '</ul>';
                                        echo '</div>';
                                        echo '<div class="lower-content p_relative d_block pt_3 pr_20 pb_20 pl_20">';
                                        echo '<h6 class="d_block fs_15 lh_20 mb_4"><a href="shop-details.php?id='.$product['ProductID'].'" class="d_iblock color_black">' . $product['ProductName'] . '</a></h6>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                    }

                                    // Free the result variable
                                    mysqli_free_result($productResult);
                                } else {
                                    echo "Error: " . mysqli_error($conn);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                   <!-- Pagination -->
<?php
// Calculate total number of pages based on filtered or searched results
$totalPagesQuery = "SELECT COUNT(*) AS total FROM (SELECT p.ProductID 
                    FROM products p
                    LEFT JOIN images i ON p.ProductID = i.ProductID
                    WHERE p.show_product = 1 AND i.main = 1";

// Add search keyword condition if present
if (isset($_GET['search'])) {
    $searchKeyword = $_GET['search'];
    $totalPagesQuery .= " AND p.ProductName LIKE '%$searchKeyword%'";
}

// Add category or brand condition if present
if (isset($_GET['category_id'])) {
    $categoryID = $_GET['category_id'];
    $totalPagesQuery .= " AND p.CategoryID = $categoryID";
} elseif (isset($_GET['brand_id'])) {
    $brandID = $_GET['brand_id'];
    $totalPagesQuery .= " AND p.BrandID = $brandID";
}

$totalPagesQuery .= ") AS temp";

$totalPagesResult = mysqli_query($conn, $totalPagesQuery);
$totalProducts = mysqli_fetch_assoc($totalPagesResult)['total'];
$totalPages = ceil($totalProducts / $limit);

// Pagination links
echo '<div class="pagination-wrapper centred mt_40">';
echo '<ul class="pagination clearfix">';
for ($i = 1; $i <= $totalPages; $i++) {
    $isActive = $i == $currentPage ? 'current' : '';
    // Include the search query, category ID, and brand ID in pagination links
    $paginationLink = "shop.php?page=$i";
    if (isset($_GET['search'])) {
        $paginationLink .= "&search=" . urlencode($_GET['search']);
    }
    if (isset($_GET['category_id'])) {
        $paginationLink .= "&category_id=$categoryID";
    }
    if (isset($_GET['brand_id'])) {
        $paginationLink .= "&brand_id=$brandID";
    }
    echo '<li><a href="'.$paginationLink.'" class="'.$isActive.'">'.$i.'</a></li>';
}
echo '</ul>';
echo '</div>';
?>

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