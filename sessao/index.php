<?php
	session_start();
	$_SESSION['hits'] = $_SESSION['hits'] + 1;
?>

<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
		<?php
			$_SESSSION['hits'] = 0;
			print 'Essa página foi visualizada ' . $_SESSION['hits'] . ' vezes';
		?>
  </body>
</html>
