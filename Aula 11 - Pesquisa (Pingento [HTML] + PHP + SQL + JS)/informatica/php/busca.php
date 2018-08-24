<?php
	
	include 'crudInformatica.php';
		
	$pesquisa = $_POST["palavra"];

	if($pesquisa == "tudo"){
		$resultado = mostrarInformatica();
	}
	else{
		$resultado = mostrarInformaticaPesquisar($pesquisa);
	}
	
	if(mysqli_num_rows($resultado) <= 0 ) {
		echo 'Nenhuma descrição/marca encontrada';
	}
	else{
		while($linha = mysqli_fetch_assoc($resultado)){
			$descricao = $linha['descricao'];
			$marca = $linha['marca'];
			echo"<tr>
                  <td> $descricao </td>
                  <td> $marca </td>
                </tr>";
		}
	}

?>