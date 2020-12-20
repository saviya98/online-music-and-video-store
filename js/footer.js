/*email validation*/
function newsLetter()
{
	var x = document.getElementById("Email").value;
	var y = x.length;
	
	
	if( y == 0)
	{
    	alert("Please Enter Your Email!!!");
    }	
    else
    {
    	alert("You have Succesfully Subscribed to Our News Letter");
    } 
}