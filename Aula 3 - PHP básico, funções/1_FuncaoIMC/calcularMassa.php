<?php
	
		function calcularMassaCorporal($peso, $altura){

		global $totalConsulta;
		$totalConsulta += 1;

		//return $peso / ($altura * $altura);
		return number_format ($peso / ($altura * $altura), 2);
	}
	
?>