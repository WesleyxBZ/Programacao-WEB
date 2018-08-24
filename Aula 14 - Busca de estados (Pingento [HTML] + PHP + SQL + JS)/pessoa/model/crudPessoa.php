<?php

    include 'conexaoBD.php';

    function cadastrarPessoa($nome, $cidade){
        conectar();
        query("INSERT INTO pessoa(nome, cidade_id) VALUES ('$nome', $cidade)");
        fechar();
    }

    function buscarEstados(){
        conectar();
        $resultado = query("SELECT * FROM estados ORDER BY est_nome");
        fechar();
        return $resultado;
    }

    function buscarCidades($id){
        conectar();
        $resultado = query("SELECT * FROM cidades WHERE estados_id=$id ORDER BY cid_nome");
        fechar();
        return $resultado;
    }

    function mostrarPessoas(){
		conectar();
		$resultado = query("SELECT * FROM pessoa");
		fechar();
		return $resultado;
	}
/*
    
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
*/
?>