<!DOCTYPE html>

<head lang="en-US">
	<title>Backgammon</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Iacob Constantin-Cristian, Gradinariu Tudor"/>
	<meta name="description" content="A website meant for new players into learning the game of Backgammon"/>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
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

	<main>
		<section class="slideshow-container">
			<div id="slide">
				<h2>Time to learn.</h2>
				<img src="imagesB/slide1.jpg"/>
			</div>
		</section>

		<aside>
		</aside>
	</main>

	<?php
		include("Footer.php");
	?>
	<!-- Page ought to load fully before we attempt any dynamic modifications -->
	<script src="script.js" type="text/javascript"></script>
</body>

</html>
