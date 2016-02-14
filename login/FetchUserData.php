 <?php
	require "init.php";
	
	$email = $_GET["email"];
	$password = $_GET["password"];
	
	$sql = "SELECT * FROM Users WHERE Email = '$username' AND Password = '$password';";
	
	$result = mysqli_query($conn, $sql);
	
	$user = array();
	
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		$user["name"] = $row["Name"];
		$user["email"] = $row["Email"];
		$user["password"] = $row["Password"];
	}
	else
	{
		echo "Not Found!";
	}
	
	echo json_encode($user);
?>