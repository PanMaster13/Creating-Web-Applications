<!DOCTYPE html>
<html lang="en">	
<head>
	<meta charset="utf-8">
	<link href="styles/style.css" rel="stylesheet">
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbase = "enquiry";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbase);
//Check connection
if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT fname, lname, email, phone, address, city, state, postcode, product, date, duration, comment FROM e_table";
$result = $conn->query($sql);

if( $result->num_rows > 0){
	echo "<table>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Address</th>
				<th>City</th>
				<th>State</th>
				<th>Postcode</th>
				<th>Product</th>
				<th>Date</th>
				<th>Duration</th>
				<th>Comments</th>
			</tr>";
	//output data of each row
	while($row = $result->fetch_assoc()){
		echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["postcode"]."</td><td>".$row["product"]."</td><td>".$row["date"]."</td><td>".$row["duration"]."</td><td>".$row["comment"]."</td></tr>";
	}
	echo "</table>";
} else{
	echo "0 results";
}

$conn->close();
?>
