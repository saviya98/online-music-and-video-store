<?php
	session_start();
	include_once 'config.php';

	//Escape user input for security
	
	$firstName = $_POST["fName"];
	$lastName = $_POST["lName"];
	$address = $_POST["add"];
	$contact = $_POST["phone"];
	$id = $_POST["bid"];
	
	//Attempt insert query execution
	$sql = "UPDATE billingdetails SET fName= '$firstName',lName = '$lastName',address = '$address',contact_no ='$contact'  WHERE bill_id= '$id'";
	
	if(mysqli_query($conn , $sql))
	{
		echo "<script> alert ('Records updated sucessfully!')</script>";
		
		header("Location: billingDetails.php");
	}
	else
	{
		echo "<script> alert ('ERRor : could not able to execute $sql.')</script>";
	}
	
	//close connection
	mysqli_close($conn);
	
?>