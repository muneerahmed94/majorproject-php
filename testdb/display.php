<?php  
	require "init.php";  
	$roll_no = $_POST["roll_no"];  
   
	$sql_query = "SELECT Name from Students WHERE ID = '$roll_no';";  
	$result = mysqli_query($con, $sql_query);  
	if(mysqli_num_rows($result) >0 )  
	{  
		$row = mysqli_fetch_assoc($result);  
		$name = $row["name"];  
		echo $name;
	}  
	else  
	{   
		echo "Not found!";  
	}  
 ?>  