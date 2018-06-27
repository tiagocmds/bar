<pre>
<?php

	require_once "classcardapio.php";
	require_once "classcaixa.php";
	require_once "classcomanda.php";
	require_once "classgarcom.php";


	$cardapio= new Cardapio();
	$garcom = new Garcom("Joao","Noturno");
	$comanda = new Comanda(1,$garcom,$cardapio);
	$caixa = new Caixa("27-06-2018");

	print_r($comanda);

	$garcom->anotaPedido($comanda,"PASTEL");
	
	


?>	
</pre>