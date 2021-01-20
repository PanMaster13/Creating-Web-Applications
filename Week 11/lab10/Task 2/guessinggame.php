<?php
	session_start();
	if (!isset ($_SESSION["trueNumber"]))
	{
		$_SESSION["trueNumber"] = rand(1, 100);
	}
	$trueNumber = $_SESSION["trueNumber"];
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
	<p>Enter a number between 1 and 100, then press the Guess button.</p>
	
	
	<form action="guessinggame.php" method="get">
		<p>
			<input type="text" name="textbox"/>
			<input type="submit" value="Guess" />
		</p>
	</form>
	
	<p><span id="display"></span></p>
	<p>
		<span>
			<?php
				if(!isset($_GET["textbox"]))
				{
					if($_GET["textbox"] == $trueNumber)
					{
						echo "Congratulations! You guessed the hidden number which was ".$trueNumber.".";
					}
				
					else if($_GET["textbox"] < $trueNumber)
					{
						echo "The guessed number is smaller than the hidden number.";
					}
					
					else if($_GET["textbox"] > $trueNumber)
					{
						echo "The guessed number is bigger than the hidden number.";
					}
				}
			?>
		</span>
	</p>
	
	<p><a href="giveup.php">Give up</a></p>
	<p><a href="startover.php">Start Over</a></p>
	
</body>
</html>