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
		<h2>How to win most of the time:</h2>
			<l>
				<h3>A few simple strategies can make you a master at tic tac toe.</h3>
<p>Every product is independently selected by our editors. If you buy something through our links, we may earn an affiliate commission.</p>

<p>Tic tac toe is a classic game. It can be played virtually anywhere and on anything, from a bar napkin to a computer screen to a chic wooden set.</p>

<p>However, while the game may appear simple, that is deceptive. How to win tic tac toe requires strategic thinking and planning to win the game or force a draw. To do this, however, there are certain strategies you need to master. Another deceptive game? Rock, paper, scissor—here’s how to win every time.</p>

<h3>How to win tic tac toe when you go first</h3>
<p>When you’re the first one up, there is a simple strategy on how to win tic tac toe: put your ‘X’ in any corner. This move will pretty much send you to the winner’s circle every time, so long as your opponent doesn’t put their first ‘O’ in the center box. This can make it harder to win, but it can happen.</p>

<h3>How to win tic tac toe when you go second</h3>
<p>If you’re the second to go, it may be harder to win the game. If your opponent takes the center space, counteract that by placing your letter in a corner. If your opponent takes a corner space, take the middle space. This will force a draw in both cases. Winning is almost impossible unless a major mistake is made by your opponent.</p>

<p>But, if your opponent starts on an edge that is not a corner, you can win. There is an exact science on how to win tic tac toe if this is the case: Put your first letter in the center. You can only claim victory if your opponent puts their letter on the other edge. If not, you will have to settle for a draw.</p>

<h3>How to win tic tac toe every time</h3>
<p>It’s actually difficult to win at tic tac toe every time. While the board is small, there are many variables that depend on the opponent’s placement. Playing the more advanced game of Scrabble? These 30 words can help you win every time.</p>

<h3>Does it matter if you’re “X” or “O”?</h3>
<p>Whether you’re first up or the second one to go, how to win tic tac toe doesn’t depend on your sequence. So, no, it doesn’t matter if you’re the “X” or the “O,” but it does matter where you play your letters.</p>

<h3>What if the center is taken?</h3>
<p>There is still a possibility of winning the game if the center box has been taken. One way is to simply wait for your opponent to make a mistake and capitalize on that. However, if possible, occupy two opposing corners. This can allow you to win if your opponent places their letter in another corner.</p>

<h3>Symmetry is your friend</h3>
<p>If you’re not sure what the next move is, experts point out that symmetry is always the best bet, so when contemplating a move, look for the one that will make the board as symmetrical as possible. Not only will it make your board look nice, but it will also block your opponent from being able to run away with a victory.</p>

<h3>Is a tie as good as a win?</h3>
<p>While a straight-up win may feel more satisfying, being able to force a draw requires skill and strategy. If your opponent takes the middle square with an “X” or “O, ” the next move to ensure a tie is to place your letter in any of the corners. This way, there is no move that will allow them to win.</p>
		<img src="imagesT/tips.jpg" width="600" height="400" style="max-width:100%;"/>
			
	</main>

	<?php
		include("Footer.php");
	?>
</body>

</html>