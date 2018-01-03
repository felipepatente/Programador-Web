<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de turma</title>
	<meta charset="utf-8">
</head>
<body>
	<fieldset>
		<legend>Cadastro de turma</legend>
		<form method="post" action="cadastro_turma.php">
			<p>
				<label for="disciplina">Selecione a disciplina:<br></label>
				<select name="disciplina" id="select">
					<?php 
						require("conexao.php");
						mysql_select_db("sis_academico");

						$consulta = mysql_query("SELECT id_disciplina, nome FROM disciplina");
						while($dados = mysql_fetch_array($consulta)){
							echo "<option value='" . $dados['id_disciplina'] ."'>" . $dados['nome'] . "</option>";
						}
					?>
				</select>
			</p>

			<p>
				<label for="professor">Selecione o professor:<br></label>
				<select name="professor" id="select">
					<?php 
						require("conexao.php");
						mysql_select_db("sis_academico");

						$consulta = mysql_query("SELECT id_professor, nome FROM professor");
						while($dados = mysql_fetch_array($consulta)){
							echo "<option value='" . $dados['id_professor'] ."'>" . $dados['nome'] . "</option>";
						}
					?>
				</select>
			</p>

			<input type="reset" name="limpar" value="Limpar">
			<input type="submit" name="submit" value="Enviar">

		</form>
	</fieldset>
</body>
</html>