<?php
	session_start();
	include_once 'config.php';
?>

<?php
	
	if(isset($_GET['Id']))
	{	
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
	}
	if(isset($_GET['ID']))
	{	
		$recordId = $_GET['ID'];
		
		$sql = "DELETE FROM movies WHERE Id ='$recordId'";
		
		if(mysqli_query($conn , $sql))
		{
			//echo "<script> alert ('Records added sucessfully!!!!')</script>"
			
			header("Location: topChartBack.php");
		}
		else
		{
			echo "<script> alert ('ERRor : could not able to execute $sql.')</script>";
		}
	}
	//close connection
	mysqli_close($conn);
	
?>