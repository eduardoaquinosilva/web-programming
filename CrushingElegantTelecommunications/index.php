<html>
  <head>
    <title>PHP Test</title>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>
    <button onclick="enviar()">Qual a fruta?</button>
		<br/><br/>
		<div id="info">Fruta</div>
		<br/><br/>
		
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script>
		<script>
			function enviar() {
				nada = prompt();
				// fruta : fruta = chave : valor
				jQuery.post(('urlpost.php'), {fruta : nada }, function(data) {
					jQuery('#info').html(data)
				})
			}
		</script>
  </body>
</html>
