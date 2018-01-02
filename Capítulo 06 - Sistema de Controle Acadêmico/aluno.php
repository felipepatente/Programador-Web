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
			<p><label for="cep">CEP:<br><input type="text" name="cep" id="cep"></label></p>
			<p><label for="bairro">Bairro:<br><input type="text" name="bairro" id="bairro"></label></p>
			<p><label for="cidade">Cidade:<br><input type="text" name="cidade" id="cidade"></label></p>
		</form>
	</fieldset>
</body>
</html>