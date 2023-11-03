<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!--normalized-->
    <link rel="stylesheet" type="text/css" href="vendor/css/normalize.css">

    <!-- customized css -->
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/querries2.css">

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">


    <link rel="icon" type="image/png" href="uploads/img/fav1.png">

    <title>Wealth Space Foundation</title>
</head>

<body>

    <header class="header">
        <div class="container" id="header-box">
            <h1>Building a wealthy and <br> healthy community for all</h1>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-white" id="navbarContent">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="uploads/img/wsflogo2.png" class="logo"></a>
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


    <?php include 'config/database.php'; ?>

    <?php
    $sql = "SELECT * FROM about_intro_table";
    $result = mysqli_query($conn, $sql);
    $intro = mysqli_fetch_all($result, MYSQLI_ASSOC);

    ?>
    <!--Introduction-->
    <?php foreach ($intro as $item) : ?>
        <section>
            <div class="container intro">
                <div class="row">
                    <div class="col text-center">
                        <h2>Introduction</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p><?php echo $item['para1']; ?></p>
                        <p><?php echo $item['para2']; ?></p>
                        <p><?php echo $item['para3']; ?></p>
                        <p><?php echo $item['para4']; ?></p>
                        <p><?php echo $item['para5']; ?><br><br><?php echo $item['para6']; ?></p>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
    <!--End of Introduction-->

    <?php
    $sql = "SELECT * FROM about_intro_initiative";
    $result = mysqli_query($conn, $sql);
    $initiative = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>
    <!--initiative-->
    <?php foreach ($initiative as $item) : ?>
        <section id="section-activities">
            <div class="container">
                <div class="row">
                    <div class="col-lg text-center">
                        <h2>Key Initiatives</h2>
                    </div>
                </div>
            </div>
            <div class="container" id="program">
                <div class="row">
                    <div class="col-lg">
                        <div class="card mb-3 text-center">
                            <img class="card-img-top img-fluid" src="<?php echo $item['img1']; ?>" alt="Book Review">
                            <div class="card-body over">
                                <h5 class="card-title"><?php echo $item['heading1']; ?></h5>
                                <p class="card-text"><?php echo $item['para11']; ?></p>
                                <p class="card-text"><?php echo $item['para12']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card mb-3 text-center">
                            <img class="card-img-top" src="<?php echo $item['img2']; ?>" alt="Tuesday Misc">
                            <div class="card-body over">
                                <h5 class="card-title"><?php echo $item['heading2']; ?></h5>
                                <p class="card-text"><?php echo $item['para21']; ?></p>
                                <p class="card-text"><?php echo $item['para22']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card text-center mb-3">
                            <img class="card-img-top" src="<?php echo $item['img3']; ?>" alt="Card image cap">
                            <div class="card-body over">
                                <h5 class="card-title"><?php echo $item['heading3']; ?></h5>
                                <p class="card-text"><?php echo $item['para31']; ?></p>
                                <p class="card-text"><?php echo $item['para32']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card text-center mb-3">
                            <img class="card-img-top" src="<?php echo $item['img4']; ?>" alt="Card image cap">
                            <div class="card-body over">
                                <h5 class="card-title"><?php echo $item['heading4']; ?></h5>
                                <p class="card-text"><?php echo $item['para41']; ?></p>
                                <p class="card-text"><?php echo $item['para42']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card text-center mb-3">
                            <img class="card-img-top img-fluid" src="<?php echo $item['img5']; ?>" alt="Card image cap">
                            <div class="card-body over">
                                <h5 class="card-title"><?php echo $item['heading5']; ?></h5>
                                <p class="card-text"><?php echo $item['para51']; ?>
                                <p>
                                <p class="card-text"><?php echo $item['para52']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    <?php endforeach; ?>
    <!--End of Initiative-->

    <?php
    $sql = "SELECT * FROM about_intro_mission";
    $result = mysqli_query($conn, $sql);
    $mission = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>

    <!--Mission and vision-->
    <?php foreach ($mission as $item) : ?>
        <section class="section-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg text-center">
                        <h2>MISSION AND VISION</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <img src="<?php echo $item['img']; ?>" class="mx-auto d-block img-fluid mt-2" alt="About Us">
                    </div>
                    <div class="col-lg-6">
                        <h3><?php echo $item['heading1']; ?></h3>
                        <p><?php echo $item['para1']; ?></p>
                        <h3><?php echo $item['heading2']; ?></h3>
                        <p><?php echo $item['para2']; ?></p>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
    <!--End of Mission-->


    <?php
    $sql = "SELECT * FROM about_intro_value";
    $result = mysqli_query($conn, $sql);
    $value = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>
    <!-- Core VAlue -->
    <?php foreach ($value as $item) : ?>
        <section id="corevalue">
            <div class="container value">
                <div class="row">
                    <div class="col text-center">
                        <h2>core values</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h3><?php echo $item['heading1']; ?></h3>
                        <p><?php echo $item['para1']; ?></p>
                        <h3><?php echo $item['heading2']; ?></h3>
                        <p><?php echo $item['para2']; ?></p>
                        <h3><?php echo $item['heading3']; ?></h3>
                        <p><?php echo $item['para3']; ?></p>
                        <h3><?php echo $item['heading4']; ?></h3>
                        <p><?php echo $item['para4']; ?></p>
                    </div>
                    <div class="col-lg-6">
                        <img src="<?php echo $item['img']; ?>" class="mx-auto d-block img-fluid mt-2" alt="our value">
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
    <!--End of Core VAlue -->


    <section class="section-footer">
        <footer class="bg-dark text-light text-center py-2">
            <div class="row justify-content-center adminrow">
                <div class="col-sm-2">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center">
                            <div class="row Adminrowinner">
                                <div class="col">
                                    <!-- Content for the first row in the left column -->
                                    <a href="">Teams</a>
                                </div>
                            </div>
                            <div class="row Adminrowinner">
                                <div class="col">
                                    <!-- Content for the second row in the left column -->
                                    <a href="">Subscribe</a>
                                </div>
                            </div>
                            <div class="row Adminrowinner">
                                <div class="col">
                                    <!-- Content for the third row in the left column -->
                                    <a href="">Programs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 text-center">
                    <div class="row justify-content-center adminrow2">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col">
                                    <!-- Content for the first row in the right column -->
                                    <a href="index.php#">About</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <!-- Content for the first row in the right column -->
                                    <a href="index.php">Testimonial</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <!-- Content for the second row in the right column -->
                                    <a href="index.php">Subscribe</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 text-center">
                    <div class="row justify-content-center adminrow2">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col">
                                    <!-- Content for the first row in the right column -->
                                    <a href=""><a href=""><i class="fa fa-facebook"></i></a></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <!-- Content for the first row in the right column -->
                                    <a href=""><a href=""><i class="fa fa-linkedin"></i></a></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <!-- Content for the second row in the right column -->
                                    <a href=""><a href=""><i class="fa fa-instagram"></i></a></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <p>&copy; 2023 www.wealthspacefoundation.org</p>
            </div>
        </footer>
    </section>

    <script src="script2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>