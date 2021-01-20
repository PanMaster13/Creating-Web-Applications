<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for Rolls Royce Phantom</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
	<meta charset="utf-8" />
	<meta name="author" content="Jason Ang Chia Wuen" />
	<meta name="description" content="Webpage about Rolls Royce Phantom" />
	<meta name="keywords" content="BMW, X6" />
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
		<li>Rolls Royce Phantom</li>
	</ul>
	<!-- This image is saved from https://puertoportals.info/pimped-rolls-royce.html -->
	<img class="main_pic" src="Images/Royce/Phantom/phantom.jpg" alt="Picture of Rolls Royce Phantom" />

	
	<h1>Rolls Royce Phantom</h1>
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://www.4wheelsnews.com/auto/2018-rolls-royce-phantom-online-configurator-37864.html -->
	<img class="left_pic" src="Images/Royce/Phantom/phantom_1.jpg" alt="Picture of Rolls Royce Phantom" />
	<h2>Design</h2>
	<p>The Phantom VIII's styling has been described as an evolution of the Phantom VII's. Like its predecessor, the Phantom VIII has a short front overhang and upright front end, a long bonnet and set-back passenger compartment as well as a long wheelbase and a flowing rear end It also uses rear suicide doors, which Rolls-Royce label "coach doors".</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://www.n-tv.de/thema/rolls-royce-modelle -->
	<img class="right_pic" src="Images/Royce/Phantom/phantom_2.jpg" alt="Picture of Rolls Royce Phantom" />
	<h2>Engine</h2>
	<p>The Phantom is exclusively available with a twin-turbocharged 6.75-litre V12 engine. This is a variant of BMW's N74 called the N74B68 which is unique to the Phantom. ZF's 8HP 8-speed automatic transmission is the sole gearbox option. This is linked to a GPS receiver which analyses the car's location and speed to optimise shift timing.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://plus.google.com/106311256540920400474 -->
	<img class="left_pic" src="Images/Royce/Phantom/phantom_3.jpg" alt="Picture of Rolls Royce Phantom" />
	<h2>Platform</h2>
	<p>The Phantom uses an aluminium spaceframe chassis; this is a version of Rolls-Royce's modular "Architecture of Luxury" platform. The Phantom is the first to car be based on this new platform, which will later be used by the Cullinan SUV and other future Rolls-Royce models.</p>
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
		<a href="enquiry.php" onclick="getProduct23()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>