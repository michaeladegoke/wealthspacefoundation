<?php
require 'config/database.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] === 'GET' && isset($_GET['token'])) {
    $resetToken = $_GET['token']; // Get the token from the URL

    // Check if the token exists in the database
    $query = mysqli_prepare($conn, "SELECT * FROM member_table WHERE reset_token = ?");
    mysqli_stmt_bind_param($query, "s", $resetToken);
    mysqli_stmt_execute($query);
    $result = mysqli_stmt_get_result($query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Token exists, proceed with password reset

        // Display the password reset form
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

            <title>Reset Password</title>
        </head>

        <body>

            <header>

                <div class="container" id="header-box">
                    <h2>Reset Password</h2>
                    <form action="update_password.php" method="post">
                        <!-- Include fields for new password -->
                        <input type="hidden" name="token" value="<?php echo $resetToken; ?>">
                        <label for="new_password">New Password:</label>
                        <input type="password" id="new_password" name="new_password" required><br><br>
                        <label for="confirm_password">Confirm Password:</label>
                        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
                        <input type="submit" value="Reset Password">
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
<?php
    } else {
        echo "Invalid or expired token. Please request a new password reset.";
    }
} else {
    echo "Invalid request.";
}
?>