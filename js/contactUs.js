function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  var y = document.forms["myForm"]["email"].value;
  var z = document.forms["myForm"]["message"].value;
  if (x == "" || y == "" || z == "") {
    alert("Details must be filled out");
    return false;
  }
}

function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"