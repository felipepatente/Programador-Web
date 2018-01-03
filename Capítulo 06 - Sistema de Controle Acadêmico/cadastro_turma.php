<?php
	$id_disciplina = $_POST['disciplina'];
	$id_professor = $_POST['professor'];

	require("conexao.php");
	mysql_select_db("sis_academico");

	$inserir = "INSERT INTO turma (id_turma, id_disciplina, id_professor) VALUES (DEFAULT, '$id_disciplina', '$id_professor')";

	mysql_query($inserir);
	mysql_close();
?>