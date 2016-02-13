<?php
	require "init.php";
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	
	$sql = "INSERT INTO Users(Name, Email, Password) VALUES('$name', '$email', '$password');";
	
	if(mysqli_query($conn, $sql))
	{
		echo "Registration Successfull";
	}
	else
	{
		echo mysqli_error($conn);
	}
?>