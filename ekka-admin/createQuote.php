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

	<title>create Quote</title>

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
// Retrieve QuoteID from the URL
if (isset($_GET['QuoteID'])) {
    $quoteID = $_GET['QuoteID'];

    //1. fetch user based on quote id 
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

    // Function to fetch product details based on QuoteID
    function getProductDetails($conn, $quoteID) {
        $sql = "SELECT p.ProductID, p.ProductName, p.Ram, p.Storage
                FROM products p
                INNER JOIN quoteitems qi ON p.ProductID = qi.ProductID
                WHERE qi.QuoterequestsID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $quoteID);
        $stmt->execute();
        return $stmt->get_result();
    }

    // Function to fetch price based on QuoteID
    function getPrice($conn, $quoteID) {
        $sql = "SELECT SUM(price) AS total_price
                FROM quoteitems
                WHERE QuoterequestsID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $quoteID);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        return $row['total_price'];
    }

    // Function to fetch total based on QuoteID
    function getTotal($conn, $quoteID) {
        $sql = "SELECT Total FROM quoterequests WHERE QuoteID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $quoteID);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        return $row['Total'];
    }

    // Fetch user details
    $userDetails = getUserDetails($conn, $quoteID);

    // Fetch product details
    $productDetails = getProductDetails($conn, $quoteID);

    // Fetch price
    $price = getPrice($conn, $quoteID);

    // Fetch total
    $total = getTotal($conn, $quoteID);
} else {
    // Redirect or show an error message if QuoteID is not provided in the URL
    // For example:
    // header("Location: error.php");
    // exit();
}
?>



<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-wrapper-2">
            <h1>Qoute Create</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Quote Create
            </p>
        </div>

        <div class="row">
    <div class="col-12">
        <div class="ec-odr-dtl card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between">
                <h2 class="ec-odr">Quote Create<br>
                    <span class="small">Quote ID: <?php echo $quoteID; ?></span>
                </h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Users Details -->
                    <div class="col-xl-12 col-lg-6">
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
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="tbl-title">PRODUCT CREATE QUOTE</h3>

<?php
// Check if the total button is clicked
if(isset($_POST['total'])) {
        
    
    // Retrieve QuoteID from the URL or from wherever it's stored
    $quoteID = $_GET['QuoteID']; 

    // Initialize total price
    $totalPrice = 0;

    // Update price for each product in the quoteitems table
    foreach ($_POST as $key => $value) {
        // Check if the input field is for price
        if (strpos($key, 'price_') !== false) {
            // Extract ProductID from input name
            $productID = str_replace('price_', '', $key);

            // Update price in quoteitems table
            $sql = "UPDATE quoteitems SET price = ? WHERE QuoterequestsID = ? AND ProductID = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("dii", $value, $quoteID, $productID);
            $stmt->execute();
            $stmt->close();

            // Add price to total
            $totalPrice += $value;
        }
    }

    // Update total price in quoterequests table
    $sql = "UPDATE quoterequests SET Total = ? WHERE QuoteID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("di", $totalPrice, $quoteID);
    $stmt->execute();
    $stmt->close();
}
        // Redirect to the same page to refresh
        //header("Location: createQoute.php?QuoteID=$quoteID");
        //exit();
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create_quote'])) {
    // Assuming $products and $total are defined elsewhere in your code
    $products = []; // Fetch product data
    $total = 0; // Calculate total price

    function buildEmailBody($products, $total) {
        $tableHeader = "<tr>
                          <th>ID</th>
                          <th>PRODUCT</th>
                          <th>RAM</th>
                          <th>STORAGE</th>
                          <th>PRICE</th>
                        </tr>";

        $tableBody = "";
        foreach ($products as $product) {
            $tableBody .= "<tr>
                              <td>" . $product['product_id'] . "</td>
                              <td>" . $product['product_name'] . "</td>
                              <td>" . $product['ram'] . "</td>
                              <td>" . $product['storage'] . "</td>
                              <td>" . $product['price'] . "</td>
                            </tr>";
        }

        $totalRow = "<tr>
                        <td colspan='4'>Total</td>
                        <td>" . $total . "</td>
                      </tr>";

        $emailBody = "<table style='border-collapse: collapse; width: 100%;' border='1'>
                        <thead>" . $tableHeader . "</thead>
                        <tbody>" . $tableBody . $totalRow . "</tbody>
                      </table>";
        return $emailBody;
    }

    function sendQuoteEmail($to, $subject, $emailBody, $from = null) {
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        if ($from) {
            $headers .= 'From: ' . $from . "\r\n";
        }

        // Send email and return true if successful, false otherwise
        return mail($to, $subject, $emailBody, $headers);
    }

    // Validate and sanitize email address
    $to = 'your-email@example.com'; // Replace with the recipient's email address

    $subject = "Price Quote for Products";

    // Assuming $products and $total are defined elsewhere in your code
    $emailBody = buildEmailBody($products, $total);

    // Optional: Set a custom from email address
    $from = 'your-email@example.com';

    if (sendQuoteEmail($to, $subject, $emailBody, $from)) {
        echo "Quote sent successfully.";
    } else {
        echo "Error sending email.";
    }
}
?>


                        
                        <form action="" method="post">
    <div class="table-responsive">
        <table class="table table-striped o-tbl">
            <thead>
                <tr class="line">
                    <td><strong>ID</strong></td>                  
                    <td class="text-center"><strong>PRODUCT</strong></td>
                    <td class="text-center"><strong>RAM</strong></td>
                    <td class="text-center"><strong>STORAGE</strong></td>
                    <td class="text-center"><strong>PRICE</strong></td>
                </tr>
            </thead>
            <tbody>
                <!-- Product details rows -->
                <?php
                if ($productDetails->num_rows > 0) {
                    while ($row = $productDetails->fetch_assoc()) {
                        $productID = $row['ProductID'];
                        $productName = $row['ProductName'];

                        // Fetch RAM for the product
                        $stmtRam = $conn->prepare("SELECT r.ram_name
                                                   FROM product_ram pr
                                                   INNER JOIN ram r ON pr.ram_id = r.ram_id
                                                   WHERE pr.product_id = ?");
                        $stmtRam->bind_param("i", $productID);
                        $stmtRam->execute();
                        $stmtRam->bind_result($ram);
                        $stmtRam->fetch();
                        $stmtRam->close();

                        // Fetch storage for the product
                        $stmtStorage = $conn->prepare("SELECT s.storage_name
                                                       FROM product_storage ps
                                                       INNER JOIN storage s ON ps.storage_id = s.storage_id
                                                       WHERE ps.product_id = ?");
                        $stmtStorage->bind_param("i", $productID);
                        $stmtStorage->execute();
                        $stmtStorage->bind_result($storage);
                        $stmtStorage->fetch();
                        $stmtStorage->close();

                        // Fetch price for the product
                        $stmtPrice = $conn->prepare("SELECT price
                                                      FROM quoteitems
                                                      WHERE ProductID = ?");
                        $stmtPrice->bind_param("i", $productID);
                        $stmtPrice->execute();
                        $stmtPrice->bind_result($price);
                        $stmtPrice->fetch();
                        $stmtPrice->close();
                ?>
              <tr>
                <td>
                    <input type="text" class="form-control" name="product_id_<?php echo $productID; ?>" value="<?php echo $productID; ?>" readonly>
                </td>
                <td>
                    <input type="text" class="form-control" name="product_name_<?php echo $productID; ?>" value="<?php echo $productName; ?>" readonly>
                </td>
                <td>
                    <input type="text" class="form-control" name="ram_<?php echo $productID; ?>" value="<?php echo $ram ? $ram : 0; ?>" readonly>
                </td>
                <td>
                    <input type="text" class="form-control" name="storage_<?php echo $productID; ?>" value="<?php echo $storage ? $storage : 0; ?>" readonly>
                </td>
                <td>
                    <input type="text" class="form-control" name="price_<?php echo $productID; ?>" value="<?php echo $price; ?>">
                </td>
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
    </div>
    <div class="row">
        <div class="col-md-6">
            <!--sends all data after Total to the Email -->
            <label>send quote to email:</label>
            <button type="submit" class="btn btn-primary" name="create_quote">Create Quote</button>
        </div>
       
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary" name="total">Total</button><br><br>
                       
            <input type="text" class="form-control" name="total" value="<?php echo $total; ?>" placeholder="Total after" readonly><br>           
        </div>
    </div>
</form>


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