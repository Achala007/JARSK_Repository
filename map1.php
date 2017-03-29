<html>
<head>
<title>Find us</title>

<link rel = "stylesheet" type="text/css" href="css/HomeCss.css">

<!-- <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>  -->
//The async attribute allows the browser to continue  the rest of web page while the API loads. 
//callback parameter for executes initialise function
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGw5mZQ_Fb8z1jcCX0zp1ndyfdq5dl8F4&callback=initialise">

</script>
</head>

<body bgcolor=black onload="initialise();">
<div>
<header>
   <h1 align="right"><font color="white" font-family = "Albertus Extra Bold">	J A R S K </font></h1>

</header>
<?php 
	include('nav.php');
 ?>
</div>
<hr color="gray">
<br/>
<br/>

<br/><br/><br/><br/>
//Defines an area of the page for map. 
<div id="map" style="height: 400px; width: 500px;margin-left:200px">

</div>


<h3></h3>

<script type="text/javascript">
//function
function initialise(){

//add content in infowindow,longtitude and latitude to an array
var locations = [
["<h4>Britan Warehouse</h4><p>London City</p>", 55.3781, 3.4360],
["<h4>srilanka Warehouse</h4><p>Panadura</p>", 7.8731, 80.7718],
["<h4>Europe Ware house</h4><p>Paris town</p>", 51.1657, 10.4515]
];

//Add this document.getElementById function to find the map div on the web page.
var map = new google.maps.Map(document.getElementById('map'), {
zoom: 2,
//Google maps object to construct a map in the div element.
center: new google.maps.LatLng(45.8629838,-6.7669772),
mapTypeId: google.maps.MapTypeId.ROADMAP
});
var infowindow = new google.maps.InfoWindow();
var marker, i;
for (i = 0; i < locations.length; i++) {
marker = new google.maps.Marker({
position: new google.maps.LatLng(locations[i][1], locations[i][2]),
map: map
});
google.maps.event.addListener(marker, 'click', (function(marker, i) {
return function() {
infowindow.setContent(locations[i][0]);
infowindow.open(map, marker);
}
})(marker, i));
}
}
</script>

</body>
</html>