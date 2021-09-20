<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tipos Basicos</title>
</head>
<body>

	<h1>Tipos Basicos</h1>

	<?php
		$un_bool = FALSE;         	//un valor booleano
		$una_cadena = "textos";		//una cadena de caracteres
		$un_entero = 12;			//un numero entero
		$un_real = 3.1415;			//un real o double

		echo "Con var_dump:<BR/ ><BR/ >";
		echo var_dump($un_bool);
		echo "<BR/ >";
		echo var_dump($una_cadena);
		echo "<BR/ >";
		echo var_dump($un_entero);
		echo "<BR/ >";
		echo var_dump($un_real);
		echo "<BR/ >";
		echo "<BR/ >";

		echo "Con gettype:<BR/ ><BR/ >";
		echo gettype($un_bool);
		echo "<BR/ >";
		echo gettype($una_cadena);
		echo "<BR/ >";
		echo gettype($un_entero);
		echo "<BR/ >";
		echo gettype($un_real);
		echo "<BR/ >";
		echo "<BR/ >";

		if(is_bool($un_bool)) {
			echo 'es un booleano<BR/ >';
		}else{
			echo 'no es un booleano<BR/ >';
		}
		if(is_int($un_entero)) {
			echo 'es un entero<BR/ >';
		}else{
			echo 'no es un entero<BR/ >';
		}
		if(is_double($un_real)) {
			echo 'es un real<BR/ >';
		}else{
			echo 'no es un real<BR/ >';
		}
		if(is_string($una_cadena)) {
			echo 'es una cadena<BR/ >';
		}else{
			echo 'no es una cadena<BR/ >';
		}
		?>
</body>
</html>