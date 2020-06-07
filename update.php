<!DOCTYPE HTML>
<head lang="en-US">
	<title>GameIT</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Iacob Constantin-Cristian, Gradinariu Tudor"/>
	<meta name="description" content="A website meant for new players into learning games"/>
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
					<input type="text" required placeholder="Id where you want to update" name="updateId" />
				</div>
				<br>
				<div id=updateName>
					<label >Name:</label>
					<input type="text" required placeholder="Enter your name" name="updateName"/>
				</div>
				<div id=updatePassword>
					<label >Password:</label>
					<input type="password" required placeholder="Enter your password" name="updatePassword"/>
				</div>
				<div id=updateEmail>
					<label >Email:</label>
					<input type="email" required placeholder="Enter your email" name="updateEmail"/>
				</div>
				<div id=updateScore>
					<label >Score:</label>
					<input type="text" required placeholder="Enter your score" name="updateScore"/>
				</div>

				<button type="submit" id="update">Update</button>
			</form>
		</div>
    </main>

    <?php
		include 'connect.php';
		$db = OpenCon();
		if(isset($_POST['updateId']))
			$id = $_POST['updateId'];
		if(isset($_POST['updateName'])){
            $name = $_POST['updateName'];
			$query = "UPDATE backgammon SET Name = '".$name."' where Id = '".$id."'";
			mysqli_query($db, $query);
			}
		if(isset($_POST['updatePassword'])){
			$password = $_POST['updatePassword'];
			$query = "UPDATE backgammon SET Password = '".$password."'  where Id='".$id."'";
			mysqli_query($db, $query);
			}
		if(isset($_POST['updateEmail'])){
			$email = $_POST['updateEmail'];
			$query = "UPDATE backgammon SET Email = '".$email."'  where Id='".$id."'";
			mysqli_query($db, $query);
			}
		if(isset($_POST['updateScore'])){
			$score = $_POST['updateScore'];
			$query = "UPDATE backgammon SET Score = '".$score."'  where Id='".$id."'";
			mysqli_query($db, $query);
			}
			
        include("Footer.php");
    ?>
</body>


</html>
