<?php
    session_start();

    $title = (!empty($_POST['ntitle'])) ? $_POST['ntitle'] : $_SESSION['titleFeature'];
    $subtitle = (!empty($_POST['nsubti'])) ? $_POST['nsubti'] : $_SESSION['subtitleFeature'];
    $desc1 = (!empty($_POST['ndesc1'])) ? $_POST['ndesc1'] : $_SESSION['descriptionFeatureOne'];
    $desc2 = (!empty($_POST['ndesc2'])) ? $_POST['ndesc2'] : $_SESSION['descriptionFeatureTwo'];
    $desc3 = (!empty($_POST['ndesc3'])) ? $_POST['ndesc3'] : $_SESSION['descriptionFeatureThree'];
    $desc4 = (!empty($_POST['ndesc4'])) ? $_POST['ndesc4'] : $_SESSION['descriptionFeatureFour'];
    
    $_SESSION['titleFeature'] = $title;
    $_SESSION['subtitleFeature'] = $subtitle;
    $_SESSION['descriptionFeatureOne'] = $desc1;
    $_SESSION['descriptionFeatureTwo'] = $desc2;
    $_SESSION['descriptionFeatureThree'] = $desc3;
    $_SESSION['descriptionFeatureFour'] = $desc4;

    header("Location: adm-feature.php");
