<?php

    /*
    === ARRAYS MULTIDIMENSIONAIS ===
    Array Multidimensional é uma estrutura que tem vinculado um outro Array. Podemos construir estruturas com quantas dimensões forem necessárias, porém, na maior parte das vezes trabalharemos com estruturas que tenham 2 dimensões, ou seja, estruturas que armazenam informações tabulares e que também são chamadas de Tabelas, ou então, Planilhas.

    Estruturas multidimensionais em PHP também são representadas como Matrizes onde temos: Linhas * Colunas.
    */

    $jogo = array
    (
        array(1, "Zé", 11),
        array(2, "José", 4),
        array(3, "Zéca", 22)
    );

    /*
    $jogo = [
        ["ID"=>1, "NOME"=>"Zé",   "PONTOS"=>11],
        ["ID"=>2, "NOME"=>"José", "PONTOS"=>4],
        ["ID"=>3, "NOME"=>"Zéca", "PONTOS"=>22]
    ];

    echo $jogo[1]["NOME"];
    */

    print_r($jogo);

    /*
    A estrutura do Array acima pode também ser representada seguinte maneira:

    | ID | NOME | PONTOS |
    | 1  | Zé   |   11   |
    | 2  | José |    4   |
    | 3  | Zéca |   22   |
    */

    echo "<br/><br/>";

    for ($linha=0; $linha < 3; $linha++) {
        for ($coluna=0; $coluna<3; $coluna++) {
            echo $jogo[$linha][$coluna],"  ";
        }
        echo "<br/>";
    }

    /*
    == ARRAYS MULTIDIMENSIONAIS CONTENDO ESTRUTURAS DE DADOS ==
    É bastante comum encontrarmos código que possuem Arrays associados a chaves e estes, estão representando estruturas de informações que por exemplo, serão enviadas a um componente. A seguir, temos um código demonstrativo de como essas estruturas aparecerão.
    */

    $x = [
        "array1" => [
            "aaa"=>100,
            "bbb"=>200,
            "ccc"=>300
        ],
        "array2" => [
            "ddd"=>500,
            "eee"=>600,
            "fff"=>700
        ]
    ];

    echo "<br/>";
    echo $x["array1"]["bbb"];

?>