<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Matrícula</title>
	<meta charset="utf-8">
</head>
<body>
	<p>Selecione o aluno e o curso:</p>
	<fieldset>
		<legend>Matrícula</legend>
		<form method="post" action="cadastro_matricula.php">
			<p>
				<label for="aluno">Selecione o aluno (a):<br></label>
				<select name="aluno" id="select">
					<?php
						require("conexao.php");
						mysql_select_db("sis_academico");
						$consulta = mysql_query("SELECT id_aluno, nome FROM aluno;");
						while($dados = mysql_fetch_array($consulta)){
							echo "<option value='" . $dados['id_aluno'] . "'>" . $dados['nome'] . "</option>";
						}
					?>
				</select>
			</p>

			<p>
				<label for="curso">Selecione o curso:<br></label>
				<select name="curso" id="select">
					<?php
						require("conexao.php");
						mysql_select_db("sis_academico");
						$consulta = mysql_query("SELECT id_curso, nome FROM curso");
						while($dados = mysql_fetch_array($consulta)){
							echo "<option value='" . $dados['id_curso'] . "'>" . $dados['nome'] . "</option>";
						}
					?>
				</select>
			</p>

			<input type="reset" value="Limpar" name="limpar">
			<input type="submit" value="Enviar" name="submit">

		</form>
	</fieldset>
</body>
</html>