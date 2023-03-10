<?php
    session_start();

    $name1 = (!empty($_POST['nna1'])) ? $_POST['nna1'] : $_SESSION['nameTeamOne'];
    $function1 = (!empty($_POST['nfun1'])) ? $_POST['nfun1'] : $_SESSION['functionTeamOne'];
    $image1 = (!empty($_POST['nuim1'])) ? $_POST['nuim1'] : $_SESSION['urlPictureOne'];
    $face1 = (!empty($_POST['nuf1'])) ? $_POST['nuf1'] : $_SESSION['urlFacebookOne'];
    $twitter1 = (!empty($_POST['nut1'])) ? $_POST['nut1'] : $_SESSION['urlTwitterOne'];
    $insta1 = (!empty($_POST['nuin1'])) ? $_POST['nuin1'] : $_SESSION['urlInstagramOne'];

    $name2 = (!empty($_POST['nna2'])) ? $_POST['nna2'] : $_SESSION['nameTeamTwo'];
    $function2 = (!empty($_POST['nfun2'])) ? $_POST['nfun2'] : $_SESSION['functionTeamTwo'];
    $image2 = (!empty($_POST['nuim2'])) ? $_POST['nuim2'] : $_SESSION['ulrPictureTwo'];
    $face2 = (!empty($_POST['nuf2'])) ? $_POST['nuf2'] : $_SESSION['urlFacebookTwo'];
    $twitter2 = (!empty($_POST['nut2'])) ? $_POST['nut2'] : $_SESSION['urlTwitterTwo'];
    $insta2 = (!empty($_POST['nuin2'])) ? $_POST['nuin2'] : $_SESSION['urlInstagramTwo'];

    $name3 = (!empty($_POST['nna3'])) ? $_POST['nna3'] : $_SESSION['nameTeamThree'];
    $function3 = (!empty($_POST['nfun3'])) ? $_POST['nfun3'] : $_SESSION['functionTeamThree'];
    $image3 = (!empty($_POST['nuim3'])) ? $_POST['nuim3'] : $_SESSION['ulrPictureThree'];
    $face3 = (!empty($_POST['nuf3'])) ? $_POST['nuf3'] : $_SESSION['urlFacebookThree'];
    $twitter3 = (!empty($_POST['nut3'])) ? $_POST['nut3'] : $_SESSION['urlTwitterThree'];
    $insta3 = (!empty($_POST['nuin3'])) ? $_POST['nuin3'] : $_SESSION['urlInstagramThree'];

    $name4 = (!empty($_POST['nna4'])) ? $_POST['nna4'] : $_SESSION['nameTeamFour'];
    $function4 = (!empty($_POST['nfun4'])) ? $_POST['nfun4'] : $_SESSION['functionTeamFour'];
    $image4 = (!empty($_POST['nuim4'])) ? $_POST['nuim4'] : $_SESSION['ulrPictureFour'];
    $face4 = (!empty($_POST['nuf4'])) ? $_POST['nuf4'] : $_SESSION['urlFacebookFour'];
    $twitter4 = (!empty($_POST['nut4'])) ? $_POST['nut4'] : $_SESSION['urlTwitterFour'];
    $insta4 = (!empty($_POST['nuin4'])) ? $_POST['nuin4'] : $_SESSION['urlInstagramFour'];

    $_SESSION['nameTeamOne'] = $name1;
    $_SESSION['functionTeamOne'] = $function1;
    $_SESSION['urlPictureOne'] = $image1;
    $_SESSION['urlFacebookOne'] = $face1;
    $_SESSION['urlTwitterOne'] = $twitter1;
    $_SESSION['urlInstagramOne'] = $insta1;

    $_SESSION['nameTeamTwo'] = $name2;
    $_SESSION['functionTeamTwo'] = $function2;
    $_SESSION['urlPictureTwo'] = $image2;
    $_SESSION['urlFacebookTwo'] = $face2;
    $_SESSION['urlTwitterTwo'] = $twitter2;
    $_SESSION['urlInstagramTwo'] = $insta2;

    $_SESSION['nameTeamThree'] = $name3;
    $_SESSION['functionTeamThree'] = $function3;
    $_SESSION['urlPictureThree'] = $image3;
    $_SESSION['urlFacebookThree'] = $face3;
    $_SESSION['urlTwitterThree'] = $twitter3;
    $_SESSION['urlInstagramThree'] = $insta3;

    $_SESSION['nameTeamFour'] = $name4;
    $_SESSION['functionTeamFour'] = $function4;
    $_SESSION['urlPictureFour'] = $image4;
    $_SESSION['urlFacebookFour'] = $face4;
    $_SESSION['urlTwitterFour'] = $twitter4;
    $_SESSION['urlInstagramFour'] = $insta4;

    header("Location: adm-team.php");
