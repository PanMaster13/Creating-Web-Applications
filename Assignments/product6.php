<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for BMW 7 Series</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<meta charset="utf-8"/>
	<meta name="author" content="Jason Ang Chia Wuen"/>
	<meta name="description" content="Webpage about BMW 7 Series"/>
	<meta name="keywords" content="BMW, 7, Series"/>
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
		<li>BMW 7 Series</li>
	</ul>
	
	<!-- This image is saved from http://www.automobilemag.com/news/bmw-7-series-celebrates-40th-birthday-limited-edition-model/ -->
	<img class="main_pic" src="Images/BMW/7series/7.jpg" alt="Picture of BMW 7 Series" />

	
	<h1>BMW 7 Series</h1>

	<hr class="product_hr" />
	
	<div>
	<!-- This image is saved from http://autonationdrive.com/face-off-friday-2016-bmw-7-series-vs-2015-mercedes-benz-s-class/  -->
	<img class="left_pic" src="Images/BMW/7series/7_1.jpg" alt="Picture of BMW 7 Series" />
	<h2>Refinement</h2>
	<p>The BMW 7 Series represents precision and quality craftsmanship at a supreme level. Evidence of this is the Floating Design Mirror: The side mirrors appear to grow organically out of the window outline. Modern and elegant in their effect, they also enhance the aerodynamics. </p>
	</div>
	
	<hr class="product_hr" />
	
	<div>
	<!-- This image is saved from https://www.bmwofchampaign.com/cc-2016-bmw-7-series-for-sale-near-urbana-il/ -->
	<img class="right_pic" src="Images/BMW/7series/7_2.jpg" alt="Picture of BMW 7 Series" />
	<h2>Exterior</h2>
	<p>Dynamic proportions, precise lines and sculptured surfaces: The BMW 7 Series shows typical BMW design in its most elegant form. Be it in the forward-surging front, the extended side view or powerful rear, the BMW 7 Series radiates its natural and authoritative presence from every angle.</p>
	</div>
	
	<hr class="product_hr" />
	
	<div>
	<!-- This image is saved from https://www.taringa.net/posts/imagenes/19714825/Imagenes-de-Bmw.html -->
	<img class="left_pic" src="Images/BMW/7series/7_3.jpg" alt="Picture of BMW 7 Series" />
	<h2>Interior</h2>
	<p>Whichever seat you occupy in the BMW 7 Series, you feel the contemporary and future-orientated atmosphere of luxurious wellbeing. A virtuosic composition of material, light, shape, colour and innovative technologies to accompany people who wish to move things – be it from the rear or from the driver’s seat.</p>
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
		<a href="enquiry.php" onclick="getProduct6()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>