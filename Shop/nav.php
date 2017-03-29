<nav id="main_menu">
<ul >
  <li class ="navig"><a class="active" href="Main.php">Home</a></li>
  <li class ="navig"><a href="shop\PCgames.php">Service</a></li>
  <li class ="navig"><a href="Quiz\Quiz.php">Quiz</a></li>
  <li class ="navig"><a href="Comments\rate.html">Rate</a></li>
  <li class ="navig" ><a href="CV\meetus.html">Meet us</a></li>
  
  <?php 
  session_start();
  if(isset($_SESSION["user_name"])):
  ?>
	  <li class ="navig" style="float:right"><a href="logoutProcess.php">Hi!
	  <font color="red">
	  <?php 
	  echo $_SESSION["user_name"]; 
  ?>
		</font>
	  
	  </a></li>
	<?php
	//display poll options if deadline is not expired
	 else:
	?>
	  <li class ="navig" style="float:right"><a href="form.html">Login </a></li>
	  
<?php
	endif
?>
</ul>
</nav>