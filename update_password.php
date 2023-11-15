<?php
require 'config/database.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    if (isset($_POST['token'], $_POST['new_password'], $_POST['confirm_password'])) {
        $resetToken = $_POST['token'];
        $newPassword = $_POST['new_password'];
        $confirmPassword = $_POST['confirm_password'];

        // Check if passwords match
        if ($newPassword !== $confirmPassword) {
            echo "Passwords do not match. Please try again.";
            exit();
        }

        // Check if the reset token is not empty
        if (empty($resetToken)) {
            echo "Invalid reset token.";
            exit();
        }

        if (!empty($resetToken)) {
            $query = mysqli_prepare($conn, "UPDATE member_table SET password = ?, reset_token = NULL WHERE reset_token = ?");

            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT); // Hash the new password

            mysqli_stmt_bind_param($query, "ss", $hashedPassword, $resetToken);
            mysqli_stmt_execute($query);
        } else {
            echo "Invalid or empty reset token.";
        }

        // Validate and update the password in the database


        if (mysqli_affected_rows($conn) > 0) {
            echo "Password has been successfully updated.";
            // Redirect to login page or any other relevant page
            header("Location: login.php");
            // exit();
        } else {
            echo "Failed to update password." . mysqli_error($conn);
        }
    } else {
        echo "Invalid request.";
    }
} else {
    echo "Invalid request.";
}
