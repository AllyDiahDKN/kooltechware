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

	<title>Quote Sent Page.</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

	<!-- Data-Tables -->
	<link href='assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>

	<!-- Ekka CSS -->
	<link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon" />
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

	<?php include 'header.php';?>

			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper breadcrumb-wrapper-2">
						<h1>Quotes</h1>
						<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
							<span><i class="mdi mdi-chevron-right"></i></span>Quotes
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
									<?php
// Fetch quote details
$sql = "SELECT qr.QuoteID, u.UserID, u.first_name, u.last_name, qr.notes, qr.status
        FROM quoterequests qr
        INNER JOIN users u ON qr.UserID = u.uniqueID
        ORDER BY qr.QuoteID DESC"; // You may adjust the ORDER BY clause as needed
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    ?>
    <table id="responsive-data-table" class="table" style="width:100%">
        <thead>
            <tr>
                <th>QuoteID</th>
                <th>UserData</th>
                <th>Notes</th>
                <th>Status</th>
                <th>Products</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['QuoteID']; ?></td>
                    <td>
                        <a><?php echo $row['first_name'] . ' ' . $row['last_name'] . ' (' . $row['UserID'] . ')'; ?></a>
                    </td>
                    <td>
                        <a><?php echo $row['notes']; ?></a>
                    </td>
					<td><?php echo $row['status'] ? 'sent' : ''; ?></td>

                    <td>
                        <?php
                        // Fetch products related to the quote
                        $quoteID = $row['QuoteID'];
                        $sqlProducts = "SELECT p.ProductName, qi.Price
                                        FROM products p
                                        INNER JOIN quoteitems qi ON p.ProductID = qi.ProductID
                                        WHERE qi.QuoterequestsID = $quoteID";
                        $resultProducts = $conn->query($sqlProducts);

                        // Check if there are products
                        if ($resultProducts->num_rows > 0) {
                            // Output data of each product
                            while ($product = $resultProducts->fetch_assoc()) {
                                echo $product['ProductName'] . ', ';
                            }
                        } else {
                            echo "No products found";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        // Fetch total price for the quote
                        $sqlTotalPrice = "SELECT SUM(qi.Price) AS TotalPrice
                                          FROM quoteitems qi
                                          WHERE qi.QuoterequestsID = $quoteID";
                        $resultTotalPrice = $conn->query($sqlTotalPrice);
                        $rowTotalPrice = $resultTotalPrice->fetch_assoc();
                        echo  $rowTotalPrice['TotalPrice'];
                        ?>
                    </td>
                    <td>
                        <div class="btn-group mb-1">
                            <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <span class="sr-only">Info</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="order-detail.php?QuoteID=<?php echo $quoteID; ?>">Detail</a>
                                <!--<a class="dropdown-item" href="createQuote.php?QuoteID=<?php echo $quoteID; ?>">Create Quote</a>-->
                                <a class="dropdown-item" href="#">Cancel</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <?php
} else {
    echo "No quotes found.";
}
?>


									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->


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
	// JavaScript function to print the receipt
function printReceipt() {
    window.print();
}</script>

	<!-- Data-Tables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>
</html>