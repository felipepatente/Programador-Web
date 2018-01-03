<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Professor</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		require("cabecalho.php");
	?>
	<p>Preencher dados do aluno(a): </p>
	<fieldset>
		<legend>Cadastro de Aluno (a)</legend>
		<form method="post" action="cadastro_professor.php">
						
			<div class="form-group">
				<label for="aluno">Nome:</label>
				<input type="text" class="form-control" name="aluno" id="aluno">
			</div>

			<div class="form-group">
				<label for="cpf">CPF:</label>
				<input type="text" class="form-control" name="cpf" id="cpf">
				<small id="emailHelp" class="form-text text-muted">(sem espaços, pontos ou traços)</small>
			</div>

			<div class="form-group">
				<label for="endereco">Endereço:</label>
				<input type="text" name="endereco" id="endereco" class="form-control">	
			</div>

			
			<div class="form-group">
				<label for="complemento">Complemento:</label>
				<input type="text" class="form-control" name="complemento" id="complemento">				
			</div>

			<div class="form-group">
				<label for="cep">CEP:</label>	
				<input type="text" class="form-control" name="cep" id="cep">
			</div>

			<div class="form-group">
				<label for="bairro">Bairro:</label>
				<input type="text" class="form-control" name="bairro" id="bairro">	
			</div>
			
			<div class="form-group">
				<label for="cidade">Cidade:</label>
				<input type="text" class="form-control" name="cidade" id="cidade">	
			</div>
			
			<div class="form-group">
				<label for="telefone">Telefone:</label>
				<input type="text" class="form-control" name="telefone" id="telefone">
			</div>

			<div class="form-row align-items-center" class="form-group">
			    <div class="col-auto my-1">
			      <label  class="mr-sm-2" for="estado">Estado:<br></label>  
					<select class="custom-select mr-sm-2" name="estado" id="select">
						<option value="">Selecione o Estado</option>
						<option value="ac">Acre</option>
						<option value="al">Alagoas</option>
						<option value="ap">Amapá</option>
						<option value="am">Amazonas</option>
						<option value="ba">Bahia</option>
						<option value="ce">Ceará</option>
						<option value="df">Distrito Federal</option>
						<option value="es">Espírito Santo</option>
						<option value="go">Goiás</option>
						<option value="ma">Maranhão</option>
						<option value="ms">Mato Grosso do Sul</option>
						<option value="mt">Mato Grosso</option>
						<option value="mg">Minas Gerais</option>
						<option value="pa">Pará</option>
						<option value="pb">Paraíba</option>
						<option value="pr">Paraná</option>
						<option value="pe">Pernanbuco</option>
						<option value="pi">Piauí</option>
						<option value="rj">Rio de Janeiro</option>
						<option value="rn">Rio Grande do Norte</option>
						<option value="rs">Rio Grande do Sul</option>
						<option value="ro">Rondônia</option>
						<option value="rr">Roraima</option>
						<option value="sc">Santa Catarina</option>
						<option value="sp">São Paulo</option>
						<option value="se">Sergipe</option>
						<option value="to">Tocantins</option>
					</select>      
			    </div>
			</div>

			<br>
			<h4>Informações acadêmicas</h4>
			
			<div class="form-group">			
				<label for="formacao">Formação:</label>
				<input type="text" class="form-control" name="formacao" id="formacao">
			</div>



			<div class="form-row align-items-center" class="form-group">
				<div class="col-auto my-1">
			    	<label  class="mr-sm-2" for="titulacao">Titulação:<br></label>  				
						<select class="custom-select mr-sm-2" name="titulacao" id="select">
							<option value="">Selecione a titulcação</option>
							<option value="graduacao">Graduação</option>
							<option value="mestrado">Mestrado</option>
							<option value="doutorado">Doutorado</option>
						</select>
					</label>
				</div>
			</div>
			
			<br>
			<input type="reset" name="limpar" value="Limpar" class="btn btn-primary">
			<input type="submit" name="submit" value="Enviar"  class="btn btn-primary">
		</form>
	</fieldset>
</body>
</html>