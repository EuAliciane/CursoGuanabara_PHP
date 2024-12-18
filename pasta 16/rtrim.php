<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
        <?php
        //Elimina espaços em branco no final de uma string
        $nome = "   José da Silva   ";
        echo(strlen($nome));
        $novo = rtrim($nome);
        echo($novo);
        echo(strlen($novo));
        ?>
    </div>
</body>
</html>