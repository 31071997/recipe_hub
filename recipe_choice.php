<?php
	error_reporting (E_ALL ^ E_NOTICE); 
	require_once('connection.php');
	include_once('function.php');
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
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Playfair+Display:ital,wght@1,500&family=Supermercado+One&display=swap" rel="stylesheet">
	<meta charset="utf-8">
</head>
<body>
	<?php
		include 'menu.php';
	?>
	<br><br><br><br><br><br>
	<div class="recipe_sheet">
		<?php
			if(isset($_POST['search']))
			{
				if(count($_POST['ingredient'])==2)
				{
					$value1 = mysqli_real_escape_string($connect, $_POST['ingredient'][0]);
					$value1 = under_score($value1);
					$value2 = mysqli_real_escape_string($connect, $_POST['ingredient'][1]);
					$value2 = under_score($value2);
					$query = "select * from `breakfast_two` where `ingredient1` = '$value1' or `ingredient1` = '$value2' and `ingredient2` = '$value1' or `ingredient2` = '$value2'";
					$result = mysqli_query($connect, $query);
					if(mysqli_num_rows($result)>0)
					{
						while ($recipe=mysqli_fetch_assoc($result)) {
							?>
							<dl>
								<dt>
									<div class="title">Title</div>
								</dt>
								<dd>
									<div class="name">
										<?php 
											echo $recipe['name'];
											echo '<br>';
											echo '<br>';
										?>
									</div>
								</dd> 
							</dl>
							<dl>
								<dd>
									<?php
										echo '<img src="data:image;base64,'.base64_encode($recipe['image']).'" alt = "flat bread" height = "327px" width = "466px">';
										echo '<br>';
										echo '<br>';
									?>
								</dd> 
							</dl>
							<dl>
								<dt>Ingredients</dt>
								<dd>
									<ul type="none">
										<li>
											<?php
												echo $recipe['ingredient1'];
												echo '<br>';
											?>	
										</li>
										<li>
											<?php
												echo $recipe['ingredient2'];
												echo '<br>';
												echo '<br>';
											?>
										</li>
									</ul>
								</dd>
							</dl>
							<dl>
								<dt>Recipe</dt>
								<dd>
									<?php
										echo '<pre>'.$recipe['recipe'].'</pre>';
										echo '<br>';
										echo '<br>';
									?>
								</dd>
							</dl>
								<button><a href="saved.php?name=<?php echo $recipe['name'] ?>&ingredient_no=2">save</a></button>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<?php
								}
							}
							else
								echo "information not found in database";
							}
						}
					}
				?> 
			</div>
		</body>
</html>