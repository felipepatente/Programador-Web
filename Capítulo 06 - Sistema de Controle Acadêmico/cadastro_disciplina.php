<?php 
	$nome = $_POST['nome'];
	$carga_horaria = $_POST['carga'];
	$creditos = $_POST['creditos'];
	$ementa = $_POST['ementa'];

	require("conexao.php");
	mysql_select_db("sis_academico");

	$inserir = "INSERT INTO disciplina (id_disciplina, nome, carga_horaria, creditos, ementa) VALUES (DEFAULT, '$nome','$carga_horaria', '$creditos', '$ementa');";

	mysql_query($inserir);
	mysql_close();
?>