<?php
	session_start();
	include_once 'config.php';


	$name = $_POST["movieName"];
	$year = $_POST["movieDate"];
	$format = $_POST["movieFormat"];
	$descp = $_POST["movieDescription"];
	$img = $_POST["img"];
	$category = $_POST["movieCT"];
	$price = $_POST["moviePrice"];
		$imdb = $_POST["imdbRate"];
	$rotten = $_POST["rtRate"];


$sql = "INSERT INTO movies (mvName,mvYR,mvFMT,mvDSCP,mvIMG,mvCT,mvPrice,IMDB,RT)
VALUES ('$name','$year','$format','$descp','$img','$category','$price','$imdb','$rotten')";

if (mysqli_query($conn, $sql)) {
   header("location:adminVideo.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>