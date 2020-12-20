<?php
session_start();
if($_SESSION["userName"] == "admin@okisa.com")
{
	session_destroy();
	header("Location:admin.php");

}
else
{
	session_destroy();
	header("Location:login.php");
}	
?>
