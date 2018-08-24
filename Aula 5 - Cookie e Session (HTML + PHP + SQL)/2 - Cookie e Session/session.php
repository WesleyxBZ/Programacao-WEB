<?php
	
	session_start(); // Inicia a sessão

	$_SESSION['nome']='Fulano da Silva';
	$_SESSION['senha']='1234';

	//unset($_SESSION['nome']); // Excluir o 'nome' do session

	//session_destroy(); // Finaliza a sessão

	
?>