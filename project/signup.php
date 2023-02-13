<?php 


	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (name,user_id,email,user_name,password) values ('$name','$user_id','$email','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
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

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;"><center><h3>SIGN UP</h3></center></div>
			<input id="text" type="text" name="name" placeholder="Name" required> <br><br>
			<input id="text" type="text" name="user_name" placeholder="User name" required><br><br>
			<input id="text" type="email" name="email" placeholder="E-mail" required><br><br>
			<input id="text" type="password" name="password" placeholder="Password" required><br><br>
			

			<input id="button" type="submit" value="Signup"><br><br>

			<button style="float:right;"><a href="login.php" style="text-decoration:none;">Sign IN</a></button><br><br>
		</form>
	</div>
</body>
</html>