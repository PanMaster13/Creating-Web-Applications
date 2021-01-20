<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for Ferrari F12</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<meta charset="utf-8"/>
	<meta name="author" content="Jason Ang Chia Wuen"/>
	<meta name="description" content="Webpage about Ferrari F12"/>
	<meta name="keywords" content="Ferrari, F12"/>
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
		<li>Ferrari F12</li>
	</ul>
	<!-- This image is saved from https://www.kimballstock.com/cutout-car-stock-photos.asp -->
	<img class="main_pic" src="Images/Ferrari/F12/f12.jpg" alt="Picture of Ferrari F12"/>

	
	<h1>Ferrari F12</h1>
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://www.3dwallpapers.net/wallpaper/ferrari-f12-berlinetta -->
	<img class="left_pic" src="Images/Ferrari/F12/f12_1.jpg" alt="Picture of Ferrari F12"/>
	<h2>About</h2>
	<p>F12’s seats was to reduce their volumes as much as possible to ensure freer occupant movement within the cabin while, at the same time, ensuring they are extremely comfortable and respect lateral containment geometries.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://imgur.com/gallery/a47lL -->
	<img class="right_pic" src="Images/Ferrari/F12/f12_2.jpg" alt="Picture of Ferrari F12"/>
	<h2>Exterior</h2>
	<p>The F12berlinetta’s design strikes the perfect balance between maximum aerodynamic efficiency and the elegant proportions typical of Ferrari’s front-engined V12 cars. Its designers and engineers worked in tandem to sculpt its surfaces.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://www.fanrto.com/topics/ferrari-f12-berlinetta-interior.html -->
	<img class="left_pic" src="Images/Ferrari/F12/f12_3.jpg" alt="Picture of Ferrari F12"/>
	<h2>Interior</h2>
	<p>Volumes have been reduced to a minimum to enhance sportiness and efficiency. The interior space has been optimised to provide both a sporty driving position as well as guarantee maximum comfort.</p>
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
		<a href="enquiry.php" onclick="getProduct12()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>