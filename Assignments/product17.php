<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for Porsche 911</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
	<meta charset="utf-8" />
	<meta name="author" content="Jason Ang Chia Wuen" />
	<meta name="description" content="Webpage about Porsche 911" />
	<meta name="keywords" content="Porsche, 911" />
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
		<li>Porsche 911</li>
	</ul>
	<!-- This image is saved from https://www.porschevancouver.ca/inventory?sort_by=model&sort_direction=desc&limit=10&page=1&condition=used&make=porsche&model=911 -->
	<img class="main_pic" src="Images/Porsche/911/911.jpg" alt="Picture of Porsche 911" />

	
	<h1>Porsche 911</h1>
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://www.tomhartley.com/used/2015/porsche/911-carrera-991-/2015-porsche-911-carrera-991-swadlincote-for-sale-a15tjk -->
	<img class="left_pic" src="Images/Porsche/911/911_1.jpg" alt="Picture of Porsche 911" />
	<h2>Engine</h2>
	<p>The new 911 answers questions about the future of the sports car with a quantum leap in performance. By reducing fuel consumption, but not by surpressing emotions. By following a principle that has already changed everything once before: in 1974, with the first 911 turbo.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://wind-energy-news.info/porsche-911-pictures-interesting-porsche-911-pictures-to-inspire-you/27136/ -->
	<img class="right_pic" src="Images/Porsche/911/911_2.jpg" alt="Picture of Porsche 911" />
	<h2>Design</h2>
	<p>The design language, proportion and contouring follow the 911 tradition: with wings that are higher than the front lid: with headlights that are bulging and round; with a roof line that slopes down towards the rear over tapering side windows.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://www.romansinternational.com/car/1191/ -->
	<img class="left_pic" src="Images/Porsche/911/911_3.jpg" alt="Picture of Porsche 911" />
	<h2>Chassis</h2>
	<p>Porsche Active Suspension Management (PASM) is fitter as standard in all 911 models for the first time. This electronic damping control system continuously adjusts the damping force on each wheel, based on current road conditions and driving style.</p>
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
		<a href="enquiry.php" onclick="getProduct17()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>