
<?php
	session_start();
	include_once 'config.php';

	//Escape user input for security
	
	$cardType = $_POST["cardT"];
	$cardNumber = $_POST["cardN"];
	$name = $_POST["name"];
	$exDate = $_POST["exD"];
	$cvv = $_POST["cV"];
	$id = $_POST["cid"];
	
	//Attempt insert query execution
	$sql = "UPDATE carddetails SET cardNumber= '$cardNumber',cardType = '$cardType',name = '$name',exDate ='$exDate',cvv =$cvv  WHERE card_id= '$id'";
	
	if(mysqli_query($conn , $sql))
	{
		echo "<script> alert ('Records updated sucessfully!')</script>";
		
		header("Location: cardDetails.php");
	}
	else
	{
		echo "<script> alert ('ERRor : could not able to execute $sql.')</script>";
	}
	
	//close connection
	mysqli_close($conn);
	
?>