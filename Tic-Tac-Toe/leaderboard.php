<!DOCTYPE html>

<head lang="en-US">
	<title>Tic-Tac-Toe</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width-device-width, initial-scale=1.0"/>
	<meta name="author" content="Iacob Constantin-Cristian, Gradinariu Tudor"/>
	<meta name="description" content="A brief history of the game."/>
	<link rel="shortcut icon" href="imagesT/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
	<link rel="stylesheet" href="aboutstylesheet.css" type="text/css"/>

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

	<main class="rules">
		<h2>Quiz Leaderboard: <a type="application/rss+xml" href="http://localhost/master/rssfactory.php"> 
			RSS feed for this page </a></h2>
		
			
	</main>
	<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 90%;
		  margin-left:auto; 
		  margin-right:auto;
		}

		td, th {
		  border: 1px solid #dddddd;
		  text-align: center;
		  padding: 8px;
		}

		tr:nth-child(even) {
		  background-color: #dddddd;
		}
	</style>
	<?php
		include '../connect.php';
		$db = OpenCon();
		
		$query = "SELECT * FROM users order by 5 desc";
		$result =  mysqli_query($db, $query);

		if ($result->num_rows > 0) {
		  echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Score</th></tr>";
		  // output data of each row
		  while($row = mysqli_fetch_array($result)) {
			  if($row[6]!=0){
			echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td> ".$row["ScoreT"]."</td></tr>";
			  }
		  }
		  echo "</table>";
		} else {
		  echo "0 results";
		}
		include("Footer.php");
	?>
</body>

</html>