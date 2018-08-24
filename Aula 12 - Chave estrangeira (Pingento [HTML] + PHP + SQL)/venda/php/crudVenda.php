<?php

    include 'conexaoBD.php';

    function mostrarProdutos(){
		conectar();
		$resultado = query("SELECT codigoProduto, descricao FROM produto WHERE codigoProduto NOT IN (SELECT codigoProduto FROM produto, venda WHERE venda.codigoCli = 1 AND venda.codigoProd = codigoProduto)");
		fechar();
		return $resultado;
	}

	function mostrarProdutosSelecionados(){
		conectar();
		$resultado = query("SELECT codigoProduto, descricao FROM produto, venda WHERE venda.codigoCli = 1 AND venda.codigoProd = produto.codigoProduto;");
		fechar();
		return $resultado;
	}

	function excluirVenda($codigoCliente, $codigoProduto){
		conectar();
		query("DELETE FROM venda WHERE codigoCli=$codigoCliente AND codigoProd=$codigoProduto");
		fechar();
	}

	function inserirVenda($codigoCliente, $codigoProduto){
		conectar();
		query("INSERT INTO venda(codigoCli, codigoProd) VALUES($codigoCliente, $codigoProduto)");
		fechar();
	}

?>