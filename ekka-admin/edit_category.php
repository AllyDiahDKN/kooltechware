<?php
// Include your database connection file here
require_once '../db.php';

// Check if category ID is provided in the URL
if (isset($_GET['category_id'])) {
    $categoryId = $_GET['category_id'];

    // Retrieve category data for editing
    $sql = "SELECT * FROM categories WHERE CategoryID = '$categoryId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch category data
        $categoryData = $result->fetch_assoc();
        
        // Check if the form is submitted for updating category
        if(isset($_POST['update_category'])) {
            $newCategoryName = $_POST['category_name'];

            // Update category name in the categories table
            $updateQuery = "UPDATE categories SET CategoryName = '$newCategoryName' WHERE CategoryID = '$categoryId'";
            if ($conn->query($updateQuery) === TRUE) {
                // Redirect back to category.php
                header("Location: category.php");
                exit();
            } else {
                echo "Error updating category: " . $conn->error;
            }
        }
        ?>
        <!-- HTML form for editing category -->
        <form method="post">
            <label for="category_name">Category Name:</label>
            <input type="text" id="category_name" name="category_name" value="<?php echo $categoryData['CategoryName']; ?>" required>
            <input type="submit" name="update_category" value="Update Category">
        </form>
        <?php
    } else {
        echo "Category not found.";
    }
} else {
    echo "Category ID not provided.";
}
?>
