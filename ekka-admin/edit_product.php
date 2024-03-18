<?php
require_once '../db.php'; // Include your database connection file here
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">

    <!-- ekka CSS -->
    <link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

    <!-- FAVICON -->
    <link href="assets/img/favicon.png" rel="shortcut icon" />
</head>
<body>
    <div class="wrapper">
        <div class="ec-content-wrapper">
            <div class="content">
                <!-- Add Brand Modal -->
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">

                           
<?php
// Check if ProductID is provided in the URL
if (isset($_GET['ProductID'])) {
    $productId = $_GET['ProductID'];

    // Retrieve product data for editing
    $sql = "SELECT * FROM products WHERE productID = '$productId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch product data
        $productData = $result->fetch_assoc();

        // Check if the form is submitted for updating product
        if(isset($_POST['update_product'])) {
            // Extract form data
            $productName = $_POST['ProductName'];
            $categoryID = $_POST['CategoryID'];
            $brandID = $_POST['BrandID'];
            $available = $_POST['available'];
            $description = $_POST['Description'];

            // Update product data in the products table
            $updateQuery = "UPDATE products SET 
                            ProductName = '$productName', 
                            CategoryID = '$categoryID', 
                            BrandID = '$brandID', 
                            available = '$available', 
                            Description = '$description' 
                            WHERE ProductID = '$productId'";

            if ($conn->query($updateQuery) === TRUE) {
                // Redirect back to product-list.php
                header("Location: product-list.php");
                exit();
            } else {
                echo "Error updating product: " . $conn->error;
            }
        }
    }
}
?> 

<form action="" method="post">
    <div class="">
        <div class="col-md-6">
            <label for="ProductName" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="ProductName" value="<?php echo $productData['ProductName']; ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">Select Category</label>
            <select name="CategoryID" class="form-select">
                <?php
                $sql = "SELECT categoryID, categoryName FROM categories";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $selected = ($row['categoryID'] == $productData['CategoryID']) ? 'selected' : '';
                        echo "<option value='{$row['categoryID']}' $selected>{$row['categoryName']}</option>";
                    }
                } else {
                    echo "<option value='' disabled>No categories found</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Select Brand</label>
            <select name="BrandID" class="form-select">
                <?php
                $sql = "SELECT brandID, brandName FROM brands";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $selected = ($row['brandID'] == $productData['BrandID']) ? 'selected' : '';
                        echo "<option value='{$row['brandID']}' $selected>{$row['brandName']}</option>";
                    }
                } else {
                    echo "<option value='' disabled>No brands found</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Available</label>
            <select name="available" class="form-select">
                <option value="1" <?php if($productData['available'] == 1) echo "selected"; ?>>Yes</option>
                <option value="0" <?php if($productData['available'] == 0) echo "selected"; ?>>No</option>
            </select>
        </div>           
        <div class="col-md-12">
            <label class="form-label">Description</label>
            <textarea class="form-control" rows="4" name="Description"><?php echo $productData['Description']; ?></textarea>
        </div>
        <div class="col-md-12">
            <a href="product-list.php" class="btn btn-primary">Cancel</a>
            <button type="submit" class="btn btn-primary" name="update_product">Update</button>
        </div>
    </div>
</form>

                    </div>
                </div>
            </div> <!-- End Content -->
        </div> <!-- End Content Wrapper -->
    </div> <!-- End Page Wrapper -->
</body>
</html>
<?php
mysqli_close($conn);
?>
