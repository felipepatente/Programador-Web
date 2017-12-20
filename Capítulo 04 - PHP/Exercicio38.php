<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 38</title>
	<meta charset="utf-8">
	<script type="text/javascript">
		function getTotal() {
					
			valores = new Array('4.0','4.5','5.0','2.0','1.5');
			codigo = document.getElementById('codigo').value;
			quantidade = document.getElementById('quantidade').value;

			resultado = valores[codigo - 1] * quantidade			
			document.getElementById('total').value = resultado;

		}
	</script>
</head>
<body>

	<h3>Tabela de Preços</h3>
	<table border="1">
		
		<th>Código</th>
		<th>Produto</th>
		<th>Preço</th>
		
		<tr>
			<td>1</td>
			<td>Cachorro Quente</td>
			<td>R$ 4.00</td>
		</tr>

		<tr>
			<td>2</td>
			<td>X-Salada</td>
			<td>R$ 4.50</td>
		</tr>

		<tr>
			<td>3</td>
			<td>X-Bacon</td>
			<td>R$ 5.00</td>
		</tr>

		<tr>
			<td>4</td>
			<td>Torrada Simples</td>
			<td>R$ 2.00</td>
		</tr>

		<tr>
			<td>5</td>
			<td>Refrigerante</td>
			<td>R$ 1.50</td>
		</tr>

	</table>

	<!-- Código referente ao php -->
	<!--
	<form action="Exercicio38.php" method="get">
		<p><label>Código: <input type="text" name="codigo"></label></p>
		<p><label>Quantidade: <input type="text" name="quantidade"></label></p>
		<input type="submit" name="total" value="Calcular">		
	</form>

	<?php

		$codigo = $_GET['codigo'];
		$quantidade = $_GET['quantidade'];
		require_once 'Lanche.php';
		$l = new Lanche($codigo,$quantidade);
		echo "<p><label>Total: <input type='text' name='total' value= " . $l->getTotal() . "></label></p>";
	?>-->


	<!-- Código referente ao JavaScript -->
	<form>
		<p><label>Código: <input type="text" id="codigo"></label></p>
		<p><label>Quantidade: <input type="text" id="quantidade"></label></p>
		<input type="button" value="Calcular" onclick="getTotal()">		
		<p><label>Total: <input type='text'  id='total'></label></p>
	</form>
	
</body>
</html>