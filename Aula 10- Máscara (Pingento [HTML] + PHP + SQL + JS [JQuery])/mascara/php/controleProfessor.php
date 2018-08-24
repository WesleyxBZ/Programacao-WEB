<?php

    include 'crudProfessor.php';
 
    $opcao = $_POST["opcao"];

    if($opcao == "cadastrar"){
        $nome = $_POST["nome"];
        $celular = $_POST["celular"];
        $cep = $_POST["cep"];

        cadastrarProfessor($nome, $celular, $cep);
        header("Location: ../cadastrarProfessor.php");
    }

?>