<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Aula 29 - Tela de Login e Senha</title>
    </head>

    <body>

        <?php
        
        $login = "aula"; // "aula" != "Aula", PHP é case sensitive
        $senha = "123";

        if(isset($_POST["login"])){
        // echo $_POST["login"] . "<br>";
        // echo $_POST["senha"];
            if($_POST["login"] == $login && $_POST["senha"] == $senha){
                echo "Login efetuado com sucesso";
            }else{
                echo "Login ou senha inválido";
            }
        }

        ?>

        <form method="post">
            <p>Login:<input type="text" name="login"></p>
            <p>Senha:<input type="password" name="senha"></p>
            <input type="submit">
        </form>

    </body>

</html>