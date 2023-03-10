<?php
    $coursesList = array();

    $coursesList["preco1"] = (!empty($_POST['npr1'])) ? $_POST['npr1'] : false;
    $coursesList["desc1"] = (!empty($_POST['ndesc1'])) ? $_POST['ndesc1'] : false;
    $coursesList["nivel1"] = (!empty($_POST['nni1'])) ? $_POST['nni1'] : false;
    $coursesList["duracao1"] = (!empty($_POST['ndu1'])) ? $_POST['ndu1'] : false;

    $coursesList["preco2"] = (!empty($_POST['npr2'])) ? $_POST['npr2'] : false;
    $coursesList["desc2"] = (!empty($_POST['ndesc2'])) ? $_POST['ndesc2'] : false;
    $coursesList["nivel2"] = (!empty($_POST['nni2'])) ? $_POST['nni2'] : false;
    $coursesList["duracao2"] = (!empty($_POST['ndu2'])) ? $_POST['ndu2'] : false;

    $coursesList["preco3"] = (!empty($_POST['npr3'])) ? $_POST['npr3'] : false;
    $coursesList["desc3"] = (!empty($_POST['ndesc3'])) ? $_POST['ndesc3'] : false;
    $coursesList["nivel3"] = (!empty($_POST['nni3'])) ? $_POST['nni3'] : false;
    $coursesList["duracao3"] = (!empty($_POST['ndu3'])) ? $_POST['ndu3'] : false;

    include "connection.php";

    try {
        foreach($coursesList as $key=>$coursesItem) {
            if ($coursesItem) {
                $sql = $pdo->query("UPDATE courses SET " . $key . " = '" . $coursesItem . "' WHERE idcourses = 1");
            }
        }
    } catch (PDOException $e) {
        print '<strong>ERRO</strong><br/><br/>' . $e->getMessage();
    }

    header("Location: adm-courses.php");
?>
