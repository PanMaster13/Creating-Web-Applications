<!DOCTYPE html>
<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for Aston Martin DB9</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<meta charset="utf-8"/>
	<meta name="author" content="Jason Ang Chia Wuen"/>
	<meta name="description" content="Webpage about Aston Martin DB9"/>
	<meta name="keywords" content="Aston Martin, DB9"/>
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
			<li>Aston Martin DB9</li>
		</ul>
		
		<!-- This image is saved from https://www.autoblog.com/buy/2015-Aston+Martin-DB9-Base__Coupe/ -->
		<img class="main_pic" src="Images/Aston/DB9/db9.jpg" alt="Picture of Aston Martin DB9" />

		<h1>Aston Martin DB9</h1>

		<hr class="product_hr" />

		<div>
			<!-- This image is saved from http://www.felge.de/winterfelgen/aston-martin-v8-vantage-winterfelgen/ -->
			<img class="left_pic" src="Images/Aston/DB9/db9_1.jpg" alt="Picture of Aston Martin DB9" />
			<h2>Engine</h2>
			<p>With 540 brake horsepower at its disposal, the 6.0-litre V12 engine is capable of accelerating the Limited Edition model to 60 mph in 4.4 seconds, urging towards a 183 mph top speed. Matched to the sculptured lines of the hand-crafted body, the DB9 GT Bond Edition is its own testament to charismatic presence and the potential of phenomenal power.</p>
		</div>

		<hr class="product_hr" />

		<div>
			<!-- This image is saved from http://www.dreamcars.site/aston-martin-db9/4993/aston-martin-db9-fresh-aston-martin-db9-gt-bond-edition-lands-in-australia -->
			<img class="right_pic" src="Images/Aston/DB9/db9_2.jpg" alt="Picture of Aston Martin DB9" />
			<h2>Design</h2>
			<p>The Obsidian Black fluted leather sports seat with Galena Silver stitch and Argento Grey welt exude a classic elegance perfectly befitting of the Bond Edition. Unique sill plaques adorn the tread plates, each individually numbered and featuring the iconic 007 logo.</p>
		</div>

		<hr class="product_hr" />

		<div>
			<!-- This image is saved from https://www.cnet.com/roadshow/videos/the-aston-martin-db9-gt-is-a-wonderful-goodbye-to-a-legend/ -->
			<img class="left_pic" src="Images/Aston/DB9/db9_3.jpg" alt="Picture of Aston Martin DB9" />
			<h2>Exterior</h2>
			<p>GT badging, exclusive Bond Edition front fender badges and Sterling Silver Aston Martin Wings are signature marks of this special model. Each of these unique exterior features are enhanced by the entirely bespoke, limited edition Spectre Silver paint.</p>
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
		<a href="enquiry.php" onclick="getProduct1()">Book Now!</a>
	</div>

	<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>

</body>
</html>
