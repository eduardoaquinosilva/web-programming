<?php
    $aboutList = array();
    $aboutList["titulo"] = (!empty($_POST['ntitle'])) ? $_POST['ntitle'] : false;
    $aboutList["telefone"] = (!empty($_POST['nphone'])) ? $_POST['nphone'] : false;
    $aboutList["texto1"] = (!empty($_POST['ntext1'])) ? $_POST['ntext1'] : false;
    $aboutList["texto2"] = (!empty($_POST['ntext2'])) ? $_POST['ntext2'] : false;

    include 'connection.php';

    try {
        foreach($aboutList as $key=>$aboutItem) {
            if ($aboutItem) {
                $sql = $pdo->query("UPDATE about SET " . $key . " = '" . $aboutItem . "' WHERE idabout = 1");
            }
        }
    } catch (PDOException $e) {
        print '<strong>ERRO</strong><br/><br/>' . $e->getMessage();
    }

    header('Location: adm-about.php');
?>
