<?php
    session_start();

    if (!$_SESSION['valid']) header("Location: form-login.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Testimonial - Área do Administrador - Drivin</title>

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
                            <a href="adm-team.php" class="dropdown-item">Our Team</a>
                            <a href="adm-testimonial.php" class="dropdown-item active">Testimonial</a>
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
                        <h1 class="display-6 mb-4">TESTIMONIAL</h1>
                        <form action="back-testimonial.php" method="POST">
                            <div class="row g-3">
                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="Nome" name="ntena1">
                                        <label for="gname">Comentário 1 - Nome</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="Profissão" name="ntepr1">
                                        <label for="gname">Comentário 1 - Profissão</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="url" class="form-control border-0 bg-light" id="gname" placeholder="URL" name="nteurl1">
                                        <label for="gname">Comentário 1 - URL da Imagem</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0 bg-light" placeholder="Leave a message here" id="message2" style="height: 150px" name="ncom1"></textarea>
                                        <label for="message2">Comentário 1 - Comentário</label>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="Nome" name="ntena2">
                                        <label for="gname">Comentário 2 - Nome</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="Profissão" name="ntepr2">
                                        <label for="gname">Comentário 2 - Profissão</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="url" class="form-control border-0 bg-light" id="gname" placeholder="URL" name="nteurl2">
                                        <label for="gname">Comentário 2 - URL da Imagem</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0 bg-light" placeholder="Leave a message here" id="message2" style="height: 150px" name="ncom2"></textarea>
                                        <label for="message2">Comentário 2 - Comentário</label>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="Nome" name="ntena3">
                                        <label for="gname">Comentário 3 - Nome</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="Profissão" name="ntepr3">
                                        <label for="gname">Comentário 3 - Profissão</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="url" class="form-control border-0 bg-light" id="gname" placeholder="URL" name="nteurl3">
                                        <label for="gname">Comentário 3 - URL da Imagem</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0 bg-light" placeholder="Leave a message here" id="message2" style="height: 150px" name="ncom3"></textarea>
                                        <label for="message2">Comentário 3 - Comentário</label>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="Nome" name="ntenanew">
                                        <label for="gname">Comentário Novo - Nome</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="Profissão" name="nteprnew">
                                        <label for="gname">Comentário Novo - Profissão</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="url" class="form-control border-0 bg-light" id="gname" placeholder="URL" name="nteurlnew">
                                        <label for="gname">Comentário Novo - URL da Imagem</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0 bg-light" placeholder="Leave a message here" id="message2" style="height: 150px" name="ncomnew"></textarea>
                                        <label for="message2">Comentário Novo - Comentário</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
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
