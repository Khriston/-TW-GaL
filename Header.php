<?php
	class Header {

		public function __construct() {
			echo "<header id=\"main-header\">";
			echo "<a href=\"index.php\"><img src=\"images/logo.png\" style =\"width:20%; height:5%;\" /></a>";
			echo "<h1>Backgammon</h1>";
			echo "</header>";
		}

	}

	new Header();

?>
