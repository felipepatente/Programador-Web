<!DOCTYPE html>
<html>
<head>
	<title>Funcões de String</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		echo strtoupper('Convertendo para maiusculo</br>');
		echo strtolower('CONVERTENDO PARA MINUSCULO</br>');

		//Exemplos da função substr()
		$rest = substr("América",1);
		echo "$rest </br>";

		$rest = substr("America",1,3);
		echo "$rest </br>";

		$rest = substr("America",0,-1);
		echo "$rest </br>";

		$rest = substr("America",-2);
		echo "$rest </br>";

	?>
</body>
</html>