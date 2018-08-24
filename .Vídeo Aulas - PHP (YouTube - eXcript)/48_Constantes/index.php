<?php

    /*
    
    === CONSTANTE ===
    Valor alocado na memória que pode ser acessado por uma referência, mas que não pode ter o seu valor alterado após a mesma ser definida.
    
    O PHP possui 2 sintaxes para definição de constantes e, ainda que ambas tenham funcionamento diferente, o princípio é basicamente o mesmo.
    
    A diferença entre declarar uma constante com a função define() ou então, com a palavra reservada const é que a instrução const declara as constantes em tempo de compilação, enquanto que a função define() declara as constantes em tempo de execução. Ou seja, utilizando a função define() para a declaração, podemos atribuir o nome para a constante no momento em que o código está sendo executado, porém, o mesmo não é possível com a instrução const.
    
    
    == DEFININDO UMA FUNÇÃO CONSTANTE define() ==

    define(<identificador>, <valor>)
    
    
    == VERIFICANDO SE UMA CONSTANTE EXISTE ==
    É comum verificarmos antes de acessarmos uma constante se a mesma está definida, para isso, temos a função defined().

    if(defined("TOTAL")){
        echo "Constante declarada."
    }
    
    
    == DEFININDO UMA CONSTANTE COM A INSTRUÇÃO const ==
    Uma outra forma para a declaração de constantes é através do uso da palavra reservada const. É comum a utilização da instrução const na definição de classe ou então, dentro de um namespace. Porém, isso é somente uma convenção, logo, pode-se utilizar a instrução const para definir constantes onde bem entendermos.

    const VALOR = 100;
    
    
    == CONSTANTES MÁGICAS ==
    Chamamos de constantes mágicas a um grupo de constantes que tem por objetivo, retornar informaçõesn sobre a execução atual do código. Assim, temos que com as constantes mágicas, podemos obter por exemplo, o número da linha em que o script está executando, o nome da função, do namespace e outros valores.

    Esse conjunto de funções tem por objetivo principal auxiliar na construção de ferramentas de diagnóstico de erros ou então, para outras tarefas administrativas.

    echo __LINE__ . PHP_EOL; <1>
    echo __FILE__ . PHP_EOL; <2>
    echo __DIR__ . PHP_EOL; <3>
    echo __FUNCTION . PHP_EOL; <4>
    echo __CLASS__ . PHP_EOL; <5>
    echo __METHOD__ . PHP_EOL; <6>
    echo __NAMESPACE__ . PHP_EOL; <7>
    
    <1> Retorna o número da linha em execução 
    <2> Retorna o path do arquivo que está sendo executado e seu nome 
    <3> Retorna o diretório 
    <4> Retorna o nome da função 
    <5> Retorna o nome da classe 
    <6> Retorna o nome do método 
    <7> Retorna o nome da namespace
    
    */

?>