<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Aula 23 Ambinete para Estudo PHP</title>
    </head>
    
    <body>
        
        <!-- Código em PHP -->
        
        <!--
        O método '$_POST ["nome"]' captura o que foi digitado no campos 'input type="nome"' da página, para mostra o que foi digitado devemos escrever echo antes do método
        -->
        
        <?php
            if(isset($_POST['valor1'])){ // Verifica se o campo de digitar existe
                echo $_POST['valor1']; // imprime o que foi digitado
            }
        ?>
        
        <!-- Código em HTML -->
        
        <form method="post">
            <input type="text" name="valor1"/>
            <input type="submit"/>
        </form> 
        
    </body>
</html>