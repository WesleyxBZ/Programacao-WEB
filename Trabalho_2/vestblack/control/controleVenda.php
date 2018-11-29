<?php
	
	include '../model/crudVenda.php';

	$opcao = $_GET["opcao"]; 

    if($opcao == 'selecionar'){
		$codigoProduto = $_GET["codigoProd"];
        $codigoUsuario = $_GET["codigoUser"];

		inserirVenda($codigoUsuario, $codigoProduto);
		header("Location: ../view/cliente/index.php");
	}  

    
	if($opcao == 'retirarSelecao'){
		$codigoProduto = $_GET["codigoProd"];
        $codigoUsuario = $_GET["codigoUser"];

		excluirVenda($codigoUsuario, $codigoProduto);
		header("Location: ../view/cliente/produtosSelecionados.php");
	}

?>