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
	$NoOfSeatsNew = $_POST["NoOfSeats"];
	$Price;
	
	//get details from Rides to store as it is in JoinedRides 
	$sql = "SELECT * FROM Rides WHERE RideID = '$RideID';";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0)
	{
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
		$Price = $row["Price"];
	}
	
	//update the no of seats in rides table after booking
	$sql2 = "Update Rides SET NoOfSeats = '$NoOfSeatsNew' WHERE RideID = '$RideID';";
	mysqli_query($conn, $sql2);
	
	$PassengerName = $_POST["PassengerName"];
	$PassengerEmail = $_POST["PassengerEmail"];
	$PassengerMobile = $_POST["PassengerMobile"];
	$NoOfSeatsBooked = $_POST["NoOfSeatsBooked"];
	
	$sql3 = "INSERT INTO `majorproject`.`JoinedRides` (`JoinedRideID`, `RideID`, `PassengerName`, `PassengerEmail`, `PassengerMobile`, `NoOfSeatsBooked`, `DriverName`, `DriverEmail`, `DriverMobile`, `From`, `To`, `Date`, `Time`, `CarNo`, `CarName`, `NoOfSeats`, `Price`) VALUES (NULL, '$RideID', '$PassengerName', '$PassengerEmail', '$PassengerMobile', '$NoOfSeatsBooked', '$DriverName', '$DriverEmail', '$DriverMobile', '$FROM', '$To', '$Date', '$Time', '$CarNo', '$CarName', '$NoOfSeats', '$Price');"
?>