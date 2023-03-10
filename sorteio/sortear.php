<?php
	session_start();

	$sorteadoKey = array_rand($_SESSION['nomes']);

	$sorteado = $_SESSION['nomes'][$sorteadoKey];

	echo $sorteado;
?>
