<?php

    /*
        Precedência | 
        ------------|------------
            1       | Funções
            2       | ()
            3       | -, ++, --, !
            4       | *, /, %
            5       | +, -
            6       | <, <=, >, >=
            7       | ==, !=
            8       | ?: (ternário)
    */

    //Exemplo

    $x = 5 - 3 * 4 - 6 / 2;
    $y = (((5 - 3) * (4 - 6)) / 2);

    echo 'Resultado: ', $x, " ", $y;

    /*
    Associatividade de Operadores - é a propriedade que determina como operadores de mesma precedência são agrupados na ausência de parênteses.
    
    Direita -> Esquerda
    _____________________
    |    --, ++         |
    |-------------------|
    | =, +=, -=, *=, /= |
    ---------------------
    */
    
    //Exemplo

    ($a = ($b = ($c = 10)));

    echo '<br> Resultado: ', $a, ' ', $b, ' ', $c;

?>