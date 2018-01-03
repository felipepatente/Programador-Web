<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de disciplina nos cursos</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		require("cabecalho.php");
	?>
	<fieldset>
		<legend>Cadastro de disciplina nos cursos</legend>
		<form method="post" action="cadastro_curso_disciplina.php">
			
			<div class="form-row align-items-center">
	    		<div class="col-auto my-1">	      				      			
					<label class="mr-sm-2" for="curso">Selecione o curso:<br></label>
					<select class="custom-select mr-sm-2" name="curso" id="select">
						<?php  
							require("conexao.php");
							mysql_select_db("sis_academico");
							$consulta = mysql_query("SELECT id_curso, nome FROM curso");
							while ($dados = mysql_fetch_array($consulta)) {
								echo "<option value='". $dados['id_curso'] ."'>" .$dados['nome'] . "</option>";
							}
						?>
					</select>
				</div>

				<div class="col-auto my-1">			
					<label class="mr-sm-2" for="curso">Selecione a disciplina:<br></label>
					<select class="custom-select mr-sm-2" name="disciplina" id="select">
						<?php  
							require("conexao.php");
							mysql_select_db("sis_academico");
							$consulta = mysql_query("SELECT id_disciplina, nome FROM disciplina");
							while ($dados = mysql_fetch_array($consulta)) {
								echo "<option value='". $dados['id_disciplina'] ."'>" .$dados['nome'] . "</option>";
							}
						?>
					</select>
				</div>
			</div>

			<br>
			<input type="reset" name="limpar" value="Limpar" class="btn btn-primary">
			<input type="submit" name="submit" value="Enviar"  class="btn btn-primary">

		</form>
	</fieldset>

</body>
</html>