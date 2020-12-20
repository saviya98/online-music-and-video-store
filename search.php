<!DOCTYPE html>

<html>
<head>
	<title>
	 Wellcome to the Music and Video Store
	</title>
	<link rel="stylesheet" type="text/css" href="styles/search.css"> <!-- Linking the style sheet-->
	<script src="js/search.js"></script>
	
</head>
<body >	
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
		
		<div id="content">    
			    <h1>Search</h1>
				<br><br>
				<label class="Control label" for="input-search">Search Criteria</label> 
			
			
		<div id="bx1" >
		         
			<select  name="category_id">
				<option value="categories">Categories</option>
				<option value="music">Music</option>
                <option value="video">Video</option>
                <option value="movie">Movie</option>
   
	        </select>
	           <br><br>
		
		<!--search bar-->
	            <input  type="text"  id="myInput" onkeyup="myFunction()" placeholder="Enter a search term...."> 
		</div>
		
		        <br>
		<div id="btn">
		        <input type="button" value="search">
		</div>
		
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