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
			<p>
				<label for="estado">Estado:<br></label>
				<select name="estado" id="select">
					<option value="">Selecione o Estado</option>
					<option value="ac">Acre</option>
					<option value="al">Alagoas</option>
					<option value="ap">Amapá</option>
					<option value="am">Amazonas</option>
					<option value="ba">Bahia</option>
					<option value="ce">Ceará</option>
					<option value="df">Distrito Federal</option>
					<option value="es">Espírito Santo</option>
					<option value="go">Goiás</option>
					<option value="ma">Maranhão</option>
					<option value="ms">Mato Grosso do Sul</option>
					<option value="mt">Mato Grosso</option>
					<option value="mg">Minas Gerais</option>
					<option value="pa">Pará</option>
					<option value="pb">Paraíba</option>
					<option value="pr">Paraná</option>
					<option value="pe">Pernanbuco</option>
					<option value="pi">Piauí</option>
					<option value="rj">Rio de Janeiro</option>
					<option value="rn">Rio Grande do Norte</option>
					<option value="rs">Rio Grande do Sul</option>
					<option value="ro">Rondônia</option>
					<option value="rr">Roraima</option>
					<option value="sc">Santa Catarina</option>
					<option value="sp">São Paulo</option>
					<option value="se">Sergipe</option>
					<option value="to">Tocantins</option>
				</select>
			</p>
		</form>
	</fieldset>
</body>
</html>