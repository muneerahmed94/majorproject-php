 <?php
	require "init.php";
	
	$sql = "SELECT * FROM Rides WHERE Date > CURDATE() && TIME > CURTIME() && NoOfSeats > 0";
	
	$result = mysqli_query($conn, $sql);
	
	$response = array();
	
	while($row = mysqli_fetch_array($result))
	{
		array_push($response, array("RideID"=>$row[0], "DriverName"=>$row[1], "DriverEmail"=>$row[2], "DriverMobile"=>$row[3],"From"=>$row[4], "To"=>$row[5], "Date"=>$row[6], "Time"=>$row[7], "CarNo"=>$row[8], "CarName"=>$row[9], "NoOfSeats"=>$row[10], "Price"=>$row[11]));
	}
	
	echo json_encode(array("server_response"=>$response));
	
	mysqli_close($conn);
?>