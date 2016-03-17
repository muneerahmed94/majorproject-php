<?php
	require "init.php";
	
	$email = $_POST["email"];
	$name = $_POST["name"];
	$mobile = $_POST["mobile"];
	$from = $_POST["from"];
	$to = $_POST["to"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	$carno = $_POST["carno"];
	$carname = $_POST["carname"];
	$noofseats = $_POST["noofseats"];
	$price = $_POST["price"];
	
	$sql = "INSERT INTO `majorproject`.`Rides` (`RideID`, `DriverName`, `DriverEmail`, `DriverMobile`,`From`, `To`, `Date`, `Time`, `CarNo`, `CarName`, `NoOfSeats`, `Price`) VALUES (NULL, '$name', '$email', '$mobile', '$from', '$to', '$date', '$time', '$carno', '$carname', '$noofseats', '$price');";
	
	if(mysqli_query($conn, $sql))
	{
		echo "Ride Shared!";
		
		$sql2 = "SELECT * FROM Rides WHERE DriverName = '$name' AND DriverEmail = '$email' AND DriverMobile = '$mobile' AND From = '$from' AND To = '$to' AND Date = '$date' AND Time = '$time' AND CarNo = '$carno' AND CarName = '$carname' AND NoOfSeats = '$noofseats' AND Price = '$price';";
		$result = mysqli_query($conn, $sql2);
		$ride_id;
		if(mysqli_num_rows($result) > 0)
		{
			$row = mysqli_fetch_assoc($result);
			$ride_id = $row["RideID`"];
		}
		else
		{
			//echo "Not Found!";
		}
		
		$sql3 = "INSERT INTO `majorproject`.`JoinedRides` (`JoinedRideID`, `RideID`, `PassengerName`, `PassengerEmail`, `PassengerMobile`, `NoOfSeatsBooked`, `DriverName`, `DriverEmail`, `DriverMobile`, `From`, `To`, `Date`, `Time`, `CarNo`, `CarName`, `NoOfSeats`, `Price`) VALUES (NULL, NULL, '$name', '$email', '$mobile', NULL, '$name', '$email', '$mobile', '$from', '$to', '$date', '$time', '$carno', '$carname', '$noofseats', '$price');";
		if(mysqli_query($conn, $sql3))
		{
			//echo "Join Ride Successfull!";
		}
		else
		{
			//echo "Join Ride unsuccessfull";
		}
	}
	else
	{
		echo mysqli_error($conn);
	}
	
	
?>

