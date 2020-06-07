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
	</div>
	<div class="top">
	<h1>Insert</h1>
	</div>
    <main class="lmain">
			<form class="login" method="post"> 
				<div id=updateId>
					<label >Id:</label>
					<input type="text" required placeholder="Id" name="updateId" />
				</div>
				<br>
				<div id=updateName>
					<label >Name:</label>
					<input type="text" required placeholder="Name" name="updateName"/>
				</div>
				<div id=updatePassword>
					<label >Password:</label>
					<input type="password" required placeholder="Password" name="updatePassword"/>
				</div>
				<div id=updateEmail>
					<label >Email:</label>
					<input type="email" required placeholder="Email" name="updateEmail"/>
				</div>

				<button type="submit" id="update">Update</button>
			</form>
		</div>
    </main>

    <?php
		include 'connect.php';
		$db = OpenCon();
		if(issset($_POST['updateId']) && isset($_POST['updateId']) && isset($_POST['updateName']) && isset($_POST['updatePassword']) && isset($_POST['updateEmail'])){
			$id = $_POST['updateId'];
            $name = $_POST['updateName'];
			$password = $_POST['updatePassword'];
			$email = $_POST['updateEmail'];
			$query = "INSERT INTO backgammon (ID,Name,PAssword,Email,Score,rights) VALUES (NULL,".$name.",".$password.",".$email.")";
			mysqli_query($db, $query);
			}
			else{
				$message = "Delete failed!\nNot all necessary information provided!";
                echo '<div style="text-align: center;
                    margin-top: 5%;font-weight: bold;font-size:30px;color: red">
                    Delete failed!<br>Not all necessary information provided!</div>';
			}
        include("Footer.php");
    ?>
</body>


</html>
