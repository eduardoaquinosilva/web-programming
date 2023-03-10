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
        <title>Appointment - Área do Administrador - Drivin</title>

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
                            <a href="adm-appointment.php" class="dropdown-item active">Appointment</a>
                            <a href="adm-team.php" class="dropdown-item">Our Team</a>
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
                        <h1 class="display-6 mb-4">APPOINTMENT</h1>
                        <?php
                            include 'connection.php';
                            
                            try {
                                $sql = $pdo->query("SELECT * FROM appointment");
                                $result = $sql->fetchAll(PDO::FETCH_OBJ);
                                
                                if (count($result) > 0) {
                                    foreach ($result as $appointment) {
                        ?>
                                        <div class="card text-center">
                                            <div class="card-header" style="background-color: #F3BD00;">
                                                <?php print ucfirst(strtolower($appointment->tipo_curso)) . ' | ' . ucfirst(strtolower($appointment->tipo_carro)); ?>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title"> <?php print $appointment->nome; ?> </h5>
                                                <h6 class="card-title"> <?php print $appointment->email; ?> </h6>
                                                <p class="card-text"> <?php print $appointment->menssagem; ?> </p>
                                                <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                                            </div>
                                            <div class="card-footer text-muted" style="background-color: #F3BD00;">
                                                <?php print $appointment->data_hora; ?>
                                            </div>
                                        </div><br>  
                        <?php
                                    }
                                } else {
                                    print "There are no appointments registered.";
                                }
                            } catch (PDOException $e) {
                                print '<strong>ERRO</strong><br/><br/>' . $e->getMessage();
                            }
                        ?>
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
