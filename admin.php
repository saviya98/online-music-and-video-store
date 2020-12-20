
<?php //TOP OF THE PAGE
	include_once 'config.php';
	session_start();
	if(isset($_POST["email"]))
	{	
	
		$Email =$_POST["email"];
		$result = mysqli_query($conn,"SELECT * FROM user_details WHERE email='" . $_POST["email"] . "' and password = '". sha1($_POST["pwd"])."'");
		$row  = mysqli_fetch_array($result);

		if(is_array($row)) {
			$_SESSION["id"]=$row['id'];
			$_SESSION["userName"] = $row['email'];

		}
		else {
			echo "sorry!!!";
			 
		}
		if(isset($_SESSION["userName"])) {
			header("Location:backEnd.php");
		}
	}	
		
		$conn->close();
?>
<!DOCTYPE html>

<html>
<head>
	<title>
	 Wellcome to the Music and Video Store
	</title>
	<link rel="stylesheet" type="text/css" href="styles/admin.css"> <!-- Linking the style sheet-->
	<script  src="js/index.js"></script>
	
</head>
<body>	
			<header id="cover" >
			<img src="images/Okisa.png" width="100%" height="400px" alt="cover"  class="cImg" ><!-- cover photo-->
            <img src="images/logo.png"  id = "logo" alt="logo" title="Logo">

		</header>
	
    
<div class="aLog">
		<form align="center" action="admin.php" method="post">
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
			
    </div>
	


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