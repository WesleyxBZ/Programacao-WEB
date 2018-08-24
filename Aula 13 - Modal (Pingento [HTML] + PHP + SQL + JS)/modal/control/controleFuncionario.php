<?php
	
	include '../model/crudFuncionario.php'; 
	include '../view/modal.php';

	$opcao = $_POST["opcao"];

	session_start();

	if($opcao == "cadastrar"){
		$nome = $_POST["nome"];
		$cargo = $_POST["cargo"];
		cadastrarFuncionario($nome, $cargo);

		$_SESSION['mensagem']='Funcionario(a) cadastrado(a) com sucesso';
		$_SESSION['local']='../view/cadastrarFuncionario.php';
		modalConfirmacao();
	} 
	else if($opcao == "alterar"){
		$codigo = $_POST["codigo"];
		$nome = $_POST["nome"];
		$cargo = $_POST["cargo"];
		alterarFuncionario($codigo, $nome, $cargo);

		$_SESSION['mensagem']='Funcionario(a) alterado(a) com sucesso';
		$_SESSION['local']='../view/visualizarFuncionario.php';
		modalConfirmacao();
	}
	else if($opcao == "excluir"){
		$codigo = $_POST["codigo"];
		modalDesejaExcluir($codigo);
	} 
	else if ($opcao == "excluirSim") {
		$codigo = $_POST["codigo"];
		excluirFuncionario($codigo);

		$_SESSION['mensagem']='Funcionario(a) excluido(a) com sucesso';
		$_SESSION['local']='../view/visualizarFuncionario.php';
		modalConfirmacao();
	}
	
?>