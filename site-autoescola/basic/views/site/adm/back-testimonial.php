<?php
    if (!isset($_POST['ntena'])) {
		header("Location: adm-testimonal.php");
		exit;
	}

    include 'connection.php';

    try {
        $sql = $pdo->query("INSERT INTO testimonial(idtestimonial, nome, profissao, comentario, url_img) VALUES(default, '" . $_POST['ntena'] . "', '" . $_POST['ntepr'] . "', '" . $_POST['ncom'] . "', '" . $_POST['nteurl'] . "')");
    } catch (PDOException $e) {
        print '<strong>ERRO</strong><br/><br/>' . $e->getMessage();
    }
    
    header("Location: adm-testimonial.php");
?>
