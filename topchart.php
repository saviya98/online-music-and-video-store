<?php
  session_start();
  include_once 'config.php';

  $sql="SELECT * from topsongs";
  $sql1="SELECT * from topmovies";
  $results=$conn->query($sql);
  $results1=$conn->query($sql1);

?>  
<!DOCTYPE html>

<html>
    <head>
        <title>
         Wellcome to the Music and Video Store
        </title>
        <link rel="stylesheet" type="text/css" href="styles/topcharts.css"> <!-- Linking the style sheet-->


    </head>
    <body>	
            <header id="cover" >
                <img src="images/Okisa.png" width="100%" height="400px" alt="cover" ><!-- cover photo-->
                <img src="images/logo.png"  id = "logo" alt="logo" title="Logo">

            </header>
            <div>
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
                
        <div class="topChart">        
            <h1 style="text-align: center;margin-top: 100px;  ">Weekly Top Music Chart</h1>
            <table border="1.5px" class = "table">
                <tr>
                    <th>Rank</th>
                    <th>Song</th>
                    <th>Artist</th>
                </tr>
                <?php 
                    
                  if ($results -> num_rows >0)
                  {
                    while($row = $results->fetch_assoc())
                    { 
                      $id = $row["Id"];

                      echo "<tr><td>".$row["rank"]."</td>";
                      echo "<td>".$row["Song"]."</td>";
                      echo "<td>".$row["artist"]."</td></tr>";
                      
                    }
                  } 
                  else{
                      echo "0 results";
                    }
                    
                 
          ?>
                
            </table>
        </div>    

            <div class="topChart">
            <h1 style="text-align: center; color: azure;">Weekly Top Video Chart</h1>

                <table border="1.5" class="table">
                    <tr>
                      <th>Rank</th>
                      <th>Movie</th>
                      <th>IMDB Rating</th>
                    </tr>
                    <?php 
                    
                  if ($results1 -> num_rows >0)
                  {
                    while($row = $results1->fetch_assoc())
                    { 
                      $id = $row["ID"];

                      echo "<tr><td>".$row["rank"]."</td>";
                      echo "<td>".$row["movie"]."</td>";
                      echo "<td>".$row["rating"]."</td></tr>";
                      
                    }
                  } 
                  else{
                      echo "0 results";
                    }
                    
                  $conn->close();
          ?>
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