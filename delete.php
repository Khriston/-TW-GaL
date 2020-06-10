<!DOCTYPE HTML>
<head lang="en-US">
	<title>users</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Iacob Constantin-Cristian, Gradinariu Tudor"/>
	<meta name="description" content="A website meant for new players into learning the game of users"/>
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
	</div>
	<div class="top">
	<h1>Update Entry</h1>
	</div>
    <main class="lmain">
			<form class="login" method="post"> 
				<div id=updateId>
					<label >Id:</label>
					<input type="text" required placeholder="Id where you want to delete" name="id" />
				</div>
				
				<button type="submit" id="delete">Delete</button>
			</form>
		</div>
    </main>

	<?php 
		include 'connect.php';
		$db = OpenCon();
		if(isset($_POST['id'])){
		$id = $_POST['id'];
		$query = "DELET FROM users where Id = '".$id."'";
		mysqli_query($db, $query);
		}
        include("Footer.php");
    ?>
</body>


</html>
