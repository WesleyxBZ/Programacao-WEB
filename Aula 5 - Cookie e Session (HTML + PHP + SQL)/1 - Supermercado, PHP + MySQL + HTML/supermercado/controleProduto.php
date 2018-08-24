<?php
	include 'crudProduto.php';

	$opcao = $_POST["opcao"];

	if($opcao=="Cadastrar Produto"){
		$descricao = $_POST["descricao"];
		$preco = $_POST["preco"];

		cadastrarProduto($descricao, $preco);
		header("Location: cadastrarProduto.php");
	}
	elseif ($opcao=="Excluir Produto") {
		$codigo = $_POST["codigo"];

		excluirProduto($codigo);
		header("Location: excluirProduto.php");
	}
	elseif ($opcao=="Alterar Produto") {
		$codigo = $_POST["codigo"];
		$descricao = $_POST["descricao"];
		$preco = $_POST["preco"];
		alterarProduto($codigo, $descricao, $preco);
		header("Location: mostrarAlterarProduto.php");
	}

	

?>