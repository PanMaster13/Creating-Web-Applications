<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>VIP Member Home Page</title>
</head>

<body>
	<h1>VIP Member Search Page</h1>
	
	<form action="member_search.php" method="post">
		<p>Type in the last name of the member: <input type="text" name="search" placeholder="Last Name" /></p>
		
		<input type="submit" value="Search" />
	</form>
	<?php
		$servername ="localhost";
		$username = "root";
		$password = "";
		$dbname = "lab10";
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		
		$dtotal = 0;
		$no_match = 0;

		$db_array = 'SELECT member_id, fname, lname FROM vipmembers';
		$result = $conn->query($db_array);
		
		if(!isset($_POST['search'])) /*Checks if variable has been set or not*/
		{
			$search = $_POST['search'];
		
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
					if ($search == $row["lname"])
					{
						echo "<tr><td>".$row["member_id"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td></tr>";
					}
					else
					{
						$no_match++;
					}
					$dtotal++;
				}
				echo "</table>";
				if ($no_match == $dtotal)
				{
					echo "There are no member(s) with such last name.";
				}
			}
			else
			{
				echo "There are no member details to be displayed.";
			}
		}

		
		mysqli_close($conn);
	?>
</body>
</html>