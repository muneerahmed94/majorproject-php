 <?php
	require "init.php";
	
	$RideID = $_POST["RideID"];
	$NoOfSeatsNew = $_POST["NoOfSeatsNew"];
	$PassengerEmail = $_POST["PassengerEmail"];
	
	//update the NoOfSeatsNew (available) in Rides table
	$sql = "UPDATE `Rides` SET `NoOfSeats` = '$NoOfSeats' WHERE `RideID` = '$RideID';";
	$result = mysqli_query($conn, $sql);
	
	//delete the corresponding ride from the JoinedRides
	$sql1 = "DELETE FROM `JoinedRides` WHERE `RideID` = '$RideID' AND `PassengerEmail` = '$PassengerEmail';";
	mysqli_query($conn, $sql1);
		
	mysqli_close($conn);
?>