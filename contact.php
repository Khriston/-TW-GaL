<!DOCTYPE html>

<head lang="en-US">
	<title>GameIT</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="author" content="Iacob Constantin-Cristian, Gradinariu Tudor"/>
	<meta name="description" content="Detailed information about this site."/>
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
		<section class="paragraphs">
		Don't hesitate to contact us at:
		<ul>
		<li><i>constantin.iacob@info.uaic.ro</i>, +407phonenumber - <b>Iacob Constantin-Cristian</b></li>
		<li><i>tudor.gradinariu@info,uaic.ro</i>, +407phonenumber - <b>Gradinariu Tudor</b></li>
		</ul>
		
		<h3> The arhitecture:</h3>
		<img src="images/arhitectura.jpg"/>
		</section>
		<aside>
		</aside>
	</main>
	

	<?php
		include("Footer.php");
	?>
</body>

</html>