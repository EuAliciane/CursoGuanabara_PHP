<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contagem regressiva em php</title>
</head>
<body>
    <div>
        <?php
        $c = 10;
        while ($c >= 1) {
            echo $c. "</br>";
            $c--;
            //pode-se também determinar intervalos, por exemplo, contar pulando casas;
            // $c -=2 ou $c=$c - 2, assim por diante;
        }
        ?>
    </div>
    
</body>
</html>