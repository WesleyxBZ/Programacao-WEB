<?php
	
	$fruta = array ('uva','laranja','Manga','Morango');

	//print_r($fruta);

	foreach ($fruta as $valor){ // O comando foreach pega cada valor do vetor e coloca na variável 'valor', o foreach sabe a quantidade de valores do vetor
		echo " $valor ";
	}

	for($i=0; $i>4; $i++){
		echo $fruta[$i];
	}

	
?>