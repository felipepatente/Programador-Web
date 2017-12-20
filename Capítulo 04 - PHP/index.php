<!DOCTYPE html>
<html>
<head>
	<title>Capítulo 04 - PHP</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$tipo = true;
		echo "Tipo verdadeiro: " . $tipo . "</br>";

		$tipo2 = false;
		echo "Tipo falso: " . $tipo2 . "</br>";

		$notas = array("prova1" => 8.3, "prova2" => 5.9, "prova3" => 9.2);
		echo $notas["prova1"] . "</br>";
		echo $notas["prova2"] . "</br>";
		echo $notas["prova3"] . "</br>";

		$grupo = array('Rodrigo','Alvaro','Kelly','Deyse');
		echo $grupo[0] . "</br>";
		echo $grupo[1] . "</br>";
		echo $grupo[2] . "</br>";
		echo $grupo[3] . "</br>";
	?>
</body>
</html>