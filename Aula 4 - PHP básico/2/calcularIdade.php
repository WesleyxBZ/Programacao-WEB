<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Calcular idade</title>
    </head>
    
    <body>
        <div>
            
            <?php
            
                $anoNasc = $_POST["ano"];
                $nome = $_POST["nome"];
                $sexo = $_POST["sexo"];
            
                $idadeAtual = date("Y") - $anoNasc ;

                echo $nome, ' ', $idadeAtual, ' anos', ' sexo ', $sexo;
            
            ?>
            
        </div>
    </body>
    
</html>