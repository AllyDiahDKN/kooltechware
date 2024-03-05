<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // User is already logged in, redirect to the dashboard or home page
    header("Location: index.php"); // Adjust this to the appropriate page
    exit();
}

// This is the connection file 
require_once '../db.php';

$error = ''; // Initialize error variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check if the user exists in the admin table and is active
    $query = "SELECT * FROM user_admin WHERE email = ?";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // User found, verify password
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password'];

            // Verify the password using password_verify
            if (password_verify($password, $hashedPassword)) {
                // Authentication successful, set session variables
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $row['email']; // Store email as username

                // Redirect to the dashboard or home page
                header("Location: index.php");
                exit();
            } else {
                // Invalid password
                $error = "Invalid email or password.";
            }
        } else {
            // User not found
            $error = "Invalid email or password.";
        }
    } else {
        // Error preparing statement
        $error = "Error preparing statement: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Ekka - Admin Dashboard HTML Template.">

		<title>Admin Dashboard.</title>
		
		<!-- GOOGLE FONTS -->
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

		<link href="cdn.jsdelivr.net/npm/mdi/font4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
		
		<!-- Ekka CSS -->
		<link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />
		
		<!-- FAVICON -->
		<link href="assets/img/favicon.png" rel="shortcut icon" />
	</head>
	
	<body class="sign-inup" id="body">
		<div class="container d-flex align-items-center justify-content-center form-height-login pt-24px pb-24px">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-10">
					<div class="card">
						<div class="card-header bg-primary">
							<div class="ec-brand">
								<a href="index.html" title="Ekka">
									<img class="ec-brand-icon" src="assets/img/logo/logo-login.png" alt="" />
								</a>
							</div>
						</div>
						<div class="card-body p-5">
							<h4 class="text-dark mb-5">Sign In</h4>

<!-- Your HTML form -->
<form action="" method="post">
    <div class="row">
    	 <!-- Display error message if present -->
    <?php if (isset($error)): ?>
        <div class="alert alert-danger" role="alert"><?php echo $error; ?></div>
    <?php endif; ?>
        <div class="form-group col-md-12 mb-4">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email " required>
        </div>
        <div class="form-group col-md-12">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
        <div class="col-md-12">
            <!-- Remember me checkbox -->
            <div class="d-flex my-2 justify-content-between">
                <div class="d-inline-block mr-3">
                    <div class="control control-checkbox">
                        Remember me
                        <input type="checkbox" name="remember_me">
                        <div class="control-indicator"></div>
                    </div>
                </div>
                <p><a class="text-blue" href="#">Forgot Password?</a></p>
            </div>
            <!-- Sign in button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign In</button>
            <!-- Sign up link -->
            <p class="sign-upp">Don't have an account yet ? <a class="text-blue" href="sign-up.php">Sign Up</a></p>
        </div>
    </div>
</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	
		<!-- Javascript -->
		<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
		<script src="assets/plugins/slick/slick.min.js"></script>
	
		<!-- Ekka Custom -->	
		<script src="assets/js/ekka.js"></script>
	</body>

</html>