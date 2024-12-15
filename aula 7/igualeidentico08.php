<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>Diferença entre igual e idêntico</title>
</head>
<body>
    <div>
        <?php
        $a = 3;
        $b = "3";
        $r = ($a == $b) ? "SIM" : "NÃO";
        echo "As variaveis A e B são iguais? $r";
        ?>
    </div>
    <div>
        <?php
        $a = 3;
        $b = "3";
        $r = ($a === $b) ? "SIM" : "NÃO";
        echo "<br/> As variaveis A e B são idênticas? $r";
        ?>
    </div>
    
</body>
</html>