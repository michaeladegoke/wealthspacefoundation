<?php
include 'config/database.php';
$message = "";

if (isset($_POST['submit'])) {
    // File upload validation
    $allow_ext = array('png', 'jpg', 'jpeg', 'gif');

    if (!empty($_FILES['upload']['name'])) {
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/{$file_name}";
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (in_array($file_ext, $allow_ext)) {
            if ($file_size <= 2 * 1024 * 1024) { // File size limit: 2 megabytes
                move_uploaded_file($file_tmp, $target_dir);
                $message = '<p style="color:green">Upload Successful</p>';
            } else {
                $message = '<p style="color:red">File is too large</p>';
            }
        } else {
            $message = '<p style="color:red">Invalid file type</p>';
        }
    } else {
        $message .= '<p style="color:red">Please choose a file</p>';
    }

    if (!empty($_FILES['upload']['name']) && in_array($file_ext, $allow_ext) && $file_size <= 2 * 1024 * 1024) {

        $name = htmlspecialchars($_POST['name']);
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $login_type = htmlspecialchars($_POST['login_type']);
        $department = htmlspecialchars($_POST['department']);
        $wits = htmlspecialchars($_POST['wits']);
        $value = htmlspecialchars($_POST['value']);
        $buy = htmlspecialchars($_POST['buy']);
        $withdraw = htmlspecialchars($_POST['withdraw']);
        if (empty($name) || empty($username) || empty($department) || empty($wits) || empty($value)) {
            $message = '<p style="color:red">Please fill in all the required fields</p>';
        } else {
            // Corrected SQL query and bind_param
            $insertQuery = "INSERT INTO member_table (image, name, username, password, login_type, department, wits, value, buy, withdraw) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($insertQuery);
            $stmt->bind_param("ssssssssss", $target_dir, $name, $username, $password, $login_type, $department, $wits, $value, $buy, $withdraw);

            // Execute the insertion and check for success
            if ($stmt->execute()) {
                $message = '<p style="color:green">Data inserted successfully</p>';
                header('Location:login.php');
            } else {
                $message = '<p style="color:red">Failed to insert data</p>';
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
    <link rel="stylesheet" href="css/styleuploads.css">

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
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                <?php echo $message ?? null; ?>
                <label for="upload">Image:</label>
                <input type="file" name="upload" placeholder="your wsfid"><br><br>

                <label for="username">Name:</label>
                <input type="text" id="name" name="name" placeholder="your name"><br>

                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="your wsfid"><br>

                <label for="password">Password:</label>
                <input type="password" placeholder="Enter your password" name="password"><br>

                <label for="login_type">Login_Type:</label>
                <input type="text" class="form-control-plaintext" id="readOnlyField" name="login_type" value="member" readonly><br>

                <label for="department">Department:</label>
                <input type="text" name="department" placeholder="your WSF department"><br>

                <label for="wits">Wits:</label>
                <input type="text" class="form-control-plaintext" name="wits" value="0.00" readonly><br>

                <label for="value">Values:</label>
                <input type="text" class="form-control-plaintext" name="value" value="0.00" readonly><br>

                <label for="withdraw">Withdraw:</label>
                <input type="text" class="form-control-plaintext" name="withdraw" value="0.00" readonly><br>
                <label for="buy">Buy:</label>
                <input type="text" class="form-control-plaintext" name="buy" value="0.00" readonly><br>

                <input type="submit" value="submit" name="submit"><br>

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