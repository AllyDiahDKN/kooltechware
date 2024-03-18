<?php
session_start();
require_once '../db.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Ekka - Admin Dashboard HTML Template.">

	<title>Ekka - Admin Dashboard HTML Template.</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

	<!-- Ekka CSS -->
	<link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon" />
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

	<!-- WRAPPER -->
	<?php include 'header.php';?>

			<!-- CONTENT WRAPPER -->
            
                                
<?php
//1. fetch user base on qoute id 
function getUserDetails($conn, $quoteID) {
    $sql = "SELECT u.first_name, u.last_name, u.mobile, u.Email, u.company, qr.notes, qr.status
                FROM users u
            INNER JOIN quoterequests qr ON u.uniqueID = qr.UserID 
            WHERE qr.QuoteID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $quoteID);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}
//2.fetch Qoute information base  on Qoute Id
function getQuoteDetails($conn, $quoteID) {
    // Prepare the SQL query
    $sql = "SELECT qr.UserID, qr.notes, qr.requestDate,qr.status, COUNT(ci.ProductID) AS num_products
            FROM quoterequests qr
            INNER JOIN quoteitems ci ON ci.QuoterequestsID = qr.QuoteID
            WHERE qr.QuoteID = ?
            GROUP BY qr.UserID, qr.notes, qr.requestDate";

    // Prepare and execute the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $quoteID);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Fetch the associative array
    $quoteDetails = $result->fetch_assoc();

    // Close the statement
    $stmt->close();

    // Return the quote details if found, otherwise return NULL
    return $quoteDetails ? $quoteDetails : ["error" => "No quote found for the given quote ID"];
}


// Function to fetch product details based on QuoteID
function getProductDetails($conn, $quoteID) {
    $sql = "SELECT p.ProductID, p.ProductName, p.Ram, p.Storage, i.ImageURL
            FROM products p
            INNER JOIN quoteitems qi ON p.ProductID = qi.ProductID
            LEFT JOIN images i ON p.ProductID = i.ProductID AND i.main = 1
            WHERE qi.QuoterequestsID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $quoteID);
    $stmt->execute();
    return $stmt->get_result();
}

// Function to fetch images with main flag set to 1 based on QuoteID
function getImagesByQuoteID($conn, $quoteID) {
    // Prepare the SQL query
    $sql = "SELECT i.ImageID, i.ProductID, i.ImageURL
            FROM images i
            INNER JOIN quoteitems qi ON i.ProductID = qi.ProductID
            WHERE qi.QuoterequestsID = ? AND i.main = 1";

    // Prepare the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $quoteID);
    
    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Fetch the rows as an associative array
    $images = $result->fetch_all(MYSQLI_ASSOC);

    // Close the statement
    $stmt->close();

    // Return the fetched images
    return $images;
}

// Retrieve the QuoteID from the URL parameter
$quoteID = $_GET['QuoteID'];
 $quoteDetails=getQuoteDetails($conn,$quoteID);
// Fetch user details
$userDetails = getUserDetails($conn, $quoteID);

// Fetch product details
$productDetails = getProductDetails($conn, $quoteID);

//fetch images information and product base on Quote
$imageDetails = getImagesByQuoteID($conn, $quoteID);

?>

<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-wrapper-2">
            <h1>Qoute Detail</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Orders
            </p>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="ec-odr-dtl card card-default">
                    <div class="card-header card-header-border-bottom d-flex justify-content-between">
                        <h2 class="ec-odr">Quote Detail<br>
                            <span class="small">Quote ID: <?php echo $quoteID; ?></span>
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Users Details -->
                            <div class="col-xl-3 col-lg-6">
                                <address class="info-grid">
                                    <div class="info-title"><strong>User:</strong></div><br>
                                    <div class="info-content">
                                        <?php if ($userDetails) : ?>
                                            <strong><?php echo $userDetails['first_name'] . ' ' . $userDetails['last_name']; ?></strong><br>
                                            <?php echo $userDetails['mobile']; ?><br>
                                            <?php echo $userDetails['Email']; ?><br>
                                            <?php echo $userDetails['company']; ?><br>
                                        <?php else : ?>
                                            No User found for the given order number.
                                        <?php endif; ?>
                                    </div>
                                </address>
                            </div>
                           

                            <!-- Quote Details -->
                            <div class="col-xl-3 col-lg-6">
                                <address class="info-grid">
                                    <div class="info-title"><strong>Quote:</strong></div><br>
                                    <div class="info-content">
                                        <?php if ( $quoteDetails) : ?>                                           
                                            <?php echo $quoteDetails['notes']; ?><br><br>
                                           <strong ><?php echo $quoteDetails['requestDate']; ?></strong><br>
                                        <?php else : ?>
                                            No quote found for the given quote ID.
                                        <?php endif; ?>
                                    </div>
                                </address>
                            </div>
                            <!--  Status and Buttons -->
                             <div class="col-xl-6 col-lg-6">
                                    <address class="info-grid">
                                        <div class="info-title"><strong>Status:</strong></div><br>
                                        <div class="info-content">
                                        <?php if ( $quoteDetails) : ?>                            
                                       <button type="button" class=""> <strong ><?php echo $quoteDetails['status']; ?></strong></button><br>
                                        <?php else : ?>
                                            No quote found for the given quote ID.
                                        <?php endif; ?>
                                        </div>
                                    </address>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="tbl-title">PRODUCT SUMMARY QUOTE</h3

>
                                <div class="table-responsive">
                                    <table class="table table-striped o-tbl">
                                        <thead>
                                            <tr class="line">
                                                <td><strong>#</strong></td>
                                                <td class="text-center"><strong>IMAGE</strong></td>
                                                <td class="text-center"><strong>PRODUCT</strong></td>
                                                <td class="text-center"><strong>RAM</strong></td>
                                                <td class="text-center"><strong>STORAGE</strong></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                            /*if ($productDetails->num_rows > 0) {
                                                while ($row = $productDetails->fetch_assoc()) {
                                                    $productID = $row['ProductID'];
                                                    $productName = $row['ProductName'];
                                                    $ram = $row['Ram'];
                                                    $storage = $row['Storage'];
                                                    $imageURL = $row['ImageURL'];
                                            ?>
                                                    <tr>
                                                        <td><?php echo $productID; ?></td>
                                                        <td><img class="product-img" src="assets/images/shop/<?php echo $imageURL; ?>" alt="image not showing" /></td>     <td><strong><?php echo $productName; ?></strong></td>
                                                        <td><?php echo $ram; ?></td>
                                                        <td><?php echo $storage; ?></td>
                                                    </tr>
                                            <?php
                                                }
                                            } else {
                                                // If no products are found in the quote
                                                echo "<tr><td colspan='5'>No products found in the quote</td></tr>";
                                            }*/
                                            ?>
<?php
if ($productDetails->num_rows > 0) {
    while ($row = $productDetails->fetch_assoc()) {
        $productID = $row['ProductID'];
        $productName = $row['ProductName'];

        // Fetch main image URL from the Images table
        $sqlImage = "SELECT ImageURL FROM images WHERE ProductID = ? AND main = 1";
        $stmtImage = $conn->prepare($sqlImage);
        $stmtImage->bind_param("i", $productID);
        $stmtImage->execute();
        $stmtImage->bind_result($imageURL);
        $stmtImage->fetch();
        $stmtImage->close();

        // Fetch RAM for the product
        $sqlRam = "SELECT r.ram_name
                   FROM product_ram pr
                   INNER JOIN ram r ON pr.ram_id = r.ram_id
                   WHERE pr.product_id = ?";
        $stmtRam = $conn->prepare($sqlRam);
        $stmtRam->bind_param("i", $productID);
        $stmtRam->execute();
        $stmtRam->bind_result($ram);
        $stmtRam->fetch();
        $stmtRam->close();

        // Fetch storage for the product
        $sqlStorage = "SELECT s.storage_name
                       FROM product_storage ps
                       INNER JOIN storage s ON ps.storage_id = s.storage_id
                       WHERE ps.product_id = ?";
        $stmtStorage = $conn->prepare($sqlStorage);
        $stmtStorage->bind_param("i", $productID);
        $stmtStorage->execute();
        $stmtStorage->bind_result($storage);
        $stmtStorage->fetch();
        $stmtStorage->close();

        // Output the table row with the product details, RAM, storage, and image
?>
        <tr>
            <td><?php echo $productID; ?></td>
            <td><img class="product-img"  src="../assets/images/shop/<?php echo $imageURL; ?>" alt="Image not found" /></td>
            <td><strong><?php echo $productName; ?></strong></td>
            <td><?php echo $ram ? $ram : 0; ?></td>
            <td><?php echo $storage ? $storage : 0; ?></td>
        </tr>
       
<?php
    }
} else {
    // If no products are found in the quote
    echo "<tr><td colspan='5'>No products found in the quote</td></tr>";
}
?>


                                        </tbody>
                                    </table>
                                    <?php
$sql = "SELECT quoterequests.QuoteID, quoterequests.UserID, quoterequests.notes, quoterequests.RequestDate, quoterequests.status, 
        users.UserID, users.first_name, users.last_name 
        FROM quoterequests 
        INNER JOIN users ON users.uniqueID = quoterequests.UserID 
        GROUP BY quoterequests.QuoteID 
        ORDER BY quoterequests.QuoteID DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Assign QuoteID to a variable
        $QuoteID = $row['QuoteID'];
    }
}
?>
                                    <div class="row">
        <div class="col-md-6">
             <a  href="createQuote.php?QuoteID=<?php echo $QuoteID; ?>" class="btn btn-primary" name="priceQuote">Create price Quote</a>
        </div>   
        
    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

			<!-- Footer -->
			<footer class="footer mt-auto">
				<div class="copyright bg-white">
					<p>
						Copyright &copy; <span id="ec-year"></span><a class="text-primary"
							href="https://themeforest.net/user/ashishmaraviya" target="_blank"> Ekka Admin
							Dashboard</a>. All Rights Reserved.
					</p>
				</div>
			</footer>

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    // Event handler for Not Approved button
    $('#not-approved-btn').click(function() {
        var orderId = $(this).data('order-id');
        updateStatus('Not Approved', orderId, 'approval');
    });

    // Event handler for Pending button
    $('#pending-btn').click(function() {
        var orderId = $(this).data('order-id');
        updateStatus('Pending', orderId, 'approval');
    });

    // Event handler for Approved button
    $('#approved-btn').click(function() {
        var orderId = $(this).data('order-id');
        updateStatus('Approved', orderId, 'approval');
    });

    // Event handler for Not Paid button
    $('#not-paid-btn').click(function() {
        var orderId = $(this).data('order-id');
        updateStatus('Not Paid', orderId, 'payment');
    });

    // Event handler for Paid button
    $('#paid-btn').click(function() {
        var orderId = $(this).data('order-id');
        updateStatus('Paid', orderId, 'payment');
    });

    // Function to send AJAX request to update status
    function updateStatus(status, orderId, type) {
        $.ajax({
            url: 'update_status.php', // Update the URL according to your backend script
            type: 'POST',
            data: { status: status, order_id: orderId, type: type }, // Include the status and type of update
            success: function(response) {
                // Reload the page to reflect the changes
                location.reload();
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
            }
        });
    }
});
</script>
</script>
	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>
</html>
<?php
$conn->close();
?>