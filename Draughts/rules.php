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
			
			<p>The game is played by two players each, with fifteen checkers of his own color.

Each player also has their own pair of dice and dice cup.

A doubling cube with the numbers 2, 4, 8, 16, 32, 64 is used for tracking the stakes of the round.

The board consists of 24 long triangles called points or pips. The triangles alternate in color and are divided into four quadrants of six triangles each. The four quadrants are the player’s home board and outer board, and the opponent’s home board and outer board. The home boards and outer boards are separated by a divider down the middle referred to as the bar. The starting positions of the pieces are arranged as shown below.<br></p>
				<img src="imagesD/rl1.jpg" style="max-width:100%;"/>
			<h2>Gameplay</h2>
			<p>To start the game, each player rolls a single die and the player with the higher number moves first using both numbers rolled. If both players roll the same number, the dice are rolled again until they roll different numbers. The players then alternate turns, rolling two dice at the beginning of each turn. The dice must always be rolled together and land flat on the right hand side of the game board. If it lands outside or on a checker the dice must be rolled again.<br></p>
				<img src="imagesD/rl2.jpg" style="max-width:100%;"/>
				<img src="imagesD/rl3.jpg" style="max-width:100%;"/>
			<h2>Moving</h2>
			<p>The dice roll determines how many points the player is supposed to move its checker. The checker always moves forward following the horseshoe path towards the player’s home board.
A point that is not occupied by two or more opposing checkers is an open point. When moving a checker it may land only on an open point.
The two dice constitute two separate movements. For example, if a player rolls a 6 and a 4, he may move one checker 6 spaces to an open point and another checker 4 spaces to an open point.<br></p>
				<img src="imagesD/rl4.jpg" style="max-width:100%;"/>
			<p>The player may also choose to move the same checker twice, as long as each move is on to an open point.<br></p>
				<img src="imagesD/rl5.jpg" style="max-width:100%;"/>
			<p>When a double is rolled the numbers on the dice are played twice. For example, if a player rolls two fives, he may move his checkers five points, four times in any combination landing on open points.
A player must move both numbers rolled if possible (four numbers if a double is rolled). If only one of the numbers can be played because only one open point is available, the player must play that number. If either number can be played but not both, then the larger number must be played. If neither number can be played then the player loses his turn. If a player cannot play all four numbers in the case of a double, the player must play as many numbers as possible.<br></p>
			<h2>Hitting</h2>
			<p>An open point containing one opposing checker is a blot. When a checker is moved onto a blot, the blot is hit, and the opposing checker that has been hit is placed on the bar.

When a player has one or more checkers on the bar he must first re-enter them onto the opponent’s home board. A checker enters by rolling two dice and moving it to the corresponding point of one of the numbers on the opponent’s home board.<br></p>
			<img src="imagesD/rl6.jpg" style="max-width:100%;"/>
			<p>If the checker(s) on the bar cannot enter into an open point, the player loses his turn and the checker(s) remains on the bar. A player cannot move any other piece until all his checkers are off the bar. If a player is able to enter some but not all of his checkers off the bar, his turn is finished. If a player’s checker(s) have been moved off the bar, any unused number must be played.<br></p>
			<h2>Bearing off</h2>
			<p>When all of a player’s checkers are in his home board, he can begin a process of removing them called bearing off. This is done by rolling a number corresponding to a point with a checker residing on it.

If no checker can bear off with the number(s) rolled, the player must make a legal move(s) with a checker(s) from a higher point.<br></p>
			<img src="imagesD/rl7.jpg" style="max-width:100%;"/>
			<p>If there are no checkers on higher number points, then the player bears off with a checker from the next highest point.<br></p>
			<img src="imagesD/rl8.jpg" style="max-width:100%;"/>
			<h2>Doubling</h2>
			<p>A doubling cube is used to increase the stakes at any point in the game. At the start of the game, the doubling cube is placed on the bar with 64 facing upwards. Before the roll on a player’s turn, that player may propose to double the current stakes. The opponent either accepts (takes) the doubled stakes or resigns (drops) and loses the match and the current stakes. If the opponent takes he becomes the owner of the cube and the cube is turned over so that 2 is facing upwards. Thereafter only the owner of the cube has the right to propose to double the stakes again (redouble). If the opponent takes, the ownership of the cube is passed over to him and this process can continue on from 4 to 8 and onwards. There are no limits to redoubles even though the highest number on the cube is 64.<br></p>
			<h2>Gammon and Backgammon</h2>
			<p>At the end of the game, if a person has borne off all fifteen of his checkers and the opponent has borne off at least one checker, that person wins the current stake. If the opponent has not borne off any checkers, then the opponent loses a gammon and loses double the current stakes. If the opponent has not borne off any checkers and still has one or more checkers on the bar, the opponent loses a backgammon and loses triple the current stakes.<br></p>
			<h2>Additional</h2>
			<p>Depending on the region or players additional rules or alternate ones can be used while playing</p>
	</main>

	<?php
		include("Footer.php");
	?>
</body>

</html>
