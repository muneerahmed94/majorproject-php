<?php
	require "init.php";
	
	$name = $_POST["name"];
	$age = $_POST["age"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$sql = "INSERT INTO TUsers(name, age, username, password) VALUES('$name', '$age', '$username', '$password');";
	
	if(mysqli_query($conn, $sql))
	{
		//echo "Inserted!";
	}
	else
	{
		//echo mysqli_error($conn);
	}
?>