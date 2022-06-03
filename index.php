<!DOCTYPE html>
<html>
	<head>
		<title>recipe hub</title>
		<!--<link rel="stylesheet" type="text/css" href="slider.css">-->
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,600;1,700&display=swap" rel="stylesheet">
		<meta charset="utf-8">
	</head>
	<body>
		<!--<div id="slider-wrapper">
	  		<div class="inner-wrapper">
	    		<input checked type="radio" name="slide" class="control" id="Slide1" />
	    		<label for="Slide1" id="s1"></label>
	    		<input type="radio" name="slide" class="control" id="Slide2" />
	    		<label for="Slide2" id="s2"></label>
	    		<input type="radio" name="slide" class="control" id="Slide3" />
	    		<label for="Slide3" id="s3"></label>
	    		<input type="radio" name="slide" class="control" id="Slide4" />
	    		<label for="Slide4" id="s4"></label>
	    		<input type="radio" name="slide" class="control" id="Slide5" />
	    		<label for="Slide5" id="s5"></label>
	    		<input type="radio" name="slide" class="control" id="Slide6" />
	    		<label for="Slide6" id="s6"></label>
	    		<input type="radio" name="slide" class="control" id="Slide7" />
	    		<label for="Slide7" id="s7"></label>
	    		<input type="radio" name="slide" class="control" id="Slide8" />
	    		<label for="Slide8" id="s8"></label>
	    		<input type="radio" name="slide" class="control" id="Slide9" />
	    		<label for="Slide9" id="s9"></label>
	    		<input type="radio" name="slide" class="control" id="Slide10" />
	    		<label for="Slide10" id="s10"></label>
	    		<div class="overflow-wrapper">
		     		<a class="slide" href=""><img src="image/banner1.jpg" /></a>
		      		<a class="slide" href=""><img src="image/banner2.jpg" /></a>
		      		<a class="slide" href=""><img src="image/banner3.jpg" /></a>
		      		<a class="slide" href=""><img src="image/banner4.jpg" /></a>
		      		<a class="slide" href=""><img src="image/banner5.jpg" /></a>
		      		<a class="slide" href=""><img src="image/banner6.jpg" /></a>
		      		<a class="slide" href=""><img src="image/banner7.jpg" /></a>
		      		<a class="slide" href=""><img src="image/banner8.jpg" /></a>
		      		<a class="slide" href=""><img src="image/banner9.jpg" /></a>
		      		<a class="slide" href=""><img src="image/banner10.jpg" /></a>
		   	    </div>
		  	</div>	
		</div>-->
		<form action="registration.php" method="POST">
			<table padding="50px" margin="50px">
				<tr>
					<td>
						First Name:
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="first_name" placeholder="Write your first name here" required="">		
					</td>
				</tr>
				<tr>
					<td>
						Last Name:
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="last_name" placeholder="Write your last name here" required="">		
					</td>
				</tr>
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
						<input type="password" name="password" placeholder="Create your password" required="">
					</td>  
				</tr>
				<tr>
					<td>
						Password confirm:
					</td>
				</tr>
				<tr>
					<td>
						<input type="password" name="confirm_password" placeholder="Retype your Password" required="">		
					</td>
				</tr>
			</table>
			<div class="btn" float="right">
				<input type="submit" name="create" value="Create"></br></br></br>
				<input type="reset" name="reset" value="Reset">
				<a href="sign_In.php">Already have an account</a>	
			</div>
		</form>
	</body>
</html>