    <?php
		include 'connect.php';
		$db = OpenCon();
		$id = $_REQUEST["id"];
		$query = "SELECT * FROM users where id='".$id."'";
		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_array($result);

		print '<h3>Backgammon score: ' . htmlentities($row[4], ENT_QUOTES) . '</h3>';
		print '<h3>Tic-Tac-Toe score: ' . htmlentities($row[5], ENT_QUOTES) . '</h3>';
		print '<h3>Draughts score: ' . htmlentities($row[6], ENT_QUOTES) . '</h3>';
?>