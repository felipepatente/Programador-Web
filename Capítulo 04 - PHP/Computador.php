<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de Ojbetos</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

		class Computador
		{
			var $cpu;

			function ligar(){
				echo "Ligando computador a {{$this->cpu}}...";
			}
		}

		$obj = new Computador();
		$obj->cpu = "500Mhz";
		$obj->ligar();
	?>
</body>
</html>