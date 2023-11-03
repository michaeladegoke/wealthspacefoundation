<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//require 'path/to/PHPMailer/PHPMailer.php';
//require 'path/to/PHPMailer/SMTP.php';
//require 'path/to/PHPMailer/Exception.php';
require 'PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient_email = "wealthspacefoundation@gmail.com"; // The email address where you want to receive the email

    // Validate and sanitize user inputs
    $sender_name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $sender_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $sender_phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
    $subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);

    // Check for required fields
    if (empty($sender_name) || empty($sender_email) || empty($subject) || empty($message)) {
        echo "Please fill in all required fields.";
    } elseif (!filter_var($sender_email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
    } else {
        $email_subject = "Contact Form Submission: $subject";
        $email_body = "Name: $sender_name\n";
        $email_body .= "Email: $sender_email\n";
        $email_body .= "Phone: $sender_phone\n";
        $email_body .= "Message:\n$message";

        // Initialize PHPMailer
        $mail = new PHPMailer();

        // Configure the SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.@gmail.com'; // Replace with your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'wealthspacefoundation@gmail.com'; // Replace with your email
        $mail->Password = 'your_password'; // Replace with your email password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Set sender and recipient
        $mail->setFrom($sender_email, $sender_name);
        $mail->addAddress($recipient_email);

        // Set email subject and body
        $mail->Subject = $email_subject;
        $mail->Body = $email_body;

        // Send the email
        if ($mail->send()) {
            // Email sent successfully
            echo "Thank you for your message. We will get back to you shortly.";
        } else {
            // Email sending failed
            echo "Sorry, there was an error sending your message. Please try again later.";
        }
    }
}
