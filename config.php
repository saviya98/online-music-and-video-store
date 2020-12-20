<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "okisadb";
 //create new connection

 $conn = new mysqli($servername,$username, $password,$dbname);

 //check connection

 if($conn->connect_error)
 {
 	echo "<script>connected fail successfully</script>";
 	die("connection failed:".$conn->connect_error);

 }

 echo "<script>connected successfully</script>";
?>