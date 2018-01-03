<?php

	$id_curso = $_POST['curso'];
	$id_disciplina = $_POST['disciplina'];


	require("conexao.php");
	mysql_select_db("sis_academico");

	$inserir = "INSERT INTO curso_disciplina (id_curso, id_disciplina) VALUES ('$id_curso', '$id_disciplina');";
	mysql_query($inserir);
	mysql_close();
?>