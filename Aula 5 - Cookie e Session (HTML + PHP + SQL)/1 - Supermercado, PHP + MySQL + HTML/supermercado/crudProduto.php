<?php
	include 'conexaoBD.php';

	function cadastrarProduto($descricao, $preco){
		conectar();
		query("INSERT INTO produto (descricao, preco) VALUES ('$descricao', $preco)");
		fechar();
	}

	function excluirProduto($codigo){
		conectar();
		query("DELETE FROM produto WHERE codigo = $codigo");
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
		$resultado=query("SELECT * FROM produto where codigo=$codigo");
		fechar();
		return $resultado;
	}

	function alterarProduto($codigo, $descricao, $preco){
		conectar();
		query("UPDATE produto SET descricao='$descricao', preco=$preco WHERE codigo=$codigo");
		fechar();
	}
?>