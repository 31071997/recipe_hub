<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "recipie_hub";
	$connect = mysqli_connect($host, $user, $pass, $database, "3308");
	if(!$connect)
	{
		echo "database is not connected";
		$error = mysqli_connect_error();
		echo $error;
	}
?>