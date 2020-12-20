<?php
session_start();
if (!isset($_SESSION["userName"])){// Not logged in
  header("Location:admin.php"); //Redirect to the login page
}
?>
<?php
include_once 'config.php';
  if(isset($_GET['Id']))
  {
    $recordId = $_GET['Id'];
    $sql = "SELECT * FROM topSongs WHERE Id = $recordId";
    $result = $conn->query($sql);
    if($result -> num_rows > 0)
    {
    
      while($row = $result -> fetch_assoc())
      {
        $rank=$row["rank"];
        $song=$row["Song"];
        $artist=$row["artist"];
        
      }
    }  

  }
  if(isset($_GET['ID']))
  {  
    $recordId1 = $_GET['ID'];
    
    $sql1 = "SELECT * FROM topmovies WHERE ID = $recordId1";
    $result1 = $conn->query($sql1);


      if($result1 -> num_rows > 0)
      {
    
        while($row1 = $result -> fetch_assoc())
          {
          $rank1=$row1["rank"];
          $movie=$row1["movie"];
          $imdb=$row1["rating"];
          }
      }
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
				<li><a href="cat.page1.html">Prodct List</a></li>
				<li><a href="addProduct.html">Add Product</a></li>
				<li><a href="#">Statistics</a></li>
				<li><a href="#">User Reivews</a></li>
				<li><a href="#">User Accounts</a></li>
                <li><a href="#">Search</a></li>
                <li><a href="#">Log Out</a></li>

		</ul>	
    </nav> 

	
<div class="container">

    <h3>Add songs Top chart</h3>

  <form method = "post" action="submitEditChart.php">
   
	<label for="lname">Rank</label>
	<br>
    <input type="text"  name="rank"  value=<?php echo $rank ?> >
    <input type="hidden"  name="Id"  value=<?php echo $recordId ?> >
	<br>
	<label for="fname">Song</label>
	<br>
    <input type="text" name="song" value="<?php echo $song ?>">
	<br>
	<label for="fname">Artist</label>
	<br>
    <input type="text" name="artist" value="<?php echo $artist ?>">
	<br>
    <input type="submit" value="Edit Song">
  </form>
</div> 






	</body>
</html>
<?php 
  mysqli_close($conn);
?>