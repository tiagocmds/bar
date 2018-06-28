<?php
	require_once "classcomanda.php";
	require_once "classcardapio.php";
	class Garcom{
		private $nome;
		private $turno;

		public function getNome(){
			return $this->nome;
		}
		private function setNome($nome){
			//maior que 2 digitos
			//apenas letras
			//Primeira letra capitalizada

			$this->nome = $nome;
		}
		public function getTurno(){
			return $this->turno;
		}
		private function setTurno($turno){
			//validar se o turno informado e um desses valores:Matutino,Vespertino,Noturno
			$this->turno = $turno;
		}
		public function __construct($nome,$turno){
			$this->setNome($nome);
			$this->setTurno($turno);
		}
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