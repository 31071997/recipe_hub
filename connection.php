<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "recipe_hub";
	$connect = mysqli_connect($host, $user, $pass, $database);
	if(!$connect)
	{
		echo "database is not connected";
		$error = mysqli_connect_error();
		echo $error;
	}
?>