<?php include 'config/database.php'; ?>

<?php

$sql = 'SELECT * FROM home_table';
$result = mysqli_query($conn, $sql);
$home = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <!-- customized css -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/querries.css">

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">


    <link rel="icon" type="image/png" href="uploads/img/fav1.png">

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

    <!--end of header section-->


    <?php foreach ($home as $item) : ?>
        <header class="header">
            <div class="container header">
                <div class="container" id="header-box">
                    <h1><?php echo $item['heading1']; ?> <br> <?php echo $item['heading2']; ?></h1>
                    <a class="btn btn-full" href="login.php">Login as a member</a>
                    <a class="btn btn-ghost" href="#contact">Request to join</a>
                </div>
                <div class="container" id="header-box2">
                    <div id="programList"></div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-white" id="navbarContent">
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
                            <li class="nav-item">
                                <a class="nav-link" href="upload.php">Upload</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <?php endforeach; ?><?php

                            $sql = 'SELECT * FROM about_table';
                            $result = mysqli_query($conn, $sql);
                            $about = mysqli_fetch_all($result, MYSQLI_ASSOC);

                            ?>

        <!--about us-->
        <?php foreach ($about as $item) : ?>
            <section class="section-about-us js--section-feature">
                <div class="container ">
                    <div class="row">
                        <div class="col-md text-center">
                            <h2><?php echo $item['heading2']; ?></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?php echo $item['img']; ?>" class="mx-auto d-block img-fluid mt-2" alt="About Us">
                        </div>
                        <div class="col-md-6 center-mobile-view">
                            <h3><?php echo $item['heading3']; ?></h3>
                            <p><?php echo $item['content']; ?></p>
                            <p class="aboutp"><?php echo $item['content1']; ?></p>
                            <a class="btn btn-more" href="about.php">Read More</a>
                        </div>
                    </div>
                </div>
            </section>
        <?php endforeach; ?>
        <!--End of about us-->

        <?php

        $sql = 'SELECT * FROM program_table';
        $result = mysqli_query($conn, $sql);
        $program = mysqli_fetch_all($result, MYSQLI_ASSOC);

        ?>

        <!--Programs and activities-->

        <?php foreach ($program as $item) : ?>
            <section id="section-activities">
                <div class="container">
                    <div class="row">
                        <div class="col-lg text-center">
                            <h2>programs & activities</h2>
                        </div>
                    </div>
                </div>
                <div class="container" id="program">
                    <div class="row">
                        <div class="col-lg">
                            <div class="card mb-3 text-center">
                                <img class="card-img-top img-fluid" src="<?php echo $item['image']; ?>" alt="Book Review">
                                <div class="card-body over">
                                    <h5 class="card-title"><?php echo $item['heading1']; ?></h5>
                                    <p class="card-text"><?php echo $item['paragraph11']; ?></p>
                                    <p class="card-text"><?php echo $item['paragraph12']; ?></p>
                                    <p class="card-text"><?php echo $item['paragraph13']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="card mb-3 text-center">
                                <img class="card-img-top" src="<?php echo $item['image2'] ?>" alt="Tuesday Misc">
                                <div class="card-body over">
                                    <h5 class="card-title"><?php echo $item['heading2']; ?></h5>
                                    <p class="card-text"><?php echo $item['paragraph21']; ?></p>
                                    <p class="card-text"><?php echo $item['paragraph22']; ?></p>
                                    <p class="card-text"><?php echo $item['paragraph23']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="card text-center mb-3">
                                <img class="card-img-top" src="<?php echo $item['image3'] ?>" alt="book review">
                                <div class="card-body over">
                                    <h5 class="card-title"><?php echo $item['heading3']; ?></h5>
                                    <p class="card-text"><?php echo $item['paragraph31']; ?></p>
                                    <p class="card-text"><?php echo $item['paragraph32']; ?></p>
                                    <p class="card-text"><?php echo $item['paragraph33']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="card text-center mb-3">
                                <img class="card-img-top" src="<?php echo $item['image4']; ?>" alt="women empowerment">
                                <div class="card-body over">
                                    <h5 class="card-title"><?php echo $item['heading4']; ?></h5>
                                    <p class="card-text"><?php echo $item['paragraph41']; ?></p>
                                    <p class="card-text"><?php echo $item['paragraph42']; ?></p>
                                    <p class="card-text"><?php echo $item['paragraph43']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="card text-center mb-3">
                                <img class="card-img-top img-fluid" src="<?php echo $item['image5']; ?>" alt="Green technology">
                                <div class="card-body over">
                                    <h5 class="card-title"><?php echo $item['heading5']; ?></h5>
                                    <p class="card-text"><?php echo $item['paragraph51']; ?></p>
                                    <p class="card-text"><?php echo $item['paragraph52']; ?></p>
                                    <p class="card-text"><?php echo $item['paragraph53']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
        <?php endforeach; ?>
        <!--end of activities-->


        <?php

        $sql = 'SELECT * FROM team_table';
        $result = mysqli_query($conn, $sql);
        $team = mysqli_fetch_all($result, MYSQLI_ASSOC);

        ?>

        <?php foreach ($team as $item) : ?>
            <!--Teams Section-->
            <section id="section-team">
                <div class="container">
                    <div class="row">
                        <div class="col-lg text-center">
                            <h2>
                                Our teams
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="container" id="team">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-3 text-center">
                                            <img class="card-img-top" src="<?php echo $item['image1']; ?>" alt="President">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $item['name1']; ?></h5>
                                                <h6 class="card-title"><?php echo $item['position1']; ?></h6>
                                                <p class="socials">
                                                    <a href=""> <i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3 text-center">
                                            <img class="card-img-top " src="<?php echo $item['image2']; ?>" alt="Executive Manager">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $item['name2']; ?></h5>
                                                <h6 class="card-title"><?php echo $item['position2']; ?></h6>
                                                <p class="socials">
                                                    <a href=""> <i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3 text-center">
                                            <img class="card-img-top img-fluid" src="<?php echo $item['image3']; ?>" alt="Evaluation Manager">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $item['name3']; ?></h5>
                                                <h6 class="card-title"><?php echo $item['position3']; ?></h6>
                                                <p class="socials">
                                                    <a href=""> <i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-3 text-center">
                                            <img class="card-img-top" src="<?php echo $item['image4']; ?>" alt="Finacial Director">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $item['name4']; ?></h5>
                                                <h6 class="card-title"><?php echo $item['position4']; ?></h6>
                                                <p class="socials">
                                                    <a href=""> <i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3 text-center">
                                            <img class="card-img-top" src="<?php echo $item['image5']; ?>" alt="Creativiy Manager">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $item['name5']; ?></h5>
                                                <h6 class="card-title"><?php echo $item['position5']; ?></h6>
                                                <p class="socials">
                                                    <a href=""> <i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3 text-center">
                                            <img class="card-img-top img-fluid" src="<?php echo $item['image6']; ?>" alt="Operation Manager">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $item['name6']; ?></h5>
                                                <h6 class="card-title"><?php echo $item['position6']; ?></h6>
                                                <p class="socials">
                                                    <a href=""> <i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endforeach; ?>
        <!--end of team section-->

        <?php

        $sql = 'SELECT * FROM testimony_table';
        $result = mysqli_query($conn, $sql);
        $testimonial = mysqli_fetch_all($result, MYSQLI_ASSOC);

        ?>

        <!--Testimonial-->
        <?php foreach ($testimonial as $item) : ?>
            <section class="section-testimonial" id="testimonial">
                <div class="container">
                    <div class="row">
                        <div class="col-md text-center">
                            <h2>
                                Testimonial
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleSlidesOnly">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="box front">
                                                <img alt="Mr Ekuma" src="<?php echo $item['image7']; ?>">
                                                <h4><?php echo $item['name7']; ?></h4>
                                                <h6><?php echo $item['position7']; ?></h6>
                                                <p class="socials">
                                                    <a href=""> <i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                                </p>
                                            </div>
                                            <div class="box back">
                                                <span class="fa fa-quote-left"></span>
                                                <p><?php echo $item['content7']; ?>
                                                    <br>
                                                    Best regards,
                                                    Fredrick
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="box front">
                                                <img alt="Mrs kenny" src="<?php echo $item['image6']; ?>">
                                                <h4><?php echo $item['name6']; ?></h4>
                                                <h6><?php echo $item['position6']; ?></h6>
                                                <p class="socials">
                                                    <a href=""> <i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                                </p>
                                            </div>
                                            <div class="box back">
                                                <span class="fa fa-quote-left"></span>
                                                <p><?php echo $item['content6']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="box front">
                                                <img alt="Miss Grace" src="<?php echo $item['image5']; ?>">
                                                <h4><?php echo $item['name5']; ?></h4>
                                                <h6><?php echo $item['postion5']; ?></h6>
                                                <p class="socials">
                                                    <a href=""> <i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                                </p>
                                            </div>
                                            <div class="box back">
                                                <span class="fa fa-quote-left"></span>
                                                <p><?php echo $item['content5']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="box front">
                                                <img alt="Miss Fola" src="<?php echo $item['image4']; ?>">
                                                <h4><?php echo $item['name4']; ?></h4>
                                                <h6><?php echo $item['position4']; ?></h6>
                                                <p class="socials">
                                                    <a href=""> <i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                                </p>
                                            </div>
                                            <div class="box back">
                                                <span class="fa fa-quote-left"></span>
                                                <p><?php echo $item['content4']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="box front">
                                                <img alt="Member" src="<?php echo $item['image3']; ?>">
                                                <h4><?php echo $item['name3']; ?></h4>
                                                <h6><?php echo $item['position3']; ?></h6>
                                                <p class="socials">
                                                    <a href=""> <i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                                </p>
                                            </div>
                                            <div class="box back">
                                                <span class="fa fa-quote-left"></span>
                                                <p><?php echo $item['content3']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="box front">
                                                <img alt="Member" src="<?php echo $item['image2']; ?>">
                                                <h4><?php echo $item['name2']; ?></h4>
                                                <h6><?php echo $item['position2']; ?></h6>
                                                <p class="socials">
                                                    <a href=""> <i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                                </p>
                                            </div>
                                            <div class="box back">
                                                <span class="fa fa-quote-left"></span>
                                                <p><?php echo $item['content2']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="box front">
                                                <img alt="Miss Peculiar" src="<?php echo $item['image1']; ?>">
                                                <h4><?php echo $item['name1']; ?></h4>
                                                <h6><?php echo $item['position1']; ?></h6>
                                                <p class="socials">
                                                    <a href=""> <i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                                </p>
                                            </div>
                                            <div class="box back">
                                                <span class="fa fa-quote-left"></span>
                                                <p><?php echo $item['content1']; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="box front">
                                                <img alt="Member" src="<?php echo $item['image3']; ?>">
                                                <h4><?php echo $item['name3']; ?></h4>
                                                <h6><?php echo $item['position3']; ?></h6>
                                                <p class="socials">
                                                    <a href=""> <i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                                </p>
                                            </div>
                                            <div class="box back">
                                                <span class="fa fa-quote-left"></span>
                                                <p><?php echo $item['content3']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <div class="box front">
                                                <img alt="Member" src="<?php echo $item['image2']; ?>">
                                                <h4><?php echo $item['name2']; ?></h4>
                                                <h6><?php echo $item['position2']; ?></h6>
                                                <p class="socials">
                                                    <a href=""> <i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                                </p>
                                            </div>
                                            <div class="box back">
                                                <span class="fa fa-quote-left"></span>
                                                <p><?php echo $item['content2']; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
        <?php endforeach; ?>
        <!--end of testimonial-->

        <!--Contact section-->
        <section class="section-contact" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg text-center">
                        <h2 class="mt-5">
                            Contact Us
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container form-container">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="row">
                            <div class="col-lg">
                                <img class="img-fluid" src="uploads/img/map.jpg" alt="map">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <table class="table mt-3">
                                    <tbody>
                                        <tr>
                                            <td width="10%"><i class="fa fa-envelope" aria-hidden="true"></i></td>
                                            <td>
                                                <h5>Email</h5>wealthspacefoundation@gmail.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="10%"><i class="fa fa-phone" aria-hidden="true"></i></td>
                                            <td>
                                                <h5>Phone</h5> +2348135397943
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="row">
                            <div class="col-lg">
                                <div class="row mb-2">
                                    <div class="col-md">
                                        <h3>Send Us Mail</h3>
                                    </div>
                                </div>
                                <form class="row g-3" method="post" action="php/send_mail3.php">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Enter your name" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Enter your email" name="email">
                                    </div>
                                    <div class="col-12">
                                        <input type="Phone" class="form-control" id="inputAddress" placeholder="Enter Your Phone" name="phone">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="inputAddress" placeholder="Enter your subject" name="subject">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message">Message</textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary nowbtn" style="width: 100%;" name="submit">send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end of Contact section-->

        <!--News Letter-->


        <section class="section-subscribe" id="subscribe">
            <div class="container subbox">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="row">
                            <div class="col-lg">
                                <img class="img-fluid" height="80%" src="uploads/img/subscribe.jpg" alt="map">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg">
                                <div class="row mb-2">
                                    <div class="col-md">
                                        <h3>Joins Newsletter</h3>
                                        <p>Get valuable information about our programs and life changing events
                                            We are buildin a community of weath and freedom
                                        </p>
                                    </div>
                                </div>
                                <form class="row g-3" method="post" action="php/subscribe.php">
                                    <div class="col-12">
                                        <input type="text" class="form-control form-control-lg" placeholder="Enter Your Name" name="name">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" class="form-control form-control-lg" placeholder="Enter your email" name="email">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mb-2 nowbtn" style="width: 100%;" name="submit">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-footer">
            <footer class="bg-dark text-light text-center py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="#section-team">Teams</a>
                            <a href="#subscribe">Subscribe</a>
                            <a href="#section-activities">Programs</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#about">About</a>
                            <a href="#testimonial">Testimonial</a>
                            <a href="#subscribe">Subscribe</a>
                        </div>
                        <div class="col-sm-4">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-12">
                            <p>&copy; 2023 www.wealthspacefoundation.org</p>
                        </div>
                    </div>
                </div>
            </footer>
        </section>


        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>