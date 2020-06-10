<!DOCTYPE html>

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
			<h2>Equipement:</h2>
			
			<p>The game of Draughts is played on a standard Chess board 64 black and white chequered squares. Each player has 12 pieces normally in the form of fat round counters. The real shades of the pieces and the board do not necessarily need to be black and white but they are normally referred to as black and white, regardless. The board is placed between the two opponents so that the near right-hand corner square is white for both players (in the same way as for Chess).<br></p>
				<img src="imagesD/rl1.jpg" style="max-width:100%;"/>
			<h2>To start</h2>
			<p>Draughts is played on a 64 square chess board. Take 12 counters of one colour and place one on each of the black squares in the first 3 rows of your side. Your opponent does the same.<br></p>
			<h2>To play</h2>
			<p>The object of the game is to capture all of your opponent's pieces or block them so they cannot be moved. Pieces are always moved diagonally, 1 square at a time, towards the opponent's side of the board. You play the entire game on the black squares, you do not need the white ones.<br></p>
			<h2>Capturing</h2>
			<p>You can capture an enemy piece by hopping over it. Capturing is also done on the diagonal. You have to jump from the square directly next to your target and land on the square just beyond it. Your landing square must be vacant. The piece captured is removed from the board. If you are able to make a move that results in a capture then you must.<br></p>
			<img src="imagesD/rl2.jpg" style="max-width:100%;"/>
			<h2>Multiple Captures</h2>
			<p>It is legal to capture more than 1 piece on a single move so long as the jumping piece has vacant landing spots in between. You cannot take 2 in a row you must land and "take off" again. The pieces are removed. If you are able to make a move that results in a capture then you must.<br></p>
			<h2>Kings</h2>
			<p>If you can get a piece all the way to the other side of the board, that piece becomes a king. Place a previously captured piece on top of the existing one in order to distinguish it from your other pieces. This piece can move backwards or forwards diagonally. Towards the end of the game all the pieces will be Kings, which changes the strategy significantly.<br></p>
					<img src="imagesD/rl3.jpg" style="max-width:100%;"/>
			<h2>To win</h2>
			<p>Capture all your opponents pieces.<br></p>
	</main>

	<?php
		include("Footer.php");
	?>
</body>

</html>