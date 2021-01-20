<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for Ferrari California</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<meta charset="utf-8"/>
	<meta name="author" content="Jason Ang Chia Wuen"/>
	<meta name="description" content="Webpage about Ferrari California"/>
	<meta name="keywords" content="Ferrari, California"/>
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
		<li>Ferrari California</li>
	</ul>
	
	<!-- This image is saved from https://www.cartrade.com/ferrari-cars/california -->
	<img class="main_pic" src="Images/Ferrari/California/california.jpg" alt="Picture of Ferrari California"/>

	
	<h1>Ferrari California</h1>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://gearpatrol.com/2015/06/22/ferrari-california-t-review/ -->
	<img class="left_pic" src="Images/Ferrari/California/california_1.jpg" alt="Picture of Ferrari California"/>
	<h2>About</h2>
	<p>Penned by the Ferrari style centre in collaboration with Pininfarina, the new California T is a sophisticated prancing horse grand tourer with a beautifully ergonomic and sumptuously handcrafted.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://carchoosing.info/2019-ferrari-california-t-review-specs-and-release-date/2019-ferrari-california-t-redesign-and-price/ -->
	<img class="right_pic" src="Images/Ferrari/California/california_2.jpg" alt="Picture of Ferrari California"/>
	<h2>Exterior</h2>
	<p>The California T boasts classic Ferrari proportions: the shape of its flanks is inspired, in fact, by the 250 Testa Rossa’s famous pontoon-fender styling, with the front wing line stretching back towards the compact, muscular rear and bringing an aerodynamic sleekness and movement to the sides.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://www.conceptcars2017.com/2018-ferrari-california-t-concept-changes/ferrari-california-t-2018-interior/ -->
	<img class="left_pic" src="Images/Ferrari/California/california_3.jpg" alt="Picture of Ferrari California"/>
	<h2>Interior</h2>
	<p>All presented as a beautifully elegant hand-crafted package focusing on sophisticated materials and finishes whilst also being superbly functional.</p>
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
		<a href="enquiry.php" onclick="getProduct11()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>