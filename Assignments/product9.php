<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for Ferrari 458</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<meta charset="utf-8"/>
	<meta name="author" content="Jason Ang Chia Wuen"/>
	<meta name="description" content="Webpage about Ferrari 458"/>
	<meta name="keywords" content="Ferrari, 458"/>
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
		<li>Ferrari 458</li>
	</ul>
	
	<!-- This image is saved from https://www.autoblog.com/owner-reviews/ferrari/ -->
	<img class="main_pic" src="Images/Ferrari/458/458.jpg" alt="Picture of Ferrari 458"/>

	
	<h1>Ferrari 458</h1>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://www.thesun.co.uk/news/4860780/croydon-crash-gravel-hill-pile-up-ferrari-458-four-injured/ -->
	<img class="left_pic" src="Images/Ferrari/458/458_1.jpg" alt="Picture of Ferrari 458"/>
	<h2>About</h2>
	<p>Producing compact, sculpted performance-honed forms. This was the first priority in the work carried out by the Ferrari Style Centre which collaborated on the project with Pininfarina.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://www.youtube.com/watch?v=qx8PYqjdTL4 -->
	<img class="right_pic" src="Images/Ferrari/458/458_2.jpg" alt="Picture of Ferrari 458"/>
	<h2>Exterior</h2>
	<p>Most of the bodywork panels have been redesigned without modifying either the passenger cell or the signature design features of the 458 Italia. The thickness of the glass used has been reduced to cut weight, while the rear windscreen is now a Lexan© panel.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://www.voiturepourlui.com/Ferrari/Photo/458-Speciale_2260.photos-36 -->
	<img class="left_pic" src="Images/Ferrari/458/458_3.jpg" alt="Picture of Ferrari 458"/>
	<h2>Interior</h2>
	<p>The cockpit has a distinctly racing-inspired atmosphere. Lightweight exclusive materials, such as Alcantara and carbon-fibre, dominate, yet it still exudes the sense of craftsmanship and sophistication typical of all Ferrari interiors, thanks to hand-stitching, aluminium tread plates and fluidly sculpted door panels.</p>
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
		<a href="enquiry.php" onclick="getProduct9()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>