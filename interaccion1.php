<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Interaccion con el usuario</title>
</head>
<body>

	<?php

		$n1 = $_GET["num1"];
		$n2 = $_GET["num2"];

		//PREPARO LA SALIDA DE LA INFORMACION
		echo "<h1>Suma de dos numeros</h1>";


		echo "El numero 1 es $n1";
		echo '<br />';
		echo "El numero 2 es $n2";
		echo '<br />';

		//OPERO CON LOS DATOS
		$suma =$n1+$n2;

		//SALIDA DEL RESULTADO DE LA OPERACION
		echo "El resultado de la suma es ".$suma;
	?>
</body>
</html>