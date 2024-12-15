<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Operadores Aritmeticos</title>
</head>
<body>
<div>
    //<?php 
    $n1 = 3;
    $n2 = 2;
    $m = ($n1 + $n2) / 2;
    echo "A soma vale ". ($n1+$n2);
    echo "<br/> A subtração vale ". ($n1-$n2);
    echo "<br/> A multiplicacao vale ".($n1*$n2);
    echo "<br/> A divisao vale ". ($n1/$n2);
    echo "<br/> O mdulo vale ". ($n1%$n2);
    echo "<br/> A media vale $m";
    ?>
</div>
<div>
    <?php
    //http;//localhost/aula05/operadores.php?a=3&b=2
    //http://localhost/Guanabara/aula02.phps?a=3&b=2
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    echo "<h2> Valores Recebidos: $n1 e $n2</h2>";
    echo "A soma vale ". ($n1+$n2);
    echo "<br/> A subtração vale ". ($n1-$n2);
    echo "<br/> A multiplicação vale ".($n1*$n2);
    echo "<br/> A divisão vale ". ($n1/$n2);
    echo "<br/> O módulo vale ". ($n1%$n2);
    echo "<br/> A media vale $m";
    ?>
</div>
</body>
</html>