
function slideShow()
{
	var myIndex = 0;
	vslide();
	vslide2();

	function vslide() {
	  var i;
	  var x = document.getElementsByClassName("mySlides");
	  for (i = 0; i < x.length; i++) {
	    x[i].style.display = "none";  
	  }
	  myIndex++;
	  if (myIndex > x.length) {myIndex = 1}    
	  x[myIndex-1].style.display = "block";  
	  setTimeout(vslide, 2000); // Change image every 2 seconds
	}
	function vslide2() {
	  var i;
	  var x = document.getElementsByClassName("mySlides2");
	  for (i = 0; i < x.length; i++) {
	    x[i].style.display = "none";  
	  }
	  myIndex++;
	  if (myIndex > x.length) {myIndex = 1}    
	  x[myIndex-1].style.display = "block";  
	  setTimeout(vslide2, 2000); // Change image every 2 seconds
	}
}
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