<?php
	$fName = $_GET["firstname"];
	$lName = $_GET["lastname"];
	$email = $_GET["email"];
	$gender = $_GET["gender"];
	$comment = $_GET["comment"];
	$rate=$_GET["rate"];
include("Pro.php");
$query = "INSERT INTO `webtechusers2` (`UsersFullName`, `UsersLastname`, `UsersEmail`, `UsersGender`, `UsersComment`,`UsersRate`) VALUES ('$fName', '$lName', '$email', '$gender', '$comment','$rate')";
$result = mysqli_query($con,$query);

if(!$result)
		echo "Registration Successful";
		header("location: ../main.php");
		mysqli_close($con);
?>