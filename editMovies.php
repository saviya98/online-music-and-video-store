<?php
session_start();
if (!isset($_SESSION["userName"])){// Not logged in
	header("Location:admin.php"); //Redirect to the login page
}
?>

<?php
	include_once 'config.php';
		$recordId = $_GET['Id'];
		$sql = "SELECT * FROM movies WHERE mvID = $recordId";
		$result = $conn->query($sql);
	if($result -> num_rows > 0)
	{
		// output data of each row
		
		while($row = $result -> fetch_assoc()){
			$id = $row["mvID"];
			$name = $row["mvName"];
			$year = $row["mvYR"];
			$format = $row["mvFMT"];
			$descp = $row["mvDSCP"];
			$img = $row["mvIMG"];
			$category = $row["mvCT"];
			$price = $row["mvPrice"];
			$imdb = $row["IMDB"];
			$rotten = $row["RT"];
		}
	}
	else{
			echo "0 results";
		}	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Prody</title>
	<link rel="stylesheet" type="text/css" href="styles/addProduct.css">
    <script src="js/addProduct.js"></script>
</head>
<body>

	 <nav>
		<ul>
			<li><a href="backEnd.php">Home</a></li>
			<li><a href="addProduct.php">Add Product</a></li>
			<li><a href="adminVideo.php">Edit Product</a></li>
			<li><a href="#">Statistics</a></li>
			<li><a href="#">User Reivews</a></li>
			<li><a href="#">User Accounts</a></li>
			<li><a href="topChartBack.php">Top Charts</a></li>
			<li><a href="#">Search</a></li>
			<li><a href="logout.php">Log Out</a></li>>

		</ul>	
    </nav>    

    <form class="formDesign" method="post" action="submitUpdateMovies.php">
    	<input type="hidden"  name="ID" value=<?php echo $id ?>>
    	<div class="productName">
	    	<p style="color:#ed0c0c;display: inline-block;">*</p><h3>Product Name </h3>    	<input type="text"  name="movieName" value= "<?php echo $name?>" >
	    </div>
	    <div class="productName">
	    	<p style="color:#ed0c0c;display: inline-block;">*</p><h3>Released Year</h3>    	<input id="mvYR" type="text" name="movieDate" value= <?php echo $year?> >
	    </div>	
	   	 <div class="productName">
	    	<p style="color:#ed0c0c;display: inline-block;">*</p><h3>Format</h3>   <input id="mvFmt" type="text" name="movieFormat" value= " <?php echo $format?>" >
	    </div>	
	   	
	   
	    <br/><br/>
	    <!-- product description-->
	    <div class="productDescription">
	    	<h3>Movie Description </h3>  
	    	<textarea rows="10" cols="100" name="movieDescription" id="mvD"><?php echo $descp?></textarea>
	    </div>
	    <!-- image-->
	    <div class="productName">
	    	<p style="color:#ed0c0c;display: inline-block;">*</p><h3>Image path</h3><input type="text" name="img" id="img" value= <?php echo $img?> >
	    </div>	
	    <!-- category-->
	    <div class="productCT">
	    	<h3>Movie Category</h3>
	    	<p style="color:#ed0c0c;display: inline-block;"></p>   	<input type="text" name="movieCT" value= <?php echo $category?>>
	    	
	    </div> <br/>
	    
	    <!-- price -->
	    <div class="price">
	    	<p style="color:#ed0c0c;display: inline-block;">*</p>
	    	<h3>Price</h3> 
	    	<input  id="prc" type="text" name="moviePrice" value= <?php echo $price ?>  pattern= "[0-9]{0,}+\.[0-9]{0,}" >

	 	  </div> <br/>
	 	  <!-- rate-->
	 	 <div class="rating">
	    	<h3>IMDB Rating</h3> 
	    	<input id ="imdb" type="number"  step= "any" name="imdbRate" min = "0" max = "10" value= <?php echo $imdb?>>

	 	  </div><br/> 
	 	  <div class="rating">
	    	<h3>Tomato Rating</h3> 
	    	<input id="RT" type="number" step= "any" name="rtRate" min = "0" max = "100" value= <?php echo $rotten?>>

	 	  </div><br/> 
	 	  
	 	
	 	  <!-- product submisson-->

	 	  <div class="sbmt">
	 	  	<input type="submit" name="productSubmit" value="SUBMIT THE PRODUCT">
	 	  
	 	  </div>

	 	
	 </form>  
	</body>
</html>
 <?php 
 	$conn->close();
 ?>