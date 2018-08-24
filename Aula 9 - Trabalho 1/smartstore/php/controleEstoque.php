<?php

    include 'crudEstoque.php';
 
    $opcao = $_POST["opcao"];

    if($opcao == "cadastrarEstoque"){
        $nome = $_POST["nome"];
        $quantidade = $_POST["quantidade"];

        cadastrarEstoque($nome, $quantidade);
        header("Location: ../index.php");
    }
    
    if($opcao == "alterarEstoque"){
		$codigo = $_POST["codigo"];
		$nome = $_POST["nome"];
		$quantidade = $_POST["quantidade"];

		alterarEstoque($codigo, $nome, $quantidade);

		header("Location: ../visualizarEstoque.php");
	}

	if($opcao == "excluirEstoque"){
		$codigo = $_POST["codigo"];

		excluirEstoque($codigo);

		header("Location: ../visualizarEstoque.php");
	}

?>