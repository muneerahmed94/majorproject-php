 <?php
	require "init.php";
	
	$email = $_GET["email"];
	$password = $_GET["password"];
	
	$sql = "SELECT * FROM Users WHERE Email = '$email' AND Password = '$password';";
	
	$result = mysqli_query($conn, $sql);
	
	$user = array();
	
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		echo $row;
		$user["name"] = $row["name"];
		$user["email"] = $row["email"];
		$user["password"] = $row["password"];
	}
	else
	{
		echo "Not Found!";
	}
	
	echo json_encode($user);
?>