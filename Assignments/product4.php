<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for Aston Martin Vantage</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<meta charset="utf-8"/>
	<meta name="author" content="Jason Ang Chia Wuen"/>
	<meta name="description" content="Webpage about Aston Martin Vantage"/>
	<meta name="keywords" content="Aston Martin, Vantage"/>
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
			<li>Aston Vantage</li>
		</ul>
		
		<!-- This image is saved from https://prestige-car-location.ch/ -->
		<img class="main_pic" src="Images/Aston/Vantage/vantage.jpg" alt="Picture of Aston Martin Vantage" />

		
		<h1>Aston Martin Vantage</h1>
		
		<hr class="product_hr" />
		
		<div>
		<!-- This image is saved from https://noticias.coches.com/fotos-de-coches/aston-martin-vantage-2018/274915?foto=34#foto -->
		<img class="left_pic" src="Images/Aston/Vantage/vantage_1.jpg" alt="Picture of Aston Martin Vantage" />
		<h2>Design</h2>
		<p>Like the archetypal hunter, everything has been finely tuned for a purpose. Sculptural forms create an athletic predatory stance, while muscular flanks and broad haunches express the agility and dynamism inherent to the car. The signature ultra-slim rear light graphic illuminates the full-width of the tailgate, accentuated by the flick in the Vantage’s tail.</p>
		</div>
		
		<hr class="product_hr" />
		
		<div>
		<!-- This image is saved from https://www.pinterest.com.au/pin/219972763033483438/ -->
		<img class="right_pic" src="Images/Aston/Vantage/vantage_2.jpg" alt="Picture of Aston Martin Vantage" />
		<h2>Performance</h2>
		<p>Vantage’s high-performance V8 power house is positioned low and further back in the chassis to improve weight distribution and driving dynamics, leaving a lasting impression well beyond the drive. Effortless, inherent potency comes from the engine’s extraordinary 510 PS output and 685 Nm of torque fed through Vantage’s ZF automatic transmission. The eight-speed gearbox delivers the perfect balance of performance and refinement, with adaptive software designed to gauge the operating conditions – along with the demands the driver is making – to ensure the car is in exactly the right gear at the right time.</p>
		</div>
		
		<hr class="product_hr" /> 
		
		<div>
		<!-- This image is saved from http://taesk.com/aston-martin-camshaft-position-sensor-location.html -->
		<img class="left_pic" src="Images/Aston/Vantage/vantage_3.jpg" alt="Picture of Aston Martin Vantage" />
		<h2>Origin</h2>
		<p>Aston Martin’s principles of purity and beautiful proportion remain uncompromised. While Vantage has made significant advancements, echoes of the magnificent bloodline can still be seen. Ever since the nameplate launched in the 1950s as an upgrade to the DB2, Vantage has been synonymous with performance, becoming our flagship sports car.</p>
		</div>
		
		<hr class="product_hr" />
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
		<a href="enquiry.php" onclick="getProduct4()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>