<?php
if (isset($_POST['submit'])) {
    // Sanitize and validate user inputs
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $from = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    // Check for required fields
    if (empty($name) || empty($from) || empty($subject) || empty($message)) {
        echo "<script type='text/javascript'>alert('Please fill in all required fields.')</script>";
    } elseif (!filter_var($from, FILTER_VALIDATE_EMAIL)) {
        echo "<script type='text/javascript'>alert('Invalid email address.')</script>";
    } else {
        // Prepare email content
        $mailto = "wealthspacefoundation@gmail.com";
        $subject = "Contact Form Submission: $subject";

        $message = "Client: Name $name wrote the following message:\n\n$message";
        $headers = "From: $from";

        $subject2 = "Thank you for contacting Wealth Space Foundation";
        $message2 = "Dear $name,\n\nThank you for contacting us. We will get back to you shortly.";

        // Send emails
        $result = mail($mailto, $subject, $message, $headers);
        $result2 = mail($from, $subject2, $message2);

        if ($result) {
            echo "<script type='text/javascript'>alert('Thank you, we will get back to you shortly.')</script>";
        } else {
            echo "<script type='text/javascript'>alert('Sorry, submission failed. Please try again later.')</script>";
        }
    }
}
