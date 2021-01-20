<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for Aston Martin Vanquish</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<meta charset="utf-8"/>
	<meta name="author" content="Jason Ang Chia Wuen"/>
	<meta name="description" content="Webpage about Aston Martin Vanquish"/>
	<meta name="keywords" content="Aston Martin, Vanquish"/>
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
		<li>Aston Vanquish</li>
	</ul>
	
	<!-- This image is saved from https://wallpaperscraft.com/download/aston_martin_v8_vantage_2008_white_front_view_cars_sports_37479/3840x2400-->
	<img class="main_pic" src="Images/Aston/Vanquish/vq.jpg" alt="Picture of Aston Martin Vanquish" />

	
	<h1>Aston Martin Vanquish</h1>

	<hr class="product_hr" />
	
	<div>
	<!-- This image is saved from https://www.pistonheads.com/news/ph-aston/aston-martin-vantage-gt12-roadster/34446 -->
	<img class="left_pic" src="Images/Aston/Vanquish/vq_1.jpg" alt="Picture of Aston Martin Vanquish" />
	<h2>Engine</h2>
	<p>The Vanquish S features the same AM29 V12 engine, now up to 595 bhp (444 kW; 603 PS), and a new aerodynamic package. The Vanquish S can now accelerate from 0 to 100 km/h (62 mph) in 3.5 seconds, and the top speed remains unchanged at 324 km/h (201 mph).</p>
	</div>
	
	<hr class="product_hr" />
	
	<div>
	<!-- This image is saved from https://www.astonmartin.com/en/live/news/2015/06/24/aston-martin-reveals-db9-gt-the-ultimate-in-bespoke-grand-touring -->
	<img class="right_pic" src="Images/Aston/Vanquish/vq_2.jpg" alt="Picture of Aston Martin Vanquish" />
	<h2>Interior</h2>
	<p>The car featured an all new interior based on the one found in the exclusive One-77. The standard interior was trimmed in hand stitched leather and alcantara and was available in a range of colours. The centre console features an revised infotainment system over the one found in the DBS. The car was available as either a 2-seater or 2+2. </p>
	</div>
	
	<hr class="product_hr" />
	
	<div>
	<!-- This image is saved from https://www.carmagazine.co.uk/car-news/first-official-pictures/aston-martin/aston-martin-unveils-595bhp-vanquish-s-pics-details-and-specs/?gallery-index=0 -->
	<img class="left_pic" src="Images/Aston/Vanquish/vq_3.jpg" alt="Picture of Aston Martin Vanquish" />
	<h2>Exterior</h2>
	<p>The exterior styling of the Vanquish is an evolution of the DBS with many styling cues such as the elongated side strakes being inspired by the Aston Martin One-77. The boot lid included an integrated rear spoiler designed to look as if it is impossible to make; this was done on the orders of Aston Martin Chief Executive, Dr. Ulrich Bez.</p>
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
		<a href="enquiry.php" onclick="getProduct3()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>