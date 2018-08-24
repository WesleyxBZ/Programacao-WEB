
<!DOCTYPE html>
<html lang="pt-br">	

	<head>
		<meta charset="UTF-8">
		<title>Raiz</title>
	</head>

	<body>
		<div>
            
            <?php

                $valor = $_POST["valor"];
                $raiz = sqrt($valor); // $valor / $valor
                echo 'A raiz de ', $valor, ' é: ', number_format ($raiz, 2);

            ?>

		</div>
	</body>

</html>

