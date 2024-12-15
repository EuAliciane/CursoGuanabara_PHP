<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>
<body>
    <div>
        <?php
        $valor= $_GET["numero"];
        $contador = 1;
        $resultado = 1;
        echo "<h3>Mostrando a tabuada de $valor</h3>";
        do {
            $resultado= $valor*$contador;
            echo "$valor x $contador = $resultado</br>";
            $contador++;
        }while ($contador<=10);
        ?>
    </div>
</body>
</html>