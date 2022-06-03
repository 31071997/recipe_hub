<?php 
	error_reporting (E_ALL ^ E_NOTICE); 
	function under_score($value)
	{
		$num = substr_count($value, "_");
		if ($num > 0) {
			$value = str_replace("_", " ", $value);
		}
		return $value;
	}
	function save($connect,$value1, $value2)
	{
		$query = "insert into save (name, ingredient_no) values ('$value1', '$value2')";
		$sql = mysqli_query($connect, $query);
		return $sql;
	}
	function search($connect, $value1, $value2)
	{
		$query = "select name from save where `name` = '$value1' and `ingredient_no` = '$value2'";
		return mysqli_query($connect, $query);
	}
?>