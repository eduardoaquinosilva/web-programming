<?php
    $featuresList = array();
    $featuresList["titulo"] = (!empty($_POST['ntitle'])) ? $_POST['ntitle'] : false;
    $featuresList["subtitulo"] = (!empty($_POST['nsubti'])) ? $_POST['nsubti'] : false;
    $featuresList["desc1"] = (!empty($_POST['ndesc1'])) ? $_POST['ndesc1'] : false;
    $featuresList["desc2"] = (!empty($_POST['ndesc2'])) ? $_POST['ndesc2'] : false;
    $featuresList["desc3"] = (!empty($_POST['ndesc3'])) ? $_POST['ndesc3'] : false;
    $featuresList["desc4"] = (!empty($_POST['ndesc4'])) ? $_POST['ndesc4'] : false;

    include "connection.php";

    try {
        foreach($featuresList as $key=>$featuresItem) {
            if ($featuresItem) {
                $sql = $pdo->query("UPDATE features SET " . $key . " = '" . $featuresItem . "' WHERE idfeatures = 1");
            }
        }
    } catch (PDOException $e) {
        print '<strong>ERRO</strong><br/><br/>' . $e->getMessage();
    }

    header("Location: adm-feature.php");
?>
