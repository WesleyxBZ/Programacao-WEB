<?php
	
	include '../model/crudEstoque.php';
		
	$pesquisa = $_POST["palavra"];

	if($pesquisa == "tudo"){
		$resultado = mostrarEstoque();
	}
	else{
		$resultado = mostrarEstoquePesquisar($pesquisa);
	}
	
	if(mysqli_num_rows($resultado) <= 0 ) {
		echo 'Nenhum nome/código de barras encontrado';
	}
	else{
		while($linha = mysqli_fetch_assoc($resultado)){
	        $id = $linha["id"];
	        $marca = $linha["marca"];
	        $local = $linha["local"];

	        echo "<tr>
	                  <td>" .$marca. "</td>
	                  <td>" .$local. "</td>
	                  <td>
	                    <a class='btn btn-secondary' href='alterarEstoque.php?codigo=".$id."'>Editar</a>
	                  </td>
	              </tr>";
        }
	}

?>