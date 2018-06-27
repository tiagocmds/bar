<?php
	require_once "classcomanda.php";
	class Caixa{
		private $total;
		private $data;
		private $dinheiro;
		private $cartao;
		private $status;
		private $conta;

		public function getStatus(){
			return $this->status;
		}
		public function getTotal(){
			return $this->total;
		}
		public function getData(){
			return $this->data;
		}
		public function getDinheiro(){
			return $this->dinheiro;
		}
		public function getCartao(){
			return $this->cartao;
		}
		public function setStatus($status){
			$this->status=$status;
		}
		public function setTotal($total){
			$this->total=$total;
		}
		public function setData($data){
			$this->data=$data;
		}
		public function setDinheiro($valor){
			$this->dinheiro=$valor;
		}
		public function setCartao($valor){
			$this->cartao=$valor;
		}
		public function getConta(){
			return $this->conta;
		}
		public function setConta($valor){
			$this->conta = $valor;
		}
		public function __construct($data){
			$this->data=$data;
			$this->dinheiro = 250;
			$this->status = false;
		}
		public function abrirCaixa(){
			$this->status= true;
		}
		public function calculaTroco(){
			if($this->getStatus()){
				if($valor > $this->getConta()){
					$this->setDinheiro($this->getConta() - $valor);
				}else{
					echo "Sem Troco";
				}
			}else{
				echo "Por favor abra o caixa";
			}
		}
		public function pagaDinheiro($valor){
			if($this->getStatus()){
				if($valor < $this->getConta()){
					echo "Valor Insuficiente";
				}else{
					$this->calculaTroco();
					$this->setDinheiro($this->getDinheir()+$valor);
					echo "Conta Paga Com Sucesso";
				}
			}else{
				echo "Por favor abra o caixa";
			}
		}	
		public function pagaCartao($validacao){
			if($this->getStatus()){
				if($validacao="aceito"){
					$this->setCartao($this->getCartao()+$this->getConta());
					echo "Conta Paga Com Sucesso";
				}else{
					echo "Cartão Inválido";
				}
			}else{
				echo "Por favor abra o caixa";
			}
		}	
		public function fecharConta(){			
				foreach($this->registro as $chave => $valor){				
					$this->setConta($this->getConta() + $valor);		
				}	
			}
		public function fecharCaixa(){
			if($this->getStatus()){
				$this->setDinheiro($this->getDinheiro() - 250);
				$this->setTotal($this->getDinheiro() + $this->getCartao());
				$this->setStatus(false);
			}else{
				echo "Caixa já está fechado";
			}	
		}
		public function mostraCaixa(){
			if($this->getStatus()){
				echo "Por favor feche o caixa";
			}else{
				echo "CAIXA FECHADO\n";
				echo "\nData: ".$this->getData();
				echo "\nValor em Dinheiro: ".$this->getDinheiro();
				echo "\nValor em Cartão: ".$this->getCartao();
				echo "\nValor Total: ".$this->getTotal();
			}
		}
		}
?>