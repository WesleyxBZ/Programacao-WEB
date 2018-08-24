<?php

    include 'conexaoBD.php';

    function mostrarLivro(){
        conectar();
        $resultado = query("SELECT * FROM livro");
        fechar();
        return $resultado;
    }

    function mostrarLivroAlterar($id){
		conectar();
		$resultado = query("SELECT * FROM livro WHERE id=$id");
		fechar();
		return $resultado;
	}
    
    function alterarLivro($id, $titulo ,$autor){
		conectar();
		query("UPDATE livro SET titulo='$titulo', autor='$autor' WHERE id=$id");
		fechar();
	}


?>