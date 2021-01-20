<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Using PHP variables, arrays and operators</title>
</head>

<body>

	<?php
		echo "<h1>Days Array</h1>";
		echo "<h2>In English</h2>";
		
		$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
		
		echo "<p>The Days of the week in English are:</p>", $days[0], "<br/>", $days[1], "<br/>",$days[2], "<br/>",$days[3], "<br/>",$days[4], "<br/>",$days[5], "<br/>",$days[6];
		
		$days[0] = "Lundi";
		$days[1] = "Mardi";
		$days[2] = "Mercredi";
		$days[3] = "Jeudi";
		$days[4] = "Vendredi";
		$days[5] = "Samedi";
		$days[6] = "Dimanche";
		
		echo "<h2>In French</h2><p>The Days of the week in French are:</p>", $days[0], "<br/>", $days[1], "<br/>",$days[2], "<br/>",$days[3], "<br/>",$days[4], "<br/>",$days[5], "<br/>",$days[6];
	?>
	
</body>

</html>