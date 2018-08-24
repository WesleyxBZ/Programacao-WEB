<?php

	include '../model/crudUsuario.php';

	if(isset($_POST["opcao"])){

		$opcao = $_POST['opcao'];
		
		if($opcao == "cadastrar"){
			$nome = $_POST["nome"];
			$senha = sha1($_POST["senha"]);
            $tipo = $_POST["tipo"];

			cadastrarUsuario($nome, $senha, $tipo);
			header("Location: ../view/login.php");
		}
		else if($opcao == "login"){
			$nome= $_POST["nome"];
			$senha = sha1($_POST["senha"]);
            
            $codigoBanco = "null";
			$nomeBanco = "null";
			$senhaBanco = "null";
            $tipoBanco = "null";

			$resultado = buscarUsuario($nome);

			while($linha = mysqli_fetch_assoc($resultado)){
                $codigoBanco = $linha["codigoUsuario"];
				$nomeBanco = $linha['nome'];
				$senhaBanco = $linha['senha'];
                $tipoBanco = $linha['tipo'];
			}

			if($nome == $nomeBanco){
				if($senha == $senhaBanco){
					session_start();
                    $_SESSION['codigoUsuario'] = $codigoBanco;
					$_SESSION['nome'] = $nomeBanco;
					$_SESSION['senha'] = $senhaBanco;
                    
                    if($tipoBanco == 'cliente'){
                        header("Location: ../view/cliente/index.php");
                    }else{
                        header("Location: ../view/funcionario/index.php");
                    }
					
				}else{
					echo"<script> alert('Senha incorreta!'); </script>";
					echo"<script> window.location = '../view/login.php'; </script>";
				}
			}
            else if($nome != $nomeBanco){
                echo"<script> alert('Nome incorreto!'); </script>";
                echo"<script> window.location = '../view/login.php'; </script>";
            }
            
		}
	}
    else if(isset($_GET["opcao"])){
      $opcao = $_GET["opcao"];

        if($opcao == 'sair'){
            session_start();
            session_destroy();
            header ("Location: ../view/login.php");
        }
    }
?>