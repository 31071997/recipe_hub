<?php
	require_once('connection.php');
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
						$profile = $_SESSION['user'];
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
</body>
<?php
    $name = $_GET['name'];
    $query = "select * from `breakfast_two` where `name` = '$name'";
	$sql_command = mysqli_query($connect, $query);
	if(mysqli_num_rows($sql_command)>0)
	{
        $info = mysqli_fetch_assoc($sql_command) ?>
		<html>
			<body>
				<div class="recipe">
					<table border="10px" opacity="100%">
						<tr>
							<th colspan="2">
								<?php echo $info['name']; ?>
							</th>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<?php echo '<img src="data:image;base64,'.base64_encode($info['image']).'" alt = "flat bread" height = "327px" width = "466px">'; ?>
							</td>
						</tr>
						<tr>
							<th rowspan="2">
								ingredients
							</th>
							<td>
								<?php echo $info['ingredient1']; ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo $info['ingredient2']; ?>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<?php echo $info['recipie']; ?>
							</td>
						</tr>
					</table>
				</div>
			</body>
		</html>
		<?php		
    } 
} ?>