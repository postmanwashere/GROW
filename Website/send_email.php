<?php
// Set the recipient email address.
$to = "postmanwashere@gmail.com";

// Retrieve form data.
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Validate the form fields.
if (empty($name) || empty($email) || empty($message)) {
    echo "All fields are required.";
    exit;
}

// Set the email subject and headers.
$subject = "New Contact Form Submission from $name";
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Format the message.
$email_body = "You have received a new message from your website contact form.\n\n";
$email_body .= "Here are the details:\n";
$email_body .= "Name: $name\n";
$email_body .= "Email: $email\n";
$email_body .= "Message:\n$message\n";

// Send the email.
if (mail($to, $subject, $email_body, $headers)) {
    echo "Thank you for your message! We will get back to you shortly.";
} else {
    echo "Sorry, there was an error sending your message. Please try again later.";
}
?>
