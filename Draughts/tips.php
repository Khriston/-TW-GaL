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
		<h2>Ofthen made mistakes:</h2>
			<l>
				<p>1. Running from the rear when behind in a race.</p>
				<p>2. Candlestick making (stacking checkers on few points and general inflexible play)</p>
				<p>3. Relinquishing key points to early. (5 point)</p>
				<p>4. Doubling decisions how to evaluate a position etc.</p>
				<p>5. Understanding safe vs bold play.</p>
				<p>6. Filling holes instead of bearing-off men.</p>
				<p>7. Hitting men just because you can.</p>
				<p>8. Bearing-off incorrectly against opposition, either an anchor or on the bar.</p>
				<p>9. Playing ultra-safe, especially in the opening.</p>
				<p>10. Not Minimizing shots when it would be dangerous to be hit.</p>
			</l>
		<img src="imagesD/tips.jpg" width="600" height="400" style="max-width:100%;"/>
			
	</main>

	<?php
		include("Footer.php");
	?>
</body>

</html>
