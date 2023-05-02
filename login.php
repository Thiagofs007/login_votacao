<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
</head>
    <body><center>
        <div>
        <form method = "POST" action="">
        <b>Faça seu Login</b><br><br>
        Nome: <input type=text name=nome>
        <br><br>
        Crie uma senha: <input type=password name=senha>
        <br><br>
        <input type=submit name="criarconta" value="criar conta">
        <br><br>
        <?php
            $nome = "Thiago";
            $senha = "123";
           
            if(($_POST["nome"]) == $nome && ($_POST["senha"]) == $senha){
                header("Location: result.php");
            }
        ?>
        </form>
        </div>
    </body></center>
</html>