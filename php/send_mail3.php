<!DOCTYPE html>
<html>

<head>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="uploads/img/fav1.png">
    <link rel="icon" type="image/png" sizes="32x32" href="uploads/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="uploads/img/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="uploads/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/uploads/img/apple-touch-icon.png">
    <style>
        /* Your existing CSS styles */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: #072d6e;
            ;
        }

        .alert {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            color: #fff;
            text-align: center;
            font-size: 4rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        // Sanitize and validate user inputs
        $name = htmlspecialchars($_POST['name']);
        $from = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $subject = htmlspecialchars($_POST['subject']);
        $phone = htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);

        // Check for required fields
        if (empty($name) || empty($from) || empty($subject) || empty($message)) {
            echo "<div class='alert'>Please fill in all required fields.</div>";
        } elseif (!filter_var($from, FILTER_VALIDATE_EMAIL)) {
            echo "<div class='alert'>Invalid email address.</div>";
        } else {
            // Prepare email content
            $mailto = "adegokeolujidemic@gmail.com";
            $subject = "Contact Form Submission: $subject";
            $messageBody = "Client: $name <$from> \n\nWrote the following message:\n\n$message";
            $headers = "From: $from\r\nReply-To: $from\r\n";

            // Set additional email headers to prevent email injection
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/plain; charset=utf-8\r\n";
            $headers .= "X-Mailer: PHP/" . phpversion();

            // Send email and handle the result
            $result = mail($mailto, $subject, $messageBody, $headers);

            if ($result) {
                // Send a confirmation email to the user
                $subject2 = "Thank you for contacting Wealth Space Foundation";
                $message2 = "Dear $name,\n\nThank you for contacting us. We will get back to you shortly.\n\nBest wishes,\n\nExecutive Manager";
                $result2 = mail($from, $subject2, $message2);

                if ($result2) {
                    echo "<div class='alert'>Thank you, we will get back to you shortly.</div>";
                } else {
                    echo "<div class='alert'>Confirmation email sending failed.</div>";
                }
            } else {
                echo "<div class='alert'>Sorry, submission failed. Please try again later.</div>";
            }
        }
    }
    ?>
</body>

</html>