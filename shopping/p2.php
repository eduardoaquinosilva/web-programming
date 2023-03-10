<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
		<?php
			$cupons['NIVER10'] = 10;
			$cupons['NIVER15'] = 15;
			$desconto = 0;
			if($_GET['cupom'] != '') {
				$desconto = $cupons[$_GET['cupom']];
			}
			$preco = 1800;
		?>

		<h1><a href="index.php">Shopping virtual</a></h1>
		Imagem de televisão
		<h3>Preço: R$ <?php print (($preco * (100 - $desconto) / 100)); ?></h3>
	</body>
</html>
