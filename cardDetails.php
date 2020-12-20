<?php
	session_start();
?>
<?php
	include_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>
	 Wellcome to the Music and Video Store
	</title>
	<link rel="stylesheet" type="text/css" href="styles/payment.css"> <!-- Linking the style sheet-->
	<style>
		button{
			border: none;
			background-color: black;
			padding: 5px;
		}
		button a{
			text-decoration: none;
			color: white;
			

		}
		button:hover{
			opacity: 0.5;
		}
		table{
			margin-top: 20px;
			border-collapse: collapse;
			width: 100%;
			background-color: silver;
		}	
		table,th,td{
			border:3px solid black;
			text-align: center;
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
    	<h2>My Card Details :</h2>
    <center>
    	<table>
    		<tr>
    			<th>Card ID</th>
    			<th>Card Number</th>
    			<th>Card Type</th>
    			<th>Name</th>
    			<th>Expire Date</th>
    			<th>CVV</th>
    			<th></th>
    			<th></th>
    			<th></th>
    		</tr>

    	<?php
    		$sql = "SELECT * FROM carddetails";
    		$result = $conn->query($sql);
    		if($result -> num_rows > 0)
    		{
    			while($row = $result -> fetch_assoc())
    			{
    				$id = $row["card_id"];

    				echo "<tr><td>".$row["card_id"]."</td>";
    				echo "<td>".$row["cardNumber"]."</td>";
					echo "<td>".$row["cardType"]."</td>";
					echo "<td>".$row["name"]."</td>";
					echo "<td>".$row["exDate"]."</td>";
					echo "<td>".$row["cvv"]."</td>";
					echo "<td><button type='submit'><a href='payed.php'>Pay Now</a></button></td>";
					echo "<td><button type='submit'><a href='editCardDetails.php?Id=$id'>Edit</a></button></td>";
					echo "<td><button type='submit'><a href='submitDeleteCardDetails.php?Id=$id'>Delete</a></button></td></tr>";

    			}
    		}
    		else
			{
				echo "0 results";
			}
			echo "</table>";

			$conn->close();
		?>
    	
    	
    </center>
    

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