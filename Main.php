<!DOCTYPE.html>
<html>
<head>  
<title>
</title>  
<link rel = "stylesheet" type="text/css" href="css/HomeCss.css">

</head>
<style>
.w3-btn{width:300px;}

</style>
<body bgcolor="black"> 

 
<div >
<header>
  <img align="right" src="image/titlelog.png" width='200' height='41'>
   <h1 align="right">...... </h1>
</header>



<!-- Adds Header and Navigation to this web page. -->
<?php

	include('nav.php');

?>
</div>
<hr color="gray">
<br/>
<br/>

<div class="content " >
  <img class="mySlides" src="image/a.jpg" >
  <img class="mySlides" src="image/b.jpg" >
  <img class="mySlides" src="image/g.jpg">
  <img class="mySlides" src="image/e.jpg" >
  <img class="mySlides" src="image/h.jpg" >
</div>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div id="poll"  style="width:240px;  background:#eaeae1 ; height:150px; text-align:center; border: 4px solid white; margin-center" >
<?php 
	include('poll.php');
 ?>
</div>



<footer>
  <p><font color="white"><center>Team J A R S K Proudly Presents<br/><a href="#">Contact us</a></center></p>
  <a href="map1.php">map</a>
</footer>
 

<script>

function getVote(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("poll").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000); // Change image every 3 seconds
}
</script>


</body>
</html>