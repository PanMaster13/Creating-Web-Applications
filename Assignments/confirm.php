<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Confirmation</title>
		<link rel="stylesheet" type="text/css" href="styles/style.css" />
		<meta charset="utf-8">
		<meta name="Author" content="Jonathan Lim Hao">
	</head>
	<body class="body_confirm">
		<header>
		<?php
			include 'include/nav.php';
			
			$fname = $_POST['firstname'];
			$lname = $_POST['lastname'];
			$email = $_POST['email'];
			$phone = $_POST['phone_no'];
			$address = $_POST['address'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$postcode = $_POST['postcode'];
			$product = $_POST['product'];
			$date = $_POST['date'];
			$duration = $_POST['duration'];
			$comment = $_POST['comment'];
		?>
		</header>
		<script src="enhancements2.js"></script>
		<article>
			<div class="booking_confirm">
				<div class="background_shadding_confirm" id="background_shadding">
					<ul class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li><a href="enquiry.html">Enquiry</a></li>
						<li>Confirm</li>
					</ul>
					
					<form id="bookform" action="enquiry_process.php" method="post">
						<fieldset>
							<input type="hidden" name="fname" value="<?php echo $fname; ?>"/>
							<input type="hidden" name="lname" value="<?php echo $lname; ?>"/>
							<input type="hidden" name="email" value="<?php echo $email; ?>"/>
							<input type="hidden" name="phone" value="<?php echo $phone; ?>"/>
							<input type="hidden" name="address" value="<?php echo $address; ?>"/>
							<input type="hidden" name="city" value="<?php echo $city; ?>"/>
							<input type="hidden" name="state" value="<?php echo $state; ?>"/>
							<input type="hidden" name="postcode" value="<?php echo $postcode; ?>"/>
							<input type="hidden" name="product" value="<?php echo $product; ?>"/>
							<input type="hidden" name="date" value="<?php echo $date; ?>"/>
							<input type="hidden" name="duration" value="<?php echo $duration; ?>"/>
							<input type="hidden" name="comment" value="<?php echo $comment; ?>"/>
							
							
							<legend class="confirm_legend">Booking Confirmation</legend>
							<p>First Name: <span id="confirm_firstname"></span></p>
							<p>Last Name: <span id="confirm_lastname"></span></p>
							<p>Email Address: <span id="confirm_email"></span></p>
							<p>Phone number: <span id="confirm_phone"></span></p>
							<p>Street Address: <span id="confirm_street"></span>,<span id="confirm_city"></span>,<span id="confirm_state"></span>,<span id="confirm_postcode"></span></p>
							<p>Product: <span id="confirm_product"></span></p>
							<p>Rental Date: <span id="confirm_date"></span></p>
							<p>Rental Duration (days): <span id="confirm_day"></span></p>
							<p>Comment: <span id="confirm_comment"></span></p>
							
							<button class="submit_button" type="submit" onclick="bookingConfirmed()">Confirm Booking</button>
							<button class="reset_button" type="button" onclick="bookingCancelled()">Cancel</button>
						</fieldset>
					</form>
				</div>
			</div>
		</article>
		
		<script src="script.js"></script>
		
	<?php
		include 'include/footer.php';
	?>
	</body>
</html>