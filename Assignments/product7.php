<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for BMW i8</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<meta charset="utf-8"/>
	<meta name="author" content="Jason Ang Chia Wuen"/>
	<meta name="description" content="Webpage about BMW i8"/>
	<meta name="keywords" content="BMW, i8"/>
</head>

<body class="car_page">
	<header>
		<?php
			include 'include/nav.php';
		?>
	</header>
	<script src="enhancements2.js"></script>
	<article class="car_detail">
	<ul class="breadcrumb">
		<li><a href="index.php">Home</a></li>
		<li><a href="car_list.php">Car Rentals</a></li>
		<li>BMW i8</li>
	</ul>
	
	<!-- This image is saved from http://www.newcars.com/bmw/i8/2017 -->
	<img class="main_pic" src="Images/BMW/I8/i8.jpg" alt="Picture of BMW i8" />

	
	<h1>BMW i8</h1>
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://skiddmark.com/2013/09/honest-want-bmw-i8-wvideo/ -->
	<img class="left_pic" src="Images/BMW/I8/i8_1.jpg" alt="Picture of BMW i8"/>
	<h2>BMW eDrive</h2>
	<p>The BMW eDrive technology is the result of many years of BMW EfficientDynamics development work. The full torque of the agile electric motor is available from a standing start and makes for unrivalled driving pleasure.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://revvvolution.com/2015/01/10/singapore-motorshow-2015-what-to-expect-from-bmw/ -->
	<img class="right_pic" src="Images/BMW/I8/i8_2.jpg" alt="Picture of BMW i8"/>
	<h2>Exterior</h2>
	<p>Long wheelbase, short overhangs, a solid stance as it crouches on the street: the BMW i8 has all the characteristics of a full-blooded sports car. The front appears extremely low and wide. Everything is arranged to be optimally aerodynamic. A V-shaped ‘black belt’ starts on the bonnet and dynamically wraps around the bodyshell to the rear.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://www.caranddriver.com/reviews/2017-bmw-i8-in-depth-model-review -->
	<img class="left_pic" src="Images/BMW/I8/i8_3.jpg" alt="Picture of BMW i8"/>
	<h2>Interior</h2>
	<p>The sporty look of the exterior is continued seamlessly in the interior of the BMW i8. All elements are light and dynamically positioned. In the interior, the layering principle creates a novel relationship between functionality and clear form.</p>
	</div>
	
	<hr class="product_hr"/>
	</article>
	
	<section class="product_table">
	<table>
	<caption>Addition Car Information</caption>
			<tr>
				<td class="header">Car Features</td>
				<td>2 Doors</td>
				<td>Automatic Transmission</td>
				<td>Air Conditioner</td>
				<td>Free Miles: Unlimited</td>
				<td>Collision</td>
				<td>Replacement Vehicle</td>
				<td>Inclusive Insurance</td>
			</tr>
		
			<tr>
				<td class="header">Rates Exclude</td>
				<td>Petrol</td>
				<td>Personal Accident</td>
				<td>Parking/Toll Charges</td>
				<td>Delivery Collection</td>
				<td colspan="3">One way fee</td>
			</tr>
		
			<tr>
				<td class="header">Insurance Coverage</td>
				<td>Collision damage waiver (CDW): Includes 6% tax.; Excess 3,000 MYR</td>
				<td colspan="6">Damage excess reduction: 35 MYR per day. (Excludes tax); Excess 1000 MYR</td>
			</tr>
		</table>
	</section>
		
	<div class="button">
		<a href="enquiry.php" onclick="getProduct7()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>