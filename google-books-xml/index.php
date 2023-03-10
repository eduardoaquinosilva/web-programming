<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
			require "GoogleBooksSearch.php";
			
			$search = "Detroit: Become Human";
			$searchGoogle = new GoogleBooksSearch($search, 1, 20, 'none');
			$result = $searchGoogle->getResults();
			
			if (!$result[0]) print "Nenhum livro encontrado com o tema $search.";
			
			print '<ol>';
			foreach ($result[1] as $book) {
				print '<li>';
				print "<img src='$book[5]' align='left' border='1'>";
				print "<a href='$book[6]'>$book[0]</a> ($book[2], $book[3]) <br/>$book[4]";
				if ($book[7]) print " (<a href='$book[7]'>preview</a>)";
				print "<br clear='left' /><br/>";
				print '</li>';
			}
			print '</ol>';
		?>
  </body>
</html>