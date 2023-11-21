<!DOCTYPE html>
<html>

<head>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="uploads/img/fav1.png">
    <style>
        /* Your existing CSS styles */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: #072d6e;
        }

        .alert {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            color: #fff;
            text-align: center;
            font-size: 1.2rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer-master/PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $recipient_email = "info@wsfafrica.org"; // The email address where you want to receive the email

        // Validate and sanitize user inputs
        $sender_name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
        $sender_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $sender_phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
        $subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
        $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);

        // Check for required fields
        if (empty($sender_name) || empty($sender_email) || empty($subject) || empty($message)) {
            echo "<div class='alert'>Please fill in all required fields.</div>";
        } elseif (!filter_var($sender_email, FILTER_VALIDATE_EMAIL)) {
            echo "<div class='alert'>Invalid email address.</div>";
        } else {
            // Initialize PHPMailer for sending email to 'info@wsfafrica.org'
            $mail = new PHPMailer();

            $mail->isSMTP();
            $mail->Host = 'smtp.@gmail.com'; // Replace with your SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'info@wsfafrica.org'; // Replace with your email
            $mail->Password = 'info@wsfafrica.org'; // Replace with your email password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom($sender_email, $sender_name);
            $mail->addAddress($recipient_email);

            $mail->Subject = "Contact Form Submission: $subject";
            $mail->Body = "Name: $sender_name\nEmail: $sender_email\nPhone: $sender_phone\nMessage:\n$message";

            if ($mail->send()) {
                // Email sent successfully to 'info@wsfafrica.org'

                // Now, send an automatic email back to the sender
                $mailToSender = new PHPMailer();

                $mailToSender->isSMTP();
                $mailToSender->Host = 'smtp.@gmail.com'; // Replace with your SMTP server
                $mailToSender->SMTPAuth = true;
                $mailToSender->Username = 'info@wsfafrica.org'; // Replace with your email
                $mailToSender->Password = 'info@wsfafrica.org'; // Replace with your email password
                $mailToSender->SMTPSecure = 'tls';
                $mailToSender->Port = 587;

                $mailToSender->setFrom($recipient_email, 'WSF Africa');
                $mailToSender->addAddress($sender_email);

                $mailToSender->Subject = "Thank you for contacting WSF Africa";
                $mailToSender->Body = "Dear $sender_name,\n\nThank you for contacting us. We have received your message and will get back to you shortly.\n\nBest regards,\nWSF Africa Team";

                if ($mailToSender->send()) {
                    // Email sent successfully back to the sender
                    echo "<div class='alert'>Thank you for your message. We will get back to you shortly.</div>";
                } else {
                    // Email sending back to the sender failed
                    echo "<div class='alert'>Sorry, there was an error sending the confirmation message. Please contact us through other means.</div>";
                }
            } else {
                // Email sending to 'info@wsfafrica.org' failed
                echo "<div class='alert'>Sorry, there was an error sending your message. Please try again later.</div>";
            }
        }
    }
    ?>
</body>

</html>