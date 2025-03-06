<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email configuration
    $to = "singhbirat2@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // Send email
    if(mail($to, $subject, $body, $headers)){
        echo "Message sent successfully!";
    } else {
        echo "Message sending failed.";
    }
}
?>
