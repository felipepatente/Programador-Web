<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de disciplina</title>
	<meta charset="utf-8">
</head>
<body>
	<p>Preencher dados da disciplina: </p>
	<fieldset>
		<legend>Cadastro de disciplina</legend>
		<form method="post" action="cadastro_disciplina.php">
			<p><label for="nome">Nome:<br><input type="text" name="nome" id="nome"></label></p>
			<p><label for="carga">Carga horária:<br><input type="text" name="carga" id="carga"><br>horas/aula</label></p>
			<p><label for="creditos">Creditos:<br><input type="text" name="creditos" id="creditos"></label></p>
			<p>
				<label for="ementa">
					Ementa:<br>
					<textarea name="ementa" cols="40" rows="6">
						
					</textarea>
				</label>
			</p>

			<input type="reset" name="limpar" value="Limpar">
			<input type="submit" name="submit" value="Enviar">
		</form>
	</fieldset>
</body>
</html>