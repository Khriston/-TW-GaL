<!DOCTYPE html>
<html lang="en-US">

<head lang="en-US">
	<title>Security Alerter</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="author" content="Reftu Paul Alexandru, Ruse Daniel Stefan, Popescu Flavius-Petru"/>
	<meta name="description" content="Detailed information about this site."/>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
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
		<section class="facilities">
		Don't hesitate to contact us at:
		<ul>
		<li><i>constantin.iacob@info.uaic.ro</i>, +407phonenumber - <b>Iacob Constantin-Cristian</b></li>
		<li><i>tudor.gradinariu@info,uaic.ro</i>, +407phonenumber - <b>Gradinariu Tudor</b></li>
		</ul>
		</section>

		<aside>
		</aside>
	</main>
	

	<?php
		include("Footer.php");
	?>
</body>

</html>