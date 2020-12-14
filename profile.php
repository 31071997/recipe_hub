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
	<div class="header">
		<ul type="none">
			<li>
			<a href="#"><?php echo $_SESSION['user']; ?></a>
				<ul type="none">
					<li>
						<a href="profile.php">Your profile</a>
					</li>
		   			<li>
						<a href="logout.php">Log Out</a>
					</li>
				</ul>
            </li>
            <li>
				<a href="#">List of recipe</a>
				<ul type="none">
					<?php
						$qurey = "select `name` from `breakfast_two`";
						$sql = mysqli_query($connect, $qurey);
						while($list = mysqli_fetch_array($sql))
						{
					?>
					<li>
						<a href = "saved.php?name=<?php echo $list['name'] ?>">
							<?php
									echo $list['name']; 
								}
							?>
						</a>
                    </li>
				</ul>
            </li>
            <li>
                <a href="#">Saved</a>
                <ul type = "none">
					<?php
						$qurey = "select `name` from `profile` where `profile` = '$profile'";
						$sql = mysqli_query($connect, $qurey);
						while($list = mysqli_fetch_array($sql))
						{
					?>
                    <li>
						<a href = "saved.php?name=<?php echo $list['name'] ?>">
							<?php
									echo $list['name']; 
								}
							?>
						</a>
                    </li>
                </ul>
            </li>
		</ul>
	</div>
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