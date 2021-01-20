<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for Ferrari 488</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<meta charset="utf-8"/>
	<meta name="author" content="Jason Ang Chia Wuen"/>
	<meta name="description" content="Webpage about Ferrari 488"/>
	<meta name="keywords" content="Ferrari, 488"/>
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
		<li>Ferrari 488</li>
	</ul>
	<!-- This image is saved from http://driving.ca/ferrari/488-gtb -->
	<img class="main_pic" src="Images/Ferrari/488/488.jpg" alt="Picture of Ferrari 488"/>

	
	<h1>Ferrari 488</h1>
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://www.forallworld.com/12433-ferrari.html -->
	<img class="left_pic" src="Images/Ferrari/488/488_1.jpg" alt="Picture of Ferrari 488"/>
	<h2>About</h2>
	<p>Designed by the Ferrari Styling Centre, the 488 GTB features very sculptural flanks which are the key to its character. Its large signature air intake scallop is a nod to the original 308 GTB and is divided into two sections by a splitter.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://www.yudibaleo.com/2017/06/ferrari-488-gtb-review.html -->
	<img class="right_pic" src="Images/Ferrari/488/488_2.jpg" alt="Picture of Ferrari 488"/>
	<h2>Exterior</h2>
	<p>488 GTB features very sculptural flanks which are the key to its character. Its large signature air intake scallop is a nod to the original 308 GTB and is divided into two sections by a splitter. The front is characterised by the dual grille opening which channels air into the two radiators.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://levitra-9.us/ferrari-interior-colors.php -->
	<img class="left_pic" src="Images/Ferrari/488/488_3.jpg" alt="Picture of Ferrari 488"/>
	<h2>Interior</h2>
	<p>The overall result is an effortless marriage of innovative volumes and compact, functional forms. The design references typical Ferrari traits, such as the clear separation between dashboard and tunnel, the multifunctional steering wheel, the control bridge on the tunnel.</p>
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
		<a href="enquiry.php" onclick="getProduct10()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>