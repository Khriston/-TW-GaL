<!DOCTYPE html>
<html lang="en-US">

<head lang="en-US">
	<title>Backgammon</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width-device-width, initial-scale=1.0"/>
	<meta name="author" content="Iacob Constantin-Cristian, Gradinariu Tudor"/>
	<meta name="description" content="A brief history of the game."/>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="stylesheet.css" type="text/css" />
	
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

	<main class="quiz">
		<h1>Backgaquiz:</h1>

	<div id="page-wrap">

		<h2>Test yout knowledge!</h2>
		
		<button type="button" onclick="loadDif1()">Difficulty 1</button>
		<button type="button" onclick="loadDif2()">Difficulty 2</button>
	
	</div>
	
	<script>
	function loadDif1() {
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		  document.getElementById("page-wrap").innerHTML =
		  this.responseText;
		}
	  };
	  xhttp.open("GET", "ajax_dif1.php", true);
	  xhttp.send();
	}
	</script>
		
	<script>
	function loadDif2() {
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		  document.getElementById("page-wrap").innerHTML =
		  this.responseText;
		}
	  };
	  xhttp.open("GET", "ajax_dif2.php", true);
	  xhttp.send();
	}
	</script>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

	<?php
		include("Footer.php");
	?>
</body>

</html>