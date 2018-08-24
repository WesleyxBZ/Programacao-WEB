<?php
	
	$num = array (6,10,3,5);

	$num[2] = $num[2] + 15;
	
	if($num[2] == 18){
		$num[0] = $num[0] + $num[1] + 20;
		echo $num[0];

	}else{
		$num[3] = ($num[3] + $num[1]) * 2;
		echo $num[3];
	}
	
?>