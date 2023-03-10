<?php
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
		
		//print $word;
		file_put_contents('word.txt', $word);
		header("Location: index.php");
	}

	fclose($handle);
