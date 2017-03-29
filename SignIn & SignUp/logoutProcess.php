<?php
	session_start();
	unset($_SESSION["user_name"]);
	session_unset();
	session_destroy();
	header('Location: ../Main.php');
?>