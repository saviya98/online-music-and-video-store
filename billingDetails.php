<?php
	include_once 'config.php';
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
		}	
		table,th,td{
			border:3px solid black;
			text-align: center;
		}
	</style>
	<script>
		function pay(){
			alert ("payement successful");
		}
	</script>

	
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
    <center>
    	<table border="1px" width="100%">
    		<tr>
    			<th>Bill ID</th>
    			<th>First Name</th>
    			<th>Last Name</th>
    			<th>Address</th>
    			<th>Contact No</th>
    			<th></th>
    			<th></th>
    			<th></th>
    		</tr>

    <?php
		$sql = "SELECT * FROM billingdetails";
		$ans = $conn->query($sql);
		if($ans -> num_rows > 0)
		{
			// output data of each row
			
			while($row = $ans->fetch_assoc())
			{
				$id = $row["bill_id"];

				echo "<tr><td>".$row["bill_id"]."</td>";
				echo "<td>".$row["fName"]."</td>";
				echo "<td>".$row["lName"]."</td>";
				echo "<td>".$row["address"]."</td>";
				echo "<td>".$row["contact_no"]."</td>";
				echo "<td><button type='submit'><a href='order.php?Id=$id'>Order Now</a></button></td>";
				echo "<td><button type='submit'><a href='editBillingDetails.php?Id=$id'>Edit</a></button></td>";
				echo "<td><button type='submit'><a href='submitDeleteBillDetails.php?Id=$id'>Delete</a></button></td></tr>";
				
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