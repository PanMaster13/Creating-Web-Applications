<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for Porsche Cayenne</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
	<meta charset="utf-8" />
	<meta name="author" content="Jason Ang Chia Wuen" />
	<meta name="description" content="Webpage about Porsche Cayenne" />
	<meta name="keywords" content="Porsche, Cayenne" />
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
		<li>Porsche Cayenne</li>
	</ul>
	<!-- This image is saved from https://carolbly.com/porsche-cayenne-turbo-s-price.html -->
	<img class="main_pic" src="Images/Porsche/Cayenne/cayenne.jpg" alt="Picture of Porsche Cayenne" />

	
	<h1>Porsche Cayenne</h1>
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://autowise.com/new-topcar-cayenne-body-kit-is-carbon-fibre-awesomeness/ -->
	<img class="left_pic" src="Images/Porsche/Cayenne/cayenne_1.jpg" alt="Picture of Porsche Cayenne" />
	<h2>Design</h2>
	<p>The customary identifying features are there to be seen, including the strongly emphasised front wings, the long, downward sloping bonnet with its power dome, and the characteristic three-piece air intakes, which are even larger and more dominant.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://www.ultimaterentals.com.au/vehicle/porsche-cayenne-s-e-hybrid-2015/ -->
	<img class="right_pic" src="Images/Porsche/Cayenne/cayenne_2.jpg" alt="Picture of Porsche Cayenne" />
	<h2>Engine</h2>
	<p>The Cayenne generation of engines has been redeveloped completely from scratch and they now offer even greater power and torque. Combined with a further improvement in efficiency.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://puertoportals.info/porsche-indonesia.html -->
	<img class="left_pic" src="Images/Porsche/Cayenne/cayenne_3.jpg" alt="Picture of Porsche Cayenne" />
	<h2>Chassis</h2>
	<p>Sometimes there are several ways to get us to our destination. These could be in the form of newly incorporated features, such as adaptive air suspension with three-chamber technology or rear-axle steering.</p>
	</div>
	
	<hr class="product_hr"/>
	</article>
	
	<section class="product_table">
	<table>
	<caption>Addition Car Information</caption>
			<tr>
				<td class="header">Car Features</td>
				<td>4 Doors</td>
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
		<a href="enquiry.php" onclick="getProduct18()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>