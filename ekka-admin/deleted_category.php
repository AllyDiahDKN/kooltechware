<?php
// Include your database connection file here
require_once '../db.php';

// Check if category ID is provided in the URL
if (isset($_GET['category_id'])) {
    $categoryId = $_GET['category_id'];

    // Retrieve category data before deletion
    $sql = "SELECT * FROM categories WHERE CategoryID = '$categoryId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch category data
        $categoryData = $result->fetch_assoc();

        // Insert category data into deleted_category table
        $insertQuery = "INSERT INTO deleted_categories (CategoryID, CategoryName)
                        VALUES ('{$categoryData['CategoryID']}', '{$categoryData['CategoryName']}')";

        if ($conn->query($insertQuery) === TRUE) {
            // Delete the category from the categories table
            $deleteQuery = "DELETE FROM categories WHERE CategoryID = '$categoryId'";
            if ($conn->query($deleteQuery) === TRUE) {
                // If successful, redirect back to the previous page
                header("Location: {$_SERVER['HTTP_REFERER']}");
                exit();
            } else {
                echo "Error deleting category: " . $conn->error;
            }
        } else {
            echo "Error inserting into deleted_category table: " . $conn->error;
        }
    } else {
        echo "Category not found.";
    }
} else {
    echo "Category ID not provided.";
}
?>
