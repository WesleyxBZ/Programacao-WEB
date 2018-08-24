<?php

    include '../model/crudEstoque.php';
    include '../view/modal.php';
 
    $opcao = $_POST["opcao"];
    
    if($opcao == "alterarEstoque"){
		$id = $_POST["id"];
		$marca = $_POST["marca"];
		$local = $_POST["local"];

		alterarEstoque($id, $marca, $local);
		$_SESSION['mensagem']='Estoque alterado com sucesso';
		$_SESSION['local']='../view/mostrarEstoque.php';
		modalConfirmacao();
	}

?>