<?php
	/*
		Grupo:
			Beatriz Guedes
			Eduardo Aquino
			Emilio Nelson
			Gilberto Duarte
			Thafine Jennifer
	*/

	session_start();
	include('functions.php');
	loadCards();

	$card1 = $_SESSION['cards'][0];
?>

<!doctype html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
	    <title>Flashcards</title>
	    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css">
	    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/grids-responsive-min.css">
	    <link rel="stylesheet" href="styles.css">
	    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
	    <script src='https://cdn.rawgit.com/admsev/jquery-play-sound/master/jquery.playSound.js'></script>
	    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	    <script type="text/javascript" src="flashcards.js"></script>

			<script type="text/javascript">
      	google.charts.load('current', {'packages':['gauge']});
	      google.charts.setOnLoadCallback(drawChart);
	
	      function drawChart() {
	
	        var data = google.visualization.arrayToDataTable([
	          ['Label', 'Value'],
	          ['Score', 80]
	        ]);
	
	        var options = {
	          width: 200, height: 120,
	          redFrom: 0, redTo: 59,
	          yellowFrom: 60, yellowTo: 79,
						greenFrom: 80, greenTo: 100,
	          minorTicks: 5
	        };
	
	        var chart = new google.visualization.Gauge(document.getElementById('score'));
	
	        chart.draw(data, options);
	
	        setInterval(function() {
						jQuery.post('getScore.php', function(pontos) {
							data.setValue(0, 1, pontos);
	        		chart.draw(data, options);
						})
	        }, 1000);
	      }
    	</script>
	</head>
	
	<body>
		<div id="layout" class="pure-g">
		    <div class="sidebar pure-u-1 pure-u-md-1-4">
		        <div class="header">
		            <nav class="nav">
		                <ul class="nav-list">
		                    <li class="nav-item">
		                        <a class="pure-button" href="index.php">Reset</a>
		                    </li>
		                </ul>
		            </nav>
		        </div>
		    </div>
		
		    <div class="content pure-u-1 pure-u-md-3-4">
		        <div>
		            <!-- A wrapper for all the blog posts -->
		            <div class="posts">
		                <!-- A single blog post -->
		                <section class="post">
												<div id="score" style="margin-left:px; width:200px; height: 120px;"></div>
		                    <header class="post-header">
		                        <h2 class="post-title" id="card-text"><?php print $card1['term']; ?></h2>
		                        <img height="260" src="cards/<?php print $card1['img'] ?>" id="<?php print $card1['id']; ?>">
		                      <div class="pure-button-group" role="group" aria-label="...">
		                          <button class="pure-button" id="show">Show</button>
		                          <button class="pure-button" id="try">Try</button>
		                          <button class="pure-button" id="next">Next</button>
		                      </div>
		                    </header>
		                </section>
		            </div>
		        </div>
		    </div>
		</div>
	</body>
</html>
