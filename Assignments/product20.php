<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for Porsche Panamera</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
	<meta charset="utf-8" />
	<meta name="author" content="Jason Ang Chia Wuen" />
	<meta name="description" content="Webpage about Porsche Panamera" />
	<meta name="keywords" content="Porsche, Panamera" />
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
		<li>Porsche Panamera</li>
	</ul>
	<!-- This image is saved from https://www.jamesedition.com/cars/porsche/panamera-4/porsche-panamera4-for-sale-10211934 -->
	<img class="main_pic" src="Images/Porsche/Panamera/panamera.jpg" alt="Picture of Porsche Panamera" />

	
	<h1>Porsche Panamera</h1>
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://masbukti.com/porsche/porsche-panamera/2016-porsche-panamera-diesel -->
	<img class="left_pic" src="Images/Porsche/Panamera/panamera_1.jpg" alt="Picture of Porsche Panamera" />
	<h2>Exterior</h2>
	<p>The silhouette and proportions of the new Panamera models are more Porsche than ever. Clearly perceived rounded transitions, powerful muscles and a sharpened sports car silhouette emphasise the precision of the new design.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://www.topspeed.com/cars/porsche/2014-porsche-panamera-gts-by-maria-sharapova-ar162311.html -->
	<img class="right_pic" src="Images/Porsche/Panamera/panamera_2.jpg" alt="Picture of Porsche Panamera" />
	<h2>Performance</h2>
	<p>The all-new twin-turbo V6 engine in the Panamera 4S and twin-turbo V8 engine in the Panamera Turbo are lighter and more compact than their predecessors and come equipped with VarioCam Plus. Their two turbochargers are now positioned in between the cylinder banks.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://www.restyleitwraps.com/porsche-panamera-metallic-white-wrap/img_1499/ -->
	<img class="left_pic" src="Images/Porsche/Panamera/panamera_3.jpg" alt="Picture of Porsche Panamera" />
	<h2>Chassis</h2>
	<p>The chassis of the new Panamera models performs this balancing act between sport and comfort effortlessly – and in the most masterful way possible: with further-developed, optional chassis technologies.</p>
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
		<a href="enquiry.php" onclick="getProduct20()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>