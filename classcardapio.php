<?php
	
	class Cardapio{
		//Atributos
		private $produto;
		//Metodos Especiais
		public function setProduto($produto,$valor){
			$this->produto[$produto] = $valor;
		}
		public function getProduto(){
			return $this->produto;
		}
		public function __construct(){

			$this->produto["PASTEL"] = 2.5;
			$this->produto["FRANGO"] = 15;
			$this->produto["CHURRASCO"] = 5;
			$this->produto["ANTARTICA"] = 8;
			$this->produto["SKOL"] = 7.5;
			$this->produto["HEINEKEN"] = 10;
			$this->produto["SALADA"] = 25;
			
		}
		public function mostraProdutos(){
			foreach($this->produto as $chave => $valor){
					echo $chave." R$ ".$valor."\n";
			}
		}

	}


?>
