<?php
	$con=mysqli_connect("localhost","root","");//Giving DB info.to connect
	mysqli_select_db($con,"WebTechDB");
	
	if(!$con)
		echo "failed".mysqli_connect_error();
	else
		//echo " Connection Success!";
?>