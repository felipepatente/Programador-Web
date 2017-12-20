<!DOCTYPE html>
<html>
<head>
	<title>Estudo PHP 01</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		//Para comentar uma linha
		#Para comentar uma linha

		/*
			Para comentar varias linhas
			Para comentar varias linhas
			Para comentar varias linhas
			Para comentar varias linhas
		*/

		echo "Ola Mundo</br>";
		print("Ola Mundo</br>");

		$vetor = array('Palio','Corsa','Gol','Fiesta');
		
		//Imprime o conteúdo de uma variável de forma explanativa
		var_dump($vetor); 
		echo "</br>";

		//Imprime o conteúdo de uma variável de forma explanativa, mais facil de ler do que var_dump()
		print_r($vetor); 

		$a = 5;
		$b = &$a; //O sinal '&' faz referêncial a mesma posição de memoria
		$b = 1;
		echo "</br>$a</br>";
		echo "$b";

		$exibirNome = true;

		if($exibirNome){
			echo "<br>Jão da Silva";
		}else{
			echo "<br>Não tem nome";
		}

		$umidade = 91;
		$vaiChover = ($umidade > 90);

		if($vaiChover){
			echo '<br>Esta chovendo';
		}else{
			echo '<br>Não esta chovendo';
		}

		//Tipos de números
		
		//Número decimal
		$num = 1224;

		//Número ocatal (equivalente a 83 em decimal)
		$num = 0123;

		//Número hexadecimal (equivalente a 26 em decimal)
		$num = 0x1A;

		//Ponto flutuante
		$num = 1.234;

		//Notação cientifica
		$num = 4e26;

		echo "<br> $num";

		/*
			$nome = $_GET['nome'];
			echo "<h3>" .$nome ."</h3>"; 
		*/

		//Definindo uma variavel constante (que não muda de valor no decorrer do programa)
		define("MAXIMO_CLIENTES", 100);
		echo "</br>" . MAXIMO_CLIENTES;

		$numero = 10;
		$numero += 5;
		$numero -= 5;
		$numero *= 5;
		$numero /= 5;
		echo "<br> $numero</br>";

		$a = '10';
		echo $a + 5;

		//Modo Errado
		if($a = 5){
			echo "</br>$a</br>";
		}

		$num1 = 1234;
		$num2 = '1234';

		if($num1 == $num2){
			echo "$num1 e $num2 são iguais</br>";
		}else if($num1 != $num2){
			echo "$num1 e $num2 são diferentes</br>";
		}

		if($num1 === $num2){
			echo "$num1 e $num2 são iguais e do mesmo tipo</br>";
		}else if($num1 !== $num2){
			echo "$num1 e $num2 são de tipos diferentes</br>";
		}		

		$zero = 0;

		if($zero == false){
			echo "$zero é falso</br>";
		}

		if($zero === 0){
			echo "$zero é igual a zero</br>";
		}

		/*
		if(false || false or true){
			echo "Vou sair de casa";
		}

		if(true and true && true){
			echo "Vou sair de casa";
		}
		*/

		$conteudo = 'Conteudo';
		
		//Se a variavel tem algum conteudo dentro dela (algum valor) o PHP por padrão da verdadeiro
		if($conteudo){
			echo "Variavel tem conteudo</br>";
		}else{
			echo "Variavel não tem conteudo</br>";
		}

		$valorVenda = 1000;
		//if e else em uma única linha
		$resultados = ($valorVenda < 100) ? 'Pode comprar' : 'Não compra';
		echo "$resultados</br>";

		$enquanto = 1;
		while ($enquanto <= 10) {
			echo "$enquanto ";
			$enquanto++;
		}
		echo "</br>";

		for($i = 1; $i <= 10; $i++){
			echo "$i ";
		}
		echo "</br>";

		$escolha = 5;

		switch($escolha){
			case 1:
				echo "Um";
				break;
			case 2:
				echo "Dois";
				break;
			case 3:
				echo "Três";
				break;
			case 4:
				echo "Quatro";
				break;
			case 5:
				echo "Cinco";
				break;
			default:
				echo "Nenhum valor";
				break;
		}
		echo "</br>";

		$fruta = array('Maça','Banana','Uva','Manga');

		foreach($fruta as $valor){
			echo "$valor ";
		}

		echo "</br>";
	?>
</body>
</html>