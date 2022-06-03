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
	<?php
		include 'menu.php';
	?>
	<form action="recipe_choice.php" method="post" >
		<fieldset>
			<legend>Select your ingridients</legend>
			<table>
				<tr>
					<td>
						banana
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="banana">
					</td>
				</tr>
				<tr>
					<td>	
						honey
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="honey">
					</td>
				</tr>
				<tr>
					<td>
						egg
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="egg">
					</td>
				</tr>
				<tr>	
					<td>
						penut butter
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="penut_butter">
					</td>
				</tr>
				<tr>	
					<td>
						bread
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="bread">
					</td>
				</tr>
				<tr>	
					<td>
						chees slice
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="chees_slice">
					</td>
				</tr>
				<tr>	
					<td>
						mozorela
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="mozorela">
					</td>
				</tr>
				<tr>	
					<td>
						self rising flour
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="self_rising_flour">
					</td>
				</tr>
				<tr>	
					<td>
						baking soda
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="baking_soda">
					</td>
				</tr>
				<tr>	
					<td>
						baking powder
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="baking_powder">
					</td>
				</tr>
				<tr>	
					<td>
						butter
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="butter">
					</td>
				</tr>
				<tr>	
					<td>
						vagetable oil
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="vagetable_oil">
					</td>
				</tr>
				<tr>	
					<td>
						olive oil
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="olive_oil">
					</td>
				</tr>
				<tr>	
					<td>
						coconut oil
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="coconut_oil">
					</td>
				</tr>
				<tr>	
					<td>
						garlic
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="garlic">
					</td>
				</tr>
				<tr>	
					<td>
						cloves
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="cloves">
					</td>
				</tr>
				<tr>	
					<td>
						onions
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="onions">
					</td>
				</tr>
				<tr>	
					<td>
						bay leaves
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="bay_leaves">
					</td>
				</tr>
				<tr>	
					<td>
						suger
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="suger">
					</td>
				</tr>
				<tr>	
					<td>
						honey
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="honey">
					</td>
				</tr>
				<tr>	
					<td>
						meat
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="meat">
					</td>
				</tr>
				<tr>	
					<td>
						chicken
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="chicken">
					</td>
				</tr>
				<tr>	
					<td>
						yougart
					</td>
					<td>
						<input type="checkbox" name="ingredient[]" value="yougart">
					</td>
				</tr>
			</table>
			<div class="btn">
				<input type="submit" name="search" value="search">
			</div>
		</fieldset>	
	</form>
</body>
</html>
<?php 
	} 
?>