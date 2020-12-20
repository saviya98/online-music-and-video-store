<?php
	session_start();
	include_once 'config.php';
?>

<?php
	
	$recordId = $_GET['ID'];
		
		$sql = "DELETE FROM topmovies WHERE ID ='$recordId'";
		
		if(mysqli_query($conn , $sql))
		{
			//echo "<script> alert ('Records added sucessfully!!!!')</script>"
			
			header("Location: topChartBack.php");
		}
		else
		{
			echo "<script> alert ('ERRor : could not able to execute $sql.')</script>";
		}
		mysqli_close($conn);
	
?>