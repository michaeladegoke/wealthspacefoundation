<?php
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
        echo "<div style='position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: blue; padding: 20px; color: white; text-align: center;'>
        <span style='font-size: 2rem;'>Please fill in all required fields.</span>
      </div>";
    } elseif (!filter_var($sender_email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
    } else {
        $email_subject = "Contact Form Submission: $subject";
        $email_body = "Name: $sender_name\n";
        $email_body .= "Email: $sender_email\n";
        $email_body .= "Phone: $sender_phone\n";
        $email_body .= "Message:\n$message";

        // Additional headers
        $headers = "From: $sender_name <$sender_email>\r\n";
        $headers .= "Reply-To: $sender_email\r\n";

        // Send the email
        if (mail($recipient_email, $email_subject, $email_body, $headers)) {
            // Email sent successfully
            echo "Thank you for your message. We will get back to you shortly.";
        } else {
            // Email sending failed
            echo "Sorry, there was an error sending your message. Please try again later.";
        }
    }
}
