<?php
	require "init.php";
	
	$email = $_POST["email"];
	$from = $_POST["from"];
	$to = $_POST["to"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	$carno = $_POST["carno"];
	$carname = $_POST["carname"];
	$noofseats = $_POST["noofseats"];
	$price = $_POST["price"];
	
	$sql = "INSERT INTO `majorproject`.`Rides` (`RideID`, `Driver`, `From`, `To`, `Date`, `Time`, `CarNo`, `CarName`, `NoOfSeats`, `Price`) VALUES (NULL, '$email', '$from', '$to', '$date', '$time', '$carno', '$carname', '$noofseats', '$price');";
	
	if(mysqli_query($conn, $sql))
	{
		echo "Ride Shared!";
	}
	else
	{
		echo mysqli_error($conn);
	}
?>

