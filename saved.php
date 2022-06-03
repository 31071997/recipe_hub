<?php
	require_once('connection.php');
	include_once('function.php');
	session_start();
	if(isset($_SESSION['user']))
	{
		$name = $_GET['name'];
		$number = $_GET['ingredient_no'];
		$test = search($connect, $name, $number);
		if(mysqli_num_rows($test) != 0)
			echo "already saved"; //warnings should be replaced with javascript later
		else
		{
			save($connect, $name, $number);
			header("Location: recipe_choice.php");
		}
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		recipe hub
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,600;1,700&display=swap" rel="stylesheet">
	<meta charset="utf-8"> 
 </head>