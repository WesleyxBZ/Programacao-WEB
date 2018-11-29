<?php

    include '../model/crudProduto.php';
    include '../view/modal.php';
 
    $opcao = $_POST["opcao"];
    session_start();

    if($opcao == "cadastrarProduto"){
        $nome = $_POST["nome"];
        $tamanho = $_POST["tamanho"];
        $codigoBarras = $_POST["codigoBarras"];
        $preco = $_POST["preco"];

        cadastrarProduto($nome, $tamanho, $codigoBarras, $preco);
        $_SESSION['mensagem']='Produto cadastrado com sucesso';
		$_SESSION['local']='../view/funcionario/cadastrarProdutos.php';
		modalConfirmacao();
    }
    
    else if($opcao == "alterarProduto"){
		$codigoProduto = $_POST["codigoProduto"];
		$nome = $_POST["nome"];
		$tamanho = $_POST["tamanho"];
		$preco = $_POST["preco"];
		$codigoBarras = $_POST["codigoBarras"];

		alterarProduto($codigoProduto, $nome, $tamanho, $preco, $codigoBarras);
		$_SESSION['mensagem']='Produto alterado com sucesso';
		$_SESSION['local']='../view/funcionario/visualizarProdutos.php';
		modalConfirmacao();
	}

	else if($opcao == "excluirProduto"){
		$codigoProduto = $_POST["codigoProduto"];
		modalDesejaExcluir($codigoProduto);
	}

	else if($opcao == "excluirSim"){
		$codigoProduto = $_POST["codigoProduto"];
		excluirProduto($codigoProduto);

		$_SESSION['mensagem']='Produto excluido(a) com sucesso';
		$_SESSION['local']='../view/funcionario/visualizarProdutos.php';
		modalConfirmacao();
	}

?>