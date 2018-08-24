<?php

    /*
    === ALTERAÇÃO DE VALORES E A ESTRUTURA FOREACH ===
    
    É recorrente a dúvida do porque não é possível alterar o valor dos elementos quando utilizamos o laço de repetição foreach. Para nós estudarmos essa situação, vamos fazer uma simples implementação e então estudar o que está acontecendo.
    
    É comum ao iterarmos Arrays precisarmos alterar o valor do elemento que está sendo iterado. Porém, se utilizarmos a definição padrão, não será possível alterar o valor dos elementos e como perceberemos, a alteração irá ocorrer, porém, não no elemento contido no nosso Array.

    Isso acontece, porque o PHP atribui a variavel que nós definimos no cabeçalho da estrutura foreach uma cópia do valor do nosso elemento contido no Array, por essa razão, se alterarmos o valor passado pela variável definida no cabeçalho, a alteração não irá ocorrer no elemento contido no Array, mas sim, na variável que está sendo utilizada para iterar o Array.
    
    A solução a esse problema, é definirmos no cabeçalho da estrutura foreach que deve ser passado a referência do elemento contido no nosso Array, e não a copia do valor do elemento.

    Nós ainda não estudamos a passagem de valores através do uso de referência, porém, pense na referência como sendo um ponteiro para uma região na memória em que a variável guarda o valor.
    
    foreach (<array> as <valor>){
        código;
    }
    */

    #ITERAÇÃO E ALTERAÇÃO DOS VALORES

    $nums = range(0, 10);
    print_r($nums);
    echo"<br><br>";

    foreach($nums as $chave => &$valor){
        $valor *= 10;
        echo $valor."\n";
    }
    
    echo"<br><br>";
    print_r($nums);

?>