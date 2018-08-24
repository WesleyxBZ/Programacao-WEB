<?php

    include '../model/crudPessoa.php';
 
    $opcao = $_POST["opcao"];

    if($opcao == "cadastrar"){
        $nome = $_POST["nome"];
        $cidade = $_POST["cidade"];

        cadastrarPessoa($nome, $cidade);
        header("Location: ../view/cadastrarPessoas.php");
    }
    /*
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
*/
?>