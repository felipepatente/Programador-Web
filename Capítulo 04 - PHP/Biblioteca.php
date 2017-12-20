<?php
	
	class Biblioteca{

		private $total;		

		function getQuadrado($numero){
			return $numero * $numero;
		}

		function getIMC($peso, $altura){
			return $peso / ($altura * $altura);
		}

		function getKilometro($kilometro){
			static $outroTotal;
			$outroTotal += $kilometro;
			echo  $outroTotal . " - </br>";
			$this->total += $kilometro;
			return $kilometro * 0.6;
		}

		function getTotal(){
			return $this->total;
		}

		//Passagem de parametro por referência
		function incrementa(&$num1, $num2){
			$num1 += $num2;
		}

		//Passagem de parametro por valor
		function incrementa1($num1, $num2){
			$num1 += $num2;
		}

		//Definindo um valor padrão para uma variavel 
		function incrementa2(&$num1, $num2 = 40){
			$num1 += $num2;
		}

		//Passando n parametros
		function imprimirQuadrados(){
			
			$argumentos = func_get_args();
			$quantidade = func_num_args();

			for($i = 0; $i < $quantidade; $i++){
				echo $argumentos[$i] * $argumentos[$i] . " ";
			}
		}

		
	}
?>
