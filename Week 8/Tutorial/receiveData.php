<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Using PHP functions, get, and if statements</title>
</head>

<body>
	<h1>Creating Web Applications - Lab 8</h1>
	
	<?php
		echo "<h2>Result from previous page</h2>";
		$firstname = $_GET["fname"];
		$lastname = $_GET["lname"];
		
		echo "Your first name is: " .$firstname. "<br />";
		echo "Your last name is: " .$lastname. "<br />";
	?>
	
</body>

</html>