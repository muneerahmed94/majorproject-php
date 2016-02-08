 <?php
	require "init.php";
	
	$roll_no = $_POST["roll_no"];
	$name = $_POST["name"];
	
	$sql = "SELECT Name FROM Students WHERE ID = '$roll_no';";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result) > 0)
	{
		$sql2 = "Update Table Students SET Name = '$name' WHERE ID = '$roll_no';";
		mysqli_query($conn, $sql2);
		echo "Updated Successfully";
	}
	else
	{
		echo "Not Found!";
	}
?>