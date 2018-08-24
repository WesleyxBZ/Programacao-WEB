<DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Exercício - Resposta</title>
    </head>
    
    <body>
        <div>

           <?php
                
                $valor1 = $_POST["valor1"];
                $valor2 = $_POST["valor2"];
                $simbolo = $_POST["simbolo"];
                
                if($simbolo == '+'){
                        $res = $valor1+$valor2;
                        echo $valor1, ' + ', $valor2, ' = ', $res ;
                }
                if($simbolo == '-'){ 
                        $res = $valor1-$valor2;
                        echo $valor1, ' - ', $valor2, ' = ', $res;
                }
                if($simbolo == '*'){ 
                        $res = $valor1*$valor2;
                        echo $valor1, ' * ', $valor2, ' = ', $res;
                }
                if($simbolo == '/'){ 
                        $res = $valor1/$valor2;
                        echo $valor1, ' / ', $valor2, ' = ', $res;
                }

            ?>
        </div>
    </body>
    
</html>