<?php
// Include your database connection file
require_once '../db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['saveBrand'])) {
    // Retrieve and sanitize brand name from the form
    $brandName = mysqli_real_escape_string($conn, $_POST['BrandName']);

    // Insert brand name into the database
    $query = "INSERT INTO Brands (BrandName) VALUES ('$brandName')";
    if (mysqli_query($conn, $query)) {
        // Brand added successfully, redirect back with success message
        header("Location: brand.php?success=1");
        exit();
    } else {
        // Error handling if insertion fails
        header("Location: brand.php?error=1");
        exit();
    }
}
?>
