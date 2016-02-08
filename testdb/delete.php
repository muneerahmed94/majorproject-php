 <?php
	require "init.php";
	
	$roll_no = $_GET["roll_no"];
	
	$sql = "SELECT Name FROM Students WHERE ID = '$roll_no';";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result) > 0)
	{
		$sql2 = "DELETE FROM Students WHERE ID = '$roll_no';""
		mysqli_query($conn, $sql2);
		echo "Deleted Successfully";
	}
	else
	{
		echo "Not Found!";
	}
?>