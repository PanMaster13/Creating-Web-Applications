<!DOCTYPE html>
<html lang="en">
<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->
<head>
	<title>Rental Car List</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
	<meta charset="utf-8" />
	<meta name="author" content="Jason Ang Chia Wuen" />
	<meta name="description" content="Webpage about rental car list" />
	<meta name="keywords" content="rental, car, list" />
</head>

<body class="carlist">
	<header>
		<?php
			include 'include/nav.php';
		?>
	</header>
	
	<script>
		var x = document.getElementById("our_cars");
		x.className = "active";
	</script>
	
	<article class="car_list_article">
		<h1>Cars for Rent</h1>
		
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
			
		</div>
		
		
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Our Cars</li>
		</ul>
		
		<div id="car_brand1">
		<h2>Aston Martin</h2>
		<div class="car_item">
				<!-- This image is saved from https://www.autoblog.com/buy/2015-Aston+Martin-DB9-Base__Coupe/ -->
				<a href="product1.php" target="next_page" title="Click for car details">
				<img src="Images/Aston/DB9/db9.jpg" alt="Picture of Aston Martin DB9" />
				<p>Aston Martin DB9</p>
				</a>
		</div>
	
		<div class="car_item">
				<!-- This image is saved from http://teresasmosaiccafe.info/online/aston-martin-one-77-white.aop -->
				<a href="product2.php" target="next_page" title="Click for car details">
				<img src="Images/Aston/One-77/77.jpg" alt="Picture of Aston Martin One-77" />
				<p>Aston Martin One-77</p>
				</a>
		</div>
	
		<div class="car_item">
				<!-- This image is saved from https://wallpaperscraft.com/download/aston_martin_v8_vantage_2008_white_front_view_cars_sports_37479/3840x2400-->
				<a href="product3.php" target="next_page" title="Click for car details">
				<img src="Images/Aston/Vanquish/vq.jpg" alt="Picture of Aston Martin Vanquish" />
				<p>Aston Martin Vanquish</p>
				</a>
		</div>
	
		<div class="car_item">
				<!-- This image is saved from https://prestige-car-location.ch/ -->
				<a href="product4.php" target="next_page" title="Click for car details">
				<img src="Images/Aston/Vantage/vantage.jpg" alt="Picture of Aston Martin Vantage" />
				<p>Aston Martin Vantage</p>
				</a>
		</div>
		</div>
		
		<div id="car_brand2">
		<h2>BMW</h2>
		<div class="car_item">
				<!-- This image is saved from http://www.mad4wheels.com/models/2010_BMW_5er_(_F10_)_by_AC_Schnitzer/detail.asp?id_pic=285626 -->
				<a href="product5.php" target="next_page" title="Click for car details">
				<img src="Images/BMW/5series/5.jpg" alt="Picture of BMW 5-series" />
				<p>BMW 5-series</p>
				</a>
		</div>
	
		<div class="car_item">
				<!-- This image is saved from http://www.automobilemag.com/news/bmw-7-series-celebrates-40th-birthday-limited-edition-model/ -->
				<a href="product6.php" target="next_page" title="Click for car details">
				<img src="Images/BMW/7series/7.jpg" alt="Picture of BMW 7-series" />
				<p>BMW 7-series</p>
				</a>
		</div>
	
		<div class="car_item">
				<!-- This image is saved from http://www.newcars.com/bmw/i8/2017 -->
				<a href="product7.php" target="next_page" title="Click for car details">
				<img src="Images/BMW/I8/i8.jpg" alt="Picture of BMW i8" />
				<p>BMW i8</p>
				</a>
		</div>
	
		<div class="car_item">
				<!-- This image is saved from http://www.1gai.ru/blog/live/519846-naskolko-krut-vnedorozhnik-urus-sravnenie-s-konkurentami-v-avtosimulyatore-forza.html -->
				<a href="product8.php" target="next_page" title="Click for car details">
				<img src="Images/BMW/X6/x6.jpg" alt="Picture of BMW X6" />
				<p>BMW X6</p>
				</a>
		</div>
		</div>
		
		<div id="car_brand3">
		<h2>Ferrari</h2>
		<div class="car_item">
				<!-- This image is saved from https://www.autoblog.com/owner-reviews/ferrari/ -->
				<a href="product9.php" target="next_page" title="Click for car details">
				<img src="Images/Ferrari/458/458.jpg" alt="Picture of Ferrari 458" />
				<p>Ferrari 458</p>
				</a>
		</div>
	
		<div class="car_item">
				<!-- This image is saved from http://driving.ca/ferrari/488-gtb -->
				<a href="product10.php" target="next_page" title="Click for car details">
				<img src="Images/Ferrari/488/488.jpg" alt="Picture of Ferrari 488" />
				<p>Ferrari 488</p>
				</a>
		</div>
	
		<div class="car_item">
				<!-- This image is saved from https://www.cartrade.com/ferrari-cars/california -->
				<a href="product11.php" target="next_page" title="Click for car details">
				<img src="Images/Ferrari/California/california.jpg" alt="Picture of Ferrari California" />
				<p>Ferrari California</p>
				</a>
		</div>
	
		<div class="car_item">
				<!-- This image is saved from https://www.kimballstock.com/cutout-car-stock-photos.asp -->
				<a href="product12.php" target="next_page" title="Click for car details">
				<img src="Images/Ferrari/F12/f12.jpg" alt="Picture of Ferrari F12" />
				<p>Ferrari F12</p>
				</a>
		</div>
		</div>
		
		<div id="car_brand4">
		<h2>Lamborghini</h2>
		<div class="car_item">
				<!-- This image is saved from http://netgeek.biz/archives/59294 -->
				<a href="product13.php" target="next_page" title="Click for car details">
				<img src="Images/Lamborghini/Avendator/lambo_aven.jpg" alt="Picture of Lamborghini Avendator" />
				<p>Lamborghini Avendator</p>
				</a>
		</div>
	
		<div class="car_item">
				<!-- This image is saved from https://otomonesia.com/1206/harga-mobil-lamborghini/ -->
				<a href="product14.php" target="next_page" title="Click for car details">
				<img src="Images/Lamborghini/Gallardo/lambo_gall.jpg" alt="Picture of Lamborghini Gallardo" />
				<p>Lamborghini Gallardo</p>
				</a>
		</div>
	
		<div class="car_item">
				<!-- This image is saved from https://yandex.ru/collections/card/57c5b976663518b08c8fcf58/ -->
				<a href="product15.php" target="next_page" title="Click for car details">
				<img src="Images/Lamborghini/Huracan/lambo_huracan.jpg" alt="Picture of Lamborghini Huracan" />
				<p>Lamborghini Huracan</p>
				</a>
		</div>
	
		<div class="car_item">
				<!-- This image is saved from http://www.asianauto.com/now-you-can-oder-your-lamborghini-urus-online/ -->
				<a href="product16.php" target="next_page" title="Click for car details">
				<img src="Images/Lamborghini/Urus/lambo_urus.jpg" alt="Picture of Lamborghini Urus" />
				<p>Lamborghini Urus</p>
				</a>
		</div>
		</div>
		
		<div id="car_brand5">
		<h2>Porsche</h2>
		<div class="car_item">
				<!-- This image is saved from https://www.porschevancouver.ca/inventory?sort_by=model&sort_direction=desc&limit=10&page=1&condition=used&make=porsche&model=911 -->
				<a href="product17.php" target="next_page" title="Click for car details">
				<img src="Images/Porsche/911/911.jpg" alt="Picture of Porsche 911" />
				<p>Porsche 911</p>
				</a>
		</div>
	
		<div class="car_item">
				<!-- This image is saved from https://carolbly.com/porsche-cayenne-turbo-s-price.html -->
				<a href="product18.php" target="next_page" title="Click for car details">
				<img src="Images/Porsche/Cayenne/cayenne.jpg" alt="Picture of Porsche Cayenne" />
				<p>Porsche Cayenne</p>
				</a>
		</div>
	
		<div class="car_item">
				<!-- This image is saved from http://blog.naver.com/PostView.nhn?blogId=deverser&logNo=220959382724&categoryNo=0&parentCategoryNo=0&viewDate=&currentPage=1&postListTopCurrentPage=1&from=postView -->
				<a href="product19.php" target="next_page" title="Click for car details">
				<img src="Images/Porsche/Cayman/cayman.jpg" alt="Picture of Porsche Cayman" />
				<p>Porsche Cayman</p>
				</a>
		</div>
	
		<div class="car_item">
				<!-- This image is saved from https://www.jamesedition.com/cars/porsche/panamera-4/porsche-panamera4-for-sale-10211934 -->
				<a href="product20.php" target="next_page" title="Click for car details">
				<img src="Images/Porsche/Panamera/panamera.jpg" alt="Picture of Porsche Panamera" />
				<p>Porsche Panamera</p>
				</a>
		</div>
		</div>
		
		<div id="car_brand6">
		<h2>Rolls Royce</h2>
		<div class="car_item">
				<!-- This image is saved from http://unblossoming55.rssing.com/chan-24279279/all_p312.html -->
				<a href="product21.php" target="next_page" title="Click for car details"> 
				<img src="Images/Royce/Ghost/ghost.jpg" alt="Picture of Rolls Royce Ghost" />
				<p>Rolls Royce Ghost</p>
				</a>
		</div>
	
		<div class="car_item">
				<!-- This image is saved from http://www.fashionbeans.com/2016/most-stylish-limos-ever-made/ -->
				<a href="product22.php" target="next_page" title="Click for car details">
				<img src="Images/Royce/Limo/limo.jpg" alt="Picture of Rolls Royce Limo" />
				<p>Rolls Royce Limo</p>
				</a>
		</div>
	
		<div class="car_item">
				<!-- This image is saved from https://puertoportals.info/pimped-rolls-royce.html -->
				<a href="product23.php" target="next_page" title="Click for car details">
				<img src="Images/Royce/Phantom/phantom.jpg" alt="Picture of Rolls Royce Phantom" />
				<p>Rolls Royce Phantom</p>
				</a>
		</div>
	
		<div class="car_item">
				<!-- This image is saved from http://chekcar.blogspot.my/2014/12/rolls-royce-wraith.html -->
				<a href="product24.php" target="next_page" title="Click for car details">
				<img src="Images/Royce/Wraith/wraith.jpg" alt="Picture of Rolls Royce Wraith" />
				<p>Rolls Royce Wraith</p>
			</a>
		</div>
		</div>
	</article>
	
	<?php
		include 'include/footer.php';
	?>
</body>
</html>