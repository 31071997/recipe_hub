<!DOCTYPE html>
<html>
	<head>
		<title>recipe hub</title>
		<!--<link rel="stylesheet" type="text/css" href="slider.css">-->
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,600;1,700&display=swap" rel="stylesheet">
		<meta charset="utf-8">
	</head>
</html>
<?php
	require_once('connection.php');
	if(isset($_POST['create']))
	{
		if(isset($_POST['first_name']) || isset($_POST['last_name']) || isset($_POST['e_mail']) || isset($_POST['password']) || isset($_POST['confirm_password']))
		{
			$first_name = mysqli_real_escape_string($connect, $_POST['first_name']);
			$last_name = mysqli_real_escape_string($connect, $_POST['last_name']);
			$e_mail = mysqli_real_escape_string($connect, $_POST['e_mail']);
			$password = mysqli_real_escape_string($connect, $_POST['password']);
			$confirm_password = mysqli_real_escape_string($connect, $_POST['confirm_password']);
			if(!empty($first_name) && !empty($last_name) && !empty($e_mail) && !empty($password) && !empty($confirm_password))
			{
				//echo $first_name, $last_name, $e_mail, $password, $confirm_password;
				$query_mail = "select `e_mail` from `registration` where `e_mail` = '$e_mail'";
				$sql_mail = mysqli_query($connect, $query_mail);
				$result = mysqli_num_rows($sql_mail);
				if($result == 1)
				{
					echo "Sorry, this email is previously registered";
					die();
				}
				if ($password != $confirm_password) {
				echo "Sorry! your password doesn't match";
				}
				else
				{
					$hash_pass = md5($password);
					$query = "insert into registration (first_name, last_name, e_mail, password) values ('$first_name', '$last_name', '$e_mail', '$hash_pass')";
					$sql = mysqli_query($connect, $query);
				}
				if ($sql == 1) {
					echo('<button><a href="sign_In.php">Sign In</a></button>');
				}
			}
		}
	}
?>