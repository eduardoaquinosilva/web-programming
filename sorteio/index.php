<html>
  <head>
    <title>PHP Test</title>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>
    <button onclick="cadastrar()">Cadastrar</button>
		<button onclick="sortear()">Sortear</button>


		<script>
			function cadastrar() {
				nome = prompt()
				jQuery.post('cadastrar.php', {nome: nome})
			}

			function sortear() {
				let nome;
				jQuery.post('sortear.php', function(response) {
					alert(response);
				});
			}
		</script>		
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script>
  </body>
</html>
