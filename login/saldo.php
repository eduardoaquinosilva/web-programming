<?php
	session_start();

	if (!$_SESSION['sessao_valida']) header('Location: index.php');
?>

<html>
	<head>
		<title>PHP Test</title>
	</head>

	<body>
		<h1>Usuário: <?php print $_SESSION['user']; ?> </h1>
		
		<?php
			if (in_array('saldo', $_SESSION['permissao'])) {
		?>
				
		<h1> Saldo: R$ 400,00 </h1>
		
		<?php
			}
		
			if (in_array('transferir', $_SESSION['permissao'])) {
		?>

		<br/>
		<input type="submit" value="Transferir"/>
		<br/><br/>
		
		<?php
			}
		?>

		<a href="sair.php"> Sair </a>
	</body>
</html>
