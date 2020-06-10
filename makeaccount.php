<!DOCTYPE html>
<html>

<head lang="en-US">
    <title>GameIT</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="author" content="Iacob Constantin-Cristian, Gradinariu Tudor"/>
	<meta name="description" content="A website meant for new players into learning the game of users"/>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="stylesheet.css" type="text/css" />

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
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            register();
        }

    ?>

    <main class="rmain">
    <div class="register">
            <!-- https://fandi-conference.com/register-icon/ -->
            <img id="registerPhoto" src="images/register.png" alt="Register Photo"> 
        <h1>Register</h1>
        <form action="makeaccount.php" method="post"> <div>
            <label>Username*:</label>
            <input type="text" required id="registerUsername" placeholder="Enter your username" name="user" />
    </div>
    <div>
        <label >Password*:</label>
        <input type="password" required class="registerPassword" placeholder="Enter your password" name="password1"/>
    </div>
    <div>
        <label>Repeat Password*:</label>
        <input type="password" required class="registerPassword" placeholder="Repeat password" name="password2"/>
    </div>
    <div>
        <label>E-mail*:</label>
        <input type="text" required id="registerEmail" placeholder="Enter your E-mail" name="email" />
    </div>
    <p id="required">All fields with * are required for register.</p>
    <button type="submit">Register</button>
    </form>
    </div>


</main>


    <?php
        function register(){
			$username = "";
			$email    = "";
			$errors = array(); 
			include 'connect.php';
			$db = OpenCon();


			// receive all input values from the form
			$username = $_POST['user'];
			$email = $_POST['email'];
			$password1 = $_POST['password1'];
			$password2 = $_POST['password2'];

			// form validation: ensure that the form is correctly filled ...
			// by adding (array_push()) corresponding error unto $errors array
			if (empty($username)) { 
                echo '<div style="text-align: center;
                    margin-top: 5%;font-weight: bold;font-size:30px;color: red">
					Username is requierd!</div';		
					}
			if (empty($email)) { 
                echo '<div style="text-align: center;
                    margin-top: 5%;font-weight: bold;font-size:30px;color: red">
					Email is required!</div';		
					}
			if (empty($password1)) { 
                echo '<div style="text-align: center;
                    margin-top: 5%;font-weight: bold;font-size:30px;color: red"> 
                    Passwords is requierd';	
					}
            if ($password1 != $password2){
                echo '<div style="text-align: center;
                    margin-top: 5%;font-weight: bold;font-size:30px;color: red"> 
                    Passwords does not match! </div>';
                return;
            }
			$result = $db->query("select id from users where name='".$username."'");
            if ($result->num_rows > 0){
                echo '<div style="text-align: center;
                    margin-top: 5%;font-weight: bold;font-size:30px;color: red">
					Username exists!</div';
                return;
            }
            $result = $db->query("select id from users where email='".$email."'");
            if ($result->num_rows > 0){
                echo '<div style="text-align: center;
                    margin-top: 5%;font-weight: bold;font-size:30px;color: red">E
					mail exists!</div>';
                return;
            }



			$query = "INSERT INTO  (ID,Name, Password, Email,Score) VALUES (NULL,'$username','$password1', '$email', NULL)";
			mysqli_query($db, $query);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');


		}
        include("Footer.php");
    ?>
</body>
</html>
