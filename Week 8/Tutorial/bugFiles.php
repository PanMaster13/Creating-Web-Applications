<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>While Loop Example</title>
</head>
<body>


 <?php
        $i = 0;
        $num = 50;
         
        while($i < 10) {
            $num--;
            $i++;
         }
         
         echo ("Loop stopped at i = $i and num = $num" );
     
?>
</body>
</html>