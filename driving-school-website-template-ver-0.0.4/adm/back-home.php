<?php
    $homeList = array();
    $homeList["banner1"] = (!empty($_POST['ntiba1'])) ? $_POST['ntiba1'] : false;
    $homeList["banner2"] = (!empty($_POST['ntiba2'])) ? $_POST['ntiba2'] : false;

    include "connection.php";

    try {
        foreach($homeList as $key=>$homeItem) {
            if ($homeItem) {
                $sql = $pdo->query("UPDATE home SET " . $key . " = '" . $homeItem . "' WHERE idhome = 1");
            }
        }
    } catch (PDOException $e) {
        print '<strong>ERRO</strong><br/><br/>' . $e->getMessage();
    }

    header("Location: adm-home.php");
?>
