<!DOCTYPE html>
<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching)-->
<!-- Author: Jonathan Lim Hao-->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 7/4/2018-->
<head>
	<title>Luxury Car Rental Homepage</title>
	<meta charset="utf-8" />
	<meta name="author" content="Jonathan Lim Hao" />
	<meta name="description" content="Homepage of Luxury Car Rental" />
	<meta name="keywords" content="Homepage" />
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
</head>

<body class="index_body">
	<header>
		<?php
			include 'include/nav.php';
		?>
	</header>
	<article>
	
			<a class="top_button" href="#first_slide" title="Click to go back to top"><img src="Images/aarow.png" alt="Back to top button" /></a>
			<!--First Background Image-->
			<div class="first_slide" id="first_slide">
				<div class="background_shading_slide1" id="background_shadding">
					<img src="Images/logo4.png" alt="Logo" title="Logo" id="logo" />
					<h1>LUXURY CAR RENTALS</h1>
					<h4>KUCHING</h4>
					<a href="https://www.facebook.com/G-Tech-1488249157888810/" target="_blank"><img src="Images/facebook1.png" alt="Facebook" class="facebook_logo"></a>
					<a href="https://www.instagram.com/mobilej.99/" target="_blank"><img src="Images/instagram.png" alt="Instagram" class="instagram_logo"></a>
				</div>
			</div>		
			<div class="service">
			<div class="background_shading">
				<div class="main_title">
					<h1>Services</h1>
					<hr class="index_hr" />
				</div>
				<div class="container_content">
						<div class="content_1">
								<h4>GENERAL HIRE</h4>
								<p>Luxury Car Rentals Kuching is on call beyond office hours to handle your travel needs. Our drivers operate like clockwork to keep you on schedule</p>
						</div>
						<div class="content_2">
								<h4>WEDDINGS</h4>
								<p>Nothing but the best will do for the biggest day of your life; Luxury Car Rentals Kuching offers the best luxury wedding packages</p>
						</div>
						<div class="content_3">
								<h4>CORPORATE HIRE</h4>
								<p>We specialise in chauffeuring executives. Whatever you need, wherever you’re going, just sit back, relax, and leave it to the expert drivers in our luxury fleet</p>
						</div>
						<div class="content_4">
							<h4>AIRPORT TRANSFERS</h4>
							<p>Trouble free, on time service for your airport transfers in Kuching. Have a relaxed start to your holiday or business trip</p>
						</div>
						<div class="content_5">
							<h4>EVENTS</h4>
							<p>Whatever, wherever and whenever your event is, you can always rely on Luxury Car Rental Kuching’s chauffeured service to get you there</p>
						</div>
						<div class="content_6">
							<h4>LONG TERM LEASING</h4>
							<p>Are you looking to lease or hire cars for an extended period of time? We offer leasing packages that cover weekly and monthly tenures as well</p>
						</div>
					</div>
				</div>
			</div>
			<div class="testimonials">
				<div class="testimonial_title">
					<h1>TESTIMONIALS</h1>
					<hr class="intro_hr" />
				</div>
				<div class="testimonial_1">
					<img src="Images/comment.jpg" alt="comment_logo" />
					<p>"I would highly recommend Lucury Car Rentals Kuching to anyone in the market looking for a personalised expereience"</p>
					<h5>Dr. Mahmud Israel</h5>
				</div>
				<div class="testimonial_2">
					<img src="Images/comment.jpg" alt="comment_logo" />
					<p>"Very Impressed with the services that was extended to me in short notice"</p>
					<h5>Dato' Seri Mohd Kanza Ria</h5>
				</div>
				<div class="testimonial_3">
					<img src="Images/comment.jpg" alt="comment_logo" />
					<p>"Prompt in their response and professional, would most definitely use them again, Thanks!"</p>
					<h5>Mr. Tan Kim Ling</h5>
				</div>
				<div class="testimonial_4">
					<img src="Images/comment.jpg" alt="comment_logo" />
					<p>"The VIP treatment 
						received was extremely well put together - completely satisfied. A must try"</p>
					<h5>Mr. Jack Deoshi</h5>
				</div>
			</div>
			<div class="responsive-map-container">
			<div class="background_shadding_slide2" id="background_shadding">
			<div class="main_title">
				<h1>Location</h1>
				<hr class="index_hr" />
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15953.547796210181!2d110.3499546!3d1.5347944!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fba7a06383fb35%3A0x4e1769743e0ca4bc!2sThe+Spring!5e0!3m2!1sen!2smy!4v1525583944143" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</article>
	
		<?php
		include 'include/footer.php';
	?>
<script src="enhancements2.js"></script>
</body>
</html>