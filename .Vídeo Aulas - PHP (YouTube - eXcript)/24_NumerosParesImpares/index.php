<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Aula 24 - Numeros Pares e Impares</title>
    </head>
    
    <body>
        
        <!-- Código em PHP -->
             
        <?php
            if(isset($_POST["num"])){ // Verifica se a chave 'num' existe dentro do method post           
                
                $num = $_POST["num"]; //Criando variável e atribuindo a ela o valor que está armazenado no input name="num"
                
                if($num % 2 == 0){
                    echo "O número ", $num , " é par";  
                }else{
                    echo "O número ", $num, " é ímpar";
                }
            }
            
        ?>
        
        <!-- Código em HTML -->
        
        <form method="post">
            <input type="text" name="num"/>
            <input type="submit"/>
        </form> 
        
    </body>
</html>