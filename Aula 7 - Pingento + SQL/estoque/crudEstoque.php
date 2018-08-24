<?php

	include 'conexaoBD.php';

	function cadastrarProduto($descricao, $quantidade){
		conectar();
		query("INSERT INTO produto (descricao, quantidade) VALUES ('$descricao', $quantidade)");
		fechar();
	}

	function mostrarProduto(){
		conectar();
		$resultado = query("SELECT * FROM produto");
		fechar();
		return $resultado;
	}

	function mostrarProdutoAlterar($codigo){
		conectar();
		$resultado = query("SELECT * FROM produto WHERE codigo = $codigo");
		fechar();
		return $resultado;
	}

	function alterarProduto($codigo, $descricao, $quantidade){
		conectar();
		query("UPDATE produto SET descricao='$descricao', quantidade=$quantidade WHERE codigo=$codigo");
		fechar();
	}

	function excluirProduto($codigo){
		conectar();
		query("DELETE FROM produto WHERE codigo=$codigo");
		fechar();
	}

?>