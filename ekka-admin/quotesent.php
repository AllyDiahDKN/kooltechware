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
										<table id="responsive-data-table" class="table" style="width:100%">
											<thead>
												<tr>										
                                        <th>QuoteID</th>
                                        <th>UserData</th>									
                                        <th>Notes</th>
                                       <!-- <th>RequestDate</th>-->
										<th>status</th>
                          				<th> </th>
												</tr>
											</thead>

											<tbody>
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
?>
<tr>
                          <td><?php echo $row['QuoteID'];?></td>
                          <td>
                            <a><?php echo $row['first_name'];?> <?php echo $row['last_name'];?> (<?php echo $row['UserID'];?>)</a>
                            <br />
                          </td>                
						  <td>
                            <a><?php echo $row['notes'];?>(<?php echo $row['UserID'];?>)</a>
                            <br />
                          </td>
                          </td>
                          <td><?php echo $row['status'] ? 'sent' : ''; ?></td>

                          <td>
														<div class="btn-group mb-1">
															
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
															     <a class="dropdown-item" href="order-detail.php?QuoteID=<?php echo $QuoteID; ?>">Detail</a>
																 <a class="dropdown-item" href="createQuote.php?QuoteID=<?php echo $QuoteID; ?>" target="_blank" >Create Quote</a>
																 <a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
                        </tr>

   
<?php
}} else {
    echo "No Order at the moment";
}
?>
												
											</tbody>
										</table>
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