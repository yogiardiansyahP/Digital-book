<?php 
session_start();

	include("connection-copy.php");
	include("functions-copy.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($conn, $query);

			header("Location: login-admin.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{
		margin-left: 7em;
		padding: 10px;
		border-radius: 20px;
		width: 100px;
		color: white;
		background-color: #176B87;
		border: none;
	}

	#box{

		margin-top: 10em;
		margin-left: 33em;
		background-color: rgba(155, 155, 155, 0.7);
		width: 300px;
		padding: 20px;
	}

	#box > form > a {
		color: #fff;
		text-decoration: none;
		margin-left: 6em;
	}

	#box > form > p{
		text-align: center;
		
	}

	body{
		background-image: url("./img/background.jpg");
		background-repeat: no-repeat;
		background-size: cover;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin-left:6em;margin-bottom:10px;color: white;">signup</div>

			<input id="text" type="text" name="user_name" placeholder="User name"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>

			<input id="button" type="submit" value="register"><br><br>

			<p>Already have an account ?</p>
			<a href="login-admin.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>