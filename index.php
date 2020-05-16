<!DOCTYPE html>
<html lang="en-US">

<head lang="en-US">
	<title>Backgammon</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="author" content="Iacob Constantin-Cristian, Gradinariu Tudor"/>
	<meta name="description" content="A website meant for new players into learning the game of Backgammon"/>
	<!-- Icon obtained from: https://www.isw-online.de/praesident-trump-vs-privacy-shield/  -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="stylesheet.css" type="text/css"/>

<body>
<?php
	include("Header.php");
	include("Navbar.php");
	?>

	<main>
		<section class="slideshow-container">
			<!-- Image source: https://www.telindus.nl/mircosegmentatie-software-defined-datacenter/ -->
			<div id="slide">
				<h2>Time to learn.</h2>
				<img src="images/slide_1.jpg"/>
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