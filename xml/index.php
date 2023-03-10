<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
		<!--<animal>
			<tipo id="8">cachorro</tipo>
			<nome>caramelo</nome>
		</animal>-->
		
    <?php
			/*$xml = '<animal>
								<tipo>cachorro</tipo>
								<nome>caramelo</nome>
							</animal>';
			$xml_object = simplexml_load_string($xml);

			foreach ($xml_object as $element => $value) {
				print $element . ': ' . $value . '<br/>';
			}*/
		?>

		<?php
			/*$xml = '<animais>
								<cachorro>
									<nome>caramelo</nome>
 									<cor>marrom</cor>
								</cachorro>
								<gato>
									<nome>max</nome>
									<cor>branco</cor>
								</gato>
								<cachorro>
									<nome>bidu</nome>
									<cor>marrom</cor>
								</cachorro>
							</animais>';
			$xml_object = simplexml_load_string($xml);

			foreach ($xml_object->cachorro as $cachorro) {
				print $cachorro->nome . '<br/>';
			}*/
		?>

		<?php
			$document = simplexml_load_file("books.xml");
			foreach ($document->book as $book) {
				print $book->title . '<br/>';
			}

			foreach ($document->children() as $book) {
				$book->title = "New Title";
			}

			file_put_contents("books2.xml", $document->asXml());

			$document = simplexml_load_file("books2.xml");
			foreach ($document->book as $book) {
				print $book->title . '<br/>';
			}
		?>
  </body>
</html>
