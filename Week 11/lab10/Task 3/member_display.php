<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>VIP Member Home Page</title>
</head>

<body>
	<h1>VIP Member Display Page</h1>
	
	<?php
		$servername ="localhost";
		$username = "root";
		$password = "";
		$dbname = "lab10";
			
		$conn = mysqli_connect($servername, $username, $password, $dbname);
			
		if (!$conn){
			die("Connection failed: ".mysqli_connect_error());
		}
			
		$db_array = 'SELECT member_id, fname, lname FROM vipmembers';
		$result = $conn->query($db_array);
		
		if( $result->num_rows > 0)
		{
			echo "<table>
					<tr>
						<th>ID</th>
						<th>First Name</th>
						<th>Last Name</th>
					</tr>";
					
			while($row = $result->fetch_assoc())
			{
				echo "<tr><td>".$row["member_id"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td></tr>";
			}
			echo "</table>";
		}
		else
		{
			echo "There are no member details to be displayed.";
		}
		
		mysqli_close($conn);
	?>
</body>
</html>