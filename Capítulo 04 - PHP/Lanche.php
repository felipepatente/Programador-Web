<?php

	class Lanche{

		private $codigo;
		private $quantidade;

		function __construct($codigo, $quantidade){
			$this->codigo = $codigo;
			$this->quantidade = $quantidade;
		}

		function getTotal(){

			$valores = array('4.0','4.5','5.0','2.0','1.5');
			return $valores[$this->codigo - 1] * $this->quantidade;

		}
	}

?>
