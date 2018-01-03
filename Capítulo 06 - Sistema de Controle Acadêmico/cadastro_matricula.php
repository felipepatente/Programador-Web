<?php
	$id_curso = $_POST['curso'];
	$id_aluno = $_POST['aluno'];

	require("conexao.php");
	mysql_select_db("sis_academico");

	$inserir = "INSERT INTO matricula (id_matricula, id_curso, id_aluno) VALUES (DEFAULT, '$id_curso','$id_aluno');";
	mysql_query($inserir);
	mysql_close();
?>