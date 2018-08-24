<?php

    include 'conexaoBD.php';


    function mostrarEstoque(){
        conectar();
        $resultado = query("SELECT * FROM item");
        fechar();
        return $resultado;
    }


    function mostrarEstoquePesquisar($pesquisa){
		conectar();
		$resultado = query("SELECT * FROM item WHERE marca LIKE '%$pesquisa%' ");
		fechar();
		return $resultado;
	}


    function mostrarEstoqueAlterar($id){
		conectar();
		$resultado = query("SELECT * FROM item WHERE id = $id");
		fechar();
		return $resultado;
	}
 
    function alterarEstoque($id, $marca, $local){
		conectar();
		query("UPDATE item SET marca='$marca', local='$local' WHERE id=$id");
		fechar();
	}

?>