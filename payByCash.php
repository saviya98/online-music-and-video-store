<?php
	session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<title>
	 Wellcome to the Music and Video Store
	</title>
	<link rel="stylesheet" type="text/css" href="styles/payment.css"> <!-- Linking the style sheet-->
	<style>
		.b1{
			text-decoration: none;
			border: none;
			color: white;
			background-color: black;
			padding: 5px;
			font: 15px arial, sans-serif;
			margin-left: 150px;
		}
		.b1:hover{
			opacity: 0.5;
			cursor: pointer;
		}
	</style>

	
</head>
<body >	

    
		<header id="cover" >
			<img src="images/Okisa.png" width="100%" height="400px"><!-- cover photo-->
            <img src = "images/logo.png" id ="logo">

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

    <!--Starting the payment form-->
    <form method="post" action="submitBillingDetails.php" class="form">
    	<div class="sdiv">
    		<h3>Add Billing Details :</h3>
    		<br>
    		<label>First Name : </label>
    		<input type="text" name="fName" style="margin-left: 38px;" required>
    		<br><br>
    		<label>Last Name : </label>
    		<input type="text" name="lName" style="margin-left: 40px;" required>
    		<br><br>
    		<label>Address : </label>
    		<input type="text" name="add" style="margin-left: 57px;" required>
    		<br><br>
    		<label>Contact Number : </label>
    		<input type="Number" name="phone" style="margin-left: 03px;" required>
    		<br><br><br>
    		<input type="submit" class="b1" value="SUBMIT">
    	</div>
	</form>

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