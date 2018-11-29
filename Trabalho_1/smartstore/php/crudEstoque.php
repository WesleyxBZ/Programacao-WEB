<?php

    include 'conexaoBD.php';

    function cadastrarEstoque($nome, $quantidade){
        conectar();
        query("INSERT INTO estoque (nome, quantidade) VALUES ('$nome', $quantidade)");
        fechar();
    }

    function mostrarEstoque(){
        conectar();
        $resultado = query("SELECT * FROM estoque");
        fechar();
        return $resultado;
    }

    function mostrarEstoqueAlterar($codigo){
		conectar();
		$resultado = query("SELECT * FROM estoque WHERE codigo = $codigo");
		fechar();
		return $resultado;
	}
    
    function alterarEstoque($codigo, $nome, $quantidade){
		conectar();
		query("UPDATE estoque SET nome='$nome', quantidade=$quantidade WHERE codigo=$codigo");
		fechar();
	}

	function excluirEstoque($codigo){
		conectar();
		query("DELETE FROM estoque WHERE codigo=$codigo");
		fechar();
	}

?>