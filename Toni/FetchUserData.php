 <?php
	require "init.php";
	
	$username = $_GET["username"];
	$password = $_GET["password"];
	
	$sql = "SELECT Name FROM TUsers WHERE username = '$username' AND password = '$password';";
	
	$result = mysqli_query($conn, $sql);
	
	$user = array();
	
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		//echo $row;
		//$user["name"] = $row["name"];
		//$user["age"] = $row["age"];
		//$user["username"] = $row["username"];
		//$user["password"] = $row["password"];
		//echo $name;
		echo $row["name"];
		//echo $row["age"];
	}
	else
	{
		echo "Not Found!";
	}
	//echo $user;
	//echo json_encode($user);
?>