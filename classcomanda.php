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
		public function addRegistro($produto){
			$this->registro[$produto] = $this->cardapio[$produto];
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
		
		public function registraPedido($produto){
			if(isset($cardapio[$produto])){
				$this->addRegistro($produto);
			}else{
				echo "Produto indisponivel: ".$produto;
			}
		}
		public function mostrarConta(){
			echo "\nComanda\n";
			echo  "Mesa ".$this->getMesa()."\n";
			foreach($this->registro as $chave => $valor){
				echo $chave . " " . $valor."\n";
		}
		}
	}
?>	