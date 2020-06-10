<!DOCTYPE html>
<html lang="en-US">

<head lang="en-US">
	<title>Draughts</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width-device-width, initial-scale=1.0"/>
	<meta name="author" content="Iacob Constantin-Cristian, Gradinariu Tudor"/>
	<meta name="description" content="A brief history of the game."/>
	<link rel="shortcut icon" href="imagesD/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
	<link rel="stylesheet" href="aboutstylesheet.css" type="text/css"/>

	<?php
		session_start();
		if(isset($_SESSION['id'])){
			echo '<script src="notifications.js"></script>';
		}
	?>
</head>

<body>
	<?php 
        include("Header.php"); 
        include("Navbar.php");
    ?>

	<main class="paragraphs">
			<h1>History of the game:</h1>
			
			<p>Backgammon is one of the oldest known board games. Its history can be traced back nearly 5,000 years to archeological discoveries in Mesopotamia.<br></p>
			<h3>Backgammon set from around the 10th century, China.</h3>
				<img src="images/hist1.jpg" width="600" height="400" style="max-width:100%;"/>
			<p>Remains of a board game from 3000 BC were found at Shahr-e Sukhteh in Iran. The artifacts included two dice and 60 checkers, and the set is believed to be 100 to 200 years older than the Royal Game of Ur. <br></p>
			<h3>A game of τάβλη (tabula) played by Byzantine Emperor Zeno in 480.</h3>
				<img src="images/hist2.jpg" width="600" height="400" style="max-width:100%;"/> 
			<p>The game can be traced back nearly 5,000 years to its origins in Mesopotamia (modern-day Iraq). <br></p>
			<h3>Roman Ludus duodecim scriptorum board from the 2nd century, Aphrodisias.</h3>
				<img src="images/hist3.jpg" width="600" height="400" style="max-width:100%;"/>
			<p>Tάβλη (tavli) meaning "table" or "board" in Byzantine Greek, is the oldest game with rules known to be nearly identical to backgammon; it is described in an epigram of Byzantine Emperor Zeno (AD 476–491).<br></p>
			<h3>Medieval players, from the 13th century Carmina Burana.</h2>
				<img src="images/hist4.jpg" width="600" height="400" style="max-width:100%;"/>
			<p>The jeux de tables (Games of Tables), predecessors of modern backgammon, first appeared in France during the 11th century and became a favorite pastime of gamblers.<br></p>
			<h3>A backgammon board retrieved from a sunken ship from the 1600s.</h3>
				<img src="images/hist5.jpg" width="600" height="400" style="max-width:100%;"/>
	</main>

	<?php
		include("Footer.php");
	?>
</body>

</html>