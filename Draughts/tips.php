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
				<p>1. Control the Center.</p>
				<p>2. Checkers Is Not a Game That Can Be Won by Playing Defensively.</p>
				<p>3. Your Goal Should Be Getting a Checker to the End of the Board.</p>
				<p>4. Advance en Masse.</p>
				<p>5. Be Willing to Sacrifice a Checker If Necessary.</p>
				<p>6. Use Forced Moves to Your Advantage.</p>
				<p>7. Leave Your Home Row Checkers Until You Need Them.</p>
				<p>8. Trade Pieces When You Are Ahead.</p>
				<p>9. Watch for Kings in the Endgame.</p>
				<p>10. Finally, Remember the Blocking Option.</p>
			</l>
		<img src="imagesD/tips.jpg" width="600" height="400" style="max-width:100%;"/>
			
	</main>

	<?php
		include("Footer.php");
	?>
</body>

</html>
