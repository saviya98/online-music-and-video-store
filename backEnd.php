<?php
session_start();
if (!isset($_SESSION["userName"])){// Not logged in
	header("Location:admin.php"); //Redirect to the login page
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="styles/moviemusicbkend.css">
	<script src="js/moviemusicbkend.js"></script>
</head>
<body>
	<!--horizontal Navigation bar-->
	<nav>
		<ul>
			<li><a href="backEnd.php">Home</a></li>
			<li><a href="addProduct.php">Add Product</a></li>
			<li><a href="adminVideo.php">Edit Product</a></li>
			<li><a href="#">User Reivews</a></li>
			<li><a href="#">User Accounts</a></li>
			<li><a href="topChartBack.php">Top Charts</a></li>
			<li><a href="#">Search</a></li>
			<li><a href="logout.php">Log Out</a></li>
		</ul>
	</nav>
	<!--header-->
	<div class="mainDesign">
		<div>
			<h1 onclick="main()">Dashboard</h1>
		</div>
		<div class="border1">
			<h2 id="t1">Total Downloads</h2>
			<h1 id="t2">4.2M</h1>
		</div>
		<div class="border1">
			<h2 id="t3">Total Members</h2>
			<h1 id="t4">5.7K</h1>
		</div>
		<div class="border1">
			<h2 id="t5">Trending Movie</h2>
			<h1 id="t6">Pets 2</h1>
		</div>
		<div class="border1">
			<h2 id="t7">Trending Music Album</h2>
			<h1 id="t8">Night Vision</h1>
		</div>
		<div>
			<table>
				<tr>
					<th>Movies Categories</th>
					<th>Music Categories</th>
				</tr>
				<tr>
					<td><a onclick="action()">Action</a></td>
					<td><a onclick="pop()">Pop</a></td>
				</tr>
				<tr>
					<td><a onclick="animation()">Animation</a></td>
					<td><a onclick="electronic()">Electronic</a></td>
				</tr>
				<tr>
					<td><a onclick="adventure()">Adventure</a></td>
					<td><a onclick="rock()">Rock</a></td>
				</tr>
				<tr>
					<td><a onclick="comedy()">Comedy</a></td>
					<td><a onclick="jazz()">Jazz</a></td>
				</tr>
				<tr>
					<td><a onclick="documentry()">Documentry</a></td>
					<td><a onclick="classical()">Classical</a></td>
				</tr>
				<tr>
					<td><a onclick="drama()">Drama</a></td>
					<td><a onclick="techno()">Techno</a></td>
				</tr>
				<tr>
					<td><a onclick="family()">Family</a></td>
					<td><a onclick="country()">Country</a></td>
				</tr>
				<tr>
					<td><a onclick="fantacy()">Fantacy</a></td>
					<td><a onclick="reagge()">Reagge</a></td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>