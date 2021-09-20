<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ambito de variables</title>
</head>
<body>

	<?php
	$x = 5;
	$y = 10;

	function myTest() {
		global $x, $y;
		$y = $x + $y;
	}

	myTest();
	echo $y; //outputs 15

	?>


</body>
</html>