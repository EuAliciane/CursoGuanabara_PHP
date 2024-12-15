<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mostrar uma contagem progressiva de 10 até 1 </title>
</head>
<body>
<div>
        <?php
        $c = 10;
        do {
            echo $c . "<br/>";
            $c--;
        }while ($c >= 1);
        ?>
    </div>
</body>
</html>