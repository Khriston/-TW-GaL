<!DOCTYPE html>
<head lang="en-US">
	<title>Backgammon</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="author" content="Iacob Constantin-Cristian, Gradinariu Tudor"/>
	<meta name="description" content="A website meant for new players into learning the game of Backgammon"/>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
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
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['reset']))
        {
            resetpass();
        }


    ?>

    <main class=mainFP>
        <div id=divFP>
            <img src="images/forgpass.png" alt="An image with a lock indicating that here you can reset your password">
            <h1>Forgot password</h1>
            <form class="fp" action="forgotpass.php" method="POST">
                    <div id=mailFP>
                        <label>Please enter your E-mail:<input name="reset" type="text" required placeholder="Enter your E-mail here"></label>
                    </div>
                    <button type="submit" id="FP">Reset password</button>

            </form>
        </div>

    </main>
	
    <?php
        include("Footer.php");



        function resetpass(){

            $conn = new mysqli("localhost","root","","test");
            $result = $conn->query("select id from user where email = '" .$_POST['reset'] ."'");
            if ($result->num_rows == 0){
                echo 'Invalid Email!';
                return;
            }
            $row = $result->fetch_assoc();
            $id = $row['id'];
            $key = mt_rand(100000, 999999);
            $result = $conn->query("select id from reset where id= " .$id);
            if ($result->num_rows > 0){
                $conn->query('update reset set cheie = ' .$key. ' where id = ' .$id);
            }
            else{
                $conn->query('insert into reset values (' .$id. ', ' .$key. ')');
            }



            require_once "Mail.php";
            $from = "as@tw.com";
            $to = $_POST['reset'];
            $subject = "Reset Password";
            $body = "Enter the following link to reset your password: http://localhost/Web-Tehnologies-2018-2019/application/reset.php?id=" .$id. "&key=" .$key;
            $host = "smtp.sendgrid.net";
            $port = 587;
            $username = "apikey";
            $password = "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";
            $headers = array ('From' => $from,
                'To' => $to,
                'Subject' => $subject);
            $smtp = Mail::factory('smtp',
                array ('host' => $host,
                'port' => $port, 
                'auth' => true,
                'username' => $username,
                'password' => $password));
            $mail = $smtp->send($to, $headers, $body);
            if (PEAR::isError($mail)) {
                echo("<p>" . $mail->getMessage() . "</p>"); 
            } 
            else {
                echo('<p style="text-align: center;
                    margin-top: 5%;font-weight: bold;font-size:30px;">Reset Mail successfully sent!</p>');
            } 

        }
    ?>

    </body>
  

</html>