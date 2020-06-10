<!DOCTYPE html>
<html lang="en-US">

<head lang="en-US">
	<title>Tic-Tac-Toe</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width-device-width, initial-scale=1.0"/>
	<meta name="author" content="Iacob Constantin-Cristian, Gradinariu Tudor"/>
	<meta name="description" content="A brief history of the game."/>
	<link rel="shortcut icon" href="imagesT/favicon.ico" type="image/x-icon"/>
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
			
			<p>Games played on three-in-a-row boards can be traced back to ancient Egypt, where such game boards have been found on roofing tiles dating from around 1300 BCE.</p>
				<h3>Three children playing an alternate version of Tic-Tac-Toe in 1884.</h3>
				<img src="imagesT/hist1.jpg" width="600" height="400" style="max-width:100%;"/>
			<p>An early variation of tic-tac-toe was played in the Roman Empire, around the first century BC. It was called terni lapilli (three pebbles at a time) and instead of having any number of pieces, each player only had three, thus they had to move them around to empty spaces to keep playing. The game's grid markings have been found chalked all over Rome. Another closely related ancient game is three men's morris which is also played on a simple grid and requires three pieces in a row to finish, and Picaria, a game of the Puebloans.<br></p>
			<h3>Engraving at Chichen Itza, Mexico.</h3>
				<img src="imagesT/hist2.jpg" width="600" height="400" style="max-width:100%;"/> 
			<p>The different names of the game are more recent. The first print reference to "noughts and crosses" (nought being an alternative word for zero), the British name, appeared in 1858, in an issue of Notes and Queries. The first print reference to a game called "tick-tack-toe" occurred in 1884, but referred to "a children's game played on a slate, consisting in trying with the eyes shut to bring the pencil down on one of the numbers of a set, the number hit being scored". "Tic-tac-toe" may also derive from "tick-tack", the name of an old version of backgammon first described in 1558. The US renaming of "noughts and crosses" as "tic-tac-toe" occurred in the 20th century.<br></p>
			<h3>Another engraving at Chichen Itza.</h3>
				<img src="imagesT/hist3.jpg" width="600" height="400" style="max-width:100%;"/>
			<p>In 1952, OXO (or Noughts and Crosses), developed by British computer scientist Sandy Douglas for the EDSAC computer at the University of Cambridge, became one of the first known video games. The computer player could play perfect games of tic-tac-toe against a human opponent.<br></p>
			<h3>An alternate version of the game played by the romans.</h2>
				<img src="imagesT/hist4.jpg" width="600" height="400" style="max-width:100%;"/>
			<p>In 1975, tic-tac-toe was also used by MIT students to demonstrate the computational power of Tinkertoy elements. The Tinkertoy computer, made out of (almost) only Tinkertoys, is able to play tic-tac-toe perfectly. It is currently on display at the Museum of Science, Boston.<br></p>
	</main>

	<?php
		include("Footer.php");
	?>
</body>

</html>