<?php
    $ourTeamList = array();
    
    $ourTeamList["nome1"] = (!empty($_POST['nna1'])) ? $_POST['nna1'] : false;
    $ourTeamList["cargo1"] = (!empty($_POST['nfun1'])) ? $_POST['nfun1'] : false;
    $ourTeamList["url_img1"] = (!empty($_POST['nuim1'])) ? $_POST['nuim1'] : false;
    $ourTeamList["url_facebook1"] = (!empty($_POST['nuf1'])) ? $_POST['nuf1'] : false;
    $ourTeamList["url_twitter1"] = (!empty($_POST['nut1'])) ? $_POST['nut1'] : false;
    $ourTeamList["url_instagram1"] = (!empty($_POST['nuin1'])) ? $_POST['nuin1'] : false;

    $ourTeamList["nome2"] = (!empty($_POST['nna2'])) ? $_POST['nna2'] : false;
    $ourTeamList["cargo2"] = (!empty($_POST['nfun2'])) ? $_POST['nfun2'] : false;
    $ourTeamList["url_img2"] = (!empty($_POST['nuim2'])) ? $_POST['nuim2'] : false;
    $ourTeamList["url_facebook2"] = (!empty($_POST['nuf2'])) ? $_POST['nuf2'] : false;
    $ourTeamList["url_twitter2"] = (!empty($_POST['nut2'])) ? $_POST['nut2'] : false;
    $ourTeamList["url_instagram2"] = (!empty($_POST['nuin2'])) ? $_POST['nuin2'] : false;

    $ourTeamList["nome3"] = (!empty($_POST['nna3'])) ? $_POST['nna3'] : false;
    $ourTeamList["cargo3"] = (!empty($_POST['nfun3'])) ? $_POST['nfun3'] : false;
    $ourTeamList["url_img3"] = (!empty($_POST['nuim3'])) ? $_POST['nuim3'] : false;
    $ourTeamList["url_facebook3"] = (!empty($_POST['nuf3'])) ? $_POST['nuf3'] : false;
    $ourTeamList["url_twitter3"] = (!empty($_POST['nut3'])) ? $_POST['nut3'] : false;
    $ourTeamList["url_instagram3"] = (!empty($_POST['nuin3'])) ? $_POST['nuin3'] : false;

    $ourTeamList["nome4"] = (!empty($_POST['nna4'])) ? $_POST['nna4'] : false;
    $ourTeamList["cargo4"] = (!empty($_POST['nfun4'])) ? $_POST['nfun4'] : false;
    $ourTeamList["url_img4"] = (!empty($_POST['nuim4'])) ? $_POST['nuim4'] : false;
    $ourTeamList["url_facebook4"] = (!empty($_POST['nuf4'])) ? $_POST['nuf4'] : false;
    $ourTeamList["url_twitter4"] = (!empty($_POST['nut4'])) ? $_POST['nut4'] : false;
    $ourTeamList["url_instagram4"] = (!empty($_POST['nuin4'])) ? $_POST['nuin4'] : false;

    include "connection.php";

    try {
        foreach($ourTeamList as $key=>$teamItem) {
            if ($teamItem) {
                $sql = $pdo->query("UPDATE our_team SET " . $key . " = '" . $teamItem . "' WHERE idour_team = 1");
            }
        }
    } catch (PDOException $e) {
        print '<strong>ERRO</strong><br/><br/>' . $e->getMessage();
    }

    header("Location: adm-team.php");
?>
