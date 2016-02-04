<?php
	require "init.php";
	
	$id = $_POST["id"];
	$name = $_POST["name"];
	
	$sql = "INSERT INTO Students(ID, Name) VALUES('$id', '$name');";
	
	if(mysqli_query($conn, $sql))
	{
		echo "Inserted!";
	}
	else
	{
		echo mysqli_error($conn);
	}
?>