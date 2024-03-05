<?php
// Include your database connection file
require_once '../db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['saveCategory'])) {
    // Retrieve and sanitize category name from the form
    $categoryName = mysqli_real_escape_string($conn, $_POST['CategoryName']);

    // Insert category name into the database
    $query = "INSERT INTO categories (CategoryName) VALUES ('$categoryName')";
    if (mysqli_query($conn, $query)) {
        // Category added successfully, redirect back with success message
        header("Location: category.php?success=1");
        exit();
    } else {
        // Error handling if insertion fails
        header("Location: category.php?error=1");
        exit();
    }
}
?>
