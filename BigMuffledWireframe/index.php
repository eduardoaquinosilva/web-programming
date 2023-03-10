<html>
  <head>
    <title>PHP Test</title>
  </head>
  
  <body>
    <?php
      $array = array();

      for ($a = 0; $a < 10; $a++) {
        $value = rand(0, 100);
        $array[$a] = $value;
      }

      foreach ($array as $item) {
        if ($item < 10) {
          $item = strval($item);
          $item = "0$item";
        }
        
        print "$item ";

        if ($item >= 50) {
          print "M";
        } else print "m";

        print "<br>";
      }

      print '<br>';
      $vegetables = array('jerimum', 'batata', 'tomate');

      for ($a = 0; $a < count($vegetables); $a++) {
        print 'Hoje vou cozinhar ' . $vegetables[$a] . '<br>';
      }

      print '<br>Nº de vegetais disponíveis: ' . count($vegetables) . '<br>';

      $vegetables[count($vegetables)] = 'cenoura';
      var_dump($vegetables);

			$vegetables = array(
				'jerimum'=>'https://tinyurl.com/ecx7rkut',
				'batata'=>'https://tinyurl.com/46mnxet4',
				'tomate'=>'https://tinyurl.com/3va9pbra'
			);

			print '<br>';
			$estoqueCarros = array(
				array('Palio', 10, 125),
				array('Gol', 15, 200),
				array('Civic', 4, 38)
			);

			print 'Temos: ' . $estoqueCarros[0][1] . ' ' . $estoqueCarros[0][0] . '<br> Vendidos: ' . $estoqueCarros[0][2];

			foreach($vegetables as $key=>$value) {
				print 'Hoje vou cozinhar ' . $key . "<img src=\"$value\"><br>";
			}
	
			print "<br><button onclick='increase()'>Clique aqui!</button>";
			print "<span>Valor:</span> <span id='value'>1</span>";

			print "<br>";
			print_r($GLOBALS);
			print "<br>";
			print_r($_SERVER);
		?>

		<form method="POST" action="index.php">
			<p>Nome: <input type="text" name="nome"/></p>
			<p><input type="submit"/></p>			
		</form>

		<?php
			if (empty($_POST["nome"])) {
				print "Nome é um campo obrigatório!";
			} else print $_POST['nome'] . ', obrigado por se inscrever!';
		?>

		<form method="GET" action="index.php">
			<p>Nome: <input type="text" name="nome"/></p>
			<p><input type="submit"/></p>			
		</form>

		<?php
			if (empty($_GET['nome'])) {
				print "Nome é um campo obrigatório!";
			} else print $_GET['nome'] . ', obrigado por se inscrever!';
		?>

		<form method="POST" action="index.php">
			<p>Nome: <input type="text" name="nome"/></p>
			<p><input type="submit"/></p>			
		</form>

		<?php
			$valor = $_POST["nome"];
			$valor = sqrt($valor);
			print "A resposta é $valor";
		?>

		<?php
			date_default_timezone_set('America/Sao_Paulo');
	
				$date = date('d/m/Y');
				$time = date('H');
	
				if ($time < 12) {
					$msg = "Bom dia! <img src=\"https://tinyurl.com/9mfmyems\"/>";
				} elseif ($time > 11 && $time < 18) {
					$msg = "Bom tarde! <img src=\"https://tinyurl.com/8f52vjet\"/>";
					$msg .= ' Aceita um chá gelado?';
				} else {
					$msg = "Boa noite! <img src=\"https://tinyurl.com/raed5nve\"/>";
				}
	
				print 'Olá! ' . $msg;
	
				$handle = fopen('./pt_BR.dic', "r");
	
				if ($handle) {
					$finalArray = array(); // Create the final array
					while (($line = fgets($handle))) {
						$arrayLine = explode("/", $line); // Get the line/word without slashs
						$arrayLine[0] = str_replace(".", "", trim($arrayLine[0])); // Take the dots out of the end of the words
						
						if (strlen($arrayLine[0]) == 5) { // Just five-letters-long words will pass
							if (!is_numeric($arrayLine[0])) { // Just non-numeric will pass
								if (!ctype_upper($arrayLine[0])) {
									$finalArray[] = strtolower($arrayLine[0]); // Add the word to the final array	
								}
							}
							//print utf8_encode($arrayLine[0]) . '<br>';	
						}
					}
					
					$wordIndex = array_rand($finalArray, 1); // Get a random index of words
					$word = utf8_encode($finalArray[$wordIndex]); // Identify the word according to the index
					
					print $word;
				}
	
				fclose($handle);

			function listaSoma() {
				if (func_num_args() = 0) {
					return false;
				} else {
					$count = 0;
					for ($i = 0; $i < func_num_args(); $i++)
				}
			}

			require('mathfunc.php');
			include('header.html');

			echo '<h1> Olá </h1>';
			echo '<h2>' . multiplica(2, 4) . '</h2>'; 

			include('footer.html');
		?>

		<script>
			function increase() {
				console.log('Haha')
				let value = Number(document.querySelector('#value').innerHTML)
				
				let final = value + 1
				value.innerHTML = final
			}
		</script>
  </body>
</html>
