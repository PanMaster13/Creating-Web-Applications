<!DOCTYPE html>
<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching)-->
<!-- Author: Ricky Su -->
<!-- Date:  28/3/2018-->
<!-- Validated: OK 7/4/2018-->
<head>
	<title>FaQs</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
	<meta charset="utf-8" />
	<meta name="author" content="Ricky Su" />
	<meta name="description" content="Webpage about faq" />
	<meta name="keywords" content="faq" />
</head>

<body class="body_faq">
	<header>
		<?php
			include 'include/nav.php';
		?>
	</header>
	<script>
		var x = document.getElementById("faqs");
		x.className = "active";
	</script>
	<script src="enhancements2.js"></script>
	<article class="faqs_article">
		
		<div class="background_shading_faq" id="background_shadding">
		
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>FaQs</li>
		</ul>
		
			<div class="faq">
				<h1>FREQUENTLY ASKED QUESTIONS</h1>
		<hr class="faqs_hr" />
			<ol>
			<li>
				<p class="question">How do you differ from other car rental companies based in Kuching?</p>
				<p class="answer">Kuching Luxury Car Rental Service's goal is to provide various type of luxury vehicle, instead we provide you the special luxurious traveling experience you are looking for. From the moment that you contact us to the end of your business or holiday plans, we will guarantee you our full attention to ensure your trip is a memorable one. We strive to focus on the minute details so that you can experience luxury at its finest.</p>
			</li>
		
			<li>
				<p class="question">What does the car rental rate include? </p>
				<p class="answer">Rates generally include 230 kilometers of distance per day. Our rates are subject to 6% GST (Goods and Services Tax).</p>
			</li>
		
			<li>
				<p class="question">Must I refill the petrol tank?</p>
				<p class="answer">All cars are filled to with a full tank of premium grade petrol before the start of the booking period. There is no need to refill the tank at the end of the booking period for all chauffeured cars unless necessary.</p>
			</li>
		
			<li>
				<p class="question">Can I drop off the car earlier than it is stated on my reservation? Do I get a refund for unused days?</p>
				<p class="answer">You can return the vehicle earlier than was reserved and any unused days will be refunded at 50% of the agreed daily rate.</p>
			</li>
		
			<li>
				<p class="question">What if I receive a parking ticket/summonses?</p>
				<p class="answer">All summons, parking and traffic violations will be responsibility of Kuching Luxury Car Rental for all chauffeured cars.</p>
			</li>
		
			<li>
				<p class="question">What happens if the car is stolen or in an accident?</p>
				<p class="answer">Kuching Luxury Car Rental will endeavor to organise a replacement car (depending on availability*) if there is at least 5 hours remaining in the booking period. Otherwise, a prorated refund will be reimbursed to the client based on remaining time left in the booking.</p>
			</li>
		
			<li>
				<p class="question">How do I contact you?</p>
				<p class="answer">We can be reached via phone, email or through the contact us form through our website. One of our consultants will respond to you within 24 hours.</p>
			</li>
		
			<li>
				<p class="question">Can I request for a car that is not available on the website?</p>
				<p class="answer">Yes. Given that we have been allowed a sufficient amount of notice, we would be able to source and provide you with your desired selection.</p>
			</li>
		
			<li>
				<p class="question">How is my reservation confirmed?</p>
				<p class="answer">A detailed confirmation will be sent to you via email soon after payment is received.</p>
			</li>
			</ol>
			</div>
		</div>
	</article>
	
	<?php
		include 'include/footer.php';
	?>
</body>
</html>