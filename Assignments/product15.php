<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for Lamborghini Huracan</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<meta charset="utf-8"/>
	<meta name="author" content="Jason Ang Chia Wuen"/>
	<meta name="description" content="Webpage about Lamborghini Huracan"/>
	<meta name="keywords" content="Lamborghini, Huracan"/>
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
		<li>Lamborghini Huracan</li>
	</ul>
	<!-- This image is saved from https://yandex.ru/collections/card/57c5b976663518b08c8fcf58/ -->
	<img class="main_pic" src="Images/Lamborghini/Huracan/lambo_huracan.jpg" alt="Picture of Lamborghini Huracan"/>

	
	<h1>Lamborghini Huracan</h1>
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://www.motoraty.com/ar/new-car/2017/%D9%84%D9%85%D8%A8%D9%88%D8%B1%D8%AC%D9%8A%D9%86%D9%8A/%D9%87%D9%8A%D8%B1%D9%88%D9%83%D9%8A%D9%86/%D9%83%D9%88%D8%A8%D9%8A%D9%87/%D8%A7%D9%84-%D8%A8%D9%8A-610-4/na/2017-%D9%84%D9%85%D8%A8%D9%88%D8%B1%D8%AC%D9%8A%D9%86%D9%8A-%D9%87%D9%8A%D8%B1%D9%88%D9%83%D9%8A%D9%86-%D8%A7%D9%84-%D8%A8%D9%8A-610-4-%D9%83%D9%88%D8%A8%D9%8A%D9%87/ -->
	<img class="left_pic" src="Images/Lamborghini/Huracan/lambo_huracan1.jpg" alt="Picture of Lamborghini Avendator engine"/>
	<h2>Emotion</h2>
	<p>Top performance, but also maximum comfort: thanks to Lamborghini's ANIMA (Adaptive Network Intelligence MAnagement) technology, the Huracán can meet all of your driving needs. Each single part recalibrates to provide a driving experience like no other.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://www.limoandsupercarhire.co.uk/lamborghini-huracan-hire-yellow/ -->
	<img class="right_pic" src="Images/Lamborghini/Huracan/lambo_huracan2.jpg" alt="Picture of Lamborghini Avendator exterior"/>
	<h2>Exterior</h2>
	<p>The Huracán Coupé's exterior: form follows function, guaranteeing Lamborghini's stylistic purity and performance, so it comes as no surprise that the design is inspired by something as essential as a carbon atom.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://www.beruskakocarky.com/preview/fiat-580-for-sale.html -->
	<img class="left_pic" src="Images/Lamborghini/Huracan/lambo_huracan3.jpg" alt="Picture of Lamborghini Avendator interior"/>
	<h2>Interior</h2>
	<p>Luxury meets the spirit of Lamborghini inside the Huracán. Sporty yet elegant, it was developed to provide all the space and comfort you need. A large 12.3” TFT instrument panel, controls integrated in the steering wheel, perfectly contoured sports seats and a center console puts all the controls at your fingertips.</p>
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
		<a href="enquiry.php" onclick="getProduct15()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>