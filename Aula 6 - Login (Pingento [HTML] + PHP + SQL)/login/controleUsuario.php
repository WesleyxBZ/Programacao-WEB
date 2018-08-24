<?php
	
	include 'crudUsuario.php';

	if(isset($_POST["opcao"])){

		$opcao = $_POST['opcao']; // Recebendo valor 'opcao' de cadastrarUsuario.php

		if($opcao == "Cadastrar Usuario"){
			$nome = $_POST["nome"];
			$senha = sha1($_POST["senha"]); // 'sha1' é um tipo de método de criptografia

			cadastrarUsuario($nome, $senha);
			
			header("Location: cadastrarUsuario.php");
		}

		else if($opcao == "Entrar"){
			$nome = $_POST["nome"];
			$senha = sha1($_POST["senha"]);
			$nomeBanco = "null";
			$senhaBanco = "null";
			$resultado = buscarUsuario($nome);

			while($linha = mysqli_fetch_assoc($resultado)){
				$nomeBanco = $linha['nome'];	// nomeBanco recebe nome digitado pelo usuario
				$senhaBanco = $linha['senha'];	// senhaBanco recebe senha digitada pelo usuario
			}

			if($nome == $nomeBanco){ 		// Compara o nome digitado com o nome presente no banco de dados
				if($senha == $senhaBanco){ 	// Compara a senha digitada com a senha presente no banco de dados
					session_start();

					$_SESSION['nome'] = $nomeBanco;
					$_SESSION['senha'] = $senhaBanco;

					header("Location: outraPagina.php");
				}else{
					echo"<script> alert('Senha incorreta!'); </script>";
					echo"<script> window.location = 'index.php'; </script>";
				}

			}else{
				echo"<script> alert('Nome incorreto!'); </script>";
					echo"<script> window.location = 'index.php'; </script>";
			}
		}

	}

	else if(isset($_GET["opcao"])){
		$opcao = $_GET["opcao"];

		if($opcao == 'Sair'){
			session_start();
			session_destroy();
			header ("Location: index.php");
		}
	}

?>