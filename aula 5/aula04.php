<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aplicar um desconto a um produto</title>
</head>
<body>
    <div>
        <?php
        $preco = $_GET ["p"];
        echo "O preço do produto é R$ " . number_format($preco, 2);
        //$preco = $preco + ($preco*10/100); outra forma de atribuição simples
        //http://localhost/Guanabara/aula04.php?p=1500
        $preco += $preco*10/100;
        echo "<br/> E o novo preço com 10% de aumento será de R$ " . number_format($preco, 2);
        ?>
    </div>
    <div>
        <?php
        $preco = $_GET ["p"];
        echo "O preço do produto é R$ $preco";
        $preco -= $preco*10/100;
        echo "<br/> E o novo valor do produto com desconto de 10% será de R$ " . number_format($preco, 2);
        ?>
    </div>
</body>
</html>