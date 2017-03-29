<?php

echo "<link rel=stylesheet type=text/css href=Style.css>";

/*Establishes connection to database*/
include("Pro.php");

/*Getting details for a record through form*/
$userName = $_GET["user"];
$password = $_GET["pass"];

// Checking whether a user name exists already
$selectionQuery = "SELECT * FROM WebTechUsers WHERE UsersUN = '$userName'";
$executeQuery = mysqli_query($con,$selectionQuery);
$row = mysqli_fetch_array($executeQuery);
// If the username is found
if($row['UsersUN'] == $userName){
	// Already existing username. So Redirects
	header("Location:AlreadyUserSignUp.html");
}else{
	// Username does not exist. Create user
	/*Register user writing SQL query*/
	$registerUserQuery = "insert into `webtechusers` values ('$userName','$password')";

	// Execute SQL Query
		$result = mysqli_query($con,$registerUserQuery);

	if($result){
		session_start();
		session_destroy();
		header("Location:../Main.php");
	}else{
		echo "Server under Maintance!!!!!!!!!!!!!!!!!!!!!";
	}
}



// CLosing the connection
mysqli_close($con);


?>