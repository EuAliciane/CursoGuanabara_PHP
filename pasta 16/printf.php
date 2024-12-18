<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>conhecendo a função printf()</title>
</head>
<body>
    <div>
        <?php
        $p = "Leite";
        $pr = 4.5;
        printf("O %s custa R$ %.2f", $p, $pr);
        //o $s para mostrar uma string
        //o $f para mostrar float, número real
        //2 atrás do float para mostrar duas casas decimais
        ?>
    </div>
</body>
</html>