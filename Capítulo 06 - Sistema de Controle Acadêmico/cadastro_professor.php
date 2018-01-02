<?php
	$nome = $_POST['aluno'];
	$cpf = $_POST['cpf'];
	$endereco = $_POST['endereco'];
	$complemento = $_POST['complemento'];
	$cep = $_POST['cep'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$telefone = $_POST['telefone'];
	$formacao = $_POST['formacao'];
	$titulacao = $_POST['titulacao'];

	require("conexao.php");
	mysql_select_db("sis_academico");
	$inserir = "INSERT INTO professor (id_professor, cpf, nome, endereco, complemento, cep, bairro, cidade, estado, telefone, formacao, titulacao) VALUES (DEFAULT, '$cpf', '$nome', '$endereco', '$complemento', '$cep', '$bairro', '$cidade', '$estado', '$telefone', '$formacao','$titulacao');";

	mysql_query($inserir);
	mysql_close();
?>