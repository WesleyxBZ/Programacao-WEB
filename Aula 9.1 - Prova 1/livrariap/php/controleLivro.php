<?php

    include 'crudLivro.php';
 
    $opcao = $_POST["opcao"];
    
    if($opcao == "alterarLivro"){
		$id = $_POST["id"];
		$titulo = $_POST["titulo"];
		$autor = $_POST["autor"];

		alterarLivro($id, $titulo, $autor);

		header("Location: ../mostrar.php");
	}

?>