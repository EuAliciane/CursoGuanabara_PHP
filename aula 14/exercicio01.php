<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criar um procedimento que some dois valores numéricos inteiros</title>
</head>
<body>
    <div>
        <?php
        function soma ($a, $b) {
            $s = $a + $b;
            echo "<p>A soma vale $s</p>";
        }
        soma(5, 2);
        soma(5, 3);
        soma(5, 5);
        ?>
    </div>
</body>
</html>