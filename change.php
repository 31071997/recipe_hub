<?php
	require_once ('connection.php');
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
						$qurey = "select `name` from `profile` where `profile` = '$profile'";
						$sql = mysqli_query($connect, $qurey);
						while($list = mysqli_fetch_array($sql))
						{
					?>
                    <li>
					<a href = "saved.php?name=<?php //echo $list['name'] ?>">
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
    <?php
        if(isset($_POST['edit']))
        {
    ?>
        <div class="info">
        <form action="change.php" method="post">
            <fieldset>
                <legend>Edit profile</legend>
                    <table class="edit" align="cnter"> 
                        <tr>
                            <td>
                                New First Name:
                            </td>
                            <td>
                                <input type="text" name="new_first_name" placeholder="Write your first name here" required="">		
                            </td>
                        </tr>
                        <tr>
                            <td>
                                New Last Name:
                            </td>
                            <td>
                                <input type="text" name="new_last_name" placeholder="Write your last name here" required="">		
                            </td> 
                        </tr>
                        <tr>
                            <td>
                                New E-mail:
                            </td>
                            <td>
                                <input type="email" name="new_e_mail" placeholder="E-mail" required="">		
                            </td>
                        </tr>
                    </table>
                    <div class="btn">
                        <input name="change_info" type="submit" value="change"/>
                    </div>
                </fieldset>     
            </form>       
        </div>
    </html> 
    <?php
        }	
        if(isset($_POST['change_password']))
        {
    ?>  
    <div class="info">
        <form action="change.php" method="post">
            <fieldset>
                <legend>Edit profile</legend>
                    <table class="edit" align="cnter"> 
                        <tr>
                            <td>
                                New password:
                            </td>
                            <td>
                            <input type="password" name="password" placeholder="Create your password" required="">		
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Re-type password:
                            </td>
                            <td>
                                <input type="password" name="password" placeholder="Create your password" required="">		
                            </td> 
                        </tr>
                        <tr>
                            <td>
                                Re-type password:
                            </td>
                            <td>
                                <input type="password" name="password" placeholder="Create your password" required="">		
                            </td>
                        </tr>
                    </table>
                    <div class="btn">
                        <input name="change_pass" type="submit" value="change"/>
                    </div>
                </fieldset>     
            </form>       
        </div>
    </html>            
    <?php    
            }
        }
    ?>