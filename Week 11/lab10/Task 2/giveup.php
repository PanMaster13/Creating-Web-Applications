<?php
	session_start();
	if (!isset ($_SESSION["trueNumber"]))
	{
		$_SESSION["trueNumber"] = rand(1, 100);
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="description" content="Playing with PHP Sessions" />
	<title>PHP Sessions Lab</title>
</head>

<body>
	<h1>Guessing Game</h1>
	<p>
		<?php
			echo "The hidden number was: ".$_SESSION["trueNumber"];
		?>
	</p>
	
	<p><a href="startover.php">Start Over</a></p>
	
</body>
</html>