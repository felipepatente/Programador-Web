<?php
	$id_matricula = $_POST['aluno'];
	$id_turma = $_POST['turma'];

	require("conexao.php");
	mysql_select_db("sis_academico");

	$inserir = "INSERT INTO aluno_turma (id_matricula, id_turma) VALUES ('$id_matricula', '$id_turma')";

	mysql_query($inserir);
	mysql_close();
?>