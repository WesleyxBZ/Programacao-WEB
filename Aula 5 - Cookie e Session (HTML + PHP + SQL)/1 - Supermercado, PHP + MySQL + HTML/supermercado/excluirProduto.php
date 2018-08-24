<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Controle de Produtos</title>
</head>

<body>
	<div>
		<h1>Excluir Produtos</h1>
		<form method="post" action="controleProduto.php">
			<label for="codigo">Código: </label>
			<input type="number" name="codigo" id="codigo">
			<input type="submit" name="opcao" value="Excluir Produto">
		</form>
		<br><a href="menu.php">Voltar</a>
	</div>
</body>

</html>