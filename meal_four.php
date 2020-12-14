<?php
	session_start();
	if(isset($_SESSION['user']))
	{
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
						<a href="#">Your profile</a>
					</li>
		   			<li>
						<a href="logout.php">Log Out</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</body>
</html>
<?php
	}
?>