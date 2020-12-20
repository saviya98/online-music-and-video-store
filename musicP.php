<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Music Preview</title>
	<!--linking the css and js files-->
	<link rel="stylesheet" type="text/css" href="styles/musicP.css">
	<script src="js/musicP.js"></script>
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
	<!--album name-->
	<div class="albmName">
		<h1 id="aName">Night Vision - Imagine Dragons</h1>
	</div>
	<!--album cover-->
	<div class="albmImage">
		<img id="aImage" src="images/albumthumb/ap1.jpg">
	</div>
	<!--price button-->
	<div class="albmPrice">
		<h2 id="">$ 9.00</h2>
	</div>
	<a href= "payment.html"class="btn" id="priceBtn" onclick="">Buy Album Now</a>
	<!--song list-->
	<div>
		<table class="table0">
			<tr>
				<td id="s1">Radioactive</td>
				<td id="t1">3.06</td>
				<td id="p1">$1.25</td>
				<td><a href= "payment.html">Buy</a></td>
			</tr>
			<tr>
				<td id="s2">Tiptoe</td>
				<td id="t2">3:14</td>
				<td id="p2">$1.25</td>
				<td><a href="payment.html">Buy</a></td>
			</tr>
			<tr>
				<td id="s3">It's Time</td>
				<td id="t3">4:00</td>
				<td id="p3">$1.25</td>
				<td><a href="payment.html">Buy</a></td>
			</tr>
			<tr>
				<td id="s4">Demons</td>
				<td id="t4">2:57</td>
				<td id="p4">$1.25</td>
				<td><a href="payment.html">Buy</a></td>
			</tr>
			<tr>
				<td id="s5">On Top of the World</td>
				<td id="t5">3:12</td>
				<td id="p5">$1.25</td>
				<td><a href="payment.html">Buy</a></td>
			</tr>
			<tr>
				<td id="s6">Amsterdam</td>
				<td id="t6">4:01</td>
				<td id="p6">$1.25</td>
				<td><a href="payment.html">Buy</a></td>
			</tr>
			<tr>
				<td id="s7">Hear Me</td>
				<td id="t7">3:55</td>
				<td id="p7">$1.25</td>
				<td><a href="payment.html">Buy</a></td>
			</tr>
			<tr>
				<td id="s8">Bleeding Out</td>
				<td id="t8">3:43</td>
				<td id="p8">$1.25</td>
				<td><a href="payment.html">Buy</a></td>
			</tr>
		</table>
	</div>
	<!--album details-->
	<!--first colomn-->
	<div>
		<table class="table1">
			<tr>
				<td><b>Gener:</b></td><td id="d1">Rock</td>
			</tr>
			<tr>
				<td><b>Date Released:</b></td><td id="d2"> September 4,2019 </td>
			</tr>
			<tr>
				<td><b>Total Time:</b></td><td id="d3">42:10</td>
			</tr>
		</table>
	</div>
	<!--second colomn-->
	<div>
		<table class="table2">
			<tr>
				<td><b>Lable:</b></td><td id="d4">Interscope Records</td>
			</tr>
			<tr>
				<td><b>Total Tracks:</b></td><td id="d5">08 Tracks</td>
			</tr>
			<tr>
				<td><b>Artist:</b></td><td id="d6"> Imagine Dragons</td>
			</tr>
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
</body>
</html>