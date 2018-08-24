<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Controle de Produtos</title>
</head>

<body>
	<div>
		<h1>Alterar Produtos</h1>
		<?php
			include 'crudProduto.php';
			$resultado = mostrarProduto();
			if($resultado){
				while($resultadoSeparado = mysqli_fetch_assoc($resultado)){
					echo 'Código: ', $resultadoSeparado['codigo'], '<br>Descrição: ', $resultadoSeparado['descricao'], '<br>Preço: ', $resultadoSeparado['preco'], '<br><a href=alterarProduto.php?codigo='.$resultadoSeparado['codigo'].'>Alterar</a><br><br>';
				}
			}


		?>
		<a href="menu.php">Voltar</a>
	</div>
</body>
</html>