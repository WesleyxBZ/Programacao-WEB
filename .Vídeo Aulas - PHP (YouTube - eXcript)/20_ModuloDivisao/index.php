<?php

    $num1 = 9;
    $num2 = 2;
    $res = $num1 / $num2;
    $resto = $num1 % $num2;

    echo $num1 , " divido por " , $num2 , " = " , $res;
    echo "<br>";
    echo "O resto da divisão é: " , $resto;

    echo "<br>";

    echo fmod(7, 3.3); // A função 'fmod' obtem o módulo de dois números float (resto da divisão), no caso, 7.0 % 3.3

?>