<?php include 'config/database.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!--normalized-->
  <link rel="stylesheet" type="text/css" href="vendor/css/normalize.css">

  <!-- customized css -->
  <link rel="stylesheet" href="css/styledisplay.css">
  <link rel="stylesheet" href="css/querries3.css">

  <!--font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

  <title>Wealth Space Foundation</title>

  <link rel="icon" type="image/png" href="uploads/img/favicon.png">
  <!-- If you have different sizes of favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="uploads/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="uploads/img/favicon-16x16.png">

</head>

<body>

  <header>
    <div class="container" id="header-box">
      <h2>Edit Member's wits</h2>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">username</th>
            <th scope="col">wits</th>
            <th scope="col">value</th>
            <th scope="col">buy</th>
            <th scope="col">withdraw</th>
            <th scope="col">Operation</th>
          </tr>
        </thead>
        <tbody>

          <?php

          $sql = 'SELECT id, name, username, wits, value, buy, withdraw FROM member_table';
          $result = mysqli_query($conn, $sql);
          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              $id = htmlspecialchars($row['id']);
              $name = htmlspecialchars($row['name']);
              $username = htmlspecialchars($row['username']);
              $wits = htmlspecialchars($row['wits']);
              $value = htmlspecialchars($row['value']);
              $buy = htmlspecialchars($row['buy']);
              $withdraw = htmlspecialchars($row['withdraw']);
              echo '<tr>
        <th scope="row">' . $id . '</th>
        <td>' . $name . '</td>
        <td>' . $username . '</td>
        <td>' . $wits . '</td>
        <td>' . $value . '</td>
        <td>' . $buy . '</td>
        <td>' . $withdraw . '</td>
        <td><button class="btn btn-primary"><a href="update.php ? updateid=' . $id . '"
         class="text-light">Update</a></button>
      </tr>';
            }
          }

          ?>
        </tbody>
      </table>

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