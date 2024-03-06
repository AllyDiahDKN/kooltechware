<?php
// Include your database connection file here
require_once '../db.php';

// Check if category ID is provided in the URL
if (isset($_GET['brand_id'])) {
    $brandId = $_GET['brand_id'];

    // Retrieve category data for editing
    $sql = "SELECT * FROM brands WHERE BrandID = '$brandId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch Brand data
        $brandData = $result->fetch_assoc();
        
        // Check if the form is submitted for updating brand
        if(isset($_POST['update_brand'])) {
            $newBrandName = $_POST['brand_name'];

            // Update Brand name in the Brands table
            $updateQuery = "UPDATE brands SET BrandName = '$newBrandName' WHERE BrandID = '$brandId'";
            if ($conn->query($updateQuery) === TRUE) {
                // Redirect back to category.php
                header("Location: brand.php");
                exit();
            } else {
                echo "Error updating brand: " . $conn->error;
            }
        }
        ?>
        <!-- HTML form for editing category -->
        <form method="post">
            <label for="brand_name">Brand Name:</label>
            <input type="text" id="brand_name" name="brand_name" value="<?php echo $brandData['BrandName']; ?>" required>
            <input type="submit" name="update_brand" value="Update brand">
        </form>
        <?php
    } else {
        echo "Brand not found.";
    }
} else {
    echo "Brand ID not provided.";
}
?>
