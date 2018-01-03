<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Curso</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		require("cabecalho.php");
	?>
	<p>Preencher dados do curso:</p>
	<fieldset>
		<legend>Cadastro de cursos</legend>
		<form method="post" action="cadastro_curso.php">

			<div class="form-group">
				<label for="nome">Nome:</label>
				<input type="text" class="form-control" name="nome" id="nome">
			</div>
			
			<div class="form-group">
				<label for="duracao">Duração:</label>
				<input type="text" class="form-control" name="duracao" id="duracao">
			</div>
			
			<div class="form-row align-items-center">
    			<div class="col-auto my-1">
      				<label class="mr-sm-2" >Selecione coordenador:<br></label>				
					<select  class="custom-select mr-sm-2" name="coordenador" id="select">
						<?php
							require("conexao.php");
							mysql_select_db("sis_academico");

							$consulta = mysql_query("SELECT id_professor, nome FROM professor");

							while($dados = mysql_fetch_array($consulta)){
								echo "<option value='". $dados['id_professor'] ."'>" . $dados['nome'] . "</option>";
							}
						?>
					</select>
				</div>
						
    			<div class="col-auto my-1">
      				<label class="mr-sm-2" for="nivel">Nível:<br></label>									
					<select class="custom-select mr-sm-2" name="nivel" id="select">
						<option value="">Selecione o nível do curso</option>
						<option value="técnico">Técnico</option>
						<option value="tecnólogo">Tecnólogo</option>
						<option value="bacharelado">Bacharelado</option>
						<option value="licenciatura">Licenciatura</option>					
						<option value="especialização">Especialização</option>
					</select>
				</div>
			
    			<div class="col-auto my-1">			
					<label class="mr-sm-2" for="modalidade">Modalidade:<br></label>
					<select class="custom-select mr-sm-2" name="modalidade" id="select">
						<option value="presencial">Presencial</option>
						<option value="á distancia">Á distância</option>
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