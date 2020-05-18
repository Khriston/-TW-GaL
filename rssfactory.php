	<?php
		
		header("Content-Type: application/rss+xml; charset=ISO-8859-1");


		include 'connect.php';
		$db = OpenCon();
	
		$rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
		$rssfeed .= '<rss version="2.0">';
		$rssfeed .= '<channel>';
		$rssfeed .= '<title>Backgammon RSS Feed/title>';
		$rssfeed .= '<link>http://localhost/master/index.php</link>';
		$rssfeed .= '<description>This is a RSS feed for backgammon Quiz scores</description>';
		$rssfeed .= '<language>ro</language>';
		$rssfeed .= '<copyright>Copyright (C) 2020 @UAIC</copyright>';
		

		
		$query = "SELECT * FROM backgammon ORDER BY score DESC";
		$result = mysqli_query($db,$query);
		
		while($row = mysqli_fetch_array($result)) {
			extract($row);
	 
			$rssfeed .= '<item>';
			$rssfeed .= '<id>' . $ID . '</id>';
			$rssfeed .= '<name>' . $Name . '</name>';
			$rssfeed .= '<score>' . $Score . '</score>';
			$rssfeed .= '</item>';
		}
	    $rssfeed .= '</channel>';
		$rssfeed .= '</rss>';
		
		echo $rssfeed;
		
		
	?>


