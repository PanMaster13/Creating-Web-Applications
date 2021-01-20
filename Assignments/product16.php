<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for Lamborghini Urus</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<meta charset="utf-8"/>
	<meta name="author" content="Jason Ang Chia Wuen"/>
	<meta name="description" content="Webpage about Lamborghini Urus"/>
	<meta name="keywords" content="Lamborghini, Urus"/>
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
		<li>Lamborghini Urus</li>
	</ul>
	<!-- This image is saved from http://www.asianauto.com/now-you-can-oder-your-lamborghini-urus-online/ -->
	<img class="main_pic" src="Images/Lamborghini/Urus/lambo_urus.jpg" alt="Picture of Lamborghini Urus"/>

	
	<h1>Lamborghini Urus</h1>
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://www.piston.my/2018/03/16/lamborghini-urus-officially-launched-in-malaysia-videos/ -->
	<img class="left_pic" src="Images/Lamborghini/Urus/lambo_urus1.jpg" alt="Picture of Lamborghini Urus"/>
	<h2>Emotion</h2>
	<p>A distinct Lamborghini engine sound, coupled with traits of a sports car and SUV, provide the driver with a uniquely emotional experience. With its strong personality, pure design and absolute sportiness, Lamborghini Urus is one of a kind.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://www.piston.my/2018/03/16/lamborghini-urus-officially-launched-in-malaysia-videos/ -->
	<img class="right_pic" src="Images/Lamborghini/Urus/lambo_urus2.jpg" alt="Picture of Lamborghini Urus"/>
	<h2>Exterior</h2>
	<p>Lamborghini Urus has a cutting-edge, distinct and streamlined design with multiple souls: sporty, elegant and off-road. Its muscular surfaces make it appear strong and self-secure, while the mixed tires allow a luxury super sports car look. All the surfaces are designed with a clear attention to functionality.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://www.autoexpress.co.uk/101947/new-lamborghini-urus-suv-revealed-pictures -->
	<img class="left_pic" src="Images/Lamborghini/Urus/lambo_urus3.jpg" alt="Picture of Lamborghini Urus"/>
	<h2>Interior</h2>
	<p>In the Lamborghini Urus interior, luxurious Italian craftsmanship meets state-of-the-art technology. The aeronautic design and the driver-oriented instrument concept with three TFT screens (one for the instruments, one for infotainment and one for comfort functions, including virtual keyboard feature with hand-writing recognition) put the driver’s needs at the forefront and make the overall experience more comfortable and enjoyable.</p>
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
		<a href="enquiry.php" onclick="getProduct16()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>