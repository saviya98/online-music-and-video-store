<?php
	session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<title>
	 Wellcome to the Music and Video Store
	</title>
	<link rel="stylesheet" type="text/css" href="styles/index.css"> <!-- Linking the style sheet-->
	<script  src="js/index.js"></script>
	
</head>
<body onload="slideShow();" >	
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
		
		<!-- videos shop slide show-->

		<div class="vCover" >
			<img src="images/videoCover/moonlight.jpg" class="mySlides">
			<img src="images/videoCover/loving.jpg" height= "633px" width= "436px" class="mySlides" >
			<img src="images/videoCover/assasian.jpg" height= "633px" width= "436px" class="mySlides">
			<img src="images/videoCover/rush.jpg" height= "633px" width= "436px" class="mySlides">
			<img src="images/videoCover/blade.jpg" height= "633px" width= "436px" class="mySlides">

		</div>
		<!-- buy now button1-->
		<div>
				<a class= "button"href="video.php">BUY MOVIES</a>

		</div>
		

		<!-- Music shop slide show-->
		<div class="vCover">
			<img src="images/musicCover/adel.jpg" height= "633px" width= "436px" class="mySlides2" >
			<img src="images/musicCover/rihanna.jpg" height= "633px" width= "436px" class="mySlides2" >
			<img src="images/musicCover/linkin.jpg" height= "633px" width= "436px" class="mySlides2" >
			<img src="images/musicCover/mj.jpg" height= "633px" width= "436px" class="mySlides2">
			<img src="images/musicCover/eminem.jpg" height= "633px" width= "436px" class="mySlides2">
		</div>
		<!-- buy now button2-->
		<div>
			<a class= "button"href="music.php">BUY MUSIC</a>
		</div>


		<!-- Start of the footer part-->
		<footer class="fid">
			<div id="div1">
				<h3  id="fHeader">SITE LINKS</h3>
				<br/><br/>
				<a href="index.php" class="ftrLinks">Home</a>
				<br/><br/>
				<a href="account.php" class="ftrLinks">My Account</a>
				<br/><br/>
				<a href="contactUs.php" class="ftrLinks">Contatct US</a>
				<br/><br/>
				<a href="music.php" class="ftrLinks">Music Shop</a>
				<br/><br/>
				<a href="video.php" class="ftrLinks">Video Shop</a>
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