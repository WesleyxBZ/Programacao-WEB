<?php
    
    /* 
    Operadores Relacionais - define a relação entre dois operandos
    
    Operador | Descrição
    -------------------------
    ==       | Igual a
    !=       | Diferente
    >        | Maior que
    <        | Menor que
    >=       | Maior ou igual
    <=       | Menor ou igual
    
    */
    
    echo "Igualdade <br>";
    var_dump( 10 == 10 ); // 'var_dump' imprime o tipo de valor e o valor
    var_dump( 10 == "10" ); // o PHP converte a string "10" e verifica se ela é igual ao valor '10'
    print_r( 10 == 10 ); // 'print_r' imprime 1 caso os operandos forem true
    echo "<br><br>";

    echo "Diferente <br>";
    var_dump( 10 != 10 );
    var_dump( 10 != 10 );
    echo "<br><br>";

    echo "Diferente <br>";
    var_dump( 10 <> 10 );
    var_dump( 10 <> 10 );
    echo "<br><br>";

    echo "Identico <br>";
    var_dump( 7 === 7 );
    var_dump( 7 === "7" ); // em igualdade, o valor '7' não é identico a string "7"
    var_dump( 7 === 7.0 ); // FALSE, pois não são do mesmo tipo
    echo "<br><br>";

    echo "Não identico <br>";
    var_dump( 7 !== 7 ); // FALSE, pois são iguais e do mesmo tipo, inteiros
    var_dump( 7 !== 7.0 ); // TRUE, pois não são do mesmo tipo
    echo "<br><br>";

    echo "Menor <br>";
    var_dump( 7 < 8 );
    var_dump( 7 < 6 );
    echo "<br><br>";

    echo "Maior <br>";
    var_dump( 7 > 6 );
    var_dump( 7 > 8 );
    echo "<br><br>";

    echo "Menor ou igual <br>";
    var_dump( 7 <= 7 );
    var_dump( 7 <= 6 );
    var_dump( 3 <= 7 ); 
    echo "<br><br>";

    echo "Maior ou igual? <br>";
    var_dump( 7 >= 7 );
    var_dump( 7 >= 8 );
    var_dump( 10 >= 7 );

?>