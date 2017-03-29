<!DOCTYPE.html>
<html>
<head>  
<style>

</style>
<title>
</title>  
<link rel = "stylesheet" type="text/css" href="../Homecss.css">

</head>

<body bgcolor="black" onload="openWin()"  > 

<script>
var myWindow;

function openWin() {
    myWindow = window.open("", "","width=400, height=200 scrollbars=no");
    myWindow.document.write("<img  src='i.png' />");
	myWindow.document.write.bgcolor="Black"
	setInterval(function() {wait();},2000);
}
function wait()
        {
            myWindow.close();
        }
function confirmInput() {
  var x;
    fname = document.forms[0].fname.value;
	lname = document.forms[0].lname.value;
    if (confirm("First Name : "+""+fname+"\n Last Name : "+lname) == true) {
        window.location.href="/cw/Main.php";
    } else {
       
    }

  
   
}

</script>
<header>
  <img align="right" src="../image/titlelog.png" width='200' height='41'>
   <h1 align="right">...... </h1>
</header>

<?php 
	include('../nav.php');
 ?>
<hr/>
<br/>
<br/>

  <form onsubmit="confirmInput()" action="p2.php" method="get" ><font color="white">
  <label for="fname">First Name</label><br/>
  <input type="text" id="fname" name="firstname" required><br/>

   <label for="lname">Last Name</label><br/>
    <input type="text" id="lname" name="lastname" required><br/>
   <br/>
    
	   <label for="email"><font color="black">....</font>Email</label><br/>
	   <input type="radio" name="select" value="select" > 
    <input type="email" id="email" name="email" required>
	
 <br/>
 	 <br/>
 <label for="gender"> <font size="4"> Gender </font></label>
  <input type="radio" name="gender" value="male" required> Male
   <input type="radio" name="gender" value="female" required>Female
  

	 <br/>
			<br/>
			<br/>
	 <label for="comment"> Comment </label><br/>
    <input type="textarea"  name="comment" placeholder="  Enter text here..." required>
    
	<br/>
		<br/>
			<br/>
	<label for="rate"> <font size="4"> Rate Us </font></label>
  <input type="radio" name="rate" value="1" required> 
   <input type="radio" name="rate" value="2" required>
    <input type="radio" name="rate" value="3" required> 
   <input type="radio" name="rate" value="4" required>
    <input type="radio" name="rate" value="5" required> 
     <br/>
	 <br/>
	 <br/>
   <input type="submit" value="Submit" name="submit">
   </font>
  </form>
 




</body>
</html>