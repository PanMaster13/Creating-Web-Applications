<!DOCTYPE html>
<html lang="en">

<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Hii Hean Wei -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->

<head>
	<title>Web Developer 4</title>
	<meta charset="utf-8" />
	<meta name="author" content="Hii Hean Wei" />
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
		<img src="Images/Members/hii.jpg" alt="Picture of Hii" />	
	</figure>
	
	<section class="section_about">
		<div class="background_shadding_about" id="background_shadding">
			<p class="name">Hii Hean Wei</p>
			<hr class="hr_about" />
			<p class="number">-100087236-</p>
			<p class="course">-Bachelor of Information & Communication Technology-</p>
			<table class="about_table">
				<caption class="about_table_caption">Contributions to the assignment</caption>
				<tr>
					<th>Picture Quality</th>
					<th>Background Design</th>
				</tr>
				<tr>
					<td>Gather the pictures of all the products.</td>
					<td>Looking for font type, background images and colors.</td>
				</tr>
			</table>
			<p class="email_about">Email: <a href="mailto:100087236@students.swinburne.edu.my">100087236@students.swinburne.edu.my</a></p>
		</div>
	</section>
	</article>
	
	<?php
		include 'include/footer.php';
	?>

</body>

</html>