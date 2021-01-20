<!DOCTYPE html>
<html lang="en">

<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jason Ang Chia Wuen -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->

<head>
	<title>Web Developer 3</title>
	<meta charset="utf-8" />
	<meta name="author" content="Jason Ang Chia Wuen" />
	<meta name="description" content="Webpage about web developer" />
	<meta name="keywords" content="web, developer" />
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
</head>
<script src="enhancements2.js"></script>
<body class="about">
	<header>
		<?php
			include 'include/nav.php';
		?>
	</header>
	<article class="article_about">
	
	<figure>
		<img src="Images/Members/jason.jpg" alt="Picture of Jason" />	
	</figure>
	
	<section class="section_about">
		<div class="background_shadding_about" id="background_shadding">
			<p class="name">Jason Ang Chia Wuen</p>
			<hr class="hr_about" />
			<p class="number">-100087252-</p>
			<p class="course">-Bachelor of Computer Science-</p>
			<table class="about_table">
				<caption class="about_table_caption">Contributions to the assignment</caption>
				<tr>
					<th>HTML</th>
					<th>CSS</th>
				</tr>
				<tr>
					<td>Coded the product web page (e.g. product1.html, product2.html) and the list of items for rent web page (car_list.html)</td>
					<td>Coded the CSS design for the product web page and the list of items for rent web page in the CSS file</td>
				</tr>
			</table>
			<p class="email_about">Email: <a href="mailto:r.mukuro00@hotmail.com">r.mukuro00@hotmail.com</a></p>
		</div>
	</section>
	</article>
	<?php
		include 'include/footer.php';
	?>
</body>

</html>