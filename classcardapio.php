<?php
	class Cardapio{
		//Atributos
		private $item;
		//Metodos Especiais
		private function setItem($produto,$valor){
			$this->item[$produto] = $valor;
		}
		public function hasItem($produto){
			return isset($this->item[$produto]);
		}
		public function getPreco($produto){
			return $this->item[$produto];
		}
		public function getItem($produto){
			return array($produto => $this->item[$produto]);
		}
		public function __construct(){

			$this->setItem("PASTEL",2.5);
			$this->setItem("FRANGO",15);
			$this->setItem("CHURRASCO",5);
			$this->setItem("ANTARTICA",8);
			$this->setItem("SKOL",7.5);
			$this->setItem("HEINEKEN",10);
			$this->setItem("SALADA",25);
	
		}
		public function mostraProdutos(){
			foreach($this->item as $chave => $valor){
					echo $chave." R$ ".number_format($valor,2)."\n";
			}
		}
	}
?>
