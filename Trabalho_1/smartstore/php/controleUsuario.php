<?php

	include 'crudUsuario.php';

	if(isset($_POST["opcao"])){

		$opcao = $_POST['opcao'];
		
		if($opcao == "cadastrarUsuario"){
			$nome = $_POST["nome"];
			$senha = sha1($_POST["senha"]);

			cadastrarUsuario($nome, $senha);
			header("Location: ../login.php");
		}
		else if($opcao == "login"){
			$nome= $_POST["nome"];
			$senha = sha1($_POST["senha"]);
			$nomeBanco = "null";
			$senhaBanco = "null";

			$resultado = buscarUsuario($nome);

			while($linha = mysqli_fetch_assoc($resultado)){
				$nomeBanco = $linha['nome'];
				$senhaBanco = $linha['senha'];
			}

			if($nome == $nomeBanco){
				if($senha == $senhaBanco){
					session_start();
					$_SESSION['nome'] = $nomeBanco;
					$_SESSION['senha'] = $senhaBanco;

					header("Location: ../index.php");
				}else{
					echo"<script> alert('Senha incorreta!'); </script>";
					echo"<script> window.location = '../login.php'; </script>";
				}
			}
            else if($nome != $nomeBanco){
                echo"<script> alert('Nickname incorreto!'); </script>";
                echo"<script> window.location = '../login.php'; </script>";
            }
            
		}
	}
    else if(isset($_GET["opcao"])){
      $opcao = $_GET["opcao"];

        if($opcao == 'sair'){
            session_start();
            session_destroy();
            header ("Location: ../login.php");
        }
    }

?>