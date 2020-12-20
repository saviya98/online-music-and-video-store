<?php
	include_once 'config.php';
	session_start();
?>

<?php

	$recordId = $_SESSION["id"] ;
	
	$sql = "DELETE FROM user_details WHERE id ='$recordId'";
	
	if(mysqli_query($conn , $sql))
	{
		//echo "<script> alert ('Records added sucessfully!!!!')</script>"
		
		header("Location: index.php");
	}
	else
	{
		echo "<script> alert ('ERRor : could not able to execute $sql.')</script>";
	}
	
	//close connection
	mysqli_close($conn);
	
?>