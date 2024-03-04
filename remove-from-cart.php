<?php
// Include your database connection file
include 'db.php'; // Make sure to replace 'db_connect.php' with your actual file name

// Check if CartID is provided in the URL
if (isset($_GET['id'])) {
    // Get the CartID from the URL
    $cart_id = $_GET['id'];

    // Prepare a DELETE statement to remove the item from the cart table
    $sql = "DELETE FROM cart WHERE CartID = ?";
    
    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind the parameter
    $stmt->bind_param("i", $cart_id);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect back to the previous page or wherever you want
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit(); // Stop further execution
    } else {
        // Handle the error if the execution fails
        echo "Error: " . $conn->error;
    }

    // Close the statement
    $stmt->close();
}

// If CartID is not provided, redirect back to the previous page
header("Location: {$_SERVER['HTTP_REFERER']}");
exit(); // Stop further execution
?>
