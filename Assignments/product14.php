<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for Lamborghini Gallardo</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<meta charset="utf-8"/>
	<meta name="author" content="Jason Ang Chia Wuen"/>
	<meta name="description" content="Webpage about Lamborghini Gallardo"/>
	<meta name="keywords" content="Lamborghini, Gallardo"/>
</head>

<body class="car_page">
	<header>
		<?php
			include 'include/nav.php';
		?>
	</header>
	</header>
	<script src="enhancements2.js"></script>
	<article class="car_detail">
	<ul class="breadcrumb">
		<li><a href="index.php">Home</a></li>
		<li><a href="car_list.php">Car Rentals</a></li>
		<li>Lamborghini Gallardo</li>
	</ul>
	<!-- This image is saved from https://otomonesia.com/1206/harga-mobil-lamborghini/ -->
	<img class="main_pic" src="Images/Lamborghini/Gallardo/lambo_gall.jpg" alt="Picture of Lamborghini Gallardo"/>

	
	<h1>Lamborghini Gallardo</h1>
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://www.lamborghinivancouver.com/listings/2011-lamborghini-gallardo-superleggera-vancouver-bc/ -->
	<img class="left_pic" src="Images/Lamborghini/Gallardo/lambo_gall1.jpg" alt="Picture of Lamborghini Gallardo"/>
	<h2>Drivability</h2>
	<p>The Gallardo RWD is defined by its use of classic sports car technology - an exceptionally powerful engine combined with rear-wheel drive, adopting a specific 2WD developed ESP system.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://my.carid.com/featured/rides/dallas-performance-lamborghini-gallardo-superleggera-super-powerful-beast -->
	<img class="right_pic" src="Images/Lamborghini/Gallardo/lambo_gall2.jpg" alt="Picture of Lamborghini Gallardo"/>
	<h2>RWD Setup</h2>
	<p>The Gallardo RWD combines unrivalled driving fun and safety.The engineers at Sant'Agata Bolognese have incorporated extensive modifications into the vehicle; it was not simply a question of moving the transmission to the rear axle.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://teamspeed.com/forums/aventador-huracan-murcielago-gallardo/38954-mt-more-first-drives-2011-lamborghini-gallardo-lp-570-4-superleggera-2.html -->
	<img class="left_pic" src="Images/Lamborghini/Gallardo/lambo_gall3.jpg" alt="Picture of Lamborghini Gallardo"/>
	<h2>Performance</h2>
	<p>With carbon fibre used extensively inside and out to reduce weight to just 1,340 kg (2,954 lb) making it the lightest road-going Lamborghini in the range. The odd firing 5.2L V10 on the LP 570-4 gets a power bump over the standard Gallardo to 570 PS (419 kW; 562 hp) at 8,000 rpm. Performance has been improved to 0-100 km/h (62 mph) in 3.4 seconds, and a 325 km/h (202 mph) top speed.</p>
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
		<a href="enquiry.php" onclick="getProduct14()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>