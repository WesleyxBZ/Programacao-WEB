<?php
    
    /*
    TIPO            | NOME          
    -------------------------------
    Lógico          | boolean
    Texto           | string
    Inteiro         | integer
    Ponto Flutuante | float
    Array           | array (vetor)
    Objetos         | objects
    Recursos        | resource
    
    */
    
    // O PHP reconhece automaticamente o tipo de dado contido em uma variável

    $str = "eXcript";
    echo gettype($str); // 'gettype' = pegar tipo da variável

    echo "<br>";

    $num = 10;
    echo gettype($num);

    echo "<br>";

    $dinheiro = 1500.23;
    echo gettype($dinheiro);

    echo "<br>";

    $bool = True;
    echo gettype($bool);

    echo "<br>";

?>