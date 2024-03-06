<?php
// Include your database connection file here
require_once '../db.php';

// Check if brand ID is provided in the URL
if (isset($_GET['brand_id'])) {
    $brandId = $_GET['brand_id'];

    // Retrieve brand data before deletion
    $sql = "SELECT * FROM brands WHERE BrandID = '$brandId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch brand data
        $brandData = $result->fetch_assoc();

        // Insert brand data into deleted_brands table
        $insertQuery = "INSERT INTO deleted_brands (BrandID, BrandName)
                        VALUES ('{$brandData['BrandID']}', '{$brandData['BrandName']}')";

        if ($conn->query($insertQuery) === TRUE) {
            // Delete the brand from the brands table
            $deleteQuery = "DELETE FROM brands WHERE BrandID = '$brandId'";
            if ($conn->query($deleteQuery) === TRUE) {
                // If successful, redirect back to the previous page
                header("Location: {$_SERVER['HTTP_REFERER']}");
                exit();
            } else {
                echo "Error deleting brand: " . $conn->error;
            }
        } else {
            echo "Error inserting into deleted_brands table: " . $conn->error;
        }
    } else {
        echo "Brand not found.";
    }
} else {
    echo "Brand ID not provided.";
}
?>
