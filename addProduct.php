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

    <form class="formDesign" method="post" action="submitAddMovies.php" >
    	<div class="productName">
	    	<p style="color:#ed0c0c;display: inline-block;">*</p><h3>Product Name </h3>    	<input type="text"  name="movieName" placeholder="Movie Name" >
	    </div>
	    <div class="productName">
	    	<p style="color:#ed0c0c;display: inline-block;">*</p><h3>Released Year</h3>    	<input type="text" name="movieDate" placeholder="Year" id="mvYR" >
	    </div>	
	   	 <div class="productName">
	    	<p style="color:#ed0c0c;display: inline-block;">*</p><h3>Format</h3>   <input type="text" name="movieFormat" placeholder="720p/1080p" id="mvFmt" >
	    </div>	
	   	
	   
	    <br/><br/>
	    <!-- product description-->
	    <div class="productDescription">
	    	<h3>Movie Description </h3>  
	    	<textarea rows="10" cols="100" name="movieDescription" id="mvD"></textarea>
	    </div>
	    <!-- image-->
	    <div class="productName">
	    	<p style="color:#ed0c0c;display: inline-block;">*</p><h3>Image path</h3><input type="text" name="img" value="images/movieThumb/"  id="img">
	    </div>	
	    <!-- category-->
	    <div class="productCT">
	    	<h3>Movie Category</h3>
	    	<p style="color:#ed0c0c;display: inline-block;"></p>   	<input type="text" name="movieCT" placeholder="Action/Animation/Adventure">
	    	
	    </div> <br/>
	    
	    <!-- price -->
	    <div class="price">
	    	<p style="color:#ed0c0c;display: inline-block;">*</p>
	    	<h3>Price</h3> 
	    	<input type="text" name="moviePrice" placeholder="0.00$" pattern= "[0-9]{0,}+\.[0-9]{0,}" id="prc">

	 	  </div> <br/>
	 	  <!-- rate-->
	 	 <div class="rating">
	    	<h3>IMDB Rating</h3> 
	    	<input type="number"  step= "any" name="imdbRate" min = "0" max = "10"placeholder="7.2" id="imdb">

	 	  </div><br/> 
	 	  <div class="rating">
	    	<h3>Tomato Rating</h3> 
	    	<input type="number" step= "any" name="rtRate" min = "0" max = "100"placeholder="94" id="RT">

	 	  </div><br/> 
	 	  
	 	
	 	  <!-- product submisson-->

	 	  <div class="sbmt">
	 	  	<input type="submit" name="productSubmit" value="SUBMIT THE PRODUCT">
	 	  
	 	  </div>

	 	
	 </form>  
	</body>
</html>
