<?php
	include_once 'config.php';
	session_start();
?>

<?php

	$recordId = $_GET['Id'];
	
	$sql = "DELETE FROM carddetails WHERE card_id ='$recordId'";
	
	if(mysqli_query($conn , $sql))
	{
		echo "<script> alert ('Records deleted sucessfully!')</script>";
		
		header("Location: cardDetails.php");
	}
	else
	{
		echo "<script> alert ('ERRor : could not able to execute $sql.')</script>";
	}
	
	//close connection
	mysqli_close($conn);
	
?>