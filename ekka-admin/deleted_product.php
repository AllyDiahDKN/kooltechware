<?php
// Include your database connection file here
require_once '../db.php';

// Check if product ID is provided in the URL
if (isset($_GET['ProductID'])) {
    $productID = $_GET['ProductID'];

    // Retrieve product data before deletion
    $sql = "SELECT * FROM products WHERE ProductID = '$productID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch product data
        $productData = $result->fetch_assoc();

        // Insert product data into deleted_products table
        $insertQuery = "INSERT INTO deleted_products (ProductID, ProductName, Price, Description, Processor, Ram, Storage, available, CategoryID, BrandID, show_product, date_added)
                        VALUES ('{$productData['ProductID']}', '{$productData['ProductName']}', '{$productData['Price']}', '{$productData['Description']}', '{$productData['Processor']}', '{$productData['Ram']}', '{$productData['Storage']}', '{$productData['available']}', '{$productData['CategoryID']}', '{$productData['BrandID']}', '{$productData['show_product']}', '{$productData['date_added']}')";

        if ($conn->query($insertQuery) === TRUE) {
            // Delete the product from the products table
            $deleteQuery = "DELETE FROM products WHERE ProductID = '$productID'";
            if ($conn->query($deleteQuery) === TRUE) {
                // If successful, redirect back to the previous page
                header("Location: {$_SERVER['HTTP_REFERER']}");
                exit();
            } else {
                echo "Error deleting product: " . $conn->error;
            }
        } else {
            echo "Error inserting into deleted_products table: " . $conn->error;
        }
    } else {
        echo "Product not found.";
    }
} else {
    echo "Product ID not provided.";
}
?>
