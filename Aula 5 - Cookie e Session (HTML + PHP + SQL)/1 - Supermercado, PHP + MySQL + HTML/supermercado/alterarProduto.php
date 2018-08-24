<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Controle de Produtos</title>
</head>
<body>
	<div>
		<h1>Alterar Produtos</h1>
		<form method="post" action="controleProduto.php">
			<?php
				include 'crudProduto.php';
				$codigo = $_GET["codigo"];
				$resultado = mostrarProdutoAlterar($codigo);
				if($resultado){
					while($resultadoSeparado = mysqli_fetch_assoc($resultado)){
						$descricao = $resultadoSeparado['descricao'];
						$preco = $resultadoSeparado['preco'];
					}
				}
			?>
			<label for="descricao">Descrição: </label>
			<input type="text" name="descricao" id="descricao" value="<?php echo $descricao; ?>">
			<label for="preco">Preço: </label>
			<input type="number" step=0.01 name="preco" id="preco" value="<?php echo $preco; ?>">
			<input type="hidden" name="codigo" value="<?php echo $codigo; ?>">
			<input type="submit" name="opcao" value="Alterar Produto">
		</form>
		<br><a href="mostrarAlterarProduto.php">Voltar</a>
	</div>
</body>
</html>