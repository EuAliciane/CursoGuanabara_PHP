<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crie um procedimento que use a passagem de parâmetros por referência</title>
</head>
<body>
    <div>
        <?php
        function teste(&$x) {
            $x += 2;
            echo "<p>O valor de X e $x</p>";
        }
        $a = 3;
        teste($a);
        echo "<p>O valor de A é $a</p>";
        ?>
    </div>
</body>
</html>