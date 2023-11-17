<!DOCTYPE html>
<html>

<head>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts -->
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
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);

        // Validate the email address
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<div class='alert'>Invalid email address. Please enter a valid email address.</div>";
            exit();
        }

        require 'C:\wamp64\www\WSF\config/database.php';

        // Insert the subscriber into the database
        $sql = "INSERT INTO newsletter_table (name, email) VALUES ('$name', '$email')";

        if (empty($name) || empty($email)) {
            echo "<div class='alert'>Please fill the form properly.</div>";
        } else if (mysqli_query($conn, $sql)) {
            echo "<div class='alert'>Thank you for subscribing to our newsletter!</div>";
        } else if (mysqli_errno($conn) == 1062) {
            echo "<div class='alert'>You are already a subscriber.</div>";
        } else {
            echo "<div class='alert'>Subscription failed. Please try again later.</div>";
        }
        mysqli_close($conn);
    }
    ?>
</body>

</html>