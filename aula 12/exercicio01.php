<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mostrar uma contagem progressiva de 1 até 10</title>
</head>
<body>
    <div>
        <?php
        $c = 1;
        do {
            echo $c . "<br/>";
            $c++;
        }while ($c <= 10);
        ?>
    </div>
</body>
</html>