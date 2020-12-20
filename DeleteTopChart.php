<?php
	session_start();
	include_once 'config.php';
?>

<?php
	
		
		$recordId = $_GET['Id'];
		
		$sql = "DELETE FROM topsongs WHERE Id ='$recordId'";
		
		if(mysqli_query($conn , $sql))
		{
			//echo "<script> alert ('Records added sucessfully!!!!')</script>"
			
			header("Location: topChartBack.php");
		}
		else
		{
			echo "<script> alert ('ERRor : could not able to execute $sql.')</script>";
		}
	//close connection
	mysqli_close($conn);
	
?>