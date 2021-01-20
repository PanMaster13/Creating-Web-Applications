<!DOCTYPE html>
<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for Aston Martin One-77</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<meta charset="utf-8"/>
	<meta name="author" content="Jason Ang Chia Wuen"/>
	<meta name="description" content="Webpage about Aston Martin One-77"/>
	<meta name="keywords" content="Aston Martin, One-77"/>
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
			<li>Aston One-77</li>
		</ul>
		
		<!-- This image is saved from http://teresasmosaiccafe.info/online/aston-martin-one-77-white.aop -->
		<img class="main_pic" src="Images/Aston/One-77/77.jpg" alt="Picture of Aston Martin One-77" />

		
		<h1>Aston Martin One-77</h1>
		
		<hr class="product_hr" />
		
		<div>
		<!-- This image is saved from https://kickswhipsnsuits.wordpress.com/2013/03/13/aston-martin-one-77/ -->
		<img class="left_pic" src="Images/Aston/One-77/77_1.jpg" alt="Picture of Aston Martin One-77" />
		<h2>Body</h2>
		<p>The Aston One-77 has two-seat, two-door coupe, carbon fibre monocoque structure, hand crafted aluminium body panels, single bi-xenon headlamps with integrated LED side lights and direction indicators, carbon fibre front splitters, and carbon fibre rear diffuser with integrated transaxle cooler</p>
		</div>
		
		<hr class="product_hr" />
		
		<div>
		<!-- This image is saved from http://www.tokkoro.com/3332292-mansory-cyrus-2009-red-salon-interior-steering-wheel-speedometer-aston-martin.html?utm_source=www.google.com -->
		<img class="right_pic" src="Images/Aston/One-77/77_2.jpg" alt="Picture of Aston Martin One-77" />
		<h2>Engine</h2>
		<p>It also has alloy quad overhead camshaft, 48-valve, 7312 cc V12, front mid-mounted engine, rear-wheel drive, and fully catalysed stainless steel lightweight sports exhaust system with active bypass </p>
		</div>
		
		<hr class="product_hr" />
		
		<div>
		<!-- This image is saved from https://www.autogespot.com/aston-martin-one-77/2016/10/15 -->
		<img class="left_pic" src="Images/Aston/One-77/77_3.jpg" alt="Picture of Aston Martin One-77" />
		<h2>Performance</h2>
		<p>Lastly, it also has compression ratio 10.9:1, max power 559 kW (750 bhp/760 PS), max torque 750 Nm, acceleration 0 – 100 km/h (62 mph) in under 3.7 seconds, and maximum speed over 354 km/h (220 mph)</p>
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
		<a href="enquiry.php" onclick="getProduct2()">Book Now!</a>
	</div>
	<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>
</html>