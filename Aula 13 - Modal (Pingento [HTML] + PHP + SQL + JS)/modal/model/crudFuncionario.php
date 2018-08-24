<?php

	include 'conexaoBD.php';

	function cadastrarFuncionario($nome, $cargo){
		conectar();
		query("INSERT INTO funcionario (nome, cargo) VALUES ('$nome', '$cargo')");
		fechar();
	}

	
	function visualizarFuncionario(){
		conectar();
		$resultado = query("SELECT * FROM funcionario");
		fechar();
		return $resultado;
	}

	function mostrarFuncionarioAlterar($codigo){
		conectar();
		$resultado = query("SELECT * FROM funcionario WHERE codigo = $codigo");
		fechar();
		return $resultado;
	}

	function alterarFuncionario($codigo, $nome, $cargo){
		conectar();
		query("UPDATE funcionario SET nome='$nome', cargo='$cargo' WHERE codigo=$codigo");
		fechar();
	}

	function excluirFuncionario($codigo){
		conectar();
		query("DELETE FROM funcionario WHERE codigo=$codigo");
		fechar();
	}
	
?>