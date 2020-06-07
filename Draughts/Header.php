<?php
	class Header {

		public function __construct() {
			echo "<header id=\"main-header\">";
			echo "<a href=\"indexT.php\"><img src=\"imagesD/logo.png\" style =\"width:50%; height:40%;\" /></a>";
			echo "<h1>Draughts</h1>";
			echo "</header>";
		}

	}

	new Header();

?>
