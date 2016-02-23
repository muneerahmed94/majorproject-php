 <?php
	require "init.php";
	
	$sql = "SELECT * FROM product_info";
	
	$result = mysqli_query($conn, $sql);
	
	$response = array();
	
	while($row = mysqli_fetch_array($result))
	{
		array_push($response, array("name"=>$row[0], "email"=>$row[1], "mobile"=>$row[2]));
	}
	
	echo json_encode(array("server_response"=>$response);
	
	mysqli_close($conn);
?>