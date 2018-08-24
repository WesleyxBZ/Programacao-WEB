<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8"/>
        <title>Aula 25 Estrutura Else If</title>
    </head>

    <body>
        
        <!-- 
        if( condição ){
            código;
        }else if( condição ){
            código;
        }else{
            código;
        }
        -->

        <?php
            if(isset ($_POST['idade'])){ // Perguntando se a chave idade contém no array post
                
                $idade= $_POST['idade']; // Criando variável e atribuindo valor do campo idade
                
                if($idade < 18){
                    echo "A idade é de uma criança ou de um adoslecente";
                }else  if($idade >= 18 and $idade < 60){
                    echo "A idade é de um adulto";
                }else if($idade >= 60){
                    echo "A idade informada é de uma pessoa idosa";
                }
            }
            
        ?>
        
        <form method="POST">
            <input type="text" name="idade"/>
            <input type="submit"/>
        </form>

    </body>

</html>