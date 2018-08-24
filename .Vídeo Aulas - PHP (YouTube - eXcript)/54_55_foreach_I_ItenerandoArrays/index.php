<?php

    /*  
    === ITERANDO ARRAYS ===
    Das 3 estruturas de repetição por nós estudadas, a melhor para iteração de Arrays e o laço de repetição for.
    
    A melhor maneira para iterarmos uma coleção de elementos é pela estrutura foreach, ou seja, uma estrutura de repetição for especializada em percorrer todos elementos de uma estrutura Array.
    
    
    == QUANTIDADE DE ELEMENTOS NUM ARRAY ==
    Para sabermos quantos itens estão contidos num Array, temos a disposição a função count().
    
    $arr = ["aaa", "bbb", "ccc"];
    echo count($arr);
    */

    $lista = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sabado"];
    
    for($x=0; $x<count($lista); $x++){
        echo $lista[$x] , "<br>";
    }
    
    /*
    ou  
    
    $qnt = count($lista);
    echo $qnt . "\n";

    for($x=0; $x<$qnt; $x++){
        echo "$x: $lista[$x]\n";
    }
    */

    /* 
    === ITERANDO ARRAYS - ESTRUTURA foreach ===
    A estrutura de iteração foreach é uma instrução especializada na iteração de Arrays, ou seja, uma estrutura que está projetada para percorrer todos os elementos contidos num Array.
    
    Com a estrutura foreach temos acesso total aos elementos, da mesma forma como teríamos se estivessemos utilizando a estrutura for normal. Então, temos que o laço percorrerá todos elementos e a cada ciclo será definido o próximo elemento contido na estrutura que está sendo iterada.

    Então, temos que pensar na estrutura foreach da seguinte maneira: "a cada elemento do array, execute o bloco definido".
    
    foreach (<array> as <valor>){
        código;
    }
    */
    
    $lista = array(
        0 => 'par',
        1 => 'impar',
        2 => 'par',
        3 => 'impar',
        4 => 'par',
        5 => 'impar',
        6 => 'par',
        7 => 'impar',
        8 => 'par',
        9 => 'impar',
        10 => 'par'
    );
    
    echo "<br>";

    // Imprime os números de 1 até 10
    foreach( range(0, 10, 2) as $numero ) {
        echo "$numero = $lista[$numero] \n";
    }
    
    echo "<br><br>";
    
    $arr = range(1, 10);  

    foreach($arr as $valor) {
        echo "$valor\n";
    }

    echo "<br><br>";

    $arr = array(1, 2, 3, 17);
    $i = 0;

    foreach ($arr as $valor) {
        echo "\$arr[$i] => $valor &nbsp &nbsp";
        $i++;
    }
    
    echo "<br><br>";

    $lista = array (
        "um" => 1,
        "dois" => 2,
        "três" => 3,
        "quatro" => 4
    );

    foreach ($lista as $chave => $valor) {
        echo "\$lista[$chave] => $valor &nbsp";
    }
    
    echo "<br><br>";
    
    $lista = array();
    $lista[0][0] = "a";
    $lista[0][1] = "b";
    $lista[1][0] = "c";
    $lista[1][1] = "d";

    foreach ($lista as $val1) {
        foreach ($val1 as $val2) {
            echo "$val2\n";
        }
    }

    echo "<br><br>";

    foreach ([1, 2, 3, 4, 5] as $valor){
        echo "$valor\n";
    }

?>