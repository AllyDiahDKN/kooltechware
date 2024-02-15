<?php
require_once '../db.php';?>
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

	<!-- Data Tables -->
	<link href='assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>

	<!-- ekka CSS -->
	<link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon" />
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

	<!-- WRAPPER -->
	<div class="wrapper">



			<!-- Header -->
			<?php include 'header.php';?>

			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper breadcrumb-contacts">
						<div>
							<h1>Seller List</h1>
							<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Seller
							</p>
						</div>
						<div>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal"
								data-bs-target="#addUser"> Add Seller
							</button>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="ec-vendor-list card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Email</th>
													<th>Mobile</th>
													<th>Total Sales</th>
													<th>Commission Earned</th>
													<th>Commission Unpaid</th>
													<th>Commission Paid</th>
													<th>Activation</th>
													<th>Joined On</th>
													<th> </th>
												</tr>
											</thead>

											<tbody>
												<?php
// Step 2: Query the database
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
$extra_of_3m=0;
$above_3m=0;
$commission_earned=0;

// Step 3: Loop through the result set
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
      $sql_orders="SELECT SUM(Total) AS grand_total FROM orders WHERE Payment='paid' AND user_id = '".$row['user_id']."'";
    $result_orders=$conn->query($sql_orders);
    $row_orders = $result_orders->fetch_assoc();

    $sql_paid="SELECT SUM(payment) AS paid_commission FROM commission WHERE user_id = '".$row['user_id']."'";
    $result_paid=$conn->query($sql_paid);
    $row_paid = $result_paid->fetch_assoc();
        // Step 4: Display the retrieved data in the required HTML table format
        echo "<tr>";
        echo "<td>" . $row["user_id"] . "</td>";
        echo "<td>" . $row["first_name"] . " " . $row["last_name"] ." </td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["mobile"] . "</td>";
        echo "<td>".number_format($row_orders['grand_total'],0)."</td>";
        if ($row_orders['grand_total'] >= 3000000) {
          $under_3m= 3000000 * 0.07;
          $extra_of_3m=$row_orders['grand_total'] - 3000000;
          $above_3m= $extra_of_3m*0.1;
          $commission_earned=$under_3m+$above_3m;
          echo "<td>".number_format($commission_earned,0)."</td>";

        } else {
          $commission_earned=$row_orders['grand_total']*0.07;
        echo "<td>".number_format($commission_earned,0)."</td>";
        }
        
        echo "<td>".number_format(($commission_earned - $row_paid['paid_commission']),0)."</td>";
        echo "<td>".number_format($row_paid['paid_commission'],0)."</td>";
        echo "<td>".$row['activation']."<br><button type='button' class='btn btn-outline-warning toggle-activation' data-user-id='". $row["user_id"] ."'>Yes/No</button>
</td>";
        echo "<td>" . $row["date_created"] . "</td>";
echo '<td>
		<div class="btn-group mb-1">
			
			<button type="button"
				class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
				data-bs-toggle="dropdown" aria-haspopup="true"
				aria-expanded="false" data-display="static">
				<span class="sr-only">Info</span>
			</button>

			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Edit</a>
				<a class="dropdown-item" href="#">Delete</a>
			</div>
		</div>
	</td>';
        echo "</tr>";
    }
} else {
    echo "0 results";
}

?>

											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Add User Modal  -->
					<div class="modal fade modal-add-contact" id="addUser" tabindex="-1" role="dialog"
						aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
							<div class="modal-content">
								<form>
									<div class="modal-header px-4">
										<h5 class="modal-title" id="exampleModalCenterTitle">Add New Seller</h5>
									</div>

									<div class="modal-body px-4">
										<div class="form-group row mb-6">
											<label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User
												Image</label>

											<div class="col-sm-8 col-lg-10">
												<div class="custom-file mb-1">
													<input type="file" class="custom-file-input" id="coverImage"
														required>
													<label class="custom-file-label" for="coverImage">Choose
														file...</label>
													<div class="invalid-feedback">Example invalid custom file feedback
													</div>
												</div>
											</div>
										</div>

										<div class="row mb-2">
											<div class="col-lg-6">
												<div class="form-group">
													<label for="firstName">First name</label>
													<input type="text" class="form-control" id="firstName" value="John">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group">
													<label for="lastName">Last name</label>
													<input type="text" class="form-control" id="lastName" value="Deo">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="userName">User name</label>
													<input type="text" class="form-control" id="userName"
														value="johndoe">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="email">Email</label>
													<input type="email" class="form-control" id="email"
														value="johnexample@gmail.com">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="Birthday">Birthday</label>
													<input type="text" class="form-control" id="Birthday"
														value="10-12-1991">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="event">Address</label>
													<input type="text" class="form-control" id="event"
														value="Address here">
												</div>
											</div>
										</div>
									</div>

									<div class="modal-footer px-4">
										<button type="button" class="btn btn-secondary btn-pill"
											data-bs-dismiss="modal">Cancel</button>
										<button type="button" class="btn btn-primary btn-pill">Save Contact</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->

			<!-- Footer -->
			<?php include 'footer.php';?>

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>
	<script>
$(document).ready(function() {
    // Event handler for button click
    $('.toggle-activation').click(function() {
        // Get the user ID from the data attribute
        var userId = $(this).data('user-id');

        // Send AJAX request to update activation status
        $.ajax({
            url: 'update_activation.php',
            type: 'POST',
            data: { user_id: userId },
            success: function(response) {
                // Reload the page or update UI as needed
                location.reload();
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
            }
        });
    });
});
</script>


	<!-- Data Tables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>
</html>
<?php
mysqli_close($conn);
?>