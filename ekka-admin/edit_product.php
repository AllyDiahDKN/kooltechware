<?php
// Include your database connection file here
require_once '../db.php';

// Check if category ID is provided in the URL
if (isset($_GET['ProductID'])) {
    $productId = $_GET['ProductID'];

    // Retrieve category data for editing
    $sql = "SELECT * FROM products WHERE ProductID = '$productId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch Brand data
        $productData = $result->fetch_assoc();
        
        // Check if the form is submitted for updating brand
        if(isset($_POST['update_product'])) {
            $newProductName = $_POST['product_name'];

            // Update Brand name in the Brands table
            $updateQuery = "UPDATE products SET ProductName = '$newProductName' WHERE ProductID = '$productId'";
            if ($conn->query($updateQuery) === TRUE) {
                // Redirect back to category.php
                header("Location: product-list.php");
                exit();
            } else {
                echo "Error updating Product: " . $conn->error;
            }
        }
        ?>
        <!-- HTML form for editing category -->
        <form method="post">
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" value="<?php echo $productData['ProductName']; ?>" required>
            <input type="submit" name="update_product" value="Update product">
        </form>
        <?php
    } else {
        echo "Product not found.";
    }
} else {
    echo "Product ID not provided.";
}
?>
