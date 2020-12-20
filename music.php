<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Music Store</title>
	<!--linking the css and js files-->
	<link rel="stylesheet" type="text/css" href="styles/music.css">
	<script src="js/music.js"></script>
</head>
<body>
	<!--cover photo-->
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
	<!--categories(verticle menu)-->
	<div class="musicMenu">
		<a onclick="genre1()">Pop</a>
		<a onclick="genre2()">Electronic</a>
		<a onclick="genre3()">Rock</a>
		<a onclick="genre4()">Jazz</a>
		<a onclick="genre5()">Classical</a>
		<a onclick="genre6()">Techno</a>
		<a onclick="genre7()">Country</a>
		<a onclick="genre8()">Reggae</a>
	</div>
	<!--Heading one-->
	<div class="headOne">
		<h2 id="headO">Trending Albums</h2>
	</div>
	<!--album raws 1-->
	<div class="album1">
	<div class="albumRaw1">
		<div class="albumRaw1-image">
			<a href="musicP.php"><img src="images/albumthumb/rock/r1.jpg" id="a1"></a>
			<a href="#" id="an1">Night Vision</a>
		</div>
	</div>
	<div class="albumRaw1">
		<div class="albumRaw1-image">
			<a href="musicP1.php"><img src="images/albumthumb/rock/r3.jpg" id="a2"></a>
			<a href="#" id="an2">Crack the Sky</a>
		</div>
	</div>
	<div class="albumRaw1">
		<div class="albumRaw1-image">
			<a href=""><img src="images/albumthumb/rock/r6.jpg" id="a3"></a>
			<a href="#" id="an3">Ocean</a>
		</div>
	</div>
	<div class="albumRaw1">
		<div class="albumRaw1-image">
			<a href="payments.html"><img src="images/albumthumb/electronic/e4.jpg" id="a4"></a>
			<a href="#" id="an4">Black Origami</a>
		</div>
	</div>
	</div>
	<!--heading two-->
	<div class="headTwo">
		<h2 id="headT">New Albums</h2>
	</div>
	<!--album raws 2-->
	<div class="album1">
	<div class="albumRaw1">
		<div class="albumRaw1-image">
			<a href="musicP2.html"><img src="images/albumthumb/electronic/e5.jpg" id="a5"></a>
			<a href="#" id="an5">Singularity</a>
		</div>
	</div>
	<div class="albumRaw1">
		<div class="albumRaw1-image">
			<a href="payments.html"><img src="images/albumthumb/sUntitled-1.jpg" id="a6"></a>
			<a href="#" id="an6">Wild</a>
		</div>
	</div>
	<div class="albumRaw1">
		<div class="albumRaw1-image">
			<a href="payments.html"><img src="images/albumthumb/s11.jpg" id="a7"></a>
			<a href="#" id="an7">Finding Neverland</a>
		</div>
	</div>
	<div class="albumRaw1">
		<div class="albumRaw1-image">
			<a href="payments.html"><img src="images/albumthumb/s8.jpg" id="a8"></a>
			<a href="#" id="an8">Lovers Rock</a>
		</div>
	</div>
	</div><br/><br/>
    
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
				<a href="music.html"class="ftrLinks">Music Shop</a>
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