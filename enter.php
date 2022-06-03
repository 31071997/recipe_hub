<!DOCTYPE html>
<html>
<head>
	<title>recipie hub</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,600;1,700&display=swap" rel="stylesheet">
	<meta charset="utf-8">
</head>
</html>
<?php
	require_once('connection.php');
	if(isset($_POST['submit']))
	{
		if(isset($_POST['e_mail']) || isset($_POST['password']))
		{
			$e_mail = mysqli_real_escape_string($connect, $_POST['e_mail']);
			$password = mysqli_real_escape_string($connect, $_POST['password']);
			$check_sql = "select `password` from `registration` where `e_mail` = '$e_mail'";
			$check = mysqli_query($connect, $check_sql);
			$pass = mysqli_fetch_assoc($check);
			$hash = implode(" ", $pass);
			/*echo $hash;
			echo $password;
			echo md5($password);
			/*echo md5($password)."    ";
			echo md5(1234);*/
			if($hash == md5($password)) 
			{
				$user_query = "select `first_name` from `registration` where `password` ='$hash'";
				$user_array = mysqli_query($connect, $user_query);
				$unarray_user = mysqli_fetch_assoc($user_array);
				$user = implode(" ", $unarray_user);
				session_start();
				$_SESSION['user'] = $user;
				header("Location: home.php");
			}
			else
			{
				header("Location: sign_In.php");
			}
		}
	}
?>