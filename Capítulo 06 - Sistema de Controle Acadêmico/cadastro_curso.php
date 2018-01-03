<?php
	$nome = $_POST['nome'];
	$duracao = $_POST['duracao'];
	$coordenador = $_POST['coordenador'];
	$nivel = $_POST['nivel'];
	$modalidade = $_POST['modalidade'];
	
	require("conexao.php");
	mysql_select_db("sis_academico");
	$inserir = "INSERT INTO curso (id_curso, nome, duracao, coordenador, nivel, modalidade) VALUES (DEFAULT, '$nome', '$duracao', '$coordenador','$nivel','$modalidade');";

	mysql_query($inserir);
	mysql_close();

?>