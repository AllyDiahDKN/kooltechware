<?php
require_once '../db.php'; // Adjust the path as needed

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data


    /* Image upload
    $targetDir = "../assets/images/product-image/"; // Directory where uploaded images will be saved
    $targetFile = $targetDir . basename($_FILES["product_image"]["name"]);
    $fileName= basename($_FILES["product_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["product_image"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["product_image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES["product_image"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }*/
  //  }

    // Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize product details from the form
    $ProductName = mysqli_real_escape_string($conn, $_POST['ProductName']);
    $CategoryID = intval($_POST['CategoryID']);
    $BrandID = intval($_POST['BrandID']);
    $available = intval($_POST['available']);
   //$price = floatval($_POST['Price']);
    $Description = mysqli_real_escape_string($conn, $_POST['Description']);

    // Prepare and execute SQL statement to insert product details into the products table
    $sql = "INSERT INTO products (productName, CategoryID, BrandID, available,Description)
            VALUES (?, ?, ?, ?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("siids", $ProductName, $CategoryID, $BrandID, $available,$Description);
    $stmt->execute();
    $productId = $stmt->insert_id;

    // Redirect back to the product page or show a success message
    header("Location: product-add.php?product_id=$productId");
    exit(); // Ensure script execution stops after redirection
} else {
    // Redirect to the error page or display an error message
    echo "Invalid request method";
}

// Close the database connection
$conn->close();
?>
