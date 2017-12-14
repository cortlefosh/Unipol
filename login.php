<?php 
	//WARNING: NOT SECURE!!!
	session_start();
	if (isset($_POST["username"])) { //set username session var & redirect if user is logged in
		$SESSION["username"] = $POST["username"];
		header("Location: datanet.php"); 
		die();
	} else { //if user isn't logged in, redirect to index.php
		header("Location: index.php"); 
		die();
	}
?>