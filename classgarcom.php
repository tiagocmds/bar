<?php
	require_once "classcomanda.php";
	require_once "classcardapio.php";
	class Garcom{
		//Atributos
		private $nome;
		private $turno;
		//Metodos Especiais
		public function getNome(){
			return $this->nome;
		}
		private function setNome($nome){
			if(strlen($nome)> 3){
				if(ctype_alpha($nome)){
					$this->nome = ucfirst($nome);
				}else{
					echo "Nome deve ter apenas letras";
				}
			}else{
				echo "Nome deve ter mais que 3 letras";
			}
		}
		public function getTurno(){
			return $this->turno;
		}
		private function setTurno($turno){
			if($turno == "matutino"|| $turno == "vespertino"||$turno=="noturno"){
			$this->turno = $turno;
			}else{
				echo "Turno Inválido";
			}
		}
		public function __construct($nome,$turno){
			$this->setNome($nome);
			$this->setTurno($turno);
		}
		//Metodos
		public function anotaPedido($comanda,$pedido,$cardapio){
			if($cardapio->hasItem($pedido)){
			$comanda->registraPedido($pedido,$cardapio);
			}else{
				//echo $item[$produto];
				echo "Produto Indisponivel";
			}
		}
	}
?>