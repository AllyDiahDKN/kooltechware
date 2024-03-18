<?php
session_start();

// Connection string
require_once '../db.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input to prevent SQL injection
    $first_name = isset($_POST['first_name']) ? mysqli_real_escape_string($conn, $_POST['first_name']) : '';
    $last_name = isset($_POST['last_name']) ? mysqli_real_escape_string($conn, $_POST['last_name']) : '';
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) : '';

    // Hash the password before storing it in the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $table_name = "admin"; 

    $sql = "INSERT INTO $table_name (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "ssss", $first_name, $last_name, $email, $hashed_password); 

    if (mysqli_stmt_execute($stmt)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Admin Dashboard.">

  <title>Admin Dashboard.</title>

  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">
  
  <link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- Ekka CSS -->
  <link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />
</head>

<body class="sign-inup" id="body">
  <div class="container d-flex align-items-center justify-content-center form-height pt-24px pb-24px">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-10">
        <div class="card">
          <div class="card-header bg-primary">
            <div class="ec-brand">
              <a href="index.php" title="Kool Techware">
                <img class="ec-brand-icon" src="assets/img/logo/logo-login.png" alt="" />
              </a>
            </div>
          </div>
          <div class="card-body p-5">
            <h4 class="text-dark mb-5">Sign Up</h4>
            <form action="" method="post">
              <div class="row">
                <div class="form-group col-md-12 mb-4">
                  <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
                </div>

                <div class="form-group col-md-12 mb-4">
                  <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                </div>

                <div class="form-group col-md-12 mb-4">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>

                <div class="form-group col-md-12 mb-4">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>

                <div class="form-group col-md-12 mb-4">
                  <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
                </div>

                <div class="col-md-12">
                  <div class="d-inline-block mr-3">
                    <!--<div class="control control-checkbox">
                      <input type="checkbox" />
                      <div class="control-indicator"></div>
                      I Agree to the terms and conditions
                    </div>--> 
                  </div>
                  <button type="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>
                  <p class="sign-upp">Already have an account?
                    <a class="text-blue" href="sign-in.php">Sign in</a>
                  </p>    
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