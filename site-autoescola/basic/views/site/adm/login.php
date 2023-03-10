<?php
    session_start();

    if (!isset($_POST['nuser'])) {
		header("Location: form-login.php");
		exit;
	}

    include "connection.php";

    try {
        $sql = $pdo->query("SELECT * FROM `admins` WHERE BINARY `username` = '" . $_POST['nuser'] . "' AND passwd = md5('" . $_POST['npasswd'] . "')");
        $result = $sql->fetchAll(PDO::FETCH_OBJ);

        if (count($result) == 1) {
            $_SESSION['activeSession'] = true;
            $_SESSION['user'] = $_POST['nuser'];
            $_SESSION['error'] = false;
        } else {
            $_SESSION['activeSssion'] = false;
            $_SESSION['error'] = true;
        }
    } catch(PDOException $e) {
        print '<strong>ERRO: </strong>' . $e->getMessage() . ".";
        $_SESSION['error'] = true;
    }

    header('Location: form-login.php');
?>
