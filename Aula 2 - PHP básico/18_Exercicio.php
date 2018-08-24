<?php
	
	$valores = array (8, 'Aumentou', 50, 'Diminuiu');

	$salario = 1000;
	$meses = 12;
	$quantidade = 3;

	if($meses == 12 && $quantidade < 2){
		$salario *= $valores[0];
		echo $valores[1], ", valor a pagar: ", $salario;
	}else if($meses >= 12 && $quantidade >= 2){
		$salario -= $valores[2];
		echo $valores[3], ", valor a pagar: ", $salario;
	}else{
		echo "Pagamento normal";
	}
	
?>