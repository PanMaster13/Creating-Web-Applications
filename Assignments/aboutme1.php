<!DOCTYPE html>
<html lang="en">

<!-- Description: Assignment: Commerce(Luxury Car Rental Kuching) -->
<!-- Author: Jonathan Lim -->
<!-- Date: 30/3/2018 -->
<!-- Validated: OK 31/3/2018-->

<head>
	<title>Web Developer 1</title>
	<meta charset="utf-8" />
	<meta name="author" content="Jonathan Lim" />
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
		<img src="Images/Members/jonathan.jpeg" alt="Picture of Jonathan" />	
	</figure>
	
	<section class="section_about">
		<div class="background_shadding_about" id="background_shadding">
			<p class="name">Jonathan Lim Hao</p>
			<hr class="hr_about" />
			<p class="number">-100087469-</p>
			<p class="course">-Bachelor of Information and Communication Technlogy (BICT)-</p>
			<table class="about_table">
				<caption class="about_table_caption">Contributions to the assignment</caption>
				<tr>
					<th>HTML</th>
					<th>CSS</th>
				</tr>
				<tr>
					<td>Coded the Home Page (index.html)and Enquiry (enquiry.html).</td>
					<td>Coded the CSS of index, disclaimer, faq, enquiry in the CSS file.</td>
				</tr>
			</table>
			<p class="email_about">Email: <a href="mailto:100087469@students.swinburne.edu.my">100087469@students.swinburne.edu.my</a></p>
		</div>
	</section>
	</article>
	
	<?php
		include 'include/footer.php';
	?>
		

</body>
</html>