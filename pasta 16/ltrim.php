<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <div>
        <?php
        //Elimina espaços no início de uma string
        $nome = "   José da Silva   ";
        echo(strlen($nome));
        $novo = ltrim($nome);
        echo($novo);
        echo(strlen($novo));
        ?>
    </div>
</body>
</html>