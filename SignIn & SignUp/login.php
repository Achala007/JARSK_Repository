<?php
	include("pro.php");
	
		$name=$_GET["user"];
		$password=$_GET["pass"];
		
		//write sql querry
		$select="select * from WebTechUsers where UsersUN='$name' and UsersPwd='$password'";
		echo $name.$password;
		//Execute SQL Querry
		$result=mysqli_query($con,$select);
		//read sigle row of result set
		$row=mysqli_fetch_array($result);
		
		//echo $row['UsersUN'];
		
		if(strcasecmp($row['UsersUN'], $name) == 0){
			session_start();
			$_SESSION["user_name"] = $row['UsersUN'];
		} else {
			
		}
		if(isset($_SESSION["user_name"])) {
	header('Location: ../Main.php');
		}else{
				header('Location: LoginError.html');
		}
		
		
		
?>
		