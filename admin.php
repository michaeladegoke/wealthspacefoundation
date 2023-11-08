<?php include 'config/database.php'; ?>
<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit; // Terminate the script after a redirect
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <!--boostrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!--normalized-->
  <link rel="stylesheet" type="text/css" href="vendor/css/normalize.css">

  <!-- customized css -->
  <link rel="stylesheet" href="css/styleadmin.css">

  <!--font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">


  <link rel="icon" type="image/png" href="uploads/img/favicon.png">
  <!-- If you have different sizes of favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="uploads/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="uploads/img/favicon-16x16.png">

  <!-- For IE browsers -->
  <link rel="shortcut icon" type="image/x-icon" href="uploads/img/favicon.ico">

  <link rel="apple-touch-icon" sizes="180x180" href="/uploads/img/apple-touch-icon.png">

  <meta name="description" content="Wealth Space Foundation: A non-profit organization founded in 2022 by Festus Babatunde Adefemi, dedicated to unlocking the potential within African individuals and communities. Our mission is to bridge the gap between talent and opportunity through skill sponsorship, mentorship, and sustainable development initiatives. Join us in creating a future where everyone can unleash their full potential and contribute to the prosperity of their communities." />


  <title>Wealth Space Foundation</title>
</head>

<body>
  <header>
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




  <?php

  // Prepare a SQL statement with a parameter placeholder
  $sql = "SELECT * FROM member_table WHERE username = ?";
  $stmt = mysqli_prepare($conn, $sql);

  // Bind the parameter and execute the statement
  mysqli_stmt_bind_param($stmt, "s", $username);
  mysqli_stmt_execute($stmt);

  // Get the result
  $result = mysqli_stmt_get_result($stmt);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      $image = $row['image'];
      $name = $row['name'];  // Define the $name variable here
      $username = $row['username'];
      $department = $row['department'];
      $wits = $row['wits'];
      $value = $row['value'];
      $withdraw = $row['withdraw'];
      $buy = $row['buy'];
      $login_type = $row['login_type'];
      $password = $row['password'];
    }
  }
  ?>


  <section class="adminpanel">
    <div class="container">
      <div class="row justify-content-center adminrow">
        <div class="col-md-6">
          <div class="row justify-content-center">
            <div class="col-md-6 text-center">
              <div class="row Adminrowinner">
                <div class="col">
                  <!-- Content for the first row in the left column -->
                  <h2>Your Profile</h2>
                </div>
              </div>
              <div class="row Adminrowinner">
                <div class="col">
                  <!-- Content for the second row in the left column -->
                  <img src="<?php echo $image; ?>" alt="" class="img-fluid rounded-circle">
                </div>
              </div>
              <div class="row Adminrowinner">
                <div class="col">
                  <!-- Content for the third row in the left column -->
                  <h2><?php echo '<tr><td>' . $name . '<td></tr>'; ?></h2>
                  <h4><?php echo '<tr><td>' . $username . '<td></tr>'; ?><br><?php echo '<tr><td>' . $department . '<td></tr>'; ?></h4>
                </div>
              </div>
              <div class="row Adminrowinner">
                <div class="col">
                  <!-- Content for the fourth row in the left column -->
                  <a class="btn btn-more" href="updatedisplay.php">Adjust Member's Wit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 text-center">
          <div class="row justify-content-center adminrow2">
            <div class="col-md-6">
              <div class="row">
                <div class="col">
                  <!-- Content for the first row in the right column -->
                  <a class="btn btn-more" href="about.php"><?php echo '<tr><td>' . $wits . '<td></tr>'; ?></a>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <!-- Content for the first row in the right column -->
                  <a class="btn btn-more" href="about.php"><?php echo '<tr><td>' . $value . '<td></tr>'; ?></a>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <!-- Content for the second row in the right column -->
                  <a class="btn btn-more" href=""><?php echo '<tr><td>' . $withdraw . '<td></tr>'; ?></a>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <!-- Content for the fourth row in the left column -->
                  <a class="btn btn-more" href=""><?php echo '<tr><td>' . $buy . '<td></tr>'; ?></a>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <!-- Content for the fourth row in the left column -->
                  <a class="btn btn-more" href="">Transaction History</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>