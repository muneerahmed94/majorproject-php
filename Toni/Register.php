<?php
	require "init.php";
	
	$id = $_POST["name"];
	$name = $_POST["age"];
	$name = $_POST["username"];
	$name = $_POST["password"];
	
	$sql = "INSERT INTO TUsers(name, age, username, password) VALUES('$name', '$age', '$username', '$password');";
	
	if(mysqli_query($conn, $sql))
	{
		echo "Inserted!";
	}
	else
	{
		echo mysqli_error($conn);
	}
?>