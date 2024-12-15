<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Continuação do exercício de raiz quadrada</title>
</head>
<body>
    <div>
        <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz quadrada do valor $valor é igual a " . number_format($rq,2);
        ?>
        <a href="raizquadrada01.php" > Voltar </a>
    </div>
</body>
</html>