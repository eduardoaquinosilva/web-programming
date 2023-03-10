<?php
    session_start();
    $erro = $_SESSION['erro'];
?>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form action="login.php" method="POST">
			<?php
				if ($erro) {
			?>
	
			<img src="https://icons.iconarchive.com/icons/paomedia/small-n-flat/48/shield-warning-icon.png"/>
			<strong>Login ou senha incorreta</strong>
			<br/><br/>
	
			<?php
				}
			?>

			Login: <input type="text" name="login"/>
			<br/><br/>
			Senha: <input type="password" name="senha"/>
			<br/><br/>
			<input type="submit" value="Enviar"/>
		</form>
  </body>
</html>
