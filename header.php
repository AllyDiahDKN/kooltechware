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
                              
                                <div class="info-inner">
                                    <h4>Products Selected for Quote</h4>
                                    <ul class="info clearfix">
  <?php
// Get the user_id from the cookie or session
$user_id = $_COOKIE['user_id']; // Assuming you have stored user_id in a cookie

// Fetch products from the cart table for the specific user
$sql = "SELECT cart.*, products.ProductName, images.ImageURL, ram.ram_name, storage.storage_name
FROM cart
INNER JOIN products ON cart.ProductID = products.ProductID
INNER JOIN images ON products.ProductID = images.ProductID AND images.main = 1
LEFT JOIN ram ON ram.ram_id = cart.ram_id
LEFT JOIN storage ON storage.storage_id = cart.storage_id
WHERE cart.UserID = '$user_id'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    // Query execution failed, print error message
    echo "Error: " . mysqli_error($conn);
} else {
    // Query execution succeeded, check if there are rows in the result set
    if (mysqli_num_rows($result) > 0) {
    // Output each product
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="row">';
         echo '<div class="col-md-12 text-right">';
        echo '<p><a class="btn" href="remove-from-cart.php?id=' . $row['CartID'] . '"><font color="red"> X </font></a></p>';
        echo '</div>';
        echo '<div class="col-md-4">';
        echo '<img src="assets/images/shop/' . $row['ImageURL'] . '" alt="' . $row['ProductName'] . '">';
        echo '</div>';
        echo '<div class="col-md-8">';
        echo '<p>' . $row['ProductName'] . '</p>';
        if ($row['ram_id'] != '0') {
            echo "Ram: " . $row['ram_name'] . "";
        }
        if ($row['storage_id'] != '0') {
            echo "Storage: " . $row['storage_name'] . "";
        }
        echo '</div>';
       
        echo '</div>';
        echo '<hr>';
    }
} else {
    // No products in the cart
    echo '<p>No products in the cart</p>';
}
}

?>

                                    </ul>
                                </div>
                            </div>
                             <div class="addto-cart-box p_relative d_block mb_35"> 
                                    <ul class="clearfix">
                                        <li class="p_relative d_block float_left mr_10"><a href="checkout.php" class="theme-btn theme-btn-eight">Request for Quote</a></li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END sidebar widget item -->

        <!-- main header -->
<header class="main-header">
            <!-- header-top-one -->
            <div class="header-top-one p_relative d_block hidden-mobile">
    <div class="auto-container">
        <div class="top-inner clearfix p_relative">
            <div class="shape p_absolute t_0" style="background-image: url(assets/images/shape/shape-1.png);"></div>
            <div class="top-left pull-left">
                <ul class="social-links clearfix hidden-mobile">
                    <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55">Follow Us:</li>
                    <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="" class="p_relative d_iblock fs_16"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="" class="p_relative d_iblock fs_16"><i class="fab fa-instagram"></i></a></li>
                    <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="" class="p_relative d_iblock fs_16"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="top-right pull-right">

                <ul class="info clearfix hidden-mobile">
                    <li class="search-box-outer p_relative d_iblock float_left mr_60 lh_55">
                                <div class="search-inner">

                                    <form action="shop.php" method="get" class="search-form">
                                        <div class="form-group p_relative m_0">
                                            <input type="search" name="search" placeholder="Search" required>
                                            <button type="submit"><i class="icon-156"></i></button>
                                        </div>
                                    </form>
                                </div>                    </li>
                    <li class="p_relative d_iblock float_left mr_60 lh_55 pl_25 fs_16">
                        <i class="icon-2"></i>
                        <p>Call: <a href="tel:+255 785 252 525">+255 785 252 525</a></p>
                    </li>
                    <li class="p_relative d_iblock float_left lh_55 pl_25 fs_16">
                        <i class="icon-3"></i>
                        <p>Email: <a href="mailto:kb@kooltechware.co.tz">kb@kooltechware.co.tz</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure ><a href="index.php"><img src="assets/images/kooltech/logo1.png" height="200 " width="250" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix home-menu">
                                        <li><a href="index.php">Home</a></li>                                      
                                        
<?php
// Query to fetch brand data where brand ID is 1
$brandQuery = "SELECT * FROM brands WHERE BrandID = 1"; // Adjust the table and column names as per your database structure

// Execute the query
$brandResult = mysqli_query($conn, $brandQuery);

// Check if the query was successful
if ($brandResult) {
    // Fetch the brand details
    $brand = mysqli_fetch_assoc($brandResult);
    
    // Check if a brand was found
    if ($brand) {
        // Display the brand name in the HTML
        echo '<li><a href="shop.php?brand_id=' . $brand['BrandID'] . ' ">' . $brand['BrandName'] . '</a></li>';
    } else {
        echo '<li>No brand found</li>'; // Handle case when no brand is found with the given ID
    }
} else {
    echo '<li>Error fetching brand</li>'; // Handle database error
}
?>
                                    
                                   
<?php
// Query to fetch categories from the database
$categoryQuery = "SELECT * FROM categories LIMIT 3"; // Adjust the table name as per your database structure

// Execute the query
$categoryResult = mysqli_query($conn, $categoryQuery);

// Check if the query was successful
if ($categoryResult) {
    // Loop through each category to generate list items
    while ($category = mysqli_fetch_assoc($categoryResult)) {
        // Display list item for each category with its ID and name
        echo '<li><a href="shop.php?category_id=' . $category['CategoryID'] . '">' . $category['CategoryName'] . '</a></li>';
    }
} else {
    echo '<li>Error fetching categories</li>'; // Handle database error
}
?>
                                        
                              <li class="dropdown"><a href="#">More Categories</a>
                                            <ul>
                                                <?php
// Query to fetch categories from the database
$categoryQuery = "SELECT * FROM categories LIMIT 15 OFFSET 3" ; // Adjust the table name as per your database structure

// Execute the query
$categoryResult = mysqli_query($conn, $categoryQuery);

// Check if the query was successful
if ($categoryResult) {
    // Loop through each category to generate list items
    while ($category = mysqli_fetch_assoc($categoryResult)) {
        // Display list item for each category with its ID and name
        echo '<li><a href="shop.php?category_id=' . $category['CategoryID'] . '">' . $category['CategoryName'] . '</a></li>';
    }
                echo '<li><a href="shop.php">All Products</a></li>';

} else {
    echo '<li>Error fetching categories</li>'; // Handle database error
}
?>
                                            </ul>
                                        </li>
                 
                                        <li><a href="contact.php">Contact</a></li>                                         
<!--                                         <li> <a href="shop.php" ><i class="icon-140"></i></a></li>
 -->                                      
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="nav-right">
                            <div class="nav-btn nav-toggler navSidebar-button clearfix">
                                <i class="icon-140"></i>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.html"><img src="assets/images/kooltech/logo1.png" height="200 " width="250" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>                        
                    </div>
                </div>
            </div>
        </header>
 <!-- main-header end -->