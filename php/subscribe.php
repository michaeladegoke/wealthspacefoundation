<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Validate the email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address. Please enter a valid email address.";
        exit();
    }

    // Database connection
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'secret';
    $db_name = 'wsf_db';

    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Insert the subscriber into the database
    $sql = "INSERT INTO newsletter_table (name, email) VALUES ('$name', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "Thank you for subscribing to our newsletter!";
    } else {
        if (mysqli_errno($conn) == 1062) {
            echo "You are already subscribed.";
        } else {
            echo "Subscription failed. Please try again later.";
        }
    }

    mysqli_close($conn);
}
