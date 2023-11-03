<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $conn = mysqli_connect("localhost", "root", "secret", "wsf_db");

    if (isset($_POST['submit'])) {
        $errors = "";

        // Check if "login_type" is set in the POST data
        if (isset($_POST['login_type'])) {
            $login_type = (isset($_POST['login_type'])) ? mysqli_real_escape_string($conn, $_POST['login_type']) : '';
        } else {
            // Handle the case where "login_type" is not set
            $errors = "Please select a login type.";
        }

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        if (empty($username) || empty($password) || empty($login_type)) {
            $errors = "Invalid inputs!";
        } else {
            $query = mysqli_prepare($conn, "SELECT username, login_type, password FROM member_table WHERE username = ?");
            mysqli_stmt_bind_param($query, "s", $username);
            mysqli_stmt_execute($query);
            $result = mysqli_stmt_get_result($query);

            if ($result && mysqli_num_rows($result) > 0) {
                $data = mysqli_fetch_assoc($result);
                $expectedPassword = "password1"; // Change this to your expected password

                if ($password === $expectedPassword && $login_type === $data['login_type']) {
                    // Successful login
                    session_start();
                    $_SESSION['username'] = $username;

                    if ($data['login_type'] === "admin") {
                        header("Location: admin.php");
                    } elseif ($data['login_type'] === "member") {
                        header("Location: member.php");
                    }
                } else {
                    $errors = "Invalid Login type or password doesn't match";
                }
            } else {
                $errors = "Username does not exist";
            }
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

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">


    <link rel="icon" type="image/png" href="uploads/img/favicon.png">

    <title>Wealth Space Foundation</title>
</head>

<body>

    <header>
        <div class="container" id="header-box">
            <h2>Login</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <p style="color:red"><?php if (isset($_POST['submit'])) {
                                            echo $errors . "<br>";
                                        } ?></p>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="your wsfid"><br><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="password1"><br><br>

                <label>Login as:</label>
                <input type="radio" id="admin" name="login_type" value="admin">
                <label for="admin">Admin</label>
                <input type="radio" id="member" name="login_type" value="member">
                <label for="member">Member</label><br><br>
                <input type="submit" value="Login" name="submit">
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
                            <a class="nav-link" href="#section-activities">Programs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-team">Our Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonial">Testimonial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#subscribe">Subscribe</a>
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