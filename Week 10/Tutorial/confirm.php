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
$fname = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
?>

	<form id="bookform" action="process.php" method="post">
	<input type="hidden" name="name" value="<?php echo $fname; ?>">
	<input type="hidden" name="email" value="<?php echo $email; ?>">
	<input type="hidden" name="dob" value="<?php echo $dob; ?>">
		<fieldset>
			<legend>User Details</legend>
			<p>Your Name: <span id="confirm_name"></span></p>
			<p>Your Email: <span id="confirm_email"></span></p>
			<p>Date of birth: <span id="confirm_dob"></span></p>
			<p>Your Unit: <span id="confirm_unit"></span></p>
			<p>Your Tutor: <span id="confirm_tutor"></span></p>
			<p>Your Issue: <span id="confirm_issue"></span></p>
			<p>Issue's Description: <span id="confirm_description"></span></p>
			<p>Your Preferred Date: <span id="confirm_date"></span></p>
			<p>Your Preferred Time: <span id="confirm_time"></span></p>
			
			<input type="submit" value="Confirm Booking" />
			<input type="button" value="Cancel" id="cancelButton" onclick="cancelBooking()">
		</fieldset>
	</form>
	
	<script src="js/footer.js"></script>
	<script src="js/confirm.js"></script>
</body>

</html>
