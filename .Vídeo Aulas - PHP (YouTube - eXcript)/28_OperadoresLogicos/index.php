<?php
    
    /*
    Operadores lógicos - servem para comparar valores de duas espressões ou verificar se elas são diferentes, também servem para verificar se as espressões são maiores ou menores
    
    NOME      | OPERADOR LÓGICO
    ----------|----------------
    conjunção |  && ou and
    disjunção |  || ou or
    negação   |  ! ou not
    
    */
    
    $num = 50;

    if(($num > 10) && ($num < 100)){
        echo "eh verdadeiro";
    }
    
    echo "<br><br>";
    var_dump(10 == 10);
    var_dump((10 == 10) == True);
    echo "<br>";

    echo "<br>";
    var_dump((10 == 10) == (7 == 7));
    var_dump(True == True);
    var_dump(True);
    echo "<br>";

    echo "<br>";
    var_dump((10 == 10) and (7 == 7));
    var_dump(True and True);
    var_dump(True);
    echo "<br>";

    echo "<br>";
    var_dump(True == False);
    var_dump(False == False);

?>