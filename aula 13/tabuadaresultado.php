<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Continuação do exercício de tabuada</title>
</head>
<body>
    <div>
        <?php
        $numero = isset($_GET["num"])?$_GET["num"]:1;
        for($c=1; $c<=10; $c++) {
            $resultado = $numero * $c;
            echo "$numero x $c = $resultado</br> ";
        }
        ?>
        <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>