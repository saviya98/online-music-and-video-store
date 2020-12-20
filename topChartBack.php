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
         
    		<!-- Navigation bar-->	
    <nav>
		<ul>
        <li><a href="backEnd.php">Home</a></li>
  			<li><a href="addTopChart.php">Add Top Songs</a></li>
        <li><a href="addTopChart.php">Add Top Movies</a></li>
        <li><a href="#">User Reivews</a></li>
        <li><a href="#">User Accounts</a></li>
        <li><a href="topChartBack.php">Top Charts</a></li>
        <li><a href="#">Search</a></li>
        <li><a href="logout.php">Log Out</a></li>a></li>
		</ul>	
    </nav>   
                
         <div class="topChart">        
            <h1 style="text-align: center;margin-top: 100px;  ">Weekly Top Music Chart</h1>
            <table border="1.5px" class = "table">
                <tr>
                      <th>Position</th>
                      <th>Song</th>
                      <th>Artist</th>
                     <th>Edit</th>
                     <th>Delete</th>
                </tr>
                <?php 
                    
                  if ($results -> num_rows >0)
                  {
                    while($row = $results->fetch_assoc())
                    { 
                      $id = $row["Id"];

                      echo "<tr><td>".$row["rank"]."</td>";
                      echo "<td>".$row["Song"]."</td>";
                      echo "<td>".$row["artist"]."</td>";
                      echo "<td><button type='submit'><a href='editTopChart.php?Id=$id'>Edit</a></button></td>";
                      echo "<td><button type='submit'><a href='DeleteTopChart.php?Id=$id'>Delete</a></button></td></tr>";
                      
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
                      $id1 = $row["ID"];

                      echo "<tr><td>".$row["rank"]."</td>";
                      echo "<td>".$row["movie"]."</td>";
                      echo "<td>".$row["rating"]."</td>";
                      echo "<td><button type='submit'><a href='editTopChart1.php?ID=$id1'>Edit</a></button></td>";
                      echo "<td><button type='submit'><a href='DeleteTopChart1.php?ID=$id1'>Delete</a></button></td></tr>";
                      
                    }
                  } 
                  else{
                      echo "0 results";
                    }
                    
                  $conn->close();
          ?>
                </table>	
            </div>		




          
    </body>
</html>