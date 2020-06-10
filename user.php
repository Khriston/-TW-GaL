<!DOCTYPE html>
<html lang="en-US">

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
	

	<?php
		include 'connect.php';
		$db = OpenCon();
		$id = $_SESSION['id'];
		$query = "SELECT * FROM users where id='".$id."'";
		$result = $db->query($query);
		
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			echo "<h2>Name: ".$row["ID"].". ".$row["Name"]."";
			echo "<br>";
			echo "Email adress: ".$row["Email"]."";
			echo "<br>";
			print  '<button type="button" onclick="exports()">Export</button>';
		}
		include("Footer.php");
	?>
</body>

</html>