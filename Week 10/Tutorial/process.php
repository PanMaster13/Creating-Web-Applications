<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="styles/jasonstyle.css" />
	<title>Swinburne University, Sarawak, Malaysia</title>
	<meta charset="utf-8" />
	<meta name="author" content="Jason Ang Chia Wuen" />
	<meta name="description" content="Swinburne Website" />
	<meta name="keywords" content="Swinburne, University" />
</head>
<body>
	<script src="js/navigation.js"></script>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registerDB";

$conn = mysqli_connect($servername, $username, $password,  $dbname);

if (!$conn){
	die("Connection failed: " . mysqli_connect_error());
}
else{
	echo "Successfully connecting to database\n";
	echo "<br />";
}

$fname = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];

$sql = "INSERT INTO userInfo (firstname, email, dob)
VALUES ('$fname', '$email', '$dob')";

if (mysqli_query($conn, $sql)){
	echo "New record created successfully\n";
}
else{
	echo "Error: " . $sql . "<br\>" . mysqli_error($conn);
}

?>
	<h1>Booking Confirmed</h1>
	<h2>Thank you and come again</h2>
	<table class="center">
		<th>Description</th>
		<th>Value</th>
		<tr>
			<td>Firstname</td>
			<td><?php echo $fname;?></td>
		</tr>
		<tr>
			<td>Email address</td>
			<td><?php echo $email;?></td>
		</tr>
		<tr>
			<td>Date of birth</td>
			<td><?php echo $dob;?></td>
		</tr>
	</table>
	
<?php
mysqli_close($conn);
?>
	<script src="js/footer.js"></script>
</body>

</html>