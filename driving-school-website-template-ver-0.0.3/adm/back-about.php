<?php
    session_start();

    $title = (!empty($_POST['ntitle'])) ? $_POST['ntitle'] : $_SESSION['titleAbout'];
    $phone = (!empty($_POST['nphone'])) ? $_POST['nphone'] : $_SESSION['phoneNumber'];
    $text1 = (!empty($_POST['ntext1'])) ? $_POST['ntext1'] : $_SESSION['textAbout1'];
    $text2 = (!empty($_POST['ntext2'])) ? $_POST['ntext2'] : $_SESSION['textAbout2'];

    $_SESSION['titleAbout'] = $title;
    $_SESSION['phoneNumber'] = $phone;
    $_SESSION['textAbout1'] = $text1;
    $_SESSION['textAbout2'] = $text2;

    header("Location: adm-about.php");
