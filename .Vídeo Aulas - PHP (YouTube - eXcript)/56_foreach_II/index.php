<?php

    /*
    === ESTRUTURA FOREACH II ===
    Estudamos como implementar a estrutura foreach e aprendemos que para cada item contido no Array o bloco de código definido na estrutura foreach será executado. Então, esse é um conceito simples, porém muito importante, ou seja, cada item no Array significa a execução do bloco de instrução e a atribuição do respectivo item para a variável que nós definimos no cabeçalho.

    Na primeira aula sobre a instrução foreach estudamos uma notação em que o item é atribuido a variável definida no cabeçalho, porém, se fosse necessário a utilização da chave e do valor, nós temos que a primeira notação estudada não é capaz de fornecer.

    Então, agora estudaremos uma variação da estrutura foreach, na verdade, iremos definir mais uma variável no cabeçalho para que esta receba a chave do elemento, porém, pode haver confusão porque a localização dos parâmetros é alterado.
    
    foreach(<array> as <chave>=> <valor>){
        código;
    }
    */

    $lista = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sabado"];

    foreach($lista as $chave => $valor){
        echo "$chave: $valor <br>";
    }

?>