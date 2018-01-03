<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de aluno na turma</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		require("cabecalho.php");
	?>
	<p>Selecione o aluno e a turma:</p>
	<fieldset>
		<legend>Matricula em turma</legend>
		<form method="post" action="cadastro_aluno_turma.php">

			<div class="form-row align-items-center">
    			<div class="col-auto my-1">
					<label  class="mr-sm-2" for="aluno">Selecione o aluno(a):<br></label>
					<select class="custom-select mr-sm-2" name="aluno" id="select">
						<?php
							require("conexao.php");
							mysql_select_db("sis_academico");

							$consulta_aluno = mysql_query("SELECT aluno.id_aluno, aluno.nome AS anome, matricula.id_matricula AS matricula FROM aluno INNER JOIN matricula ON aluno.id_aluno = matricula.id_aluno");
							
							while($dados_aluno = mysql_fetch_array($consulta_aluno)){
								echo "<option value='" . $dados_aluno['matricula'] ."'>" . $dados_aluno['anome'] . "</option>";
							}
						?>
					</select>
				</div>
							
    			<div class="col-auto my-1">					
					<label class="mr-sm-2" for="turma">Selecione a turma:<br></label>
					<select class="custom-select mr-sm-2" name="turma" id="select">
						<?php
							require("conexao.php");
							mysql_select_db("sis_academico");

							$consulta_aluno = mysql_query("SELECT turma.id_turma as turma, turma.id_disciplina, disciplina.id_disciplina, disciplina.nome as dnome, turma.id_professor, professor.nome AS pnome FROM turma INNER JOIN (disciplina, professor) ON (turma.id_disciplina = disciplina.id_disciplina AND turma.id_professor = professor.id_professor);");
							
							while($dados = mysql_fetch_array($consulta_aluno)){
								echo "<option value='" . $dados['turma'] ."'>" . $dados['dnome'] . " - Prof. " . $dados['pnome'] . "</option>";
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