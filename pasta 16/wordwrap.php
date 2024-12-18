<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>conhecendo a função wordrap</title>
</head>
<body>
    <div>
        <?php
        $texto = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap()";
        $resultado = wordwrap($texto, 5, "<br/>\n", false);
        echo $resultado;
        ?>
    </div>
</body>
</html>