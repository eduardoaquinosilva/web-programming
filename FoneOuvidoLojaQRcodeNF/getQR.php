<?php
	// Obtém a URL da imagem do QRcode
	// Exemplo:
	extract($_POST);
	$url = urlencode('https://foneouvidolojaqrcodenf.eduardoaquino1.repl.co/invoice.php?pFinal=' . $pFinal);
    print "<img src=\"https://qrickit.com/api/qr.php?d=$url\">";
	// Faz o echo ou print da imagem com a tag HTML <img>
	// SRC da <img>: https://qrickit.com/api/qr.php?d=$url
?>
