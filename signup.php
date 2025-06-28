
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="bhuwan_db";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["save"]))
{

		$firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $username = $firstName . " " . $lastName;

	$month=$_POST["month"];
	$day=$_POST["day"];
	$year=$_POST["year"];
	$birthday="$month-$day-$year";
	$gender=$_POST["gender"];
	$email=$_POST["email"];
   $newpassword = password_hash($_POST["newpassword"], PASSWORD_DEFAULT);
	
	$sql = "INSERT INTO tourist_signup(username,birthday,gender,email,newpassword) VALUES ('$username','$birthday','$gender','$email','$newpassword')";

	if($conn->query($sql)===TRUE)
	{
		header("Location: index.php");

	}
	else
	{
		echo "Error in signup ";
	}
	$conn->close();


}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bhuwan Nepal Tourism</title>
	<style type="text/css">
		 body 
		 {
      font-family: Arial, sans-serif;
      background-color: #f0f2f5;
      margin: 0;
      padding: 0;
    }
    h1 
    {
      text-align: center;
      color: #1877f2;
      margin-top: 20px;
    }
    #hello
     {
      background-color: #fff;
      width: 450px;
      margin: 30px auto;
      padding: 20px 25px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }

     form 
     {
      display: flex;
      flex-direction: column;
    }

  input[type="textbox"],
    input[type="email"],
    input[type="password"],
    select 
    {
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }
     .name-fields {
      display: flex;
      gap: 10px;
    }
      .name-fields input {
      flex: 1;
    }
     .dob-fields {
      display: flex;
      gap: 10px;
    }
    .dob-fields select {
      flex: 1;
    }
    .gender-fields {
      margin: 8px 0;
    }
     .gender-fields input {
      margin-right: 5px;
    }
    input[type="submit"] {
      background-color: #42b72a;
      color: white;
      font-weight: bold;
      padding: 12px;
      border: none;
      border-radius: 5px;
      margin-top: 10px;
      cursor: pointer;
      font-size: 16px;
    }
    input[type="submit"]:hover {
      background-color: #36a420;
    }
    .login-link {
      text-align: center;
      margin-top: 15px;
    }
      .login-link a {
      color: #1877f2;
      text-decoration: none;
    }
	</style>

</head>
<body>

	<h1>Tourism Board Nepal</h1>

	<div id="hell">
		
	</div>
	<div id="hello">
		<form method="post">
			<div class="name-fields">

				<input type="textbox" name="first_name" placeholder="First name">
				<input type="textbox" name="last_name" placeholder="Last name">
			</div>

			<label>Birthday</label>
			<div class="dob-fields">

				<select id="month" name="month">
					<option >Month</option>
					<option value="1">Baisakh</option>
					<option value="2">Jestha</option>
					<option value="3">Asar</option>
					<option value="4">Shrawn</option>
					<option value="5">Bhadra</option>
					<option value="6">Ashoj</option>
					<option value="7">Kartik</option>
					<option value="8">Mangsir</option>
					<option value="9">poush</option>
					<option value="10">magh</option>
					<option value="11">Falgun</option>
					<option value="12">Chaitra</option>
				</select>

				<select name="day">
					<?php
					for($day=1;$day<=31;$day++)
					{
						echo "<option value='$day'>$day</option>";
					}

					?>
				</select>
				<select name="year">
					<option value="">Year</option>
					<?php
					for ($year =1900; $year <= 2081; $year++)
					{
						echo "<option value='$year'>$year</option>";
					}
					?>
				</select>
			</div>

			<div class="gender-fields">

				<label>Gender</label><br>
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="custom">Custom

			</div>

			<input type="email" name="email" placeholder="Enter Email"><br>

			<input type="password" name="newpassword" placeholder="Enter new password" ><br>

			<input type="submit" name="save" value="Signup"><br>

			<div class="login-link">
				<a href="login.php">Already have an account?</a>
			</div>
		</form>
	</div>
</body>
</html>
