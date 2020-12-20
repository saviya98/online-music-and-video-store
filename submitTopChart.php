<?php
	session_start();
	include_once 'config.php';
	$type=$_POST["Type"];

	if($type == "Add Song")
	{	
		$rank = $_POST["rank"];
		$song = $_POST["song"];
		$artist = $_POST["artist"];

		$sql = "INSERT INTO topsongs (rank,Song,artist) VALUES ('$rank','$song','$artist')";

		if (mysqli_query($conn, $sql)) {
	   	header("location:topchart.php");
		} else {
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
	}

	if($type == "Add Movie")
	{	
		$rank = $_POST["rank"];
		$movie = $_POST["movie"];
		$imdb = $_POST["rating"];

		$sql = "INSERT INTO topmovies (rank,movie,rating) VALUES ('$rank','$movie','$imdb')";

		if (mysqli_query($conn, $sql)) {
	   	header("location:topchart.php");
		} else {
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
	}



?>