<!DOCTYPE html>

<head>
	<head lang="en-US">
	<title>Backgammon</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width-device-width, initial-scale=1.0"/>
	<meta name="author" content="Iacob Constantin-Cristian, Gradinariu Tudor"/>
	<meta name="description" content="A brief history of the game."/>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
	<link rel="stylesheet" href="aboutstylesheet.css" type="text/css"/>
	<link rel="stylesheet" href="style.css" type="text/css"/>

</head>
<?php
		session_start();
		if(isset($_SESSION['id'])){
			echo '<script src="notifications.js"></script>';
		}
	?>

<body>

	<?php 
        include("Header.php"); 
        include("Navbar.php");
    ?>

	<h2>Trivia game:</h2>
	<div id="page-wrap">

		<h1>Your score:</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "B") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5 == "A") { $totalCorrect++; }
            
 
            include '../connect.php';

			
			if(isset($_SESSION['id']) && isset($_SESSION['user'])){	
				$db = OpenCon();
                $id = $_SESSION['id'];
                $user = $_SESSION['user'];
				$query = "UPDATE users SET ScoreD='$totalCorrect' where id='$id' and name='$user'";
				mysqli_query($db, $query);
            }
			
			echo "<div id='results'>$totalCorrect / 5 correct</div>";
			
        ?>
	
	</div>
	
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