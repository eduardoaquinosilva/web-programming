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
    $date = date('d F Y H:i:s');

    $_SESSION['contactsList'][] = array('contactName' => $nameContact, 'contactEmail' => $emailContact, 'contactSubject' => $subjectContact, 'contactMessage' => $messageContact, 'contactDate' => $date);

    $_SESSION['contactSent'] = true;

    header('Location: contact.php');
