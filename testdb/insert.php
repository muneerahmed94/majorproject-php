<?php
	require "init.php";
	
	$key = $_POST["key"];
	$value = $_POST["value"];
	
	$sql = "INSERT INTO Table(Key, Value) VALUES('$key', '$value');";
	
	if(mysqli_query($conn, $sql))
	{
		echo "Inserted!";
	}
	else
	{
		echo mysqli_error($conn);
	}
?>