<?php
	require "init.php";
	
	$name = $_POST["name"];
	$username = $_POST["userName"];
	$password = $_POST["password"];
	
	$sql = "INSERT INTO users(Name, Username, Password) VALUES('$name', '$username', '$password');";
	
	if(mysqli_query($conn, $sql))
	{
		echo "Inserted!";
	}
	else
	{
		echo mysqli_error($conn);
	}
?>