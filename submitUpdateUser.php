<?php
	session_start();
	include_once 'config.php';
	$recordId = $_SESSION["id"] ;
	$fname=$_POST["fName"];
	$lname=$_POST["lName"];
	$phnNumb=$_POST["phno"];
	$uEmail=$_POST["email"];
	$password=$_POST["pwd"];
	$hashed_password = sha1($password);

	$sql="UPDATE user_details SET fname='$fname',lname='$lname',PhoneNumb='$phnNumb',email='$uEmail',password='$hashed_password' WHERE id='$recordId'";

	if (mysqli_query($conn, $sql)) {
  	 header("location:account.php");
	} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

?>
