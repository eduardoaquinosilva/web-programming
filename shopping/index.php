<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
  	<?php
			$cupom = trim($_GET['cupom']);
			$cupons_validos = array('NIVER10', 'PROMO15');
			$cupomAceito = in_array($cupom, $cupons_validos);
		?>

		<h1><a href="index.php">Shopping virtual</h1>
		<ul>
			<li><a href="p1.php<?php print ($cupomAceito)?'?cupom='.$cupom:''; ?>">Produto 1</a></li>
			<li><a href="p2.php<?php print ($cupomAceito)?'?cupom='.$cupom:''; ?>">Produto 2</a></li>
		</ul>
		<form action="index.php" method="GET">
			Cupom de desconto:
			<?php
				if($cupomAceito){
			?>
					
			<strong><?php print $cupom; ?></strong>
			OK
			
			<?php } else { ?>
				<input type="text" name="cupom"/><input type="submit" value="Enviar"/>
			<?php } ?>
		</form>
  </body>
</html>
