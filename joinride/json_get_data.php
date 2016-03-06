 <?php
	require "init.php";
	
	$sql = "SELECT * FROM Rides";
	
	$result = mysqli_query($conn, $sql);
	
	$response = array();
	
	while($row = mysqli_fetch_array($result))
	{
		array_push($response, array("RideID"=>$row[0], "Driver"=>$row[1], "From"=>$row[2], "To"=>$row[3], "Date"=>$row[4], "Time"=>$row[5], "CarNo"=>$row[6], "CarName"=>$row[7], "NoOfSeats"=>$row[8], "Price"=>$row[9]));
	}
	
	echo json_encode(array("server_response"=>$response));
	
	mysqli_close($conn);
?>