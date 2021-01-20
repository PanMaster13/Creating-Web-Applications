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
	<style>


</style>
</head>
	
<body class="enhancement_body">
	<header>
		<?php
			include 'include/nav.php';
		?>
	</header>
	
	<article>
		<div class="background_shadding_enhancement" id="background_shadding">
		<div class="main_title_enhancement">
			Enhancement
			<hr class="intro_hr"></hr>
		</div>
		<div class="enhancement_slideshow">
		<div class="slideshow-container">

			<div class="mySlides">
				<iframe width="500" height="400" src="https://www.youtube.com/embed/1h9JH-eCq0k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen ></iframe>
				<div class="slideshow_text">Aston Martin DB9</div>
			</div>

			<div class="mySlides">
			  <iframe width="500" height="400" src="https://www.youtube.com/embed/rhW8T2i0-ug" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen ></iframe>
			  <div class="slideshow_text">Ferrari 488</div>
			</div>

			<div class="mySlides">
			  <iframe width="500" height="400" src="https://www.youtube.com/embed/eJnWPhSQjPs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen ></iframe>
			  <div class="slideshow_text">Lamborghini Huracan</div>
			</div>
			
			<div class="mySlides">
			  <iframe width="500" height="400" src="https://www.youtube.com/embed/8Eajqcnc43U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			  <div class="slideshow_text">BMW I8</div>
			</div>
			
			<div class="mySlides">
			  <iframe width="500" height="400" src="https://www.youtube.com/embed/iIIHuZ1kqAE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			  <div class="slideshow_text">Porsche 911</div>
			</div>
			
			<div class="mySlides">
			  <iframe width="500" height="400" src="https://www.youtube.com/embed/PVJNo5GtCsk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			  <div class="slideshow_text">Rolls-Royce Phantom</div>
			</div>
			
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
			
			<br>

			<div style="text-align:center">
			  <span class="dot" onclick="currentSlide(1)"></span> 
			  <span class="dot" onclick="currentSlide(2)"></span> 
			  <span class="dot" onclick="currentSlide(3)"></span>
			  <span class="dot" onclick="currentSlide(4)"></span> 
			  <span class="dot" onclick="currentSlide(5)"></span> 
			  <span class="dot" onclick="currentSlide(6)"></span> 
			</div>
			
			<script src="enhancements2.js"></script>
			<p>Slideshow is very usable and convenient for any user, and they can be used almost anywhere. Slideshow does make it easier to fit some information on the top of the webpage. Slideshow makes the web users to interact with the webpages and it can make the webpage design more responsive. <em>< iframe width="500" height="400" src="https://www.youtube.com/embed/8Eajqcnc43U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen >< /iframe ><em> this code is to show the embedded youtube video and you can change the size of the video by changing the value of the width and height. <em>< div class="slideshow_text">Porsche 911< /div ></em> this code is to show the name of the product that appear in the video. <em>< a class="prev" onclick="plusSlides(-1)">&#10094;< /a ></em> this code is to create the previous button which go to the previous video by clicking it. <em>< a class="next" onclick="plusSlides(1)">&#10095;< /a ></em> this code is to create the next button which go to the next video by clicking it. <em>< span class="dot" onclick="currentSlide(1)">< /span ></em> this code is to create the dots under the slideshow for the web users to notice which video they are viewing and it can also be clicked. For the slideshow technique, our group refer to the website which is https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_slideshow.</p>
			<p><a href="car_list.html" class="ehc_hyperlink">Slideshow</a></p>
			</div>
		</div>
	</article>
	<?php
		include 'include/footer.php';
	?>
</body>
</html>