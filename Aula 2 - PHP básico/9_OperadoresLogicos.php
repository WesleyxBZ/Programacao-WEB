<?php
	
	$valor1 = 10;
	$valor2 = 20;
	$valor3 = $valor1 + $valor2;

	if(($valor1 == 10) && ($valor3 == 20)){
		echo 'Entrou no and';
	}else if(($valor1 == 10) || ($valor3 == 20)){
		echo 'Entrou no or';
	}
	
?>