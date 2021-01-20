<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Using PHP variables, arrays and operators</title>
</head>

<body>
	<h1>Creating Web Applications - Lab 8</h1>
	
	<?php 
		$marks = array (85, 85, 95);
		$marks[1] = 90;
		$avg = ($marks[0] + $marks[1] + $marks[2]) / 3;
		
		if($avg >= 50)
			$status = "PASSED";
		else
			$status = "FAILED";
		
		echo "<p>The average score is $avg. You $status.</p>";
	?>
	
</body>

</html>