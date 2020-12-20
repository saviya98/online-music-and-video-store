<?php
	session_start();
	include_once 'config.php';

	//Escape user input for security
	$cardType = $_POST["cardT"];
	$cardNumber = $_POST["cardN"];
	$name = $_POST["name"];
	$exDate = $_POST["exD"];
	$cvv = $_POST["cV"];
	
	//Attempt insert query execution
	$sql = "insert into carddetails (card_id , cardNumber , cardType , name , exDate , cvv) values('' ,'$cardNumber','$cardType', '$name'  , '$exDate','$cvv' )";
	
	if(mysqli_query($conn , $sql))
	{
		echo "<script> alert ('card Details added sucessfully!')</script>";
		
		header("Location: cardDetails.php");
	}
	else
	{
		echo "<script> alert ('ERRor : could not able to execute $sql.')</script>";
	}
	
	//close connection
	mysqli_close($conn);
	
?>