<?php

    include 'crudInformatica.php';
 
    $opcao = $_POST["opcao"];

    if($opcao == "cadastrar"){
        $descricao = $_POST["descricao"];
        $marca = $_POST["marca"];

        cadastrarInformatica($descricao, $marca);
        header("Location: ../cadastrar.php");
    } 

?>