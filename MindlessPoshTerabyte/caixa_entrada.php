<html>
	<head>
		<title>PHP Test</title>
	</head>

	<body>
		<?php
			$usuarios = array();
			$usuarios['Maria']['nome'] = 'Maria da Silva';
			$usuarios['Maria']['id'] = 5974;
			$usuarios['João']['nome'] = 'João Alfredo';
			$usuarios['João']['id'] = 3618;
			$userLogin = $_POST['login'];
			$userId = $usuarios[$userLogin]['id'];
		?>

		<h1>Olá! <?php echo $usuarios[$urusarioLogin]['nome']; ?>! </h1>
		<form action="apagar.php" method="POST">
			<ul>
				<li>E-mail 1</li>
				<li>E-mail 2</li>
			</ul>

			<input type="hidden" name="id" value="<?php echo $userId; ?>"/>
		</form>
</html>
