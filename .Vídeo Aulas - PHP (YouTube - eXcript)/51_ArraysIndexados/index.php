<?php

    /*
    
    === ARRAYS INDEXADOS (NUMÉRICOS) ===
    
    É uma estrutura que associa um número inteiro não negativo a um valor, onde o primeiro elemento é igual a zero.
    Há 4 maneiras para criarmos e adicionarmos elementos a uma estrutura Arrays.

    A primeira, é utilizando o nome do tipo e adicionando os elementos como sendo parâmetros.
    
    */
    
    $cores = array("Azul", "Amarelo", "Verde", "Branco");
    
    /*
    
    A segunda maneira, é vinculando o elemento a chave numérica propriamente dita.
    
    */

    $cores[0] = "Azul";
    $cores[1] = "Amarelo";
    $cores[2] = "Verde";
    $cores[3] = "Branco";
    
    /*
    
    A terceira forma é adicionado os elementos sem informar o índice.
    
    */

    $cores[] = "Azul";
    $cores[] = "Amarelo";
    $cores[] = "Verde";
    $cores[] = "Branco";
    
    /*
    
    A quarta forma é utilizando os colchetes.
    
    */
    
    $cores = ["Azul","Amarelo","Verde","Branco"];
    print_r($cores);

?>