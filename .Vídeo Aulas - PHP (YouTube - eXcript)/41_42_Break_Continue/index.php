<?php

    //INSTRUÇÃO BREAK

    $i = 0;

    while(true){
        
        $i++;
        
        if($i == 50){ // Quando i for igual a 50
            break; // Todo o laço vai parar
        }

        echo $i , "\n";
    }
    
    echo'<br><br>';

    //INSTRUÇÃO CONTINUE

    //NÚMEROS PARES DE 0 ATÉ 100
    for($i=0; $i<100; $i++){

        if($i % 2 == 1){ // Se o valor for ímpar
            continue; // o 'continue' encerra esse ciclo e não imprimi a próxima linha de baixo
        }

        echo $i , "\n";

    }

?>