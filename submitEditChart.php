<?php
	session_start();
	include_once 'config.php';
	$type=$_POST["Type"];

	if($type == "Edit Song")
	{	$id = $_POST["Id"];
		$rank = $_POST["rank"];
		$song = $_POST["song"];
		$artist = $_POST["artist"];

		$sql = "UPDATE  topsongs SET rank = '$rank',Song='$song',artist='$artist' WHERE Id='$id'" ;

		if (mysqli_query($conn, $sql)) {
	   	header("location:topchart.php");
		} else {
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
	}

	if($type == "Edit Movie")
	{	$id = $_POST["ID"];
		$rank = $_POST["rank"];
		$movie = $_POST["movie"];
		$imdb = $_POST["rating"];

		$sql = "UPDATE  topmovies SET rank = '$rank',movie='$movie',rating='$imdb' WHERE ID='$id'" ;

		if (mysqli_query($conn, $sql)) {
	   	header("location:topchart.php");
		} else {
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
	}

?>