<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for BMW X6</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<meta charset="utf-8"/>
	<meta name="author" content="Jason Ang Chia Wuen"/>
	<meta name="description" content="Webpage about BMW X6"/>
	<meta name="keywords" content="BMW, X6"/>
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
		<li>BMW X6</li>
	</ul>
	
	<!-- This image is saved from http://www.1gai.ru/blog/live/519846-naskolko-krut-vnedorozhnik-urus-sravnenie-s-konkurentami-v-avtosimulyatore-forza.html -->
	<img class="main_pic" src="Images/BMW/X6/x6.jpg" alt="Picture of BMW X6"/>

	
	<h1>BMW X6</h1>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://ambitiousvisions.co/2015-bmw-x6-colors.html -->
	<img class="left_pic" src="Images/BMW/X6/x6_1.jpg" alt="Picture of BMW X6"/>
	<h2>Surpassing Agility</h2>
	<p>The raw energy of the X6 is balance by innovative handling and suspension technology that deliver optimized driving dynami9cs, with an 8-speed Sport Automatic Transmission to channel all that power. The result is sporty agility that will take you by surprise.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://security-luxembourg.com/tag/police-luxembourg/ -->
	<img class="right_pic" src="Images/BMW/X6/x6_2.jpg" alt="Picture of BMW X6"/>
	<h2>Drive in Color</h2>
	<p>The standard Dynamic Digital Instrument Cluster changes color themes and content to signify whether you’re in Comfort, ECO PRO or Sport driving mode, bathing the dash and console in changing light. Want to set a more compelling mood? Standard Ambient Lighting uses 3-color LED lights to illuminate the cabin with 9 beautiful light designs.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://armeniabirding.info/bmw-inside-2017.html -->
	<img class="left_pic" src="Images/BMW/X6/x6_3.jpg" alt="Picture of BMW X6"/>
	<h2>Define Luxury</h2>
	<p>Outside, the X6 is all about dominance. Inside the cabin, it’s all about you. Add optional 20-way multi-contour seats upholstered with soft, richly grained leather, or indulge in a Bi-Color Interior Design Package featuring exclusive wood and metal trims.</p>
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
		<a href="enquiry.php" onclick="getProduct8()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>