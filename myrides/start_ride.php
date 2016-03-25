 <?php
	require "init.php";
	
	$RideID = $_POST["RideID"];
	
	$sql = "SELECT * FROM `JoinedRides` WHERE `RideID` = '$RideID' AND `DriverEmail` NOT LIKE `PassengerEmail`;";
	
	$result = mysqli_query($conn, $sql);
	
	$response = array();
	
	while($row = mysqli_fetch_array($result))
	{
		array_push($response, array("JoinedRideID"=>$row[0], "RideID"=>$row[1], "PassengerName"=>$row[2], "PassengerEmail"=>$row[3],  "PassengerMobile"=>$row[4], "NoOfSeatsBooked"=>$row[5], "DriverName"=>$row[6], "DriverEmail"=>$row[7], "DriverMobile"=>$row[8], "From"=>$row[9], "To"=>$row[10], "Date"=>$row[11], "Time"=>$row[12], "CarNo"=>$row[13], "CarName"=>$row[14], "NoOfSeats"=>$row[15], "Price"=>$row[16]));
	}
	
	echo json_encode(array("server_response"=>$response));
	
	mysqli_close($conn);
?>