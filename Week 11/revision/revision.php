<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "revision";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$conn)
	{
		die("Connection failed: ".mysqli_connect_error());
	}
	else
	{
		echo "Successfully connected to database\n";
		echo "<br/>";
	}
	
	$name = $_GET['name'];
	$size = $_GET['size'];
	$toppings = $_GET['topping'];
	$delivery = $_GET['delivery'];
	
	$t_list = implode(",", $toppings);
	
	$sql = "INSERT INTO t_revision (name, size, toppings, d_option)
	VALUES('$name', '$size', '$t_list', '$delivery')";
	
	if (mysqli_query($conn, $sql))
	{
		echo "Name recorded successfully\n";
	}
	else
	{
		echo "Error:".sql."<br/>".mysqli_error($conn);
	}
	
	mysqli_close($conn);
	header("Location: revision.html");
	
?>