<?php
session_start();
include_once 'config.php';
	$recordId = $_GET['Id'];
	$sql = "SELECT * FROM carddetails WHERE card_id = $recordId";
	$result = $conn->query($sql);
if($result -> num_rows > 0)
{
	// output data of each row
	
	while($row = $result -> fetch_assoc()){
	
		$cardType = $row["cardType"];
		$cardNumber = $row["cardNumber"];
		$name = $row["name"];
		$exDate = $row["exDate"];
		$cvv = $row["cvv"];
		$id = $row["card_id"];
	}
}
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
				<li><a href="index.html">Home</a></li>
				<li><a href="music.html">Music Shop</a></li>
				<li><a href="video.html">Video Shop</a></li>
                <li><a href="topchart.html">Top Charts</a></li>
				<li><a href="account.html">My Account</a></li>
                <li><a href="aboutUs.html">About Us</a></li>
				<li><a href="contactUs.html">Contact US</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="signup.html">Signup</a></li>
                <li><a href="search.html">Search</a></li>
		</ul>	
    </nav>

    <!--Starting the payment form-->
    <form method="POST" action="submitEditCardDetails.php" class="form">
    	<div class="sdiv">
    		<h3>Add Card Details :</h3>

    		<input type="hidden"  name="cid" value= <?php echo $id ?>>
    		<label>Card Type : </label>
    		<select name="cardT" style="margin-left: 40px;" value= <?php echo $cardType ?>>
    			<option>American Express</option>
    			<option>Master Card</option>
    			<option>Visa Card</option>
    		</select>
    		<br><br>
    		<label>Card Number : </label>
    		<input type="Number" name="cardN" style="margin-left: 20px;"required value=<?php echo $cardNumber ?>>
    		<br><br>
    		<label>Name : </label>
    		<input type="text" name="name" style="margin-left: 70pX;" required value=<?php echo $name ?>>
    		<br><br>
    		<label>Expiry Date : </label>
    		<input type="Date" name="exD" style="margin-left: 30px;" required value=<?php echo $exDate ?>>
    		<br><br>
    		<label>CVV : </label>
    		<input type="Number" name="cV" style="margin-left: 75px;" required value=<?php echo $cvv ?>>
    		<br><br><br>
    		<input type="submit" class="b1" value="UPDATE">
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
<?php 
 	$conn->close();
 ?>