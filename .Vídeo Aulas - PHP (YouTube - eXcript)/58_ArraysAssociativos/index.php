<?php

    /*
    === ARRAYS ASSOCIATIVOS ===
    Arrays associativos são estruturas onde cada elemento é identificado por uma chave única, entao, é indiferente se estamos trabalhando com Arrays Indexados ou Arrays Multidimensionais, ambos serão por definição, estruturas associativas.

    As estruturas Associativas do PHP podem vincular qualquer tipo de informação, seja ela um objeto, uma estrutura binária, um Array Multidimensional ou mesmo uma simples string contendo uma URL.

    Os Arrays podem conter chaves e valores dos mais variados tipos numa mesma estrutura, até porque, não existe Arrays tipados. Todas as estruturas são pode definição heterogeneas.
    */

    $pontos = array("Zé"=>"11", "José"=>"4", "Zéca"=>"22");

    /*
    No código acima criamos um Array Associativo e vinculamos ao nome de cada participante de um jogo a sua pontuação. Como visto, construimos uma lista vinculando valores inteiros a uma String.
    */

    echo "Pontos do Zé: ",$pontos["Zé"]."<br/>";
    echo "Pontos do José: ",$pontos["José"]."<br/>";
    echo "Pontos do  Zéca: ",$pontos["Zéca"]."<br/>";

    /*
    == ALTERANDO VALORES EM ESTRUTURAS ASSOCIATIVAS ==
    Cada item contido num Array Associativo possui por definição uma chave e está possui um valor vinculado. Da mesma maneira em que podemos associar um novo valor, também é possível fazer a sua alteração.

    Se definirmos um valor a uma chave existente, teremos que o valor desta chave será alterado, do contrário, um novo item será adicionado à estrutura.
    */

    /*
    === LISTAS ASSOCIATIVAS HETEROGENEAS ===
    Uma lista heterogenea seria algo do gênero:
    */

    $pontos = array(
        "url"=>"excript.com/",
        404=>"excript.com/error/",
        301=>"excript.com/error301/",
    );

    /*
    Na estrutura acima vinculamos inicialmente uma String a outra String. Em seguida, definimos 2 outros itens e a estes vinculamos um Inteiro a String.
    */

    $pontos = ["Zé"=>11, "José"=>4, "Zéca"=>22];

    echo "Zé: " . $pontos["Zé"] . "<br/>";
    echo "José: " . $pontos["José"] . "<br/>";
    echo "Zéca: " . $pontos["Zéca"] . "<br/>";

    $pontos["Zéca"] += 1;
    echo $pontos["Zéca"];

?>