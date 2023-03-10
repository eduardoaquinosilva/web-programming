<?php
    session_start();

    if (!isset($_POST['nuser'])) {
		header("Location: form-login.php");
		exit;
	}

    if (($_POST['nuser'] == 'admin') &&  (md5($_POST['npasswd']) == md5('z$3CoM#cb'))) {
        $_SESSION['user'] = $_POST['nuser'];
        $_SESSION['valid'] = true;
        header('Location: adm-home.php');
    } else {
        $_SESSION['error'] = true;
        header('Location: form-login.php');
    }
