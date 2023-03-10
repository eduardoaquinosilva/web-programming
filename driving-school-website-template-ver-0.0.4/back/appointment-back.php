<?php
    session_start();

	if (!isset($_POST['nname'])) {
		header("Location: appointment.php");
		exit;
	}

    date_default_timezone_set('America/Sao_Paulo');

    $nameAppointment = $_POST['nname'];
    $emailAppointment = $_POST['nemail'];
    $courseTypeAppointment = $_POST['ntycourse'];
    $carTypeAppointment = $_POST['ncar'];
    $messageAppointment = $_POST['nmsg'];
    $date = date('Y-m-d H:i:s');
    $returnPage = $_GET['page'];

    include '../adm/connection.php';

    try {
        $sql = $pdo->query("INSERT INTO appointment(idappointment, nome, email, tipo_curso, tipo_carro, menssagem, data_hora) VALUES(default, '" . $nameAppointment . "', '" . $emailAppointment . "', '" . $courseTypeAppointment . "', '" . $carTypeAppointment . "', '" . $messageAppointment . "', '" . $date . "')");

        $_SESSION['appointmentSent'] = true;
    } catch (PDOException $e) {
        print '<strong>ERRO</strong><br/><br/>' . $e->getMessage();
    }

    header('Location: ../' . $returnPage . '.php');
?>
