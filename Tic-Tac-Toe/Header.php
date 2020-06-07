<?php
	class Header {

		public function __construct() {
			echo "<header id=\"main-header\">";
			echo "<a href=\"indexT.php\"><img src=\"imagesT/logo.png\" style =\"width:50%; height:40%;\" /></a>";
			echo "<h1>Tic-Tac-Toe</h1>";
			echo "</header>";
		}

	}

	new Header();

?>
