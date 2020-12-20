<?php
	session_start();
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
	<title>
	 Wellcome to the Music and Video Store
	</title>
	<link rel="stylesheet" type="text/css" href="styles/avengers.css"> <!-- Linking the style sheet-->
    <script src="js/footer.js"></script>
	
</head>
<body >	
    <!-- header of the web page -->
    <header id="cover" >
			<img src="images/Okisa.png" width="100%" height="400px" alt="cover" ><!-- cover photo-->
            <img src="images/logo.png"  id = "logo" alt="logo" title="Logo">

		</header>
 		<!-- Navigation bar-->	
    <nav>
		<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="music.php">Music Shop</a></li>
				<li><a href="video.php">Video Shop</a></li>
                <li><a href="topchart.php">Top Charts</a></li>
				<li><a href="account.php">My Account</a></li>
                <li><a href="aboutUs.php">About Us</a></li>
				<li><a href="contactUs.php">Contact US</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Signup</a></li>
                <li><a href="logout.php">Log Out</a></li>
		</ul>	
    </nav>     
		<!-- Movie Image-->
   
    <!-- main part -->
    <div class = "mainDiv">
        <?php
        	echo "<img id = 'mainDivImg' src = ' $img ' alt='movi' height='500px' width='380px'>";
        ?>
        	<div id= "mvDetails">
                
                <div id = "detail1">
                    <h3 ><?php echo"$name"; ?></h3>
	               <h3 ><?php echo"$year"; ?></h3>
	               <h3 ><?php echo"$category"; ?></h3>
                    <h3>Available in : <?php echo"$format"; ?></h3>
                </div>
                
                <div class = "rating" >
                    <img src ="images/imdb.png"> <h3 style="display: inline-block;position: absolute;margin-top: -1px;"> &nbsp;: <?php echo"$imdb";?>/10</h3>
                
                </div>
                <div class = "rating" >
                    <img src ="images/rotten.png"> <h3 style="display: inline-block;position: absolute;margin-top: -1px;">&nbsp;<?php echo"$rotten";?>%</h3>
                
                </div>
                
	        </div>
       
        <div class= "simMv">
            <h3 style="color: aliceblue;">Similar Movies</h3>
            <a href = ""><img src="images/adMvThumb/adMv2.jpg" height="150px" width="100px"></a>
             <a href = ""><img src="images/adMvThumb/adMv5.jpg" height="150px" width="100px"></a>
            <br/>
             <a href = ""><img src="images/movieThumb/drkRises.jpg" height="150px" width="100px"></a>
             <a href = ""><img src="images/movieThumb/man_of_steel.jpg" height="150px" width="100px"></a>
            
        
        </div>
        <div class="btn1">
            <a href="payment.php" style="padding-left: 92px;padding-right: 92px;">Buy Now</a>
            <a href="https://www.youtube.com/watch?v=6ZfuNTqbHE8">Watch Trailer</a>
            
        </div>
        <br/><br/><br/>
        <article>
            <p>
            	<?php echo"$descp";?>
            
            </p>
            
        
        
        </article>
        
    </div>
    <br/><br/>

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
                <form action="avengers.html" method="post" onsubmit="newsLetter();">
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
 <?php 
 	$conn->close();
 ?>