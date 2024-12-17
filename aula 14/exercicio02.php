<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criar uma função que some dois valores numéricos inteiros</title>
</head>
<body>
    <div>
        <?php
        function soma ($a, $b) {
            $s = $a + $b;
            return $s;
        }
        $x = 3;
        $y = 4;
        $r = soma($x, $y);
        echo "A soma entre $x e $y é igual a $r";
        ?>
    </div>
</body>
</html>