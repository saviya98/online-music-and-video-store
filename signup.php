<!DOCTYPE html>
<html>
<head>
	<title>sign up page</title>
	<link rel="stylesheet" href="styles/signup.css">
	<script src="js/register.js">
	</script>
</head>

<body>
		<header id="cover" >
			<img src="images/Okisa.png" width="100%" height="400px" alt="cover" ><!-- cover photo-->
            <img src="images/logo.png"  id = "logo" alt="logo" title="Logo">

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


	<form style="border:10px solid #ccc" action="submitUser.php" method="post">
	  <div class="container">
	    <h1 align="center">Sign Up</h1>
	    <p > Please fill in this form to create an account.</p>
		<hr>
		
	 	<div class="center">
	   		<fieldset align="center">
			
			   <div field> &nbsp &nbsp
				    <b> First Name:</b>
				   <input style="width:300px; margin-right: 50px;" type ="text" id="fname" name="fName" placeholder="first name" required>
				   
				   <b> Last Name:</b>
				   <input style="width:300px;" type ="text" id="lname" placeholder="last name"  name ="lName" required>
				</div>

				<br/> <br/>

				<div field>
	    			<label for="email"><b>Email:</b></label> 	
					<input type="email" placeholder="Enter Email" name="email" required>
				</div>
				<br>
				
				<div field>
	    			<label for = "phone"><b>Phone NO:</b></label>
        			 <input type ="tel" name ="phno" size ="30" maxlength ="10" placeholder ="Enter a valid phone number"
         			pattern = "[0-9]{10}">
				</div>
				<br>
			
				<div field>
					<label for="psw"><b>Password:</b></label> 
					<input type="password" name="pwd" placeholder="Enter Password" id="pwd">
				</div>
	    		<br><br>

				<div field>
	    			<label for="psw-re-enter"><b>Re-enter Password:</b></label>  
				   <input type="password" placeholder="Re-enter Password" id="pawd" required>
				</div>
				<br><br>

		
	    		Remember me
	      		<input type="checkbox" id="chkbx" onclick="enableButton()" required>
	    
	    
	 

				<center>
					<div>
						<p class="p1">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
						&nbsp &nbsp
						<button id="btn2" type="submit" onclick ="validatePassword()" class="sign">Sign Up</button> &nbsp &nbsp
						<button id="btn1" type="button" class="cancelbtn">Cancel</button>
				</div>
					
				</center>
	
			</fieldset>
	 	</div>
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

	<script>

	

	//check password match
	function validatePassword(){

		var pasw = document.getElementById("pwd").value;
		var rpasw = document.getElementById("pawd").value;

		
		if(pasw==rpasw )
		{
			alert("password matched");
			
			
		}
		else
		{
			alert("password missmatched");
			
			
		}
	}	

</script>
	


</html>
