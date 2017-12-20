<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de curso</title>
</head>
<body>
	<?php
		$nome = $_POST['aluno'];
		$curso = $_POST['curso'];

		echo "Confira os seus dados</br>";
		echo "Nome " . $nome . "</br>";
		echo "Curso: " . $curso . "</br>";
	?>
</body>
</html>