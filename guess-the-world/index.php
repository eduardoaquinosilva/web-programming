<html>
  <head>
		<meta charset="UTF-8">
    <title>Guess the Word</title>

		<?php
			include "generator.php";
		?>
  </head>
  <body>
		<form method="post" action="index.php">
			<input type="text" name="L0" size="1" maxlength="1"/>
			<input type="text" name="L1" size="1" maxlength="1"/>
			<input type="text" name="L2" size="1" maxlength="1"/>
			<input type="text" name="L3" size="1" maxlength="1"/>
			<input type="text" name="L4" size="1" maxlength="1"/>
			<input type="submit"/>
		</form>

		<form method="post" action="generator.php">
			<input type="submit" value="Gerar Palavra"/>
		</form>
		
    <?php
      //$letters = [$_POST['nL1'], $_POST['nL2'], $_POST['nL3'], $_POST['nL4'], $_POST['nL5']];
      
			$gWord = file_get_contents('word.txt');

			print_r($_POST);
			print($gWord);

      foreach($_POST as $key=>$letter) {
				if (utf8_encode($gWord[$key[1]]) == utf8_encode($letter)) {
					//print "<input type='text' name='$key' size='1' maxlenght='1'/>";
					print '<strong>' . $letter . '</strong>';
				} else print 'x';
			}			
    ?>
  </body>
</html>
