<?php
	require "init.php";
	
	$name = "Muneer Ahmed";
	$username = "MuneerAhmed";
	$password = "1a2b3c4d5e";
	
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