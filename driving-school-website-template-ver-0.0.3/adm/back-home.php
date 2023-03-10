<?php
    session_start();

    $title1 = (!empty($_POST['ntiba1'])) ? $_POST['ntiba1'] : $_SESSION['titleBannerOne'];
    $title2 = (!empty($_POST['ntiba2'])) ? $_POST['ntiba2'] : $_SESSION['titleBannerTwo'];

    $_SESSION['titleBannerOne'] = $title1;
    $_SESSION['titleBannerTwo'] = $title2;

    header("Location: adm-home.php");
