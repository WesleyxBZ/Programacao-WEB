<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Aula 40 Tabuada</title>
    </head>

    <body>

        <?php

            $tab = 0;
        
            if(isset($_POST["edTABUADA"])){
                $tab = $_POST["edTABUADA"];
                if(!is_numeric($tab)){
                    echo "<br>O valor informado não é um número.<br>";
                }else{
                // for($num=0; $num<=10; $num++){
                // echo $num . " x " . $tab . " = " . ($num * $tab) . "<br>";
                // }

                //$num x $tab = ($num * $tab)
                //0 x 5 = 0
                //1 x 5 = 5

                $num=0;
                    
                while($num<=10){
                    echo $num . " x " . $tab . " = " . ($num * $tab) . "<br>";
                    $num++;
                    }

                }
            }

        ?>

        <form method="post">
            <input type="text" name="edTABUADA" >
            <input type="submit">
        </form>

    </body>

</html>