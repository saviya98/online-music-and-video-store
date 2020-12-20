//password function
function checkpassword()
{
	var a = document.getElementById("pw1").value;
	var b = document.getElementById("pw2").value;
	
	if(a == b)
	{
		 alert("Submisson Succesfull");
		 return true;
	}
	else
	{
		 alert("Password Mismatched");
		 return false;
	}
}