<?php
	require_once "classcomanda.php";
	class Caixa{
		//Atributos
		private $total;
		private $data;
		private $dinheiro;
		private $cartao;
		private $status;
		private $conta;
		//Metodos Especiais
		private function getStatus(){
			return $this->status;
		}
		private function getTotal(){
			return $this->total;
		}
		private function getData(){
			return $this->data;
		}
		private function getDinheiro(){
			return $this->dinheiro;
		}
		private function getCartao(){
			return $this->cartao;
		}
		private function setStatus($status){
			$this->status=$status;
		}
		private function setTotal($total){
			if(is_numeric($total)){
			$this->total=$total;
			}else{
				echo "Valor informado não é um numero";
			}
		}
		private function setData($data){
			$this->data=$data;
		}
		private function setDinheiro($valor){
			if(is_numeric($valor)){
			$this->dinheiro=$valor;
			}else{
				echo "Valor informado não é um numero";
			}
		}
		private function setCartao($valor){
			if(is_numeric($valor)){
			$this->cartao=$valor;
			}else{
				echo "Valor informado não é um numero";
			}
		}
		private function getConta(){
			return $this->conta;
		}
		private function setConta($valor){
			if(is_numeric($valor)){
			$this->conta = $valor;
			}else{
				echo "Valor informado não é um numero";
			}
		}
		public function __construct(){
			$this->data= date("d-m-y");
			$this->setDinheiro(number_format(250,2));
			$this->setStatus(false);
		}
		//Metodos
		public function abrirCaixa(){
			$this->status= true;
		}
		public function calculaConta($comanda){
			foreach($comanda->getRegistro()as $chave=>$valor)
				$this->setConta($this->getConta()+$valor);
				echo "Valor Total = ".number_format($this->getConta(),2)."\n";
		}
		private function calculaTroco($valor){
			if($this->getStatus()){
				if($valor > $this->getConta()){
					$this->setDinheiro($this->getDinheiro() + $this->getConta() - $valor);
				}else{
					echo "Sem Troco\n";
				}
			}else{
				echo "Por favor abra o caixa\n";
			}
		}
		private function pagaDinheiro($valor){
			if($this->getStatus()){
				if($valor < $this->getConta()){
					echo "Valor Insuficiente\n";
				}else{
					$this->calculaTroco($valor);
					$this->setDinheiro($this->getDinheiro()+$valor);
					$this->setConta(0);
					echo "Conta Paga Com Sucesso\n";
				}
			}else{
				echo "Por favor abra o caixa\n";
			}
		}	
		private function pagaCartao($validacao){
			if($this->getStatus()){
				if($validacao=="aceito"){
					$this->setCartao($this->getCartao()+$this->getConta());
					$this->setConta(0);
					echo "Conta Paga Com Sucesso\n";
				}else{
					echo "Cartão Inválido\n";
				}
			}else{
				echo "Por favor abra o caixa\n";
			}
		}	
		private function fecharCaixa(){
			if($this->getStatus()){
				$this->setDinheiro($this->getDinheiro() - 250);
				$this->setTotal($this->getDinheiro() + $this->getCartao());
				$this->setStatus(false);
			}else{
				echo "Caixa já está fechado\n";
			}	
		}
		private function mostraCaixa(){
			if($this->getStatus()){
				echo "Por favor feche o caixa";
			}else{
				echo "CAIXA FECHADO\n";
				echo "\nData: ".$this->getData();
				echo "\nValor em Dinheiro: R$ ".number_format($this->getDinheiro(),2);
				echo "\nValor em Cartão: R$ ".number_format($this->getCartao(),2);
				echo "\nValor Total: R$ ".number_format($this->getTotal(),2);
			}
		}
	}
?>