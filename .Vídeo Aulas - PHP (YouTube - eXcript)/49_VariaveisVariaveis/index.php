<?php
    /*
    
    === VARIÁVEIS VARIÁVEIS ===
    Em algumas implementações, é prático a utilização do que chamamos de "variáveis variáveis", ou seja, variáveis que são criadas e utilizadas dinâmicamente e o seu nome é o valor de outra variável.

    $var = "teste";
    
    O código acima simplesmente vincula a string teste ao nome de variável $var. Para declararmos uma variável variável nós utilizaremos o valor atribuido a variável $var como o nome da nossa próxima variável. Logo, temos que o nome da primeira variável é igual a $var e o nome da nossa segunda variável é $$var ou então, $hello. A ideia de variáveis variáveis é bastante simples: utilizar o valor de uma variável como sendo o nome de outra.

    1. Declarar uma variável
    2. Atribuir um valor a variável
    3. Utilizar o valor que foi atribuido a variável como uma espécie de chave para atribuir outro valor
    
    */
    
    $varvar = "teste";
    $$varvar = 50;

    echo $varvar, '<br>';
    echo $$varvar, '<br>';
    echo $teste, '<br>';
    

?>