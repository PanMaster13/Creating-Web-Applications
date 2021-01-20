<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<link href="styles/style.css" rel="stylesheet">
	</head>
	<body>
		<!-- Background webpage - handles background process, won't be shown to visitor -->
		<?php
			$servername ="localhost";
			$username = "root";
			$password = "";
			$dbname = "enquiry";
			
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			
			if (!$conn){
				die("Connection failed: ".mysqli_connect_error());
			}else{
				echo "Succesfully connecting to the database\n";
				echo "<br/>";
			}
		
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$address = $_POST['address'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$postcode = $_POST['postcode'];
			$product = $_POST['product'];
			$date = $_POST['date'];
			$duration = $_POST['duration'];
			$comment = $_POST['comment'];
			
			
			
			$sql = "INSERT INTO e_table (fname, lname, email, phone, address, city, state, postcode, product, date, duration, comment)
			VALUES('$fname','$lname','$email','$phone','$address','$city','$state','$postcode','$product','$date','$duration','$comment')";
			
			if (mysqli_query($conn, $sql)){
				echo "New record created successfully\n";
			}else{
				echo "Error:".sql."<br>".mysqli_error($conn);
			}
			
			header("Location: index.php"); /* rediects to index.php */
		?>
		
		
	</body>
</html>