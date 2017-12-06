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
	<?php require "templates/head.php"; ?>
	<title>Unipol</title>
	<link rel="stylesheet" href="css/index_style.css">
</head>
<body>
	<header>
		<p id="wel_headertext">Founded 28th Feb 2017</p>
	</header>
	
	<section>
		<img src="img/index_images/wel_logo.png" alt="UNIPOL logo blue" id="wel_logo">
		<img src="img/index_images/wel_deftext.png" alt="" id="wel_deftext">
		<img src="img/index_images/wel_label.png" alt="UNIPOL" id="wel_label">
		<img src="img/index_images/wel_subtitle.png" alt="UNITED POLITICS" id="wel_subtitle">
		
		<a href="datanet.php" id="wel_loginbutton">Login</a>
	</section>	
	
	<footer>
	  <p id="wel_footertext">This webpage is a work in progress and currently managed privately by H.F.S. Wetton, M.S. Tanner and G.J. König.</p>
	</footer>
</body>
</html>
