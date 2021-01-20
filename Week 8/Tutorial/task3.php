<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Using PHP functions, get, and if statements</title>
</head>

<body>
	<h1>Creating Web Applications - Lab 8</h1>
	
	<?php
		echo "<h2>writeMessage Function</h2>";
		function writeMessage(){	/* Creating PHP function */
			echo "Your mum gay lol!!";
		}
		
		writeMessage(); /* Calling PHP function */
		
		echo "<br/>";
		
		echo "<h2>addFunction Function</h2>";
		function addFunction($num1, $num2){ /* Creating PHP function with parameters */
			$sum = $num1 + $num2;
			echo "Sum of $num1 and $num2 is : $sum";
		}
		
		addFunction(10, 20); /* Calling PHP function with parameters */
		
		echo "<br/>";
		
		echo "<h2>addFunction_EX Function</h2>";
		
		function addFunction_EX($num1, $num2){ /* Creating PHP function with parameters */
			$sum = $num1 + $num2;
			return $sum;
		}
		
		$return_value = addFunction_EX(10, 20); /* Calling PHP function with parameters */
		echo "Returned value from the function : $return_value";
	?>
	
	<h2>Example of form get method using PHP(Submit redirects you to another page)</h2>
	<form method="get" action="receiveData.php">
		<label>Enter your first name: </label><input type="text" name="fname" />
		<br />
		<label>Enter your last name: </label><input type="text" name="lname" />
		<br />
		<input type="submit" value="Submit" />
		<input type="reset" value="Reset" />
	</form>
	
	<?php
		echo "<h2>Alphabetical Comparison using if and else statement</h2>";
		$a="brian";
		$b="zebra";
			if ($a < $b){
				echo $a." is before ".$b." in the alphabet";
			}
			else{
				echo $a." is after ".$b." in the alphabet";
			}
	?>
</body>

</html>