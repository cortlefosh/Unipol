<?php
	session_start();
	if (!isset($_SESSION["name"])) {header("Location: index.php"); die();}
	$username = $_SESSION["name"];
?>
<!DOCTYPE html>
<?php
	$mysqli = new mysqli('localhost', 'root');
	if (!$mysqli) {die('Could not connect to mySQL: ' . mysql_error());}
	if ($mysqli->query("CREATE DATABASE datanet") === TRUE) {echo '<p>Database "datanet" successfully created.</p>';}
	$mysqli->select_db("Datanet");
	$query = "CREATE TABLE `datanet`.`Elements` (`ID` INT PRIMARY KEY, `DOCNAME` VARCHAR(20))";
	$mysqli->query($query);
	$query = "INSERT INTO `datanet`.`Elements` (`ID`, `DOCNAME`) VALUES (1, 'Test')";
	$mysqli->query($query);
	$query = "INSERT INTO `datanet`.`Elements` (`ID`, `DOCNAME`) VALUES (2, 'New Test')";
	$mysqli->query($query);
	?>
<html>
<head>
	<?php include "templates\head.php"; ?>
	<title>UNIPOL Datanet</title>
</head>
<body>
	<span id='loggedIn'><p>Logged in as <?php echo $username; ?>. <a href="logout.php">Log out</a></p></span>
	<h1 id="datanetTitle">The UNIPOL Datanet</h1>
<?php 
	$result = $mysqli->query("SELECT * FROM Elements");
	while ($resultAr = mysqli_fetch_assoc($result)) {
		echo "<div class='element'><h2>ID: ".$resultAr["ID"]."</h2>"; 
		echo "<p>Name: ".$resultAr["DOCNAME"]."</p></div>";
	}
?>
</body>