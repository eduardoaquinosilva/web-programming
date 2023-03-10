<?php
    session_start();

    if (!$_SESSION['activeSession']) header("Location: form-login.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Our Team - Área do Administrador - Drivin</title>

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
        <link href="../lib/animate/animate.min.css" rel="stylesheet">
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
            <a href="adm-home.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <h2 class="m-0"><i class="fa fa-car text-primary me-2"></i>Drivin</h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="adm-home.php" class="nav-item nav-link">Home</a>
                    <a href="adm-about.php" class="nav-item nav-link">About</a>
                    <a href="adm-courses.php" class="nav-item nav-link">Courses</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="adm-feature.php" class="dropdown-item">Features</a>
                            <a href="adm-appointment.php" class="dropdown-item">Appointment</a>
                            <a href="adm-team.php" class="dropdown-item active">Our Team</a>
                            <a href="adm-testimonial.php" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="adm-contact.php" class="nav-item nav-link">Contact</a>
                    <a href="logout.php" class="nav-item nav-link">Log Out</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- MAIN -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                        <h1 class="display-6 mb-4">OUR TEAM</h1>
                        <form action="back-team.php" method="POST">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="Nome 1" name="nna1">
                                        <label for="gname">Nome 1</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="Function 1" name="nfun1">
                                        <label for="gname">Cargo 1</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="URL Imagem 1" name="nuim1">
                                        <label for="gname">URL Imagem 1</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="URL Facebook 1" name="nuf1">
                                        <label for="gname">URL Facebook 1</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="URL Twitter 1" name="nut1">
                                        <label for="gname">URL Twitter 1</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="URL Instagram 1" name="nuin1">
                                        <label for="gname">URL Instagram 1</label>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="Nome 2" name="nna2">
                                        <label for="gname">Nome 2</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="Function 2" name="nfun2">
                                        <label for="gname">Cargo 2</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="URL Imagem 2" name="nuim2">
                                        <label for="gname">URL Imagem 2</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="URL Facebook 2" name="nuf2">
                                        <label for="gname">URL Facebook 2</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="URL Twitter 2" name="nut2">
                                        <label for="gname">URL Twitter 2</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="URL Instagram 2" name="nuin2">
                                        <label for="gname">URL Instagram 2</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="Nome 3" name="nna3">
                                        <label for="gname">Nome 3</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="Function 3" name="nfun3">
                                        <label for="gname">Cargo 3</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="URL Imagem 3" name="nuim3">
                                        <label for="gname">URL Imagem 3</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="URL Facebook 3" name="nuf3">
                                        <label for="gname">URL Facebook 3</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="URL Twitter 3" name="nut3">
                                        <label for="gname">URL Twitter 3</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="URL Instagram 3" name="nuin3">
                                        <label for="gname">URL Instagram 3</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="Nome 4" name="nna4">
                                        <label for="gname">Nome 4</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="Function 4" name="nfun4">
                                        <label for="gname">Cargo 4</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="URL Imagem 4" name="nuim4">
                                        <label for="gname">URL Imagem 4</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="URL Facebook 4" name="nuf4">
                                        <label for="gname">URL Facebook 4</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="URL Twitter 4" name="nut4">
                                        <label for="gname">URL Twitter 4</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="URL Instagram 4" name="nuin4">
                                        <label for="gname">URL Instagram 4</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../lib/wow/wow.min.js"></script>
        <script src="../lib/easing/easing.min.js"></script>
        <script src="../lib/waypoints/waypoints.min.js"></script>
        <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="../js/main.js"></script>
    </body>
</html>
