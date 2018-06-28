<pre>
<?php
	require_once "classcardapio.php";
	require_once "classcaixa.php";
	require_once "classcomanda.php";
	require_once "classgarcom.php";

	$cardapio= new Cardapio();
	$garcom = new Garcom("Joao","Noturno");
	$comanda = new Comanda(1,$garcom,$cardapio);
	$comanda2 = new Comanda(2,$garcom,$cardapio);
	$caixa = new Caixa("27-06-2018");

	
	$garcom->anotaPedido($comanda,"PASTEL",$cardapio);
	$garcom->anotaPedido($comanda,"SKOL",$cardapio);
	$garcom->anotaPedido($comanda,"SALADA",$cardapio);
	$garcom->anotaPedido($comanda,"ANTARTICA",$cardapio);
	$garcom->anotaPedido($comanda,"ANTARTICA",$cardapio);

	
	

?>	
</pre>