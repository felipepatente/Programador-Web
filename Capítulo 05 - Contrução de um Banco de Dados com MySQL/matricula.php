<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Curso</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Cadastro de curso</h2>
	<p>Prezado(a) aluno(a), preencha com seus dados: </p>
	
	<form method="post" action="cadastromatricula.php">
		<p>
			<label for="aluno">Nome:</label>
			<input type="text" id="aluno" name="aluno">
		</p>

		<p>
			<label for="curso">Curso</label>
			<input type="text" id="curso" name="curso">
		</p>

		<p>
			<input type="reset" value="Limpar" name="limpar">
			<input type="submit" value="Enviar" name="submit">
		</p>
		
	</form>
</body>
</html>