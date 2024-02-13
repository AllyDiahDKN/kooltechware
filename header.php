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
                                    <form action="" method="post" class="search-form">
                                        <div class="form-group p_relative m_0">
                                            <input type="search" name="search-field" placeholder="Search" required>
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
} else {
    echo '<li>Error fetching categories</li>'; // Handle database error
}
?>
                                            </ul>
                                        </li>
                 
                                        <li><a href="contact.php">Contact</a></li>                                         
                                            
                                      
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
                         <div class="nav-right">
                            <div class="nav-btn nav-toggler navSidebar-button clearfix">
                                <i class="icon-140"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
 <!-- main-header end -->