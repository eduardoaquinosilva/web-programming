<?php
    session_start();

    $price1 = (!empty($_POST['npr1'])) ? $_POST['npr1'] : $_SESSION['priceCourseOne'];
    $level1 = (!empty($_POST['nni1'])) ? $_POST['nni1'] : $_SESSION['levelCourseOne'];
    $duration1 = (!empty($_POST['ndu1'])) ? $_POST['ndu1'] : $_SESSION['durationCourseOne'];
    $price2 = (!empty($_POST['npr2'])) ? $_POST['npr2'] : $_SESSION['priceCourseTwo'];
    $level2 = (!empty($_POST['nni2'])) ? $_POST['nni2'] : $_SESSION['levelCourseTwo'];
    $duration2 = (!empty($_POST['ndu2'])) ? $_POST['ndu2'] : $_SESSION['durationCourseTwo'];
    $price3 = (!empty($_POST['npr3'])) ? $_POST['npr3'] : $_SESSION['priceCourseThree'];
    $level3 = (!empty($_POST['nni3'])) ? $_POST['nni3'] : $_SESSION['levelCourseThree'];
    $duration3 = (!empty($_POST['ndu3'])) ? $_POST['ndu3'] : $_SESSION['durationCourseThree'];

    $_SESSION['priceCourseOne'] = $price1;
    $_SESSION['levelCourseOne'] = ucfirst(strtolower($level1));
    $_SESSION['durationCourseOne'] = $duration1;
    $_SESSION['priceCourseTwo'] = $price2;
    $_SESSION['levelCourseTwo'] = ucfirst(strtolower($level2));
    $_SESSION['durationCourseTwo'] = $duration2;
    $_SESSION['priceCourseThree'] = $price3;
    $_SESSION['levelCourseThree'] = ucfirst(strtolower($level3));
    $_SESSION['durationCourseThree'] = $duration3;

    header("Location: adm-courses.php");
