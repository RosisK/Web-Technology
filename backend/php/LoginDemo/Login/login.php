<?php 
session_start();
	include("connection.php");
	include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$password = SHA1($password);
	if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
	{

		//read from database
		$query = "select * from tbl_users where user_name = '$user_name' and password='$password'";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) > 0)
			{
				$user_data = mysqli_fetch_assoc($result);
				$_SESSION['user_id'] = $user_data['user_id'];
				$_SESSION["username"]=$user_data['user_name'];
				if($user_data['role']==1)
				{
					header("Location:../admin/categories.php");
				}
				else
					header("Location: ../member/index.php");
				die;
			}
		else
			{
				echo "User Name/Password mismatched";
				header("location:login.php");
			}
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="user_name" placeholder="User Name" required><br><br>
			<input id="text" type="password" name="password" placeholder="Password" required><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="changepw.php">Change Password</a>
			<br><br>
		</form>
	</div>
</body>
</html>