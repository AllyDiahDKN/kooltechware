<?php
session_start(); // Start session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
    $subject = filter_input(INPUT_POST, "subject", FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);

    // Check if all required fields are filled
    if ($username && $email && $subject && $message) {
        // Set recipient email
        $to = "kb@kooltechware.co.tz"; 
        // Set email headers
        $headers = "From: $email" . "\r\n" .
                   "Reply-To: $email" . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();

        // Compose email message
        $email_message = "Name: $username\n";
        $email_message .= "Email: $email\n";
        $email_message .= "Phone: $phone\n";
        $email_message .= "Subject: $subject\n";
        $email_message .= "Message:\n$message\n";

        // Send email
        if (mail($to, $subject, $email_message, $headers)) {
            // Set session message
            $_SESSION['success_message'] = 'Your message was successfully sent.';

            // Redirect to contact.php after successful submission
            header("Location: contact.php");
            exit;
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to send message. Please try again later.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Please fill out all required fields.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>
