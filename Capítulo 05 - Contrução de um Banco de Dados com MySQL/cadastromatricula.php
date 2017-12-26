<?php
	$nome = $_POST['aluno'];
	$curso = $_POST['curso'];
	require("conexao.php");
	mysql_select_db("sis_academico");

	$inserir = "INSERT INTO matricula (id,nome,curso) VALUES (DEFAULT,'$nome','$curso');";
	mysql_query($inserir);
?>