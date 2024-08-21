<?php
// Check if form data is set
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
$message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

// Validate and process the form data
if (!empty($email) && !empty($message)) { // Check if subject is not empty
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $receiver = "m.lomeljim@gmail.com"; // Enter the email address where you want to receive all messages
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message\n\nRegards,\n$name";
        $sender = "From: $email";
        if (mail($receiver, $body, $sender)) {
            echo "Your message has been sent";
        } else {
            echo "Sorry, failed to send your message!";
        }
    } else {
        echo "Enter a valid email address!";
    }
} else {
    echo "Email, and message fields are required!";
}
