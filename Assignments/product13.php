<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for Lamborghini Aventador</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<meta charset="utf-8"/>
	<meta name="author" content="Jason Ang Chia Wuen"/>
	<meta name="description" content="Webpage about Lamborghini Avendator"/>
	<meta name="keywords" content="Lamborghini, Avendator"/>
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
		<li>Lamborghini Avendator</li>
	</ul>
	<!-- This image is saved from http://netgeek.biz/archives/59294 -->
	<img class="main_pic" src="Images/Lamborghini/Avendator/lambo_aven.jpg" alt="Picture of Lamborghini Avendator"/>

	
	<h1>Lamborghini Avendator</h1>
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://wallpaperscraft.com/download/lamborghini_aventador_style_cars_traffic_83242/3840x2400 -->
	<img class="left_pic" src="Images/Lamborghini/Avendator/lambo_aven1.jpg" alt="Picture of Lamborghini Avendator engine"/>
	<h2>Emotion</h2>
	<p>The jewel in the crown is the car's V12 engine, hand-built in Sant'Agata Bolognese, naturally balanced and longitudinally mounted in a central position.  The excellent acceleration capabilities at any engine speed, the lightning-fast reactivity, and the breathtaking roar of the Aventador demonstrate the incredible power of its engine.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://armeniabirding.info/lamborghini-sports-car.html -->
	<img class="right_pic" src="Images/Lamborghini/Avendator/lambo_aven2.jpg" alt="Picture of Lamborghini Avendator exterior"/>
	<h2>Exterior</h2>
	<p>Design is not sufficient to describe it. It is the signature of a brand which has created the history of the super sports cars all around the world. A Lamborghini must always be recognizable at first sight. This is why every detail of the Aventador Coupé has been conceived to embody the purest DNA of Lamborghini: a true design gem that expresses dynamism and aggression.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://puertoportals.info/lamborghini-aventador-interior-white.html -->
	<img class="left_pic" src="Images/Lamborghini/Avendator/lambo_aven3.jpg" alt="Picture of Lamborghini Avendator interior"/>
	<h2>Interior</h2>
	<p>Inside, the Aventador Coupé represents a combination of exclusivity and high-tech luxury: the hand-finished interior, featuring the highest quality materials, is assembled using traditional techniques by a team of professionals, and merges with the cutting edge technology of the instrument cluster.</p>
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
		<a href="enquiry.php" onclick="getProduct13()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>