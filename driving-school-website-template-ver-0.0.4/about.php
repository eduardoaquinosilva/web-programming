<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>About - Drivin - Driving School Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <!-- PHP -->
        <?php include 'adm/connection.php'; ?>
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-dark text-light p-0">
            <div class="row gx-0 d-none d-lg-flex">
                <div class="col-lg-7 px-5 text-start">
                    <div class="h-100 d-inline-flex align-items-center me-4">
                        <small class="fa fa-map-marker-alt text-primary me-2"></small>
                        <small>123 Street, New York, USA</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center">
                        <small class="far fa-clock text-primary me-2"></small>
                        <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                    </div>
                </div>
                <div class="col-lg-5 px-5 text-end">
                    <div class="h-100 d-inline-flex align-items-center me-4">
                        <small class="fa fa-phone-alt text-primary me-2"></small>
                        <small>+012 345 6789</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center mx-n2">
                        <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
                <h2 class="m-0"><i class="fa fa-car text-primary me-2"></i>Drivin</h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link active">About</a>
                    <a href="courses.php" class="nav-item nav-link">Courses</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="feature.php" class="dropdown-item">Features</a>
                            <a href="appointment.php" class="dropdown-item">Appointment</a>
                            <a href="team.php" class="dropdown-item">Our Team</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get Started<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Page Header Start -->
        <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
            <div class="container text-center">
                <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <?php
            try {
                $sql = $pdo->query('SELECT * FROM about WHERE idabout = 1');
                $resultAbout = $sql->fetchAll(PDO::FETCH_OBJ);

                foreach ($resultAbout as $about) {
                    $title = $about->titulo;
                    $text1 = $about->texto1;
                    $text2 = $about->texto2;
                    $phone = $about->telefone;
                }
            } catch (PDOException $e) {
                print '<strong>ERRO</strong><br/><br/>' . $e->getMessage();
            }
        ?>

        <!-- About Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                            <img class="position-absolute w-100 h-100" src="img/about-1.jpg" alt="" style="object-fit: cover;">
                            <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/about-2.jpg" alt="" style="width: 200px; height: 200px;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <h6 class="text-primary text-uppercase mb-2">About Us</h6>
                            <h1 class="display-6 mb-4">
                                <?php print $title; ?>
                            </h1>

                            <p> <?php print $text1; ?> </p>
                            
                            <p class="mb-4"> <?php print $text2; ?> </p>

                            <div class="row g-2 mb-4 pb-2">
                                <div class="col-sm-6">
                                    <i class="fa fa-check text-primary me-2"></i>Fully Licensed
                                </div>
                                <div class="col-sm-6">
                                    <i class="fa fa-check text-primary me-2"></i>Online Tracking
                                </div>
                                <div class="col-sm-6">
                                    <i class="fa fa-check text-primary me-2"></i>Afordable Fee 
                                </div>
                                <div class="col-sm-6">
                                    <i class="fa fa-check text-primary me-2"></i>Best Trainers
                                </div>
                            </div>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <a class="btn btn-primary py-3 px-5" href="">Read More</a>
                                </div>
                                <div class="col-sm-6">
                                    <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:+0123456789">
                                        <span class="flex-shrink-0 btn-square bg-primary">
                                            <i class="fa fa-phone-alt text-white"></i>
                                        </span>
                                        <span class="px-3">
                                            <?php print $phone; ?>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <?php
            try {
                $sql2 = $pdo->query("SELECT * FROM our_team WHERE idour_team = 1");
                $resultTeam = $sql2->fetchAll(PDO::FETCH_OBJ);

                foreach($resultTeam as $our_team) {
                    $name1 = $our_team->nome1;
                    $profession1 = $our_team->cargo1;
                    $url_img1 = $our_team->url_img1;
                    $url_facebook1 = $our_team->url_facebook1;
                    $url_twitter1 = $our_team->url_twitter1;
                    $url_instagram1 = $our_team->url_instagram1;
                    $name2 = $our_team->nome2;
                    $profession2 = $our_team->cargo2;
                    $url_img2 = $our_team->url_img2;
                    $url_facebook2 = $our_team->url_facebook2;
                    $url_twitter2 = $our_team->url_twitter2;
                    $url_instagram2 = $our_team->url_instagram2;
                    $name3 = $our_team->nome3;
                    $profession3 = $our_team->cargo3;
                    $url_img3 = $our_team->url_img3;
                    $url_facebook3 = $our_team->url_facebook3;
                    $url_twitter3 = $our_team->url_twitter3;
                    $url_instagram3 = $our_team->url_instagram3;
                    $name4 = $our_team->nome4;
                    $profession4 = $our_team->cargo4;
                    $url_img4 = $our_team->url_img4;
                    $url_facebook4 = $our_team->url_facebook4;
                    $url_twitter4 = $our_team->url_twitter4;
                    $url_instagram4 = $our_team->url_instagram4;
                }
            } catch (PDOException $e) {
                print '<strong>ERRO</strong><br/><br/>' . $e->getMessage();
            }
        ?>

        <!-- Team Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h6 class="text-primary text-uppercase mb-2">Meet The Team</h6>
                    <h1 class="display-6 mb-4">We Have Great Experience Of Driving</h1>
                </div>
                <div class="row g-0 team-items">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/<?php print $url_img1; ?>" alt="">
                                <div class="team-social text-center">
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print $url_facebook1; ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print $url_twitter1; ?>"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print $url_instagram1; ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="mt-2"><?php print $name1; ?></h5>
                                <span><?php print $profession1; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item position-relative">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/<?php print $url_img2; ?>" alt="">
                                <div class="team-social text-center">
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print $url_facebook2; ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print $url_twitter2; ?>"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print $url_instagram2; ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="mt-2"><?php print $name2; ?></h5>
                                <span><?php print $profession2; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/<?php print $url_img3; ?>" alt="">
                                <div class="team-social text-center">
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print $url_facebook3; ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print $url_twitter3; ?>"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print $url_instagram3; ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="mt-2"><?php print $name3; ?></h5>
                                <span><?php print $profession3; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item position-relative">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/<?php print $url_img4; ?>" alt="">
                                <div class="team-social text-center">
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print $url_facebook4; ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print $url_twitter4; ?>"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print $url_instagram4; ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="mt-2"><?php print $name4; ?></h5>
                                <span><?php print $profession4; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-white mb-4">Get In Touch</h4>
                        <h2 class="text-primary mb-4"><i class="fa fa-car text-white me-2"></i>Drivin</h2>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Quick Links</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Our Services</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Support</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Popular Links</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Our Services</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Support</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Newsletter</h4>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                                <button class="btn btn-primary">Sign Up</button>
                            </div>
                        </form>
                        <h6 class="text-white mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-outline-light me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
