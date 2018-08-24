<?php

	include 'conexaoBD.php';
	

	function cadastrarInformatica($descricao, $marca){
		conectar();
		query("INSERT INTO informatica(descricao, marca) VALUES('$descricao', '$marca')");
		fechar();
	}

	function mostrarInformatica(){
		conectar();
		$resultado = query("SELECT * FROM informatica");
		fechar();
		return $resultado;
	}

	function mostrarInformaticaPesquisar($pesquisa){
		conectar();
		$resultado = query("SELECT * FROM informatica WHERE descricao LIKE '%$pesquisa%' OR marca LIKE '%$pesquisa%'");
		fechar();
		return $resultado;
	}

?>