<?php
	class Header {

		public function __construct() {
			echo "<header id=\"main-header\">";
			echo "<a href=\"indexB.php\"><img src=\"imagesB/logo.png\" style =\"width:50%; height:40%;\" /></a>";
			echo "<h1>Backgammon</h1>";
			echo "</header>";
		}

	}

	new Header();

?>
