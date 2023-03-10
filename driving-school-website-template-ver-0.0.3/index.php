<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Drivin - Driving School Website Template</title>
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

        <!-- Ion Icon -->
        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/modal.css">

        <?php include "functions.php"; ?>
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
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
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

        <!-- Carousel Start -->
        <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                        <h1 class="display-2 text-light mb-5 animated slideInDown">
                                            <?php print changeHome(1); ?>
                                        </h1>
                                        <a href="" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                        <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Courses</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                        <h1 class="display-2 text-light mb-5 animated slideInDown"> 
                                            <?php
                                                print changeHome(2);
                                            ?>
                                        </h1>
                                        <a href="" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                        <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Courses</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Facts Start -->
        <div class="container-fluid facts py-5 pt-lg-0">
            <div class="container py-5 pt-lg-0">
                <div class="row gx-0">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square bg-primary">
                                    <i class="fa fa-car text-white"></i>
                                </div>
                                <div class="ps-4">
                                    <h5>Easy Driving Learn </h5>
                                    <span>Clita erat ipsum lorem sit sed stet duo justo erat amet</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square bg-primary">
                                    <i class="fa fa-users text-white"></i>
                                </div>
                                <div class="ps-4">
                                    <h5>National Instructor</h5>
                                    <span>Clita erat ipsum lorem sit sed stet duo justo erat amet</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square bg-primary">
                                    <i class="fa fa-file-alt text-white"></i>
                                </div>
                                <div class="ps-4">
                                    <h5>Get licence</h5>
                                    <span>Clita erat ipsum lorem sit sed stet duo justo erat amet</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->

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
                                <?php print changeAbout(1, 1); ?>
                            </h1>
                            
                            <p> <?php print changeAbout(2, 2); ?> </p>
                            
                            <p class="mb-4"> <?php print changeAbout(3, 2); ?> </p>

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
                                            <?php print changeAbout(4, 3); ?>
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

        <!-- Courses Start -->
        <div class="container-xxl courses my-6 py-6 pb-0">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h6 class="text-primary text-uppercase mb-2">Tranding Courses</h6>
                    <h1 class="display-6 mb-4">Our Courses Upskill You With Driving Training</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4"> $ <?php print changeCourses(1, 1); ?> </div>
                                <h5 class="mb-3">Automatic Car Lessons</h5>
                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i> <?php print changeCourses(2, 2); ?> </li>
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i> <?php print changeCourses(3, 3); ?> Weeks </li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="img/courses-1.jpg" alt="">
                                <div class="courses-overlay">
                                    <a class="btn btn-outline-primary border-2" href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4"> $ <?php print changeCourses(4, 1); ?> </div>
                                <h5 class="mb-3">Highway Driving Lesson</h5>
                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i> <?php print changeCourses(5, 2); ?> </li>
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i> <?php print changeCourses(6, 3); ?> Weeks </li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="img/courses-2.jpg" alt="">
                                <div class="courses-overlay">
                                    <a class="btn btn-outline-primary border-2" href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4"> $ <?php print changeCourses(7, 1); ?> </div>
                                <h5 class="mb-3">International Driving</h5>
                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i> <?php print changeCourses(8, 2); ?> </li>
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i> <?php print changeCourses(9, 3); ?> Weeks </li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="img/courses-3.jpg" alt="">
                                <div class="courses-overlay">
                                    <a class="btn btn-outline-primary border-2" href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 my-6 mb-0 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-primary text-center p-5">
                            <h1 class="mb-4">Make Appointment</h1>
                            <form action="appointment-back.php?page=index" method="POST">
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="gname" placeholder="Gurdian Name" name="nname" required>
                                            <label for="gname">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0" id="gmail" placeholder="Gurdian Email" name="nemail" required>
                                            <label for="gmail">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="cname" placeholder="Child Name" name="ntycourse" required>
                                            <label for="cname">Courses Type</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="cage" placeholder="Child Age" name="ncar" required>
                                            <label for="cage">Car Type</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px" name="nmsg" required></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-dark w-100 py-3" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses End -->

        <!-- Features Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="text-primary text-uppercase mb-2"> <?php print changeFeature(1, 1); ?> </h6>
                        <h1 class="display-6 mb-4"> <?php print changeFeature(2, 2); ?> </h1>
                        <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="row gy-5 gx-4">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary me-3">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <h5 class="mb-0">Fully Licensed</h5>
                                </div>
                                <span> <?php print changeFeature(3, 3); ?> </span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary me-3">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <h5 class="mb-0">Online Tracking</h5>
                                </div>
                                <span> <?php print changeFeature(4, 3); ?> </span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary me-3">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <h5 class="mb-0">Afordable Fee</h5>
                                </div>
                                <span> <?php print changeFeature(5, 3); ?> </span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary me-3">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <h5 class="mb-0">Best Trainers</h5>
                                </div>
                                <span> <?php print changeFeature(6, 3); ?> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                            <img class="position-absolute w-100 h-100" src="img/about-1.jpg" alt="" style="object-fit: cover;">
                            <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="img/about-2.jpg" alt="" style="width: 200px; height: 200px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->

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
                                <img class="img-fluid" src="<?php print changeTeam(3, 3); ?>" alt="">
                                <div class="team-social text-center">
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print changeTeam(4, 7); ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print changeTeam(5, 7); ?>"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print changeTeam(6, 7); ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="mt-2"> <?php print changeTeam(1, 1); ?> </h5>
                                <span> <?php print changeTeam(2, 2); ?> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item position-relative">
                            <div class="position-relative">
                                <img class="img-fluid" src="<?php print changeTeam(9, 4); ?>" alt="">
                                <div class="team-social text-center">
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print changeTeam(10, 7); ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print changeTeam(11, 7); ?>"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print changeTeam(12, 7); ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="mt-2"> <?php print changeTeam(7, 1); ?> </h5>
                                <span> <?php print changeTeam(8, 2); ?> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative">
                            <div class="position-relative">
                                <img class="img-fluid" src="<?php print changeTeam(15, 5); ?>" alt="">
                                <div class="team-social text-center">
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print changeTeam(16, 7); ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print changeTeam(17, 7); ?>"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print changeTeam(18, 7); ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="mt-2"> <?php print changeTeam(13, 1); ?> </h5>
                                <span> <?php print changeTeam(14, 2); ?> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item position-relative">
                            <div class="position-relative">
                                <img class="img-fluid" src="<?php print changeTeam(21, 6); ?>" alt="">
                                <div class="team-social text-center">
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print changeTeam(22, 7); ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print changeTeam(23, 7); ?>"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php print changeTeam(24, 7); ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="mt-2"> <?php print changeTeam(19, 1); ?> </h5>
                                <span> <?php print changeTeam(20, 2); ?> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h6 class="text-primary text-uppercase mb-2">Testimonial</h6>
                    <h1 class="display-6 mb-4">What Our Clients Say!</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="owl-carousel testimonial-carousel">

                        <?php
                            foreach ($_SESSION['testimonialList'] as $comment) {
                        ?>
                                <div class="testimonial-item text-center">
                                    <div class="position-relative mb-5">
                                        <img class="img-fluid rounded-circle mx-auto" src="<?php print $comment['testimonialPicture']; ?>" alt="">
                                        <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                            <i class="fa fa-quote-left fa-2x text-primary"></i>
                                        </div>
                                    </div>
                                    <p class="fs-4"><?php print $comment['testimonialComment']; ?></p>
                                    <hr class="w-25 mx-auto">
                                    <h5> <?php print $comment['testimonialName']; ?> </h5>
                                    <span> <?php print $comment['testimonialProfession']; ?> </span>
                                </div>
                        <?php
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

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

        <!-- MODAL -->
        <div class="outside" id="div-outside">
            <div class="inside">
                <button class="btn-close" id="btn-close-id"><ion-icon name="close-outline"></ion-icon></button>
                <p>Appointment sent succesfully.</p>
                <ion-icon id="btn-check" name="checkmark-circle-outline"></ion-icon>
            </div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

        <?php
            $sent = (!empty($_SESSION['appointmentSent'])) ? $_SESSION['appointmentSent'] : false;
            if ($sent) {
        ?>
                <script src="js/modal.js"></script>
        <?php
                $_SESSION['appointmentSent'] = NULL;
            }
        ?>
    </body>
</html>
