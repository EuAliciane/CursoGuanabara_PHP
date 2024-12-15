<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Continuação do contador</title>
</head>
<body>
    <div>
        <?php
        $inicio = $_GET["inicio"];
        $final = $_GET["final"];
        $intevalo = $_GET["intervalo"];
        if ($inicio < $final) {
            while ($inicio <= $final) {
                echo "$inicio<br/>";
                $inicio = $inicio + $intevalo;
            }
        }elseif ($inicio > $final) {
            while ($inicio >= $final) {
                echo "$inicio<br/>";
                $inicio = $inicio - $intevalo;
            }
            
        }
        ?>
        <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>