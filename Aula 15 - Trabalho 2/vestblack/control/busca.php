<?php
	
	include '../model/crudProduto.php';
		
	$pesquisa = $_POST["palavra"];

	if($pesquisa == "tudo"){
		$resultado = mostrarProdutos();
	}
	else{
		$resultado = mostrarProdutosPesquisar($pesquisa);
	}
	
	if(mysqli_num_rows($resultado) <= 0 ) {
		echo 'Nenhum nome/código de barras encontrado';
	}
	else{
		while($linha = mysqli_fetch_assoc($resultado)){
			$codigoProduto = $linha["codigoProduto"];
            $nome = $linha["nome"];
            $tamanho = $linha["tamanho"];
            $preco = $linha["preco"];
            $codigoBarras = $linha["codigoBarras"];

            echo "<tr>
                    <td>" .$nome. "</td>
                    <td>" .$tamanho. "</td>
                    <td>" .$codigoBarras. "</td>
                    <td>R$" .$preco. "0</td>
                    <td>
                      <a class='btn btn-secondary' href='editarProduto.php?codigoProduto=".$codigoProduto." '>Editar</a>
                    </td>
                  </tr>";
		}
	}

?>