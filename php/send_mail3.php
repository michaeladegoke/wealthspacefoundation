<!DOCTYPE html>
<html>

<head>

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">


    <link rel="icon" type="image/png" href="uploads/img/fav1.png">

    <!-- If you have different sizes of favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="uploads/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="uploads/img/favicon-16x16.png">

    <!-- For IE browsers -->
    <link rel="shortcut icon" type="image/x-icon" href="uploads/img/favicon.ico">

    <link rel="apple-touch-icon" sizes="180x180" href="/uploads/img/apple-touch-icon.png">

    <style>
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
            $message2 = "Dear $name,\n\nThank you for contacting us. We will get back to you shortly.\n\nBest wishes,\n\nExecutive Manager";

            // Send emails
            $result = mail($mailto, $subject, $message, $headers);
            $result2 = mail($from, $subject2, $message2);

            if ($result) {

                echo "<div class='alert'>Thank you, we will get back to you shortly'</div>";
            } else {
                echo "<div class='alert'>Sorry, submission failed. Please try again later.')</div>";
            }
        }
    }
    ?>

</body>

</html>