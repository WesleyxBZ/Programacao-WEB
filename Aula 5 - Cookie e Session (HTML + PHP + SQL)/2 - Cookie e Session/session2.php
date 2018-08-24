<?php

	session_start();

	if(isset($_SESSION['nome']) and isset($_SESSION['senha'])){	// 'isset' (se existe...)
		echo 'Oi, ', $_SESSION['nome'], '<br>', 'Senha: ', $_SESSION['senha'];
	}

?>