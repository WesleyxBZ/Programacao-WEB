<?php
	
	$conexao = mysqli_connect('localhost', 'root', '');

	mysqli_select_db($conexao, 'mercado');

	$sql = "SELECT * FROM funcionario";

	$resultado = mysqli_query($conexao, $sql);

	if($resultado){
		while ($resultadoSeparado = mysqli_fetch_assoc($resultado)){
			echo '<br>Código: ', $resultadoSeparado['codigo'],
			'<br>Nome:', $resultadoSeparado['nome'],
			'<br>Cargo: ', $resultadoSeparado['cargo'] ;
			echo '<br>';
		}
	}

?>