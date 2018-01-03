<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de disciplina nos cursos</title>
	<meta charset="utf-8">
</head>
<body>
	<fieldset>
		<legend>Cadastro de disciplina nos cursos</legend>
		<form method="post" action="cadastro_curso_disciplina.php">
			
			<p>
				<label for="curso">Selecione o curso:<br></label>
				<select name="curso" id="select">
					<?php  
						require("conexao.php");
						mysql_select_db("sis_academico");
						$consulta = mysql_query("SELECT id_curso, nome FROM curso");
						while ($dados = mysql_fetch_array($consulta)) {
							echo "<option value='". $dados['id_curso'] ."'>" .$dados['nome'] . "</option>";
						}
					?>
				</select>
			</p>

			<p>
				<label for="curso">Selecione a disciplina:<br></label>
				<select name="disciplina" id="select">
					<?php  
						require("conexao.php");
						mysql_select_db("sis_academico");
						$consulta = mysql_query("SELECT id_disciplina, nome FROM disciplina");
						while ($dados = mysql_fetch_array($consulta)) {
							echo "<option value='". $dados['id_disciplina'] ."'>" .$dados['nome'] . "</option>";
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