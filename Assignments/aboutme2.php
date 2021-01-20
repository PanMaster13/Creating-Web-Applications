<!DOCTYPE html>
<html lang="en">

<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Ricky Su -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->

<head>
	<title>Web Developer 2</title>
	<meta charset="utf-8" />
	<meta name="author" content="Ricky Su" />
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
		<img src="Images/Members/ricky.jpg" alt="Picture of Ricky" />	
	</figure>
	
	<section class="section_about">
		<div class="background_shadding_about" id="background_shadding">
			<p class="name">Ricky Su Yong How</p>
			<hr class="hr_about" />
			<p class="number">-100083700-</p>
			<p class="course">-Bachelor of Computer Science-</p>
			<table class="about_table">
				<caption class="about_table_caption">Contributions to the assignment</caption>
				<tr>
					<th>HTML</th>
					<th>CSS</th>
				</tr>
				<tr>
					<td>Coded the disclaimer web page (e.g. disclaimer.html), faq (faq.html), navigation bar and footer.</td>
					<td>Coded the CSS of disclaimer, faq, navigation bar and footer in the CSS file.</td>
				</tr>
			</table>
			<p class="email_about">Email: <a href="mailto:100083700@students.swinburne.edu.my">100083700@students.swinburne.edu.my</a></p>
		</div>
	</section>
	</article>
	
	<?php
		include 'include/footer.php';
	?>
		

</body>

</html>