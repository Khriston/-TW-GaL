<?php
    class Navbar {

        /*
         * URL of current page
         */
        private $currPage;
        /*
         * URLs present on the navbar
         */
        private $navURLs = array("index.php", "Backgammon/indexB.php", "Tic-Tac-Toe/indexT.php", "Draughts/indexD.php", "contact.php");
        /* 
         * name of the URLs on the navbar (e.g for "index.php" the name is "Home")
         */ 
        private $navURLName = array("Home", "Backgammon", "Tic-tac-Toe", "Draughts", "Contact");

        public function __construct() {
            if(isset($_SESSION['id']) && isset($_SESSION['user'])){
                $this->navURLs[] = 'user.php';
                $this->navURLs[] = 'logout.php';
                $this->navURLName[] = $_SESSION['user'];
                $this->navURLName[] = 'Log Out';
				if(isset($_SESSION['admin']))
					$this->navURLs[] = 'admin.php';
					$this->navURLName[] = 'Administration';
            }
            else{
                $this->navURLs[] = 'login.php';
                $this->navURLs[] = 'makeaccount.php';
                $this->navURLName[] = 'Login';
                $this->navURLName[] = 'Create Account';   
            }
            $this->currPage = basename($_SERVER['PHP_SELF']);

            echo "<nav>";
            echo "<ul>";

            for ($i = 0; $i < sizeof($this->navURLs); $i++) {
                if ($this->navURLs[$i] == $this->currPage) {
                    echo "<li>" . $this->navURLName[$i] . "</li>";
                }
                else {
                    echo "<li><a href='" . $this->navURLs[$i] . "'>" . $this->navURLName[$i] . "</a></li>";
                }
            }

            echo "</ul>";
            echo "</nav>";
        }

    }

    new Navbar();

?>
