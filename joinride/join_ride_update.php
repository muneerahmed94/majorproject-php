 <?php
	require "init.php";
	
	$RideID = $_POST["RideID"];
	$DriverName;
	$DriverEmail;
	$DriverMobile;
	$From;
	$To;
	$Date;
	$Time;
	$CarNo;
	$CarName;
	$NoOfSeats;
	$Price;
	
	//update the no of seats in rides table after booking
	$NoOfSeatsNew = $_POST["NoOfSeatsNew"];
	$sql2 = "Update Rides SET NoOfSeats = '$NoOfSeatsNew' WHERE RideID = '$RideID';";
	mysqli_query($conn, $sql2);
	
	//get details from Rides to store as it is in JoinedRides 
	$sql = "SELECT * FROM Rides WHERE RideID = '$RideID';";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0)
	{
		//echo "yes details fetched successfully";
		
		$row = mysqli_fetch_assoc($result);
		
		$DriverName = $row["DriverName"];
		$DriverEmail = $row["DriverEmail"];
		$DriverMobile = $row["DriverMobile"];
		$From = $row["From"];
		$To = $row["To"];
		$Date = $row["Date"];
		$Time = $row["Time"];
		$CarNo = $row["CarNo"];
		$CarName = $row["CarName"];
		$NoOfSeats = $row["NoOfSeats"];
		$Price = $row["Price"];
	}
	
	$PassengerName = $_POST["PassengerName"];
	$PassengerEmail = $_POST["PassengerEmail"];
	$PassengerMobile = $_POST["PassengerMobile"];
	$NoOfSeatsBooked = $_POST["NoOfSeatsBooked"];
	
	$sql3 = "INSERT INTO `majorproject`.`JoinedRides` (`JoinedRideID`, `RideID`, `PassengerName`, `PassengerEmail`, `PassengerMobile`, `NoOfSeatsBooked`, `DriverName`, `DriverEmail`, `DriverMobile`, `From`, `To`, `Date`, `Time`, `CarNo`, `CarName`, `NoOfSeats`, `Price`) VALUES (NULL, '$RideID', '$PassengerName', '$PassengerEmail', '$PassengerMobile', '$NoOfSeatsBooked', '$DriverName', '$DriverEmail', '$DriverMobile', '$From', '$To', '$Date', '$Time', '$CarNo', '$CarName', '$NoOfSeats', '$Price');";
	if(mysqli_query($conn, $sql3))
	{
		echo "Join Ride Successfull!";
	}
	else
	{
		echo "Join Ride unsuccessfull";
	}
?>