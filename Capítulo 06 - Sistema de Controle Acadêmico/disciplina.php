<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de disciplina</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		require("cabecalho.php");
	?>
		
	<p>Preencher dados da disciplina: </p>
	<fieldset>
		<legend>Cadastro de disciplina</legend>
		<form method="post" action="cadastro_disciplina.php">
			
			<div class="form-group">
				<label for="nome">Nome:</label>
				<input type="text" class="form-control" name="nome" id="nome">	
			</div>
			
			<div class="form-group">
				<label for="carga">Carga horária:</label>
				<input type="text" class="form-control" name="carga" id="carga">
				<small id="emailHelp" class="form-text text-muted">horas/aula.</small>				
			</div>

			<div class="form-group">
				<label for="creditos">Creditos:</label>
				<input type="text" class="form-control" name="creditos" id="creditos">
			</div>
			
			<div class="form-group">
			    <label for="ementa">Ementa:</label>
			    <textarea class="form-control" name="ementa" cols="40" rows="3"></textarea>
			</div>

			<input type="reset" name="limpar" value="Limpar" class="btn btn-primary">
			<input type="submit" name="submit" value="Enviar"  class="btn btn-primary">
		</form>
	</fieldset>
	
</body>
</html>