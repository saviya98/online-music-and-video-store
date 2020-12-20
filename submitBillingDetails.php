<?php
	session_start();
	include_once 'config.php';

	//Escape user input for security
	$firstName = $_POST["fName"];
	$lastName = $_POST["lName"];
	$address = $_POST["add"];
	$contact = $_POST["phone"];
	
	//Attempt insert query execution
	$sql = "insert into billingdetails (bill_id,fName,lName,address,contact_no) values('','$firstName','$lastName','$address','$contact')";
	
	if(mysqli_query($conn , $sql))
	{
		echo "<script> alert ('card Details added sucessfully!')</script>";
		
		header("Location: billingDetails.php");
	}
	else
	{
		echo "<script> alert ('ERRor : could not able to execute $sql.')</script>";
	}
	
	//close connection
	mysqli_close($conn);
	
?>