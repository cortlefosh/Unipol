<?php 
	session_start();
?>
<!DOCTYPE html>
<html><head>
	<!--?php require "templates/head.php"; ?-->
	<link rel="stylesheet" href="css/unipol.css"> <!--Remove on server-->
	<title>Unipol</title>
	<link rel="stylesheet" href="css/index_style.css">
</head>
<body>
	<header>
		<p id="welHeadertext">Founded 28th Feb 2017</p>
	</header>
	
	<h3 class="welText" id="welSubtitle">United Politics</h3>		
	<img src="img/index_images/wel_logo.png" alt="UNIPOL logo blue" id="welLogo">
	<h1 class="welText" id="welLabel">Unipol</h1>
	<h2 class="welText" id="welDeftext">Decentralised Concensus Network<br>for Collective Analysis<br>in Deductive Research</h2>
		
	<form id="welLoginForm" action="login.php" method="post" target="_self">
	  	<input type="text" name="username" placeholder="Username"><br>
		<input type="password" name="password" placeholder="Password"><br>
	  	<input type="submit" class="welText" id="welLoginbutton" value="Login">
	</form>
	
	<footer>
	  <p id="welFootertext">This webpage is a work in progress and currently managed privately by H.F.S. Wetton, M.S. Tanner and G.J. König.</p>
	</footer>
</body>
</html>
