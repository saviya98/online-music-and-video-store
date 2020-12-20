
<!DOCTYPE html>

<html>
<head>
	<title>
	 Wellcome to the Music and Video Store
	</title>
	<link rel="stylesheet" type="text/css" href="styles/login.css"> <!-- Linking the style sheet-->
	<script  src="js/index.js"></script>
	
</head>
<body>	
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
                <li><a href="search.php">Search</a></li>
		</ul>	
    </nav>    

		<form align="center" action="valid.php" method="post">
				<center>
				<fieldset style="width:400px">
					
					
					<legend><center><img src="images/user.png"  alt="image" height='150px' width="150px" style="margin-top:30px">
					</center></legend>
				
					<br/>
						
						<center>
						<table>
						<tr>
						<td align="right">User Name :</td>
						
						<td><input id="loginun" type="text" name="email" required></td>
						</tr>
						
						<tr>
						<td>Password :</td> 
						<td><input id = "loginpwd" type="password" name="pwd" required></td>
						</tr>
						
						</table>
						</center>
						<br/>
						
						<button id = "btn_login" onclick="loginFunc()" type="submit">Login</button>
						<p style="color:cyan"><u>forget password?</u></p>
						   
						<p id="para">Login with</p>
						<a href="https://accounts.google.com/Login/identifier?hl=EN&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
						<img src="images/google1.jpg" width="250px" height="45px" alt="sign in with google">
						</a>
				</fieldset>
				</center>
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
	function loginFunc(){
		
		var un = document.getElementById("loginun").value;
		var pwd = document.getElementById("loginpwd").value;

		if(un == "" || pwd == ""){
			alert("Enter user details");
		}
		else{
			alert("Details entered");
		}

		

	}
</script>

</html>
