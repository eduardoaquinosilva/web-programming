<?php
    session_start();

    if (!isset($_POST['nname'])) {
        header('Location: contact.php');
        exit;
    }

    date_default_timezone_set('America/Sao_Paulo');

    $nameContact = $_POST['nname'];
    $emailContact = $_POST['nemail'];
    $subjectContact = $_POST['nsub'];
    $messageContact = $_POST['nmsg'];
    $date = date('Y-m-d H:i:s');

    include "../adm/connection.php";

    try {
        $sql = $pdo->query("INSERT INTO contact(idcontact, nome, email, assunto, menssagem, data_hora) VALUES(default, '" . $nameContact . "', '" . $emailContact . "', '" . $subjectContact . "', '" . $messageContact . "', '" . $date . "')");

        $_SESSION['contactSent'] = true;
    } catch (PDOException $e) {
        print '<strong>ERRO</strong><br/><br/>' . $e->getMessage();
    }

    header('Location: ../contact.php');
?>
