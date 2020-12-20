<?php
session_start();
$userName = "";
if(isset($_SESSION["userName"])) { //Already logged in
	$userName = $_SESSION["userName"]; //Use the session value
}
else {// Not logged in
	header("Location:admin.php"); //Redirect to the login page
}
?>

<?php
	include_once 'config.php';
 ?>
 <?php
			$sql="SELECT * FROM movies";
			$results=$conn->query($sql);
?>		
<!DOCTYPE html>

<html>
<head>
	<title>
	 Wellcome to the Music and Video Store
	</title>
	<link rel="stylesheet" type="text/css" href="styles/adminVideo.css"> <!-- Linking the style sheet-->
	<script  src="js/video.js"></script>
	
</head>
<body >	

    
	
	
		<!-- Navigation bar-->	
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

		<div class="mainDiv">
		<!-- Vertical menu -->
    
                <div class="videoMenu">
                        <a id = "actionMovies" onclick="acMvs();">Action</a>
                        <a id = "animationMovies" onclick="anMvs();">Animation</a>
                        <a id = "adventureMovies" onclick="adMvs();">Adventure</a>
                        <a id = "comedyMovies" onclick="comMvs();">Comedy</a>
                        <a id = "documentaryMovies" onclick="dcMvs();">Documentary</a>
                        <a id = "dramaMovies" onclick="drMvs();">Drama</a>
                        <a id = "familyMovies" onclick="fmMvs();">Family</a>
                        <a id = "fantasyMovies" onclick="fnMvs();">Fantasy</a>
                        <a id = "horrorMovies" onclick="hrMvs();">Horror</a>
                        <a id = "rmMovies" onclick="rmMvs();">Romantic</a>
                        <a id = "sfMovies" onclick="scMvs();">Sci-fi</a>


                </div>
                <!-- End of vertical menu-->
                <!--topic 1 -->
                <div class="topic1">
                    <h3>BEST MOVIES</h3>
                </div>
                <!-- movie list 1-->
                <table class="movieList1" >
                    <?php 
                    	$i = 0;
                    	echo "<tr>";
			                if ($results -> num_rows >0)
							{
								while($row = $results->fetch_assoc())
								{	

										$id = $row["mvID"];
									  echo " <td><a href='itemPreview.php ?Id=$id'><img src='".$row["mvIMG"]."'"."  id ='mv1' class='movieThumb'></a> <br><a href = 'editMovies.php ?Id=$id' class='edit'>Edit</a><br><a href = 'deleteMovies.php ?Id=$id' class='delete'>Delete</a></td>";
									 
									 $i++;
									 if($i == 4 )
							        {
							        	echo "</tr><tr>";
							        	$i = 0;
							        }
									
								}
							}	
							else{
									echo "0 results";
								}
								
							$conn->close();
					?>


                    
                    
                </table>
             
    </div>    
		


				<!-- Start of the footer part-->
		<footer class="fid">
			<div id="div1">
				<h3  id="fHeader">SITE LINKS</h3>
				<br/><br/>
				<a href="index.html" class="ftrLinks">Home</a>
				<br/><br/>
				<a href="account.html" class="ftrLinks">My Account</a>
				<br/><br/>
				<a href="contactUs.html" class="ftrLinks">Contatct US</a>
				<br/><br/>
				<a href="music.html" class="ftrLinks">Music Shop</a>
				<br/><br/>
				<a href="video.html" class="ftrLinks">Video Shop</a>
				<br>
				<img src="images/visa.png" style="margin-top: 50px">
				&nbsp;
				<img src="images/master.png" style="margin-top: 50px">
				&nbsp;
				<img src="images/paypal.png" style="margin-top: 50px">

			</div>
			<div id="div2">
				<h3  id="fHeader">SUBSCRIBE FOR OUR NEWS LETTER</h3>
				<br/>
                <form action="index.html" method="post" onsubmit="newsLetter();">
                        <input type="email" name="email" style="margin-left: 80px;" id = "Email"   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$" >
                        <br/>
                        <br/>
				
					<input type="submit" name="subBtn" style="margin-left:120px;" value="SUBSCRIBE">
                </form>


			</div>
			<div id="div3">
				<h3 id="fHeader">FOLLOW US ON</h3>
				<a href="www.facebook.com"><img src="images/fb.png"></a>
				&nbsp;
				<a href="www.facebook.com"><img src="images/tweet.png"></a>
				&nbsp;
				<a href="www.facebook.com"><img src="images/insta.png"></a>
				<br/>
				
			
			
			</div>
		</footer>



		
		

</body>
</html>
