<!DOCTYPE html>
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching)-->
<!-- Author: Jonathan Lim Hao -->
<!-- Date:  30/3/2018-->
<!-- Validated: OK 7/4/2018-->
<html lang="en">
<head>
	<title>Enquiry Information</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
	<meta charset="utf-8" />
	<meta name="author" content="Jonathan Lim Hao" />
	<meta name="description" content="Webpage about rental car list" />
	<meta name="keywords" content="rental, car, list" />
</head>

<script src="script.js"></script>

<body class="body_enquiry">
	<header>
	<?php
			include 'include/nav.php';
		?>
</header>
<script>
		var x = document.getElementById("rental");
		x.className = "active";
	</script>
<script src="enhancements2.js"></script>
<article>
	<div class="booking_form">
		<form name="Form" id="Form" action="confirm.php" method="post" onsubmit="validateForm()">
			<div class="background_shadding_enquiry" id="background_shadding">
			
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Enquiry</li>
				</ul>
				<div class="title_enquiry">
				<h1>Enquiry Information</h1>
				</div>
				<fieldset>
					<legend>Personal Information</legend>
						<table>
						
							<tr>
								<td>
									First Name:
								</td>
								<td>
									<input id="fname" type="text" name="firstname" maxlength="25"  size="50"/>
								</td>
							</tr>
							<tr>
								<td>
								Last Name:
								</td>
								<td>
								<input id="lname" type="text" name="lastname" maxlength="25" size="50" />
								</td>
							</tr>
							<tr>
								<td>
									Email Address:
								</td>
								<td>
								<input id="email" type="text" name="email" placeholder="someone@xxx.com" size="50" />
								</td>
							</tr>
							<tr>
								<td>
								Phone number:
								</td>
								<td>
								<input id="phone" type="text" name="phone_no" maxlength="10" placeholder="1234567890" size="50" />
								</td>
							</tr>
						</table>
						</fieldset>
						<br />
						<br />
						<fieldset>
						<legend>Address</legend>
						<table>
							<tr>
								<td>
									Street Address:
								</td>
								<td>
									<input id="address" name="address" type="text" maxlength="40" size="50" />
								</td>
							</tr>
						<tr>
							<td>
								City/Town:
							</td>
							
							<td>
								<input id="city" name="city" type="text" maxlength="20" size="50" />
							</td>
						</tr>
						<tr>
								<td>
									State:
								</td>
							<td>
								<select id="state" name="state" size="1">
									<option>Johor</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								Postcode:
							</td>
							<td>
								<input id="postcode" name="postcode" type="text" maxlength="5" size="50" />
							</td>
						</tr>
					</table>
				</fieldset>
					<br />
					<br />
				<fieldset>
					<legend>Rental Information</legend>
					<table>
						<tr>
							<td>
							Product:
							</td>
							<td>
								<select id="product" name="product">
									<option>Choose a product</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								Rental Date:
							</td>
							<td>
								<input id="rdate" type="text" name="date" placeholder="dd/mm/yyyy" />
							</td>
						</tr>
						<tr>
							<td>
							Rental Duration (days):
							</td>
							<td>
							<input id="rduration" type="text" name="duration" />
							</td>
						</tr>
						<tr>
							<td>
							Comment:
							</td>
							<td>
								<textarea id="comment" name="comment" rows="5" cols="70" placeholder="Place your comments here"></textarea>
							</td>
						</tr>
					</table>
				</fieldset>
				
				<div class="button">
					<input class="submit_button" type="submit" value="Submit" />
					<input class="reset_button" type="reset" value="Reset" />
				</div>
				
			</div>
		</form>
	</div>
</article>

<?php
		include 'include/footer.php';
	?>

</body>
</html>