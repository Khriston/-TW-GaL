<!DOCTYPE HTML>
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
<title> Admin Panel</title>

<?php  
					include("Navbar.php");
				?>
</head>
<link rel="stylesheet" href="stylesheet1.css" type="text/css"/>
<body>

		<div id="header">
				<img src="images/admin.png" alt="imagine">
				
				<h1> Welcome to Admin Panel</h1>
		</div>

		<div class="vertical-menu">
			<a href="logout.php">Logout</a>
		  <a class="active">Options</a>
		  <a href="update.php">Update</a>
		  <a href="delete.php">Delete</a>
		  <a href="insert.php">Insert</a>
		</div>
		<br />
</body>


</html>
