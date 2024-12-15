<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Continuação do exercício fatorial 02 </title>
</head>
<body>
    <div>
        <?php
            $v = isset($_GET["val"])?$_GET["val"]:1;
            echo "<h1>Calculando o Fatorial de $v</h1>";
            $contador = $v;
            $fat = 1;
            do {
                $fat = $fat * $contador;
                $contador--;
            }while ($contador >= 1);
            echo "<h2>$v ! = $fat";
        ?>
        <a href="fatorial02.html" class="botao">Voltar</a>
    </div>
</body>
</html>