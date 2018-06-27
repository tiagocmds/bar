<?php
	require_once "classcomanda.php";
	class Garcom{
		private $nome;
		private $turno;

		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome = $nome;
		}
		public function getTurno(){
			return $this->turno;
		}
		public function setTurno($turno){
			$this->turno = $turno;
		}
		public function __construct($nome,$turno){
			$this->nome = $nome;
			$this->turno = $turno;
		}
		public function anotaPedido($comanda,$produto){
			$comanda->registraPedido($produto);
		}

	}


?>