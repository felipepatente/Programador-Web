<?php 
	
	class Carro{

		private $cor;
		private $marca;

		function __construct($cor, $marca){
			$this->cor = $cor;
			$this->marca = $marca;
		}

		function getMarca(){
			return $this->marca;
		}

		function getCor(){
			return $this->cor;
		}
	}

 ?>