<!DOCTYPE html>
<html>

<head>
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
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Validate the email address
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<div class='alert'>Invalid email address. Please enter a valid email address.</div>";
            exit();
        }

        require 'C:\wamp64\www\WSF\config/database.php';

        // Insert the subscriber into the database
        $sql = "INSERT INTO newsletter_table (name, email) VALUES ('$name', '$email')";

        if (empty($name) || empty($email)) {
            echo "<div class='alert'>pls fill the form</div>";
        } else
    if (mysqli_query($conn, $sql)) {
            echo "<div class='alert'>Thank you for subscribing to our newsletter!</div>";
        } else {
            if (mysqli_errno($conn) == 1062) {
                echo "<div class='alert'>You are already a subscriber</div>";
            } else {
                echo "</div class='alert'>Subscription failed. Please try again later.</div>";
            }
        }

        mysqli_close($conn);
    }
    ?>
</body>

</html>