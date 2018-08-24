<?php
	
	$conexao = mysqli_connect('localhost', 'root', '');

	mysqli_select_db($conexao, 'mercado');

	//mysqli_query($conexao, "INSERT INTO funcionario (nome, cargo) VALUES ('Sergio', 'Gerente')");

	//mysqli_query($conexao, "UPDATE funcionario SET nome='Ana' WHERE cargo='Presidente'");

	mysqli_query($conexao, "DELETE FROM funcionario WHERE nome='Pedro'");

	mysqli_close($conexao);

?>