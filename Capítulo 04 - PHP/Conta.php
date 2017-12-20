<!DOCTYPE html>
<html>
<head>
	<title>Exercicio</title>
</head>
<body>
	<?php
		$valor = $_GET['valor'];
		$x1 = "9$valor";
		$x2 = "$valor" . 9;
		$zw = $x1 + $x2 - 100;
		$z = substr("$zw",0,1);
		$w = substr("$zw",1);
		$resultado = $z - $w;
		echo "$resultado";		
	?>
</body>
</html>