<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for Rolls Royce Limo</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
	<meta charset="utf-8" />
	<meta name="author" content="Jason Ang Chia Wuen" />
	<meta name="description" content="Webpage about Rolls Royce Limo" />
	<meta name="keywords" content="Rolls Royce, Limo" />
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
		<li>Rolls Royce Limo</li>
	</ul>
	<!-- This image is saved from http://www.fashionbeans.com/2016/most-stylish-limos-ever-made/ -->
	<img class="main_pic" src="Images/Royce/Limo/limo.jpg" alt="Picture of Rolls Royce Limo" />

	
	<h1>Rolls Royce Limo</h1>
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://interior.hotelfrance24.com/rolls-royce-limousine-interior/ -->
	<img class="left_pic" src="Images/Royce/Limo/limo_1.jpg" alt="Picture of Rolls Royce Limo" />
	<h2>Design</h2>
	<p>The unique appearance of Rolls Royce Limousine makes these vehicles stand out from a crowd and is sure to leave a memorable impression with on goers. As a result, they are especially popular for special occasions such as weddings, anniversaries, birthdays, and proms. And although most limousines from Rolls Royce only seat a few passengers, they are considered to be the picture of comfort for travellers.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://www.fashionbeans.com/2016/most-stylish-limos-ever-made/ -->
	<img class="right_pic" src="Images/Royce/Limo/limo_2.jpg" alt="Picture of Rolls Royce Limo" />
	<h2>Engine</h2>
	<p>One of the best aspects about Rolls Royce limousines is that contemporary vehicle options are offered even though a Rolls Royce is considered to be a classic limo. The Rolls Royce Phantom limousine is a shining example of how automotive technology can modernize the vintage nature of a vehicle into a new version of a classic car. These limousines feature a V-12 engine, full power accessories, an integrated communication system, a DVD-based navigation system, and a surround-sound audio system to go along with the classic look and feel of a traditional Rolls Royce limo.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://thebestautos.net/luxury-car/rolls-royce-phantom-limo/attachment/side-view-rolls-royce-phantom-limo -->
	<img class="left_pic" src="Images/Royce/Limo/limo_3.jpg" alt="Picture of Rolls Royce Limo" />
	<h2>About</h2>
	<p>Those seeking the height of luxury transportation need look no further than Roll Royce limos. Rolls Royce has been making world-class automobiles for over a century and their limousines serve as a symbol of timeless elegance and style.</p>
	</div>
	
	<hr class="product_hr"/>
	</article>
	
	<section class="product_table">
	<table>
	<caption>Addition Car Information</caption>
			<tr>
				<td class="header">Car Features</td>
				<td>6 Doors</td>
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
		<a href="enquiry.php" onclick="getProduct22()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>