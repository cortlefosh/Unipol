<!DOCTYPE html>
<?php 
	$mysqli = new mysqli('localhost', 'root');
	if (!$mysqli) {die('Could not connect to mySQL: ' . mysql_error());}
	echo '<p>Connection to mySQL successful.</p>';
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
	<h1 id="datanetTitle">The UNIPOL Datanet</h1>
<?php 
	$result = $mysqli->query("SELECT * FROM Elements");
	while ($resultAr = mysqli_fetch_assoc($result)) {
		echo "<h2>ID: ".$resultAr["ID"]."</h2>"; 
		echo "<p>Name: ".$resultAr["DOCNAME"]."</p>";
	}
?>
</body>