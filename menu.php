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
						<!--<a href = "saved.php?name=<?php //echo $list['name'] ?>"-->
							<?php
								//echo $list['name']; 
							}
						?>
					</a>
                </li>
            </ul>
        </li>
	</ul>
</div>
