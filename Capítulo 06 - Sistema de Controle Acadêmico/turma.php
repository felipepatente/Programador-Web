<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de turma</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		require("cabecalho.php");
	?>
	<fieldset>
		<legend>Cadastro de turma</legend>
		<form method="post" action="cadastro_turma.php">


			<div class="form-row align-items-center">
				<div class="col-auto my-1">			    	
					<label class="mr-sm-2" for="disciplina">Selecione a disciplina:<br></label>
					<select class="custom-select mr-sm-2" name="disciplina" id="select">
						<?php 
							require("conexao.php");
							mysql_select_db("sis_academico");

							$consulta = mysql_query("SELECT id_disciplina, nome FROM disciplina");
							while($dados = mysql_fetch_array($consulta)){
								echo "<option value='" . $dados['id_disciplina'] ."'>" . $dados['nome'] . "</option>";
							}
						?>
					</select>
				</div>
			
				<div class="col-auto my-1">			    						
					<label class="mr-sm-2" for="professor">Selecione o professor:<br></label>
					<select class="custom-select mr-sm-2" name="professor" id="select">
						<?php 
							require("conexao.php");
							mysql_select_db("sis_academico");

							$consulta = mysql_query("SELECT id_professor, nome FROM professor");
							while($dados = mysql_fetch_array($consulta)){
								echo "<option value='" . $dados['id_professor'] ."'>" . $dados['nome'] . "</option>";
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