<?php
session_start();
if (!isset($_SESSION["userName"])){// Not logged in
  header("Location:admin.php"); //Redirect to the login page
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Prody</title>
	<link rel="stylesheet" type="text/css" href="styles/addProduct.css">
    <script src="js/addProduct.js"></script>
	
	
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: none;
  padding: 70px;
  width: 80%;
  
}


</style>

</head>
<body>

	 <nav>
		<ul>
			<li><a href="backEnd.php">Home</a></li>
      <li><a href="addProduct.php">Add Product</a></li>
      <li><a href="adminVideo.php">Edit Product</a></li>
      <li><a href="#">User Reivews</a></li>
      <li><a href="#">User Accounts</a></li>
      <li><a href="topChartBack.php">Top Charts</a></li>
      <li><a href="#">Search</a></li>
      <li><a href="logout.php">Log Out</a></li>

		</ul>	
    </nav> 

	
<div class="container">

    <h3>Add songs Top chart</h3>

  <form method = "post" action="submitTopChart.php">
   
	<label for="lname">Rank</label>
	<br>
    <input type="text"  name="rank" placeholder="rank.." >
	<br>
	<label for="fname">Song</label>
	<br>
    <input type="text" name="song" placeholder="song..">
	<br>
	<label for="fname">Artist</label>
	<br>
    <input type="text" name="artist" placeholder="artist..">
	<br>
    <input type="submit" value="Add Song" name="Type">
  </form>
</div> 
<div class="container">

 <h3>Add movie Top chart</h3>

  <form method = "post" action="submitTopChart.php">
   
	<label for="lname">Position</label>
	<br>
    <input type="text"  name="rank" placeholder="Rank..">
	<br>
	<label for="fname">Movie</label>
	<br>
    <input type="text" name="movie" placeholder="movie..">
	<br>
	<label for="fname">IMDB Rating</label>
	<br>
    <input type="text"  name="rating" placeholder="IMDB rating..">
	<br>
    <input type="submit" value="Add Movie" name="Type">
  </form>
</div>


	</body>
</html>

