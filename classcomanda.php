<?php
	require_once "classcardapio.php";
	require_once "classgarcom.php";
	class Comanda{
		//Atributos
		private $garcom;
		private $numero;
		private $registro;
		//Metodos especiais
		public function getRegistro(){
			return $this->registro;
		}
		public function addRegistro($produto,$cardapio){
			if(isset($this->registro[$produto])){
			$this->registro[$produto]= $this->registro[$produto] + $cardapio->getItem($produto);
		}else{
				$this->registro[$produto] = $cardapio->getItem($produto);
		}
		}
		public function getGarcom(){
			return $this->garcom;
		}
		public function setGarcom($garcom){
			$this->garcom = $garcom;
		}
		public function getNumero(){
			return $this->numero;
		}
		public function setNumero($numero){
			$this->numero = $numero;
		}
		public function __construct($numero,$garcom){
			$this->numero = $numero;
			$this->garcom = $garcom;
		}
		//Metodos
		public function registraPedido($produto,$cardapio){
				$this->addRegistro($produto,$cardapio);
		
		}
		public function mostraComanda(){
			echo "\nComanda ".$this->getNumero()."\n\n";
			
			foreach($this->registro as $chave => $valor){
				echo $chave . "  R$ " . $valor."\n";
		}
		}
	}
?>	