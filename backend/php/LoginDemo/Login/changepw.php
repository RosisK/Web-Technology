<?php 
session_start();
include("connection.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['usr_name'];
		$old_pw = $_POST['old_pw'];
		$new_pw = $_POST['new_pw'];
		$con_pw = $_POST['con_pw'];

		if(!empty($user_name) && !empty($old_pw) && !empty($new_pw))
			{
				if($new_pw != $con_pw)	{
					echo "<font color=red>New Password and Confirm Password do not match!</font>";
				}
				else
				{
					$query = "Update tbl_users SET password = SHA1('$new_pw') WHERE user_name = '$user_name'";	
					mysqli_query($con, $query);
					header("Location: login.php");
				}

			}
		else
		{
			echo "Please enter some valid information!";
		}


	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
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
		width: 150px;
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
			<div style="font-size: 20px;margin: 10px;color: white;">Change Password</div>
            <input id="text" type"text" name="usr_name" placeholder="User Name" required><br><br>
            <input id="text" type="password" name="old_pw" placeholder="Current Password" required><br><br>
			<input id="text" type="password" name="new_pw" placeholder="New Password" required><br><br>
			<input id="text" type="password" name="con_pw" placeholder="Confirm Password" required><br><br>
			<input id="button" type="submit" value="Change Password"><br><br>
		</form>
	</div>
</body>
</html>