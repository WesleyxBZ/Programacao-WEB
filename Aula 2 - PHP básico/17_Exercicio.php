<?php

	function imc($peso, $altura){
		return $peso / ($altura * $altura);
	}

	$peso = 70;
	$altura = 1.85;

	echo "Seu IMC é: ", imc($peso, $altura);

?>