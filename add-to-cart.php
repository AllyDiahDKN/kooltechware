<?php
// Start session to access session variables
session_start();

// Include database connection file
include 'db.php';

// Check if user_id cookie exists
if(isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    // Handle error or redirect to login page
    exit("User ID not found. Please login.");
}

// Check if ProductID is set in the URL
if(isset($_GET['ProductID'])) {
    $productID = $_GET['ProductID'];
} else {
    // Handle error or redirect to previous page
    exit("Product ID not found.");
}

// Check if the product is already in the cart for the user
$sql_check = "SELECT * FROM cart WHERE UserID='$user_id' AND ProductID='$productID'";
$result_check = $conn->query($sql_check);

if ($result_check->num_rows > 0) {
    // Product is already in the cart
  header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();}

// Insert product into cart table
$sql_insert = "INSERT INTO cart (UserID, ProductID) VALUES ('$user_id', '$productID')";

if ($conn->query($sql_insert) === TRUE) {
    // Redirect to previous page
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
} else {
    echo "Error: " . $sql_insert . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>