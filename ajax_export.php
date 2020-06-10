    <?php
		include 'connect.php';
		$db = OpenCon();
		$id = $_SESSION['id'];
		$query = "SELECT * FROM users where id='".$id."'";
		$result = mysqli_query($db, $query);
		
?>