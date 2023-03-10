<?php
    session_start();

    $_SESSION['valid'] = array();
    $_SESSION['user'] = array();

    header('Location: form-login.php');
