<!DOCTYPE html>
<html>
    <head>
        <title>Votação</title>
</head>
    <body><center>
        <div>
        <form method = "POST" action="" >
        <h1>Escolha uma opção</h1><br>
        <input type=radio name="op1" value="1">1° Opção 
        <input type=radio name="op2" value="2">2° Opção 
        <input type=radio name="op3" value="3">3° Opção 
        <br><br>
        <input type=submit name="Votar" value="Votar">
        <br><br>
        <?php
            $resulta = 0 ;
            $resultb = 0 ;
            $resultc = 0 ;

            if(isset($_POST["op1"])){
                $resulta++;
            }
            if(isset($_POST["op2"])){
                $resultb++;    
            }
            
            if(isset($_POST["op3"])){
                $resultc++;
            }
            echo "<b>Resultados</b>";
            echo("<br>1° Opção:".$resulta);
            echo("<br>2° Opção:".$resultb);
            echo("<br>3° Opção:".$resultc);
        ?>
        </form>
        </div></center>
    </body>
</html>