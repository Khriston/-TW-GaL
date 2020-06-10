    <?php
		include 'connect.php';
		$db = OpenCon();
		$id = $_REQUEST["id"];
		$query = "SELECT * FROM users where id='".$id."'";
		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_array($result);
		print '<br>';
		print '<textarea  rows="4" cols="70">';
		print 'Backgammon score: ' . htmlentities($row[4], ENT_QUOTES). ', ' ;
		print 'Tic-Tac-Toe score: ' . htmlentities($row[5], ENT_QUOTES). ', ' ;
		print 'Draughts score: ' . htmlentities($row[6], ENT_QUOTES) ;
		print '</textarea>';
?>