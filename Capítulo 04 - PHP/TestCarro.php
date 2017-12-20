<!DOCTYPE html>
<html>
<head>
	<title>Testar Carro</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		require_once 'Carro.php';
		$carro = new Carro("Vermelho",'Fiat');
		echo $carro->getMarca() . "</br>";
		echo $carro->getCor() . "</br>";

		include 'Biblioteca.php';
		$b = new Biblioteca();
		echo $b->getQuadrado(5) . "</br>";
		echo $b->getIMC(68,1.68) . "</br>";
		echo $b->getKilometro(100) . "</br>";
		echo $b->getKilometro(200) . "</br>";
		echo $b->getTotal() . "</br>";		

		$num1 = 10;
		$b->incrementa2($num1);
		echo $num1 . "</br>";
		$b->imprimirQuadrados(2,4,8,9);

		$frutas = "Maça";
		echo("</br>Come uma $frutas</br>");
		echo('Come uma $frutas</br>');

		echo "$frutas é a fruta do Adão</br>";
		echo "{$frutas} é a fruta do Adão</br>";
	?>
</body>
</html>