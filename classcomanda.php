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
			$this->registro[$produto]= $this->registro[$produto] + $cardapio->getPreco($produto);
		}else{
				$this->registro[$produto] = $cardapio->getPreco($produto);
		}
		}
		public function getGarcom(){
			return $this->garcom;
		}
		private function setGarcom($garcom){
			$this->garcom = $garcom;
		}
		public function getNumero(){
			return $this->numero;
		}
		private function setNumero($numero){
			if(is_numeric($numero)){
			$this->numero = $numero;
			}else{
				echo "Numero da comanda deve ser caracter numerico";
			}
		}
		public function __construct($numero,$garcom){
			$this->setNumero($numero);
			$this->setGarcom($garcom->getNome());
		}
		//Metodos
		public function registraPedido($produto,$cardapio){
				$this->addRegistro($produto,$cardapio);
		
		}
		public function mostraComanda(){
			echo "\nComanda ".$this->getNumero()."\n\n";
			echo "\nGarçom: ".$this->getGarcom()."\n\n";
			foreach($this->registro as $chave => $valor){
				echo $chave . "  R$ " . $valor."\n";
		}
		}
	}
?>	