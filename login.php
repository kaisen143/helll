<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bhuwan_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["login"]))
 {
    $email = $_POST["email"];
    $password = $_POST["password"];


    // Search for user
    $sql = "SELECT * FROM tourist_signup WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows===1) 
    {
        $row =$result->fetch_assoc();

        if (password_verify($password,$row['newpassword'])) 
        {
       		  // Password correct
            header("Location: index.php");
            exit();
        } else {
            echo "Incorrect password.";
        }
    }
     else
     {
        echo "No account found with that email.";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Facebook Login Clone
	</title>

	<style type="text/css">
		* {
			box-sizing: border-box;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		body {
			background-color: #f0f2f5;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;

		}

		#container {
			width: 100%;
			height: 550px;
			display: flex;
			border: none;
			justify-content: space-between;
			align-items: center;
		}
		#intro {
			width: 45%;
			height: 500px;
			border: none;
			padding: 20px;
			margin-left: 40px;
			background-image: url(assets/images/login.png);
			background-size: cover;
			background-repeat: no-repeat;
		}

		#intro h1 {
			color: #1877f2;
			font-size: 48px;
			font-weight: bold;
			text-align: center;
			margin-top: 100px;
		}
		#intro p {
			font-size: 18px;
			margin-top: 10px;
			text-align: center;
		}
		#login {
			width: 45%;
			height: 500px;
			border: none;
			padding: 100px;
			text-align: center;
			justify-content: center;
			margin-right: 45px;
		}
		#login input[type="email"],
		#login input[type="password"] {
			width: 90%;
			padding: 10px;
			margin: 10px 0;
			font-size: 16px;
		}
		.login-btn {
			background-color: #1877f2;
			color: white;
			padding: 10px;
			border: none;
			width: 90%;
			font-size: 16px;
			border-radius: 6px;
			cursor: pointer;
		}
		.forgot {
			display: block;
			margin: 10px 0;
			font-size: 14px;
			color: #1877f2;
			text-decoration: none;
		}
		hr {
			margin: 20px 0;
		}

		.create-btn {
			background-color: #42b72a;
			color: white;
			padding: 12px;
			font-size: 16px;
			border: none;
			border-radius: 6px;
			width: 60%;
			cursor: pointer;
		}
		#small
		{
			height: 300px;
			width: 90%;
			border: none;
			background-color: white;
			margin-left: 26px;
		}
	</style>

</head>
<body>
	
	<div id="container">
		<div id="intro">
			<h1 class="logo">Bhuwan Tourism</h1>
			<p class="tagline ">Welcome to Nepal Authorized Tourism Site</p>
			

		</div>
		<div id="login">
			<div id="small">
				<form method="post">
					<input type="email" name="email" placeholder="Enter Email"><br>
					<input type="password" name="password" placeholder="Enter password"><br>
					<input type="submit" name="login" value ="login"  class="login-btn"><br>
					<a href="#" class="forgot">Forgot password?</a>
					<hr>
					<a href="signup.php">
						<input type="button"  value="Create new account" class="create-btn">
					</a>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
