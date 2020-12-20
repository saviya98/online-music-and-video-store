<?php
	include_once 'config.php';
	session_start();
?>

<?php

	$recordId = $_GET['Id'];
	
	$sql = "DELETE FROM billingdetails WHERE bill_id ='$recordId'";
	
	if(mysqli_query($conn , $sql))
	{
		echo "<script> alert ('Records deleted sucessfully!')</script>";
		
		header("Location: billingDetails.php");
	}
	else
	{
		echo "<script> alert ('ERRor : could not able to execute $sql.')</script>";
	}
	
	//close connection
	mysqli_close($conn);
	
?>