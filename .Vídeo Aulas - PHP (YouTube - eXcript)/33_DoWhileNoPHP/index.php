<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Aula 33 - Estrutura DO-WHILE - caso de uso</title>
    </head>

    <body>

        <?php
           // var_dump($_REQUEST);
        
            if(isset($_POST["dependentes"])){
                
                $dependentes = $_POST["dependentes"];
                
                if(!is_numeric($dependentes)){ // Se o valor digitado não for um número (sinal !) ele imprime uma mensagem
                    $dependentes = 1; // Atribui 1 a variável dependente para criar uma linha de dependente
                    echo "não numérico";
                }

                $conta = 0;

                echo "
                <table border='1'>
                    <tr>
                        <th></th>
                        <th>Nome</th>
                        <th>Nasc</th>
                    </tr>"; // Cria primeira linha da tabela

                do{
                    $conta++;
                    
                    echo "
                    <tr>
                        <td>Dependente $conta</td>
                        <td><input type='text' name='nome'></td>
                        <td><input type='text' name='nasc'></td>
                    </tr>"; // Cria uma linha com campos para dependente

                }while($conta < $dependentes);

                echo "</table>";
            }
        ?>

        <form method="post">
            <input type="text" name="dependentes"/>
            <input type="submit"/>
        </form>

    </body>

</html>