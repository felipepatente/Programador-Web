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


	require("conexao.php");
	mysql_select_db("sis_academico");
	$inserir = "INSERT INTO aluno (id_aluno, cpf, nome, endereco, complemento, cep, bairro, cidade, estado, telefone) VALUES (DEFAULT, '$cpf', '$nome', '$endereco', '$complemento', '$cep', '$bairro', '$cidade', '$estado', '$telefone');";

	mysql_query($inserir);
	//mysql_close();
?>