<?php

	//echo $_COOKIE['usuario'];
	
	if(isset ($_COOKIE['usuario'])){ // 'isset' (se existe...)
		$nome = $_COOKIE['usuario'];
		echo $nome;
	}

?>