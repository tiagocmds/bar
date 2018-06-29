<pre>
<?php
	require_once "classcardapio.php";
	require_once "classcaixa.php";
	require_once "classcomanda.php";
	require_once "classgarcom.php";

	$cardapio= new Cardapio();
	$garcom = new Garcom("Joao","noturno");
	$comanda = new Comanda(1,$garcom,$cardapio);
	$comanda2 = new Comanda(2,$garcom,$cardapio);
	$caixa = new Caixa();

	$garcom->anotaPedido($comanda,"PASTEL",$cardapio);
	$garcom->anotaPedido($comanda,"PASTEL",$cardapio);

	$comanda->mostraComanda();

	//$garcom->anotaPedido($comanda,"PASTEL",$cardapio);
	//$comanda->mostraComanda();
	//echo $comanda->getRegistro();

?>	
</pre>