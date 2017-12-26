<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Matricula</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$nome = $_POST['aluno'];
		$curso = $_POST['curso'];
		require("conexao.php");
		mysql_select_db("sis_academico");

		$inserir = "INSERT INTO matricula (id,nome,curso) VALUES (DEFAULT,'$nome','$curso');";
		mysql_query($inserir);

		//Lendo dados do banco
		$consulta = "SELECT id, nome, curso FROM matricula";
		$matricula = mysql_query($consulta);

		
		while ($array = mysql_fetch_array($matricula)) {
			echo $array['id'] . " - " . " Aluno: " . $array['nome'] . " Curso: " . $array['curso'] . "<br>";
						
		}

	?>
</body>
</html>