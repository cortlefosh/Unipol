<?php 
	session_start();
	if (isset($_POST["name"])) {
		$_SESSION["name"] = $_POST["name"];
		$username = $_POST["name"];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<?php require "templates\head.php"; ?>
	<title>Welcome to Unipol!</title>
</head>
<body>
	<?php //require "templates\background.php";?>
	<img id="logo" src="img/logo.jfif">
	<h1 id="welcomeMessage">Welcome to Unipol<?php
		if (isset($username)) {echo ", " . $username;}
	?>!</h1>
	<p id="unipolDesc">Unipol is ipsum lorem dolor</p>
	<?php if (!isset($username)) { echo
	"<form id='nameInput' action='index.php' method='post'>
		<p>Enter your name here to access the Unipol datanet!</p>
		<input type='text' name='name' value='Enter Name'>
		<input type='submit' name='submit' value='Submit'>
	</form>";
	} else { echo
	'<form id="accessUnipol" action="datanet.php" method="post">
		<p>Click here to access the Unipol datanet!</p>
		<input type="submit" value="Access datanet">
	</form>';
	} ?>
</body>
</html>
