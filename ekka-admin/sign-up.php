<?php
session_start();

//connection string ok
require_once '../db.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input to prevent SQL injection
    $first_name = isset($_POST['fname']) ? mysqli_real_escape_string($conn, $_POST['fname']) : '';
    $last_name = isset($_POST['lname']) ? mysqli_real_escape_string($conn, $_POST['lname']) : '';
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) : '';

    $table_name = "admin"; 
    // Hash the password before storing it in the database
    $password = isset($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : '';

    $sql = "INSERT INTO $table_name (fname, lname, email, password) VALUES (?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "ssss", $first_name, $last_name, $email, $password); 

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

  <!--CSS -->
  <link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="icon" />

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
            <form action="" method="post" >
              <div class="row">
                <div class="form-group col-md-12 mb-4">
                  <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name"> 
                </div>
                <div class="form-group col-md-12 mb-4">
                  <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name"> 
                </div>

                <div class="form-group col-md-12 mb-4">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Username-Email"> 
                </div>

                <div class="form-group col-md-12 ">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password"> 
                </div>

               <!-- <div class="form-group col-md-12 ">
                  <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password"> 
                </div>-->
                <div class="col-md-12">          
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

  <!--Custom -->
  <script src="assets/js/ekka.js"></script>
  <!--Custom-->

</body>
</html>