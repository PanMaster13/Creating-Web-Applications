<!DOCTYPE html>

<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental for Rolls Royce Ghost</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
	<meta charset="utf-8" />
	<meta name="author" content="Jason Ang Chia Wuen" />
	<meta name="description" content="Webpage about Rolls Royce Ghost" />
	<meta name="keywords" content="Rolls Royce, Ghost" />
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
		<li>Rolls Royce Ghost</li>
	</ul>
	<!-- This image is saved from http://unblossoming55.rssing.com/chan-24279279/all_p312.html -->
	<img class="main_pic" src="Images/Royce/Ghost/ghost.jpg" alt="Picture of Rolls Royce Ghost" />

	
	<h1>Rolls Royce Ghost</h1>
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from https://www.autoblog.com/used-detail--5826835424520641673-Rolls-Royce-Ghost-2018 -->
	<img class="left_pic" src="Images/Royce/Ghost/ghost_1.jpg" alt="Picture of Rolls Royce Ghost" />
	<h2>Design</h2>
	<p>The Ghost was designed by Andreas Thurner and engineered by Helmut Riedl, who led the development of the larger Rolls-Royce Phantom. The Ghost, codenamed RR04 during its design phase, was developed to compete with vehicles significantly less expensive than the Phantom, such as the Bentley Flying Spur and V12 engine versions of the Mercedes-Benz S-Class.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://vietbao.vn/O-to-xe-may/RollsRoyce-Phantom-2018-co-muc-gia-len-den-12-ty-dong-o-chau-A/223160674/350/ -->
	<img class="right_pic" src="Images/Royce/Ghost/ghost_2.jpg" alt="Picture of Rolls Royce Ghost" />
	<h2>Interior</h2>
	<p>On the inside, Rolls-Royce fitted re-designed front seats, and re-angled the rear seats so as to allow for easier communication with other passengers. The clock fascia and instrument dials gained polished metal chaplets that evoke premium watch design. Natural grain leather could now be fitted to the A and C pillars, and two new veneers became available.</p>
	</div>
	
	<hr class="product_hr"/>
	
	<div>
	<!-- This image is saved from http://mobilkomersial.com/2015/12/ -->
	<img class="left_pic" src="Images/Royce/Ghost/ghost_3.jpg" alt="Picture of Rolls Royce Ghost" />
	<h2>Technical</h2>
	<p>Technical modifications include re-designed front and rear struts coupled to new steering gear, as well as adjusted dampers and new rear hydraulic axle bearings. The Series II also gained advanced LED headlights. With the Series II Rolls-Royce also offers a "Dynamic Driving Package" that they claim offers a more involving driving experience. "Satellite Aided Transmission" technology was added to all Ghosts, which utilises GPS data, as well as analysing the driving style of the driver, to select the most appropriate gear.</p>
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
		<a href="enquiry.php" onclick="getProduct21()">Book Now!</a>
	</div>
<script src="script.js"></script>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>