<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    require 'config/database.php';

    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);

        // Check if the username exists in the database
        $query = mysqli_prepare($conn, "SELECT * FROM member_table WHERE username = ?");
        mysqli_stmt_bind_param($query, "s", $username);
        mysqli_stmt_execute($query);
        $result = mysqli_stmt_get_result($query);

        if ($result && mysqli_num_rows($result) > 0) {
            $resetToken = bin2hex(random_bytes(32)); // Generate a random token

            // Store the token in the database with the user's record for verification
            $updateTokenQuery = mysqli_prepare($conn, "UPDATE member2_table SET reset_token = ? WHERE username = ?");
            mysqli_stmt_bind_param($updateTokenQuery, "ss", $resetToken, $username);
            mysqli_stmt_execute($updateTokenQuery);

            // Generate the password reset link with the token
            $resetLink = "http://localhost/WSF/reset_password.php?token=$resetToken"; // Replace with your actual domain and reset password page

            // Display the reset link to the user
            echo "Password reset link: <a href='$resetLink'>$resetLink</a>";

            // Optionally, you can also redirect the user to the reset link automatically
            // header("Location: $resetLink"); // Redirect to the reset password page
            // exit();
        } else {
            $errors = "Username not found!";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!--normalized-->
    <link rel="stylesheet" type="text/css" href="vendor/css/normalize.css">

    <!-- customized css -->
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/loginquerries.css">

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">


    <link rel="icon" type="image/png" href="uploads/img/favicon.png">
    <!-- If you have different sizes of favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="uploads/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="uploads/img/favicon-16x16.png">

    <title>Forgot Password</title>
</head>

<body>

    <header>

        <div class="container" id="header-box">
            <h2>Forgot Password</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <p style="color: red;"><?php if (isset($errors)) echo $errors; ?></p>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter your username"><br><br>
                <input type="submit" value="Submit" name="submit">
            </form>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="uploads/img/wsflogo2.jpg" class="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav mainnav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#section-activities">Programs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#section-team">Our Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#testimonial">Testimonial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#subscribe">Subscribe</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>