<!DOCTYPE html>
<html>
<head>
		<title>recipe hub</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,600;1,700&display=swap" rel="stylesheet">
		<meta charset="utf-8">
</head>
<body>
	<form action="enter.php" method="POST">
			<table padding="50px" margin="50px">
			<tr>
				<td>
					E-mail:
				</td>	
			</tr>
			<tr>
				<td>
					<input type="email" name="e_mail" placeholder="E-mail" required="">		
				</td>
			</tr>
			<tr>
				<td>
					Password:
				</td>
			</tr>
			<tr>
				<td>
					<input type="password" name="password" placeholder="Type your password here" required="">
				</td>  
			</tr>
		</table>
		<div class="btn" margin="10%">
			<input type="submit" name="submit" value="Log In">
		</div>
	</form>
</body>
</html>