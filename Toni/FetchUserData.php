 <?php
	require "init.php";
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$sql = "SELECT * FROM TUsers WHERE username = '$username' AND password = '$password';";
	
	$result = mysqli_query($conn, $sql);
	
	$user = array();
	
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		$user["name"] = $row["name"];
		$user["age"] = $row["age"];
		$user["username"] = $row["username"];
		$user["password"] = $row["password"];
	}
	else
	{
		//echo "Not Found!";
	}
	
	echo json_encode($user);
?>