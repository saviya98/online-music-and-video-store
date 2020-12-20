<?php
	include_once 'config.php';
	session_start();
	
	$Email =$_POST["email"];
	$result = mysqli_query($conn,"SELECT * FROM user_details WHERE email='" . $_POST["email"] . "' and password = '". sha1($_POST["pwd"])."'");
	$row  = mysqli_fetch_array($result);

	if(is_array($row)) {
	$_SESSION["id"] = $row['id'];
	$_SESSION["name"] = $row['fname'];
	}
	else {
		echo "sorry!!!";
		 
	}
	if(isset($_SESSION["id"])) {
		header("Location:index.php");
	}
	
	$conn->close();

?>
