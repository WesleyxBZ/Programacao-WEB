<?php

    include 'conexaoBD.php';

    function cadastrarProduto($nome, $tamanho, $codigoBarras, $preco){
        conectar();
        query("INSERT INTO produto(nome, tamanho, codigoBarras, preco) VALUES ('$nome', '$tamanho', '$codigoBarras', $preco)");
        fechar();
    }

    function mostrarProdutos(){
        conectar();
        $resultado = query("SELECT * FROM produto");
        fechar();
        return $resultado;
    }

    function mostrarProdutosPesquisar($pesquisa){
		conectar();
		$resultado = query("SELECT * FROM produto WHERE nome LIKE '%$pesquisa%' OR codigoBarras LIKE '%$pesquisa%'");
		fechar();
		return $resultado;
	}

    
    function mostrarProdutoAlterar($codigo){
		conectar();
		$resultado = query("SELECT * FROM produto WHERE codigoProduto = $codigo");
		fechar();
		return $resultado;
	}
    
    function alterarProduto($codigoProduto, $nome, $tamanho, $preco, $codigoBarras){
		conectar();
		query("UPDATE produto SET nome='$nome', tamanho='$tamanho', preco=$preco, codigoBarras='$codigoBarras' WHERE codigoProduto=$codigoProduto");
		fechar();
	}

	function excluirProduto($codigoProduto){
		conectar();
		query("DELETE FROM produto WHERE codigoProduto=$codigoProduto");
		fechar();
	}

?>