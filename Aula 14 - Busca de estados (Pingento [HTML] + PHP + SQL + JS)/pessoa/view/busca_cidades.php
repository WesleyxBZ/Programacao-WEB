<?php
	
	include '../model/crudPessoa.php';

	$id = $_POST["id"];
	$resultado = buscarCidades($id);

	if($resultado){
      while($linha = mysqli_fetch_assoc($resultado)){
      	echo "<option value='".$linha['id']."'>".$linha['cid_nome']."</option>";
      }
    }

?>