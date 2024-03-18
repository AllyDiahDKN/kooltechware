<?php
require_once 'db.php';

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST["first_name"];
    $uniqueID = $_POST["userID"];
    $lastName = $_POST["last_name"];
    $companyName = $_POST["company_name"];
    $email = $_POST["email"];
    $mobile = $_POST["phone"];
    $notes = $_POST["note_box"];

    // Insert user information into the users table
    $userUpdateQuery = "UPDATE users 
                        SET first_name = '$firstName', last_name = '$lastName', company = '$companyName', Email = '$email', mobile = '$mobile' 
                        WHERE uniqueID = '$uniqueID'";
    
    if (mysqli_query($conn, $userUpdateQuery)) {

        // Insert user ID and notes into the quoterequests table
        $quoteRequestInsertQuery = "INSERT INTO quoterequests (UserID, notes) 
                                    VALUES ('$uniqueID', '$notes')";
        if (mysqli_query($conn, $quoteRequestInsertQuery)) {
            $quoteID = mysqli_insert_id($conn); // Get the quote request ID from the last insert operation

            // Transfer cart items to the quoteitems table
            $cartItemsQuery = "SELECT * FROM cart WHERE UserID = '$uniqueID'";
            $cartItemsResult = mysqli_query($conn, $cartItemsQuery);
            $cartItemsTransferred = true;
            while ($row = mysqli_fetch_assoc($cartItemsResult)) {
                $productID = $row['ProductID'];
                $ram_id = $row['ram_id'];
                $storage_id = $row['storage_id'];
                // Insert cart item into quoteitems table
                $quoteItemInsertQuery = "INSERT INTO quoteitems (QuoterequestsID, ProductID, UserID, ram_id, storage_id) 
                                         VALUES ('$quoteID', '$productID', '$uniqueID', '$ram_id', '$storage_id')";
                if (!mysqli_query($conn, $quoteItemInsertQuery)) {
                    $cartItemsTransferred = false;
                    break;
                }
            }

            if ($cartItemsTransferred) {
                // Delete transferred cart items from the cart table
                $deleteCartItemsQuery = "DELETE FROM cart WHERE UserID = '$uniqueID'";
                if (mysqli_query($conn, $deleteCartItemsQuery)) {
                    // Send email to ikram.bezad@gmail.com with form data and product names from quoteitems table
                    $to = "ikram.bezad@gmail.com";
                    $subject = "Quote Request from $firstName $lastName";
                    $message = "First Name: $firstName\n";
                    $message .= "Last Name: $lastName\n";
                    $message .= "Company Name: $companyName\n";
                    $message .= "Email: $email\n";
                    $message .= "Mobile: $mobile\n\n";
                    $message .= "Notes: $notes\n\n";
                    $message .= "Products:\n";
                    $productNamesQuery = "SELECT products.ProductName 
                                          FROM products 
                                          INNER JOIN quoteitems ON products.ProductID = quoteitems.ProductID 
                                          WHERE quoteitems.QuoterequestsID = '$quoteID'";
                    $productNamesResult = mysqli_query($conn, $productNamesQuery);
                    while ($productRow = mysqli_fetch_assoc($productNamesResult)) {
                        $message .= "- " . $productRow['ProductName'] . "\n";
                    }
                    $headers = "From: $email";
                    if (mail($to, $subject, $message, $headers)) {
                        // Success, redirect to a thank you page or display a success message
                        // header("Location: thank_you_page.php");
                        // exit();
                    } else {
                        // Email sending failed
                        echo "Error: Email sending failed";
                    }
                } else {
                    // Deleting cart items failed
                    echo "Error: Deleting cart items failed";
                }
            } else {
                // Transferring cart items failed
                echo "Error: Transferring cart items failed";
            }
        } else {
            // Inserting into quoterequests table failed
            echo "Error: Inserting into quoterequests table failed";
        }
    } else {
        // Updating users table failed
        echo "Error: Updating users table failed";
    }
}
?>
