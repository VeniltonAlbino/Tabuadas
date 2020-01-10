<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/style.css"/>
        <title>Modelo PHP</title>
    </head>
    <body>
        <div>
            <?php
                $n=$_GET["num"]??0; /*$n = isset ($_GET["num"]) ? ($_GET["num"]) : 0; */
                echo "<h3>A tabuada de $n e´: </h3>";
                $cont = 1;
                while ($cont <= 10) {
                   $re = $n * $cont;
                   echo "$n x $cont = $re</br>";
                   $cont++;
                }
            ?><br>
            <a href="tabuada.html"><input type="submit" value="Voltar"></input>
        </div>
    </body>
</html>