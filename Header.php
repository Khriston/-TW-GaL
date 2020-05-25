<?php
	class Header {

		public function __construct() {
			echo "<header id=\"main-header\">";
			echo "<a href=\"index.php\"><img src=\"images/logo.png\" style =\"width:50%; height:40%;\" /></a>";
			echo "<h1>GameIT</h1>";
			echo "</header>";
		}

	}

	new Header();

?>
