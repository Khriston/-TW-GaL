<!DOCTYPE html>
<html lang="en-US">

<head lang="en-US">
	<title>Backgammon</title>
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
			<h2>Introduction:</h2>
			<p>You probably already know how to play Tic-Tac-Toe. It's a really simple game, right? That's what most people think. But if you really wrap your brain around it, you'll discover that Tic-Tac-Toe isn't quite as simple as you think!</p>
			<h2>Equipement:</h2>
			
			<p>Pen and paper, or if you want ot be creative you can use string and some checkers, or even just a stick to draw on the ground. Your choice.<br></p>
				<img src="imagesT/rl1.jpg" style="max-width:100%;"/>
			<h2>Gameplay & Moving</h2>
			<p>1. The game is played on a grid that's 3 squares by 3 squares.

			2. You are X, your friend (or the computer in this case) is O. Players take turns putting their marks in empty squares.

			3. The first player to get 3 of her marks in a row (up, down, across, or diagonally) is the winner.	

			4. When all 9 squares are full, the game is over. If no player has 3 marks in a row, the game ends in a tie.<br></p>
				<img src="imagesT/rl2.jpg" style="max-width:100%;"/>
			<h2>Strategy</h2>
			<p>Part of your strategy is trying to figure out how to get three Xs in a row. The other part is trying to figure out how to stop the computer from getting three Os in a row.

After you put an X in a square, you start looking ahead. Where's the best place for your next X? You look at the empty squares and decide which ones are good choices—which ones might let you make three Xs in a row.

You also have to watch where the computer puts its O. That could change what you do next. If the computer gets two Os in a row, you have to put your next X in the last empty square in that row, or the computer will win. You are forced to play in a particular square or lose the game.

If you always pay attention and look ahead, you'll never lose a game of Tic-Tac-Toe. You may not win, but at least you'll tie.<br></p>
			<img src="imagesT/rl3.jpg" style="max-width:100%;"/>
	</main>

	<?php
		include("Footer.php");
	?>
</body>

</html>