<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for Rolls Royce Wraith</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
	<meta charset="utf-8" />
	<meta name="author" content="Jason Ang Chia Wuen" />
	<meta name="description" content="Webpage about Rolls Royce Wraith" />
	<meta name="keywords" content="Rolls Royce, Wraith" />
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
			<li>Rolls Royce Wraith</li>
		</ul>
		<!-- This image is saved from http://chekcar.blogspot.my/2014/12/rolls-royce-wraith.html -->
		<img class="main_pic" src="Images/Royce/Wraith/wraith.jpg" alt="Picture of Rolls Royce Wraith" />

		
		<h1>Rolls Royce Wraith</h1>
		<hr class="product_hr"/>
		
		<div>
		<!-- This image is saved from https://www.pinterest.com/pin/590393832372279575/ -->
		<img class="left_pic" src="Images/Royce/Wraith/wraith_1.jpg" alt="Picture of Rolls Royce Wraith" />
		<h2>Engine</h2>
		<p>Powered by a 6.6-liter V12 engine with an output of 624 bhp and 590 pound-feet of torque, Rolls-Royce's new coupe can reach the 62 mph mark from a standing start in just 4.6 seconds. The Wraith also marks the debut of brand-new Satellite Aided Transmission, which uses GPS mapping data to pre-select the correct gear for the road terrain ahead.</p>
		</div>
		
		<hr class="product_hr"/>
		
		<div>
		<!-- This image is saved from http://www.evo.co.uk/features/16535/10-amazing-and-absurd-automotive-options-in-pictures -->
		<img class="right_pic" src="Images/Royce/Wraith/wraith_2.jpg" alt="Picture of Rolls Royce Wraith" />
		<h2>Interior</h2>
		<p>The "sumptuous, contemporary and yacht-like" interior cabin is also packed with state-of-the-art technology, such as the "on-board valet" voice activated connectivity, for any kind of data and infotainment related instructions, or the Spirit of Ecstasy Rotary Controller touchpad for those who want to keep it a little more classic.</p>
		</div>
		
		<hr class="product_hr"/>
		
		<div>
		<!-- This image is saved from http://mailemedicinals.com/content/blue-silver-rolls-royce.html -->
		<img class="left_pic" src="Images/Royce/Wraith/wraith_3.jpg" alt="Picture of Rolls Royce Wraith" />
		<h2>Design</h2>
		<p>The car’s body panels are brazed by hand, for example, before the joins are sanded to a perfect finish for painting. There are 6394 spot welds on the car, and laser-welded seams in places, too. Rolls-Royce fits a double front bulkhead to keep the cabin extra-quiet. Such things are way beyond the realm of a BMW 7 Series.</p>
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
		<a href="enquiry.php" onclick="getProduct24()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>