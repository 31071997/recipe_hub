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
				echo $result;
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
			}
		}
	}
?>