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
			
			<p>Checkers or draughts is the name of several different board games. All of these games are similar. In every kind of checkers, the other player’s pieces can be taken by being “jumped” over. “Checkers” is the American name. In British English, and in various other English-speaking nations, these games are called “Draughts“<br></p>
			<h3>Sculpture of egiptians playng an older form of checkers.</h3>
				<img src="imagesD/hist1.jpg" width="600" height="400" style="max-width:100%;"/>
			<p>Though most people do not know it, the game we know today as Draughts has a long and storied history. From ancient Egypt to your own living room, Draughts has remained a popular pastime for most of recorded history.<br></p>
			<h3>Oficial match of Draughts</h3>
				<img src="imagesD/hist2.jpg" width="600" height="400" style="max-width:100%;"/> 
			<p>Historians place the invention of “modern” Draughts in the 12th century CE, when someone, somewhere (probably in the south of France) combined the rules and pieces of Alquerque with the 8×8 grid of a common chessboard. They called the game Fierges, and the pieces “ferses,” the same name given to the queen in Chess; at that time the queen moved like a Fierges piece, one space at a time. Later, Ferses also became a name for the game, and by the 15th century both Fierges and Ferses had been replaced by the name Jeu De Dames, or simply Dames.<br></p>
			<h3>Mauritanian checkers</h3>
				<img src="imagesD/hist3.jpg" width="600" height="400" style="max-width:100%;"/>
			
	</main>

	<?php
		include("Footer.php");
	?>
</body>

</html>
