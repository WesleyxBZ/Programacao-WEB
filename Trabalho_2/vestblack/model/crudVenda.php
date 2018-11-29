<?php

    include 'conexaoBD.php';

    function mostrarProdutos($codigoUsuario){
		conectar();
		$resultado = query("SELECT codigoProduto, nome, tamanho, preco FROM produto WHERE codigoProduto NOT IN (SELECT codigoProduto FROM produto, venda WHERE venda.codigoUser = $codigoUsuario AND venda.codigoProd = codigoProduto)");
		fechar();
		return $resultado;
	}

    function mostrarProdutosSelecionados($codigoUsuario){
		conectar();
		$resultado = query("SELECT codigoProduto, nome, tamanho, preco FROM produto, venda WHERE venda.codigoUser = $codigoUsuario AND venda.codigoProd = produto.codigoProduto");
		fechar();
		return $resultado;
	}

    function inserirVenda($codigoUsuario, $codigoProduto){
		conectar();
		query("INSERT INTO venda(codigoUser, codigoProd) VALUES($codigoUsuario, $codigoProduto)");
		fechar();
	}

	function excluirVenda($codigoUsuario, $codigoProduto){
		conectar();
		query("DELETE FROM venda WHERE codigoUser=$codigoUsuario AND codigoProd=$codigoProduto");
		fechar();
	}
	

?>