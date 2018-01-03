<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Curso</title>
	<meta charset="utf-8">
</head>
<body>
	<p>Preencher dados do curso:</p>
	<fieldset>
		<legend>Cadastro de cursos</legend>
		<form method="post" action="cadastro_curso.php">
			<p><label for="nome">Nome:<br><input type="text" name="nome" id="nome"></label></p>
			<p><label for="duracao">Duração:<br><input type="text" name="duracao" id="duracao"></label></p>
			
			<p>
				<label>
					Selecione coordenador:<br>
				</label>
				<select name="coordenador" id="select">
					<?php
						require("conexao.php");
						mysql_select_db("sis_academico");

						$consulta = mysql_query("SELECT cpf, nome FROM professor");

						while($dados = mysql_fetch_array($consulta)){
							echo "<option value='". $dados['cpf'] ."'>" . $dados['nome'] . "</option>";
						}
					?>
				</select>
			</p>
			
			<p>
				<label for="nivel">
					Nível:<br>
				</label>
				<select name="nivel" id="select">
					<option value="">Selecione o nível do curso</option>
					<option value="técnico">Técnico</option>
					<option value="tecnólogo">Tecnólogo</option>
					<option value="bacharelado">Bacharelado</option>
					<option value="licenciatura">Licenciatura</option>					
					<option value="especialização">Especialização</option>
				</select>
			</p>

			<p>
				<label for="modalidade">Modalidade:<br></label>
				<select name="modalidade" id="select">
					<option value="presencial">Presencial</option>
					<option value="á distancia">Á distância</option>
				</select>				
			</p>

			<input type="reset" value="Limpar" name="limpar">
			<input type="submit" value="Enviar" name="submit">
		</form>
	</fieldset>
</body>
</html>