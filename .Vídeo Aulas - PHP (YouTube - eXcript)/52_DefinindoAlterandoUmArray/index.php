<?php
    
    /*
    === DEFININDO UM ARRAY ===
    
    == INCLUINDO ELEMENTOS ==
    Para incluírmos novos elementos podemos utilizar uma das 2 definições a seguir:

    $arr[] = 4;
    $arr[0] = 4;
    
    == ALTERANDO OS VALORES DOS ELEMENTOS ==
    Da mesma forma em associamos um valor a uma chave numérica, é possível realizar alterações. Para isto, basta informarmos qual a chave que deve ter o seu valor alterado e então, definir o novo valor.

    $cores[2] = "Preto";<1>
    <1> Estamos dizendo que o elemento de índice igual a 2 deve ter o seu valor alterado para a string "Preto".

    Para imprimirmos os elementos contidos num Array podemos acessá-los diretamente ou então podemos iterar a coleção.

    echo "As cores são: $cores[0], $cores[1], $cores[2] and $cores[3]";
    
    == REMOVENDO ELEMENTOS ==
    O PHP permite a remoção de qualquer elemento contido num Array, bastando somente passarmos o elemento a ser removido como parâmetro da função unset(), por exemplo:

    $arr = ["aaa", "bbb", "ccc"];
    unset($arr[1]);<1>
    <1> Remove o elemento "bbb" do Array.

    Quando removemos um elemento de um Array Indexado, temos que o índice do elemento será removido e a estrutura não será reindexada. Assim, se tivermos um Array que possua 3 elementos e removermos o elemento de índice igual a 1, temos que o Array passará a não possuir elemento vinculado ao índice 1, ou seja, remover um elemento não implicar na reindexação da estrutura.
    
    */

    #Definindo o Array
    $arr = ["zero", "um", "dois", "três", "quatro"];

    #Adicionando elementos
    $arr[] = "cinco";

    #Alterando elementos
    $arr[1] = "ummm";
    $arr[4] = "quatrro";

    #Excluindo elementos
    unset($arr[3]);<1>

    print_r($arr);
    #Definindo o Array
    $lista = ["zero", "um", "dois", "três", "quatro"];

    #Adicionando elementos
    $lista[] = "cinco";

    #Alterando elementos
    $lista[1] = "ummm";
    $lista[4] = "quatrro";

    #Excluindo elementos
    unset($lista[3]);

    print_r($lista);

?>