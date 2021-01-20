<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for Porsche Cayman</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
	<meta charset="utf-8" />
	<meta name="author" content="Jason Ang Chia Wuen" />
	<meta name="description" content="Webpage about Porsche Cayman" />
	<meta name="keywords" content="Porsche, Cayman" />
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
		<li>Porsche Cayman</li>
	</ul>
	<!-- This image is saved from http://blog.naver.com/PostView.nhn?blogId=deverser&logNo=220959382724&categoryNo=0&parentCategoryNo=0&viewDate=&currentPage=1&postListTopCurrentPage=1&from=postView -->
	<img class="main_pic" src="Images/Porsche/Cayman/cayman.jpg" alt="Picture of Porsche Cayman" />

	
	<h1>Porsche Cayman</h1>
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://www.nanotrunk.com/tag/hybrid-spyder-porsche-918/ -->
	<img class="left_pic" src="Images/Porsche/Cayman/cayman_1.jpg" alt="Picture of Porsche Cayman" />
	<h2>Design</h2>
	<p>The new Cayman is the sequel that continues the 718 era. At their heart, a four-cylinder turbocharged boxer engine beats with the same fighting spirit that delivered countless podium finishes. In them lives the will to break away from standards.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://www.bramanmotorcars.com/search/used-718-cayman-west-palm-beach-fl/?cy=33409&md=4403&tp=used -->
	<img class="right_pic" src="Images/Porsche/Cayman/cayman_2.jpg" alt="Picture of Porsche Cayman" />
	<h2>Engine</h2>
	<p>718 models’ engine is positioned no further than 12 in, behind the driver. Effect number one: the resounding thump on the back. Effect number two: the extraordinary dynamic cornering capabilities, thanks to the car’s low and centre of gravity.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://korncars.com/2016/04/13/porsche-cayman-s-2014-all-a-911-could-or-should-be/ -->
	<img class="left_pic" src="Images/Porsche/Cayman/cayman_3.jpg" alt="Picture of Porsche Cayman" />
	<h2>Chassis</h2>
	<p>Optional PASM, the electronic damping control system, continuously adjusts the damping force on each wheel, based on current road conditions and driving style. In addition, the body sits 10 mm lower.</p>
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
		<a href="enquiry.php" onclick="getProduct19()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>