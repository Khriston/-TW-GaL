<!DOCTYPE html>
<html>

<head lang="en-US">
    <title>Security Alerter</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width-device-width, initial-scale=1.0" />
    <meta name="author" content="Reftu Paul Alexandru, Ruse Daniel Stefan, Popescu Flavius-Petru" />
    <meta name="description"
        content="The Web App Security Alerter is meant to serve as a guide to achieving better security inside and outside of the Internet, to protect user's private data across all domains and to instruct developers on how to engineer their own secure applications." />
    <!-- Icon obtained from: https://www.isw-online.de/praesident-trump-vs-privacy-shield/  -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="stylesheet.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <?php
        session_start();
        if(isset($_SESSION['id'])){
            echo '<script src="notifications.js"></script>';
        }
    ?>
</head>

<body>
    <?php 
        include("Header.php"); 
        include("Navbar.php");
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['user']) and isset($_POST['password']))
        {
            login();
        }

    ?>

    <main class="lmain">
        <div id="loginMain">
        <!-- https://www.iconfinder.com/icons/480741/account_avatar_contact_guest_login_man_user_icon -->
        <img id="loginPhoto" src="assets/images/login.png" alt="Login Photo">
        <h1>Sign in</h1>
        <form class="login" action="login.php" method="post"> 
            <div id=loginUsername>
                <label >Username:</label>
                <input type="text" required placeholder="Enter your username" name="user" />
            </div>
            <div id=loginPassword>
                <label >Password:</label>
                <input type="password" required placeholder="Enter your password" name="password"/>
            </div>
            <p><a href="forgotpass.php">Forgot password?</a></p>
            <a href="makeaccount.php" id="register">Register</a>
            <button type="submit" id="login">Login</button>
        </form>
    </div>
    </main>

    <?php
        function login(){
            $user = $_POST['user'];
            $password = $_POST['password'];
            $conn = new mysqli("localhost","root","","proiect");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $result = $conn->query("select id from user where username='".$user."' and password='".$password."'");
            if ($result->num_rows > 0){
                $id = $result->fetch_assoc();
                $id = $id['id'];
                $_SESSION['id'] = $id;
                $_SESSION['user'] = $user;
                header("Location: http://localhost/Web-Tehnologies-2018-2019/application/index.php"); /* Redirect browser */
                exit();

            } else{
                $message = "Login failed!\nUser or password incorrect!";
                echo '<div style="text-align: center;
                    margin-top: 5%;font-weight: bold;font-size:30px;color: red">
                    Login failed!<br>User or password incorrect!</div>';
            }

            $conn->close();
            
        }

        include("Footer.php");
    ?>
</body>
</html>
