<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Aluno</title>
	<meta charset="utf-8">
</head>
<body>
	<p>Preencher dados do aluno(a): </p>
	<fieldset>
		<legend>Cadastro de Aluno (a)</legend>
		<form method="post" action="cadastro_aluno.php">
			<p><label for="aluno">Nome:<br><input type="text" name="aluno" id="aluno"></label></p>
			<p><label for="cpf">CPF:<br><input type="text" name="cpf" id="cpf"><br>(sem espaços, pontos ou traços)</label></p>
			<p><label for="endereco">Endereço:<br><input type="text" name="endereco" id="endereco"></label></p>
			<p><label for="complemento">Complemento:<br><input type="text" name="complemento" id="complemento"></label></p>
		</form>
	</fieldset>
</body>
</html>