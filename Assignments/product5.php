<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for BMW 5 Series</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<meta charset="utf-8"/>
	<meta name="author" content="Jason Ang Chia Wuen"/>
	<meta name="description" content="Webpage about BMW 5 Series"/>
	<meta name="keywords" content="BMW, 5, Series"/>
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
			<li>BMW 5 Series</li>
		</ul>
		
		<!-- This image is saved from http://www.mad4wheels.com/models/2010_BMW_5er_(_F10_)_by_AC_Schnitzer/detail.asp?id_pic=285626 -->
		<img class="main_pic" src="Images/BMW/5series/5.jpg" alt="Picture of BMW 5 Series" />

		
		<h1>BMW 5 Series</h1>
		
		<hr class="product_hr" />
		
		<div>
		<!-- This image is saved from http://m.manager-magazin.de/fotostrecke/autogramm-bmw-5er-macht-der-7er-da-noch-sinn-fotostrecke-153944-5.html -->
		<img class="left_pic" src="Images/BMW/5series/5_1.jpg" alt="Picture of BMW 5 Series" />
		<h2>Vehicle Concept</h2>
		<p>The BMW 530e iPerformance combines an electric motor and a 4-cylinder TwinPower Turbo petrol engine. This creates the high-efficieny drive of the BMW eDrive plug-in hybrid. This enables purely electrical, emission-free short-range driving with a dynamic driving performance and – combined with the 4-cylinder petrol engine – long-distance capabilities.</p>
		</div>
		
		<hr class="product_hr" />
		
		<div>
		<!-- This image is saved from http://liveautohd.xyz/bmw/5-bmw-2017/attachment/first-drive-2017-bmw-5-series-review-car-and-driver-intended-for-5-bmw-2017/ -->
		<img class="right_pic" src="Images/BMW/5series/5_2.jpg" alt="Picture of BMW 5 Series" />
		<h2>Exterior</h2>
		<p>A powerful impression even on a standstill with muscular body contours and an elegant coupé-like silhouette that resonates success. For the first time ever, the definitive kidney grille and headlights are directly linked making the new BMW 5 Series, the sportiest business sedan of its generation.</p>
		</div>
		
		<hr class="product_hr" />
		
		<div>
		<!-- This image is saved from https://cars.mitula.my/cars/bmw-gran-turismo-malaysia -->
		<img class="left_pic" src="Images/BMW/5series/5_3.jpg" alt="Picture of BMW 5 Series" />
		<h2>Heroically Dynamic</h2>
		<p>Where dynamics are concerned, the new BMW 5 Series shifts the boundaries. The powerful engine impressively transmits its sporty exterior to the road. This business sedan epitomises the harmony of agility and ingenuity and is state-of-the-art technology, personified.</p>
		</div>
		
		<hr class="product_hr" />
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
		<a href="enquiry.php" onclick="getProduct5()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>