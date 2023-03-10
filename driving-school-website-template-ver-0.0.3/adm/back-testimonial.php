<?php
    session_start();

    $name1 = (!empty($_POST['ntena1'])) ? $_POST['ntena1'] : $_SESSION['testimonialList'][0]['testimonialName'];
    $profession1 = (!empty($_POST['ntepr1'])) ? $_POST['ntepr1'] : $_SESSION['testimonialList'][0]['testimonialProfession'];
    $image1 = (!empty($_POST['nteurl1'])) ? $_POST['nteurl1'] : $_SESSION['testimonialList'][0]['testimonialPicture'];
    $comment1 = (!empty($_POST['ncom1'])) ? $_POST['ncom1'] : $_SESSION['testimonialList'][0]['testimonialComment'];

    $name2 = (!empty($_POST['ntena2'])) ? $_POST['ntena2'] : $_SESSION['testimonialList'][1]['testimonialName'];
    $profession2 = (!empty($_POST['ntepr2'])) ? $_POST['ntepr2'] : $_SESSION['testimonialList'][1]['testimonialProfession'];
    $image2 = (!empty($_POST['nteurl2'])) ? $_POST['nteurl2'] : $_SESSION['testimonialList'][1]['testimonialPicture'];
    $comment2 = (!empty($_POST['ncom2'])) ? $_POST['ncom2'] : $_SESSION['testimonialList'][1]['testimonialComment'];

    $name3 = (!empty($_POST['ntena3'])) ? $_POST['ntena3'] : $_SESSION['testimonialList'][2]['testimonialName'];
    $profession3 = (!empty($_POST['ntepr3'])) ? $_POST['ntepr3'] : $_SESSION['testimonialList'][2]['testimonialProfession'];
    $image3 = (!empty($_POST['nteurl3'])) ? $_POST['nteurl3'] : $_SESSION['testimonialList'][2]['testimonialPicture'];
    $comment3 = (!empty($_POST['ncom3'])) ? $_POST['ncom3'] : $_SESSION['testimonialList'][2]['testimonialComment'];

    $nameNew = 'Client Name';
    $professionNew = 'Profession';
    $imageNew = false;
    $commentNew = 'Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.';

    if (!empty($_POST['ntenanew'])) {
        $nameNew = $_POST['ntenanew'];
    }
    if (!empty($_POST['nteprnew'])) {
        $professionNew = $_POST['nteprnew'];
    }
    if (!empty($_POST['nteurlnew'])) {
        $imageNew = $_POST['nteurlnew'];
    }
    if (!empty($_POST['ncomnew'])) {
        $commentNew = $_POST['ncomnew'];
    }

    $user1 = array('testimonialName' => $name1, 'testimonialProfession' => $profession1, 'testimonialPicture' => $image1, 'testimonialComment' => $comment1);
    $user2 = array('testimonialName' => $name2, 'testimonialProfession' => $profession2, 'testimonialPicture' => $image2, 'testimonialComment' => $comment2);
    $user3 = array('testimonialName' => $name3, 'testimonialProfession' => $profession3, 'testimonialPicture' => $image3, 'testimonialComment' => $comment3);
    
    $_SESSION['testimonialList'][0] = $user1;
    $_SESSION['testimonialList'][1] = $user2;    
    $_SESSION['testimonialList'][2] = $user3;

    if ($nameNew != 'Client Name') {
        $userNew = array('testimonialName' => $nameNew, 'testimonialProfession' => $professionNew, 'testimonialPicture' => $imageNew, 'testimonialComment' => $commentNew);
        $_SESSION['testimonialList'][] = $userNew;
    }
    
    header("Location: adm-testimonial.php");
