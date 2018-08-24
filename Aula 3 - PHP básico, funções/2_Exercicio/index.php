<?php
	
	include 'mediaAritmetica.php';

	$res = mediaAritmetica(7,5,6.5,9);

	if($res >= 7){
		echo 'Aprovado, nota: ', $res;
	}else if($res >= 5 && $res < 7){
		echo 'Exame, nota: ', $res;
	}else{
		echo 'Reprovado, nota: ', $res;
	}

?>