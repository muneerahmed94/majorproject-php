<?php
	require "init.php";
	
	$username = "MuneerAhmed";
	$password = "1a2b3c4d5e";
	
	$sql = "SELECT Name FROM users WHERE Username = '$username' AND Password = '$password';";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		$name = $row["Name"];
		echo "Hello ".$name;
	}
?>