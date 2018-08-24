<?php
    
    /*
    === FUNÇÃO range() ===
    O PHP nos fornece uma função que retorna uma sequência numérica conforme os parâmetros por nós definidos. 
    
    
    range ($low, $high, $step=NULL);
    */

    // Exemplo 1: Array númerico de 0 até 5 [0,1,2,3,4,5] 
    $x =  range ($0, $5); 
    
    // Exemplo 2: Array númerico de 0 até 5 com step(pulo) == 2 [0,2,4]
    $y = range ($0, $5, $2); 
    
    // Exemplo 3: Array alfabetico com step de 2 [a,c,e,g,i,k,m,o,q,s,u,w,y]
    $z = range("a", "z", 2);

?>