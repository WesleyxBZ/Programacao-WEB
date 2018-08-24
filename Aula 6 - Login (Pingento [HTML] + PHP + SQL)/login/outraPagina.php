<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
	</head>
	<body>
		<div>
			<?php
				session_start();

				if(isset($_SESSION['nome'])){
					echo 'Seja Bem-Vindo: ', $_SESSION['nome'];
				}
			?>

			<br><a href="controleUsuario.php?opcao=Sair">Sair</a>
			</div>
	</body>
</html>