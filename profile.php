<?php
	require_once ('connection.php');
	session_start();
	if(isset($_SESSION['user']))
	{
		$profile = $_SESSION['user'];
		$registered_query = "select * from `registration` where `first_name` = '$profile'";
		$run_query = mysqli_query($connect, $registered_query);
		if(mysqli_num_rows($run_query) ==  1)
			$info = mysqli_fetch_array($run_query);		 
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
<body>
	<?php
		include 'menu.php';
	?>
	<div class="info">
		<fieldset>
			<legend>Your profile</legend>
			<table>
				<tr>
					<td>
						First Name
					</td>
					<td>
						<?php echo $info['first_name'] ?>
					</td>
				</tr>
					<td>
						Last Name
					</td>
					<td>
						<?php echo $info['last_name'] ?>
					</td>
				<tr>
					<td>
						E-mail
					</td>
					<td>
						<?php echo $info['e_mail'] ?>
					</td>
				</tr>
			</table>
		</fieldset>
	</div>
	<div class="btn">
		<form action="change.php" method="post">
			<input type="submit" name="edit" value="edit">
			<input type="submit" name="change_password" value="change password">
		</form>
	</div>
</body>
<?php
	}
?>