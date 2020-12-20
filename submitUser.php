<?php
	include_once 'config.php';

?>
<?php

	
	$fname=$_POST["fName"];
	$lname=$_POST["lName"];
	$phnNumb=$_POST["phno"];
	$uEmail=$_POST["email"];
	$password=$_POST["pwd"];
	$hashed_password = sha1($password);

$sql = "INSERT INTO user_details (fname,lname,PhoneNumb,password,email)
VALUES ('$fname','$lname','$phnNumb','$hashed_password','$uEmail')";

$sql1 = "INSERT INTO login (email,password) VALUES ('$uEmail','$hashed_password')";

if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql1)) {
   header("location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>