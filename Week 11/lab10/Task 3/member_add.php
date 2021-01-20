<?php
			$servername ="localhost";
			$username = "root";
			$password = "";
			$dbname = "lab10";
			
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			
			if (!$conn){
				die("Connection failed: ".mysqli_connect_error());
			}else{
				echo "Succesfully connecting to the database\n";
				echo "<br/>";
			}
		
			$fname = $_GET['fname'];
			$lname = $_GET['lname'];
			$gender = $_GET['gender'];
			$email = $_GET['email'];
			$phone = $_GET['phone'];
			
			$sql = "INSERT INTO vipmembers (fname, lname, gender, email, phone)
			VALUES('$fname','$lname', '$gender', '$email','$phone')";
			
			if (mysqli_query($conn, $sql)){
				echo "New record created successfully\n";
			}else{
				echo "Error:".sql."<br>".mysqli_error($conn);
			}
			
			header("Location: vip_member.html"); /* rediects to vip_member.html */
		?>