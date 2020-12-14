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
						<a href="profile.php">Your profile</a>
					</li>
		   			<li>
						<a href="logout.php">Log Out</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<form action="home.php" method="GET" >
		<fieldset>
			<legend>Select your prefefances</legend>
			<table>
				<tr>
					<td>
						<label>Recipie type:</label> 	
					</td>
					<td>
						<select name="type">
							<option>type</option>
							<option value="breakfast">breakfast</option>
							<option value="meal">meal</option>
							<option value="snack">snack</option>
							<option value="desert">desert</option>
							<option value="drink">drink</option>
						</select>	
					</td>
				</tr>
				<tr>
					<td>
						<br><br>
						<label>Number of ingredients:</label> 
						<br>
					</td>
					<td>
						<br><br>
						<select name="number">
							<option>number</option>
							<option value="two">two</option>
							<option value="three">three</option>
							<option value="four">four</option>
							<option value="five">five</option>
							<option value="six">six</option>
							<option value="seven">seven</option>
							<option value="eight">eight</option>
							<option value="nine">nine</option>
						</select>
						<br>			
					</td>
				</tr>
			</table>
			<div class="btn">
				<input type="submit" name="search" value="search">
			</div>
		</fieldset>
	</form>
	<?php
		if(isset($_GET['search']))
		{
			if(!empty($_GET['number']) && !empty($_GET['type']))
			{
				$number = $_GET['number'];
				$type = $_GET['type'];
				if($type == "breakfast" && $number == "two")
				header("Location: breakfast_two.php");
				if($type == "breakfast" && $number == "three")
				header("Location: breakfast_three.php");
				if($type == "breakfast" && $number == "four")
				header("Location: breakfast_four.php");
				if($type == "breakfast" && $number == "five")
				header("Location: breakfast_five.php");
				if($type == "breakfast" && $number == "six")
				header("Location: breakfast_six.php");
				if($type == "breakfast" && $number == "seven")
				header("Location: breakfast_seven.php");
				if($type == "breakfast" && $number == "eight")
				header("Location: breakfast_eight.php");
				if($type == "breakfast" && $number == "nine")
				header("Location: breakfast_nine.php");
				if($type == "meal" && $number == "two")
				header("Location: meal_two.php");
				if($type == "meal" && $number == "three")
				header("Location: meal_three.php");
				if($type == "meal" && $number == "four")
				header("Location: meal_four.php");
				if($type == "meal" && $number == "five")
				header("Location: meal_five.php");
				if($type == "meal" && $number == "six")
				header("Location: meal_six.php");
				if($type == "meal" && $number == "seven")
				header("Location: meal_seven.php");
				if($type == "meal" && $number == "eight")
				header("Location: meal_eight.php");
				if($type == "meal" && $number == "nine")
				header("Location: meal_nine.php");		
				if($type == "snack" && $number == "two")
				header("Location: snack_two.php");
				if($type == "snack" && $number == "three")
				header("Location: snack_three.php");
				if($type == "snack" && $number == "four")
				header("Location: snack_four.php");
				if($type == "snack" && $number == "five")
				header("Location: snack_five.php");
				if($type == "snack" && $number == "six")
				header("Location: snack_six.php");
				if($type == "snack" && $number == "seven")
				header("Location: snack_seven.php");
				if($type == "snack" && $number == "eight")
				header("Location: snack_eight.php");
				if($type == "snack" && $number == "nine")
				header("Location: snack_nine.php");
				if($type == "desert" && $number == "two")
				header("Location: desert_two.php");
				if($type == "desert" && $number == "three")
				header("Location: desert_three.php");
				if($type == "desert" && $number == "four")
				header("Location: desert_four.php");
				if($type == "desert" && $number == "five")
				header("Location: desert_five.php");
				if($type == "desert" && $number == "six")
				header("Location: desert_six.php");
				if($type == "desert" && $number == "seven")
				header("Location: desert_seven.php");
				if($type == "desert" && $number == "eight")
				header("Location: desert_eight.php");
				if($type == "desert" && $number == "nine")
				header("Location: desert_nine.php");
				if($type == "drink" && $number == "two")
				header("Location: drink_two.php");
				if($type == "drink" && $number == "three")
				header("Location: drink_three.php");
				if($type == "drink" && $number == "four")
				header("Location: drink_four.php");
				if($type == "drink" && $number == "five")
				header("Location: drink_five.php");
				if($type == "drink" && $number == "six")
				header("Location: drink_six.php");
				if($type == "drink" && $number == "seven")
				header("Location: drink_seven.php");
				if($type == "drink" && $number == "eight")
				header("Location: drink_eight.php");
				if($type == "drink" && $number == "nine")
				header("Location: drink_nine.php");
			}
		}
	?>
</body>
</html>
<?php
	} 
	else
	header("Location: sign_In.php");
?>