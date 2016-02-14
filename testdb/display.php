 <?php
	require "init.php";
	
	$roll_no = $_GET["roll_no"];
	
	$sql = "SELECT Name FROM Students WHERE ID = '$roll_no';";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		$name = $row["Name"];
		echo $name;
	}
	else
	{
		echo "Not Found!";
	}
?>