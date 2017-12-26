<!DOCTYPE html>
<html>
<head>
	<title>Conexao</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$conexao = mysql_connect("localhost","root","");
		if(!$conexao){
			die('Não foi possível conectar ao banco de dados. Erro detectado: ' . mysql_error());
		}
		echo "Conexão bem-sucedida.";
		mysql_set_charset('utf-8',$conexao);

	?>
</body>
</html>