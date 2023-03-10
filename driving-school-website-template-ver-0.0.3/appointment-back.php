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
    $date = date('d F Y H:i:s');
    $returnPage = $_GET['page'];

    $_SESSION['appointmentsList'][] = array('appointmentName' => $nameAppointment, 'appointmentEmail' => $emailAppointment, 'appointmentCourseType' => $courseTypeAppointment, 'appointmentCarType' => $carTypeAppointment, 'appointmentMessage' => $messageAppointment, 'appointmentDate' => $date);

    $_SESSION['appointmentSent'] = true;

    header('Location: ' . $returnPage . '.php');
