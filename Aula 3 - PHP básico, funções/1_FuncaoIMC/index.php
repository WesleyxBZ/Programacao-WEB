<?php
	
	include 'calcularMassa.php';

	$totalConsulta = 0;

	$resultado = calcularMassa(50, 1.70);
	echo 'Resultado + 10: ', $resultado+10, '<br>';

	echo 'IMC: ', calcularMassa(60, 1.65), '<br>';
	echo 'IMC: ', calcularMassa(70, 1.85), '<br>';
	
	echo '<br>Total de consultas ao IMC: ', $totalConsulta;

?>