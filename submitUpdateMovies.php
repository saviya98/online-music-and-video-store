<?php
	session_start();
	include_once 'config.php';

	
	$id = $_POST["ID"];
	$name = $_POST["movieName"];
	$year = $_POST["movieDate"];
	$format = $_POST["movieFormat"];
	$descp = $_POST["movieDescription"];
	$img = $_POST["img"];
	$category = $_POST["movieCT"];
	$price = $_POST["moviePrice"];
	$imdb = $_POST["imdbRate"];
	$rotten = $_POST["rtRate"];


$sql = "UPDATE movies SET mvName='$name',mvYR='$year',mvFMT='$format',mvDSCP='$descp',mvIMG='$img',mvCT='$category',mvPrice='$price',IMDB='$imdb',RT='$rotten' WHERE mvID='$id'";

if (mysqli_query($conn, $sql)) {
   header("location:adminVideo.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>